<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;


class RecipeController extends Controller
{
    public function index()
    {
        $title = "";
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('creator')) {
            $author = User::firstWhere('username', request('creator'));
            $title = ' by ' . $author->name;
        }

        return view('recipes', [
            "title" => "All Recipes ". $title,
            "active" => "recipes",
            "recipes" => Recipe::latest()->filter(request(['search', 'category', 'creator']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Recipe $recipe)  
    {
        return view('recipe', [
            "title" => "Single Recipe",
            "active" => "recipes",
            "recipe" => $recipe
        ]);
    }
}
