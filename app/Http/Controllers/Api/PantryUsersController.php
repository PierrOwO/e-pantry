<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PantryUser;
use Illuminate\Http\Request;

class PantryUsersController extends Controller
{
    public function index()
    {
        return response()->json(PantryUser::all(), 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $pantryusers = PantryUser::create([
            'name' => $request->name
        ]);

        return response()->json($pantryusers, 201);
    }


    public function show($id)
    {
        $pantryusers = PantryUser::find($id);

        if (!$pantryusers) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        return response()->json($pantryusers, 200);
    }


    public function update(Request $request, $id)
    {
        $pantryusers = PantryUser::find($id);

        if (!$pantryusers) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $pantryusers->update([
            'name' => $request->name
        ]);

        return response()->json($pantryusers, 200);
    }


    public function destroy($id)
    {
        $pantryusers = PantryUser::find($id);

        if (!$pantryusers) {
            return response()->json(['message' => 'Kategoria nie znaleziona'], 404);
        }

        $pantryusers->delete();

        return response()->json(['message' => 'Kategoria usunięta'], 200);
    }
}
