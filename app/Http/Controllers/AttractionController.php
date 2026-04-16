<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;

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
        return view('pages.attraction.AttractionCreate');
    }

    public function store(Request $request){

        Attraction::create($request->all());
        return redirect(route('Attraction.index'))->with('success','Data tersimpan!');
    }

    public function edit($id){
        $Attraction = Attraction::find($id);
        return view('pages.attraction.AttractionEdit', compact('Attraction'));
    }

    public function update(Request $request, $id) {
        $Attraction = Attraction::find($id);
        $Attraction->update($request->all());
        return redirect(route('Attraction.index'))->with('success','Data diupdate!');
    }

    public function delete($id){
        $Attraction =Attraction::find($id);
        $Attraction->delete();
        return redirect(route('Attraction.index'))->with('success','Data dihapus!');
    }
}
