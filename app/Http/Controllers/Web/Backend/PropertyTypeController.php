<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\PropertyType;
use Exception;




class PropertyTypeController extends Controller
{
    public function index()
    {
        $propertyTypes = PropertyType::all();
        return view('backend.layouts.property-type.index', compact('propertyTypes'));
    }

    public function create()
    {
        return view('backend.layouts.property-type.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('property-types.create')
                ->withErrors($validator)
                ->withInput();
        }

        try {
            PropertyType::create([
                'name' => $request->name
            ]);

            return redirect()->route('property-types.index')->with('success', 'Property Type created successfully');
        } catch (Exception $e) {

            return redirect()->route('property-types.index')->with('error', 'Failed to create Property Type');
        }
    }

    public function edit($id)
    {
        $propertyTypes = PropertyType::findOrFail($id);
        return view('backend.layouts.property-type.edit', compact('propertyTypes'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->route('property-types.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $propertyType = PropertyType::findOrFail($id);
            $propertyType->update([
                'name' => $request->name
            ]);

            return redirect()->route('property-types.index')->with('success', 'Property Type updated successfully');
        } catch (Exception $e) {

            return redirect()->route('property-types.index')->with('error', 'Failed to update Property Type');
        }
    }

    public function destroy($id)
    {
        try {
            $propertyType = PropertyType::findOrFail($id);
            $propertyType->delete();

            return redirect()->route('property-types.index')->with('success', 'Property Type deleted successfully');
        } catch (Exception $e) {

            return redirect()->route('property-types.index')->with('error', 'Failed to delete Property Type');
        }
    }

}
