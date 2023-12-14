<?php

namespace App\Http\Controllers;


use App\Models\ad;
use App\Models\Category;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'indexCategory', 'show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       /* $ads = ad::all();
        $ads = ad::orderby('created_at', 'desc')->get();*/
        $ads = ad::where('is_accepted', true)->latest()->get();
        return view('Ad.index', compact('ads'));
    }
    public function indexCategory(Category $category){
        return view('Ad.indexCategory', compact('category'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('ad.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ad $ad)
    {
        $ad->category::all();
        return view('Ad.show', compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ad $ad)
    {
        return view('ad.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ad $ad)
    {
        //
    }
}
