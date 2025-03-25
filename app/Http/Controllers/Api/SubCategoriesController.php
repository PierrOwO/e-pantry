<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    public function index()
    {
        return response()->json(SubCategory::all(), 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $subcategories = SubCategory::create([
            'name' => $request->name
        ]);

        return response()->json($subcategories, 201);
    }


    public function show($id)
    {
        $subcategories = SubCategory::find($id);

        if (!$subcategories) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        return response()->json($subcategories, 200);
    }


    public function update(Request $request, $id)
    {
        $subcategories = SubCategory::find($id);

        if (!$subcategories) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $subcategories->update([
            'name' => $request->name
        ]);

        return response()->json($subcategories, 200);
    }


    public function destroy($id)
    {
        $subcategories = SubCategory::find($id);

        if (!$subcategories) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        $subcategories->delete();

        return response()->json(['message' => 'Kategoria usunięta'], 200);
    }
}
