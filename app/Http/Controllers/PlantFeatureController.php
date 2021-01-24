<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plant;
use App\PlantFeature;
use Illuminate\Support\Facades\Validator;
use App\Feature;
use App\Allele;

class PlantFeatureController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $plant = Plant::find($id);  
        $features = Feature::all();
        $alleles = Allele::all();
        $plantFeature = new PlantFeature();

        return view('plants.features.new', compact('plant', 'features', 'alleles', 'plantFeature'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $data = $request->all();
        $features = Feature::all();

        $validator = Validator::make($data, [
            'feature_id' => 'required'
        ]);

        $plantFeature = new PlantFeature($data);
        $plant = Plant::find($id);
        $plant->fill($data);

        if ($validator->fails()) {
            $request->session()->flash('danger', 'Existem dados incorretos! Por favor verifique!');
            return view('plants.features.new', compact('plant', 'features', 'plantFeature'))->withErrors($validator);
        }

        $plantFeature->feature_id = $request->feature_id;
        $plantFeature->plant_id = $plant->id;

        $plant->features()->attach($plantFeature->feature_id);
        return redirect()->route('create.plantFeature', $plant->id)->with('success', 'Planta cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plant = Plant::find($id);
        $user = Feature::with('alleles')->get();
        foreach ($user as $organization) {
            foreach ($organization->alleles as $value) {
                $alleles ="Alelos da Caracteristica: " . $value->name;
                // dd($alleles);
            }
            // $alleles ="Alelos da Caracteristica: " . $organization->name;
        }

        return view('plants.show', compact('plant', 'alleles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plant = Plant::find($id);
        $features = Feature::all();
        return view('plants.edit', compact('plant', 'features'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plant = Plant::find($id);
        $plantFeature = PlantFeature::find($id);
        $features = Feature::all();
        $data = $request->all();

        $validator = Validator::make($data, [
            'feature_id'   => 'required',
            'plant_id'   => 'required',
        ]);

        if ($validator->fails()) {
            $request->session()->flash('danger', 'Existem dados incorretos! Por favor verifique!');
            return view('plants.edit', compact('plantFeature', 'plant', 'features'))->withErrors($validator);
        }

        $plantFeature->save();
        return redirect()->route('plants.index')->with('success', 'Caracteristica atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plant = Plant::find($id);
        $plant->delete();
        return redirect()->route('plants.index')->with('success', 'Planta removida com sucesso');
    }
}
