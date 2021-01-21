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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
        return view('plants.features.new', compact('plant', 'features', 'alleles'));
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

        $validator = Validator::make($data, [
            // 'plant_id'       => 'required',
            'feature_id'       => 'required',
        ]);

        $plant = Plant::find($id);
        $features = Feature::all();
        $plantFeature = new PlantFeature($data);

        if ($validator->fails()) {
            $request->session()->flash('danger', 'Existem dados incorretos! Por favor verifique!');
            return view('plants.features.new', compact('plant', 'features'))->withErrors($validator);
        }

        foreach ($request->feature_id as $feature) {
            $datas[] = $feature;
        }

        $p = json_encode($datas);

        $plantFeature->feature_id = $p;
        $plantFeature->plant_id = $plant->id;

        $plant->features()->attach($request->feature_id);

        return redirect()->route('plants.index')->with('success', 'Planta cadastrada com sucesso');
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
        return view('plants.show', compact('plant'));
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
        $plantFeature = PlantFeature::find($id);
        $data = $request->all();

        $validator = Validator::make($data, [
            'feature_id'   => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
