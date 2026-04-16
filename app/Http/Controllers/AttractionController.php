<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;
use App\Models\Destination;

class AttractionController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword !=''){
            $Attraction = Attraction::where('name','LIKE','%'.$keyword."%")->paginate(5);
        } else{
            $Attraction = Attraction::orderby('id')->paginate(5);
        }
        return view('pages.attraction.AttractionIndex', compact('Attraction'));
    }


     public function create(){
        $destinations = Destination::all();
        return view('pages.attraction.AttractionCreate', compact('destinations'));
    }

    public function store(Request $request) {

    $validated= $request->validate([
        'destination_id' => 'required|',
        'name' => 'required',
        'description' => 'nullable',
    ]);
    \App\Models\Attraction::create($validated);

     return redirect()->route('Attraction.index')->with('success', 'Data berhasil ditambahkan!.');
    }

    public function edit($id){
        $destinations = Destination::all();
        $Attraction = Attraction::findorFail($id);
        return view('pages.attraction.AttractionEdit', compact('Attraction', 'destinations'));
    }

    public function update(Request $request, $id) {

    $request->validate([
        'destination_id' => 'required|',
        'name' => 'required',
        'description' => 'nullable',
    ]);

        $attraction = Attraction::find($id);
        $attraction->update($request->all());
        return redirect()->route("Attraction.index")->with('success', 'Data berhasil diupdate!.');
    }

    public function delete($id){
        $Attraction =Attraction::find($id);
        $Attraction->delete();
        return redirect(route('Attraction.index'))->with('success','Data dihapus!');
    }

    public function detail($id){
        $attraction = Attraction::find($id);
        return view('pages.attraction.AttractionDetail',compact('attraction'));
    }
}
