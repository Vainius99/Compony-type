<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Compony;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view("type.index", ["types" => $types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $componies = Compony::all();
        return view("type.create", ["componies" => $componies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Type;

        $type->title = $request->type_title;
        $type->description = $request->type_description;
        $type->compony_id = $request->type_compony_id;

        $type->save();

        return redirect()->route("type.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        return view("type.show", ["type" => $type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        $componies = Compony::all();
        return view("type.edit",["type"=>$type, "componies"=>$componies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $type->title = $request->type_title;
        $type->description = $request->type_description;
        $type->compony_id = $request->type_compony_id;

        $type->save();

        return redirect()->route("type.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route("type.index")->with('success_message', 'Imones Type ištrintas sėkmingai');

    }
}
