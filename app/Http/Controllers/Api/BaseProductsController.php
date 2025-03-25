<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BaseProduct;
use Illuminate\Http\Request;

class BaseProductsController extends Controller
{
    public function index()
    {
        return response()->json(BaseProduct::all(), 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $baseproduct = BaseProduct::create([
            'name' => $request->name
        ]);

        return response()->json($baseproduct, 201);
    }


    public function show($id)
    {
        $baseproduct = BaseProduct::find($id);

        if (!$baseproduct) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        return response()->json($baseproduct, 200);
    }


    public function update(Request $request, $id)
    {
        $baseproduct = BaseProduct::find($id);

        if (!$baseproduct) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $baseproduct->update([
            'name' => $request->name
        ]);

        return response()->json($baseproduct, 200);
    }


    public function destroy($id)
    {
        $baseproduct = BaseProduct::find($id);

        if (!$baseproduct) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        $baseproduct->delete();

        return response()->json(['message' => 'Kategoria usunięta'], 200);
    }
}
