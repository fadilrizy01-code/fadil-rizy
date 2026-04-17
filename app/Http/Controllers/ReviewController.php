<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\review;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword !=''){
            $review = review::where('reviewer_name','LIKE','%'.$keyword."%")->paginate(5);
        } else{
            $review = review::orderby('id')->paginate(5);
        }
        return view('pages.review.index', compact('review'));
    }


     public function create(){
        $Attraction = Attraction::all();
        return view('pages.review.create', compact('Attraction'));
    }

    public function store(Request $request) {

    $validated= $request->validate([
        'attraction_id' => 'required|',
        'reviewer_name' => 'required',
        'comment' => 'required',
    ]);
    \App\Models\review::create($validated);

     return redirect()->route('Review.index')->with('success', 'Data berhasil ditambahkan!.');
    }

    public function edit($id){
        $Attraction = Attraction::all();
        $review = review::findorFail($id);
        return view('pages.review.edit', compact('review', 'Attraction'));
    }

    public function update(Request $request, $id) {

    $request->validate([
        'attraction_id' => 'required|',
        'reviewer_name' => 'required',
        'comment' => 'required',
    ]);

        $review = review::find($id);
        $review->update($request->all());
        return redirect()->route("Review.index")->with('success', 'Data berhasil diupdate!.');
    }

    public function delete($id){
        $review =review::find($id);
        $review->delete();
        return redirect(route('Review.index'))->with('success','Data dihapus!');
    }

    public function detail($id){
        $review = review::find($id);
        return view('pages.review.detail',compact('review'));
    }
}
