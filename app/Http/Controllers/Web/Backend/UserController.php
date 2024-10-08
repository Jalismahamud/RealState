<?php

namespace App\Http\Controllers\Web\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    //

    public function index(){
        // Retrieve all users from the database and pass them to the view
        $this->authorize('viewAny', User::class);
        $users = User::all();
        if(request()->ajax()){
            return DataTables::eloquent(User::query())->make(true);
        }

        return view('backend.layouts.user.index',compact('users'));
    }
}
