<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plant;
use App\PlantFeature;
use Illuminate\Support\Facades\Validator;
use App\Feature;

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
        return view('plants.features.new', compact('plant', 'features'));
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
            'plant_id'       => 'required',
            'feature_id'       => 'required',
        ]);

        $plant = Plant::find($id);
        $features = Feature::all();
        $plantFeature = new PlantFeature($data);

        if ($validator->fails()) {
            $request->session()->flash('danger', 'Existem dados incorretos! Por favor verifique!');
            return view('plants.features.new', compact('plantFeature', 'plant', 'features'))->withErrors($validator);
        }

        $plantFeature->save();
        return redirect()->route('index.plant')->with('success', 'Planta cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
