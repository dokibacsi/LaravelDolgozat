<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\User;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index(){
        $agencies = response()->json(Agency::all());
        return $agencies;
    }

    public function destroy($id){
        Agency::find($id)->delete();
    }

    public function store(Request $request){
        $agencies = new Agency();
        $agencies -> name = $request -> name;
        $agencies -> country = $request -> country;
        $agencies -> type = $request -> type;
        $agencies -> save();
    }

    public function update(Request $request, $id){
        $agencies = Agency::find($id);
        $agencies -> name = $request -> name;
        $agencies -> country = $request -> country;
        $agencies -> type = $request -> type;
        $agencies -> save();
    }

    public function newView(){
        $users = User::all();
        return view('agency.new', ['users' => $users]);
    }

    public function editView($id){
        $users = User::all();
        $agencies = Agency::find($id);
        return view('agency.edit', ['users' => $users, 'agencies' => $agencies]);
    }

    public function listView(){
        $agencies = Agency::all();
        return view('agency.list', ['agencies' => $agencies]);
    }

}
