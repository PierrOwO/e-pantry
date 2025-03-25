<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all(), 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $products = Product::create([
            'name' => $request->name
        ]);

        return response()->json($products, 201);
    }


    public function show($id)
    {
        $products = Product::find($id);

        if (!$products) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        return response()->json($products, 200);
    }


    public function update(Request $request, $id)
    {
        $products = Product::find($id);

        if (!$products) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $products->update([
            'name' => $request->name
        ]);

        return response()->json($products, 200);
    }


    public function destroy($id)
    {
        $products = Product::find($id);

        if (!$products) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        $products->delete();

        return response()->json(['message' => 'Kategoria usunięta'], 200);
    }
}
