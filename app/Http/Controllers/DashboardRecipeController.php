<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.recipes.index', [
            'recipes' => Recipe::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.recipes.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:100',
            'category_id' => 'required',
            'image' => 'image|file|max:5120',
            'body' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('recipe-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        
        Recipe::create($validatedData);

        return redirect('/dashboard/recipes')->with('success','New recipes has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        return view('dashboard.recipes.show', [
            'recipe' => $recipe
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        return view('dashboard.recipes.edit', [
            'recipe' => $recipe,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required|max:100',
            'category_id' => 'required',
            'image' => 'image|file|max:5120',
            'body' => 'required',
        ];

        if($request->slug != $recipe->slug) {
            $rules['slug'] ='required|unique:recipes';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('recipe-images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        
        Recipe::where('id', $recipe->id)
            ->update($validatedData);

        return redirect('/dashboard/recipes')->with('success','Recipe has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        if($recipe->image){
            Storage::delete($recipe->image);
        }
        
        $recipe->delete();
        return redirect('/dashboard/recipes')->with('success','Recipes has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Recipe::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
