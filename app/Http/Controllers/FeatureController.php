<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;
use App\Allele;
use Illuminate\Support\Facades\Validator;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::all();
        return view('features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $features = Feature::all();

        $feature = new Feature();
        return view('features.new', compact('feature', 'features'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name'       => 'required',
        ]);

        $feature = new Feature($data);

        if ($validator->fails()) {
            $request->session()->flash('danger', 'Existem dados incorretos! Por favor verifique!');
            return view('features.new', compact('feature'))->withErrors($validator);
        }

        $feature->save();
        return redirect()->route('create.allele', $feature->id)->with('success', 'Caracteristica cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feature = Feature::find($id);

        return view('features.show', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feature = Feature::find($id);
        $allele = Allele::find($id);
        return view('features.edit', compact('allele', 'feature'));
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
        // $feature = Feature::find($id);
        $allele = Allele::find($id);

        $data = $request->all();

        $validator = Validator::make($data, [
            'value'       => 'required',
            'name' => 'required',
            'feature_id'   => 'required',
        ]);

         if ($validator->fails()) {
            $request->session()->flash('danger', 'Existem dados incorretos! Por favor verifique!');
            return view('admin.edicts.edit', compact('allele'))->withErrors($validator);
        }

        $allele->save();
        return redirect()->route('index.feature')->with('success', 'Caracteristica atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = Feature::find($id);
        $feature->delete();
        return redirect()->route('index.feature')->with('success', 'Caracteristica removida com sucesso');
    }
}
