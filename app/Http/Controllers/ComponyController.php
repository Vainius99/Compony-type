<?php

namespace App\Http\Controllers;

use App\Models\Compony;
use App\Models\Contact;
use Illuminate\Http\Request;

class ComponyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $componies= Compony::all();
        return view("compony.index", ["componies" =>$componies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts = Contact::all();
        return view("compony.create", ["contacts" => $contacts]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compony = new Compony;
        $compony ->title = $request->compony_title;
        $compony ->description = $request->compony_description;
        $compony ->contact_id = $request->compony_contact_id;

        if($request->has('compony_logo'))
        {
            $imageName = time().'.'.$request->compony_logo->extension();
            $compony->logo = '/images/'.$imageName;
            $request->compony_logo->move(public_path('images'), $imageName);
        } else {
            $compony->image_url = '/images/placeholder.png';
        }


        $compony->save();
        return redirect()->route("compony.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compony  $compony
     * @return \Illuminate\Http\Response
     */
    public function show(Compony $compony)
    {
        return view("compony.show", ["compony" => $compony]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compony  $compony
     * @return \Illuminate\Http\Response
     */
    public function edit(Compony $compony)
    {
        $contacts = Contact::all();
        return view("compony.edit",["compony"=>$compony, "contacts"=>$contacts]);

        // return view("compony.edit", ["compony"=> $compony]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compony  $compony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compony $compony)
    {

        $compony ->title = $request->compony_title;
        $compony ->description = $request->compony_description;
        $compony ->contact_id = $request->compony_contact_id;

        if($request->has('compony_logo'))
        {
            $imageName = time().'.'.$request->compony_logo->extension();
            $compony->logo = '/images/'.$imageName;
            $request->compony_logo->move(public_path('images'), $imageName);
        }
        $compony->save();
        return redirect()->route("compony.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compony  $compony
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compony $compony)
    {
        $types_count = $compony->componyTypes->count();

        if($types_count!=0) {
            return redirect()->route("compony.index")->with('error_message','Istrinti negalima Compony type egzistuoja');
        }
        $compony->delete();
        return redirect()->route("compony.index")->with('success_message','Compony sekmingai istrintas, Valio!!!');
        // $compony->delete();
        // return redirect()->route('compony.index');
    }
}
