<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        return response()->json(Category::orderBy('name_pl', 'ASC')->get(), status: 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $category = Category::create([
            'name' => $request->name
        ]);

        return response()->json($category, 201);
    }


    public function show($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        return response()->json($category, 200);
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $category->update([
            'name' => $request->name
        ]);

        return response()->json($category, 200);
    }


    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        $category->delete();

        return response()->json(['message' => 'Kategoria usunięta'], 200);
    }
}
