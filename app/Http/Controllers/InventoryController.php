<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $inventories = Inventory::all();
        return response()->json([
            'status' => 'success',
            'inventories' => $inventories,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|max:255',
            'status' => 'required|string|max:255'
        ]);

        $inventory = Inventory::create([
            'title' => $request->title,
            'type' => $request->description,
            'description' => $request->description,
            'price' => $request->description,
            'status' => $request->description,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Inventory created successfully',
            'inventory' => $inventory,
        ]);
    }

    public function show($id)
    {
        $inventory = Inventory::find($id);
        return response()->json([
            'status' => 'success',
            'inventory' => $inventory,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|max:255',
            'status' => 'required|string|max:255'
        ]);

        $inventory = Inventory::find($id);
        $inventory->name = $request->name;
        $inventory->type = $request->type;
        $inventory->description = $request->description;
        $inventory->price = $request->price;
        $inventory->status = $request->status;
        $inventory->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Inventory updated successfully',
            'inventory' => $inventory,
        ]);
    }

    public function destroy($id)
    {
        $inventory = Inventory::find($id);
        $inventory->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Inventory deleted successfully',
            'inventory' => $inventory,
        ]);
    }
}
