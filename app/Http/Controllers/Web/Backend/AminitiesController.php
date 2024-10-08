<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aminities;
use Illuminate\Support\Facades\Validator;
use Exception;
use Yajra\DataTables\Facades\DataTables;

class AminitiesController extends Controller
{

    public function index(){
        $aminities = Aminities::all();
        if(request()->ajax()){
            return DataTables::eloquent(Aminities::query())->make(true);
        }

        return view('backend.layouts.aminities.index',compact('aminities'));
    }

    public function create(){
        return view('backend.layouts.aminities.create');
    }


    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',

        ]);

        if($validator->fails()){
            return redirect()->route('aminities.create')
                ->withErrors($validator)
                ->withInput();
        }


        try{
            Aminities::create([
                'name' => $request->name,

            ]);

            return redirect()->route('aminities.index')->with('success','Aminities Created Successfully');
        }catch(Exception $e){

            return redirect()->route('aminities.index')
                ->with('error','Failed to create Aminities');
        }
    }


    public function edit($id){
        $aminities = Aminities::findOrFail($id);
        return view('backend.layouts.aminities.edit',compact('aminities'));
    }


    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',

        ]);

        if($validator->fails()){
            return redirect()->route('aminities.index')
                ->withErrors($validator)
                ->withInput();
        }


        try{
            $aminities = Aminities::findOrFail($id);
            $aminities->update([
                'name' => $request->name,

            ]);

            return redirect()->route('aminities.index')->with('success','Aminities Updated Successfully');
        }catch(Exception $e){
            return redirect()->route('aminities.index')->with('errors','Failed to update Aminities');
        }
    }

    public function destroy($id){
        try{
            $aminities = Aminities::findOrFail($id);
            $aminities->delete();

            return redirect()->route('aminities.index')->with('success','Aminities Deleted Successfully');
        }catch(Exception $e){
            return redirect()->route('aminities.index')->with('errors','Failed to delete Aminities');
        }
    }


}
