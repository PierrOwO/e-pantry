<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pantry;
use Illuminate\Http\Request;

class PantriesController extends Controller
{
    public function index()
    {
        return response()->json(Pantry::all(), 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $pantries = Pantry::create([
            'name' => $request->name
        ]);

        return response()->json($pantries, 201);
    }


    public function show($id)
    {
        $pantries = Pantry::find($id);

        if (!$pantries) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        return response()->json($pantries, 200);
    }


    public function update(Request $request, $id)
    {
        $pantries = Pantry::find($id);

        if (!$pantries) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $pantries->update([
            'name' => $request->name
        ]);

        return response()->json($pantries, 200);
    }


    public function destroy($id)
    {
        $pantries = Pantry::find($id);

        if (!$pantries) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        $pantries->delete();

        return response()->json(['message' => 'Kategoria usunięta'], 200);
    }
}
