<?php

namespace App\Http\Controllers;

use App\Models\Breeder;
use App\Models\User;
use Illuminate\Http\Request;

class BProfilesController extends Controller
{
    public function index(User $user){
        return view('bprofile.index', compact('user'));
    }

    public function edit(User $user){
        return view('bprofile.edit', compact('user'));
    }

    public function update(){
        $data = request()->validate([
            'username' => 'required',
            'adress' => 'required',
            'dog_type' => '',
            'introduction' => '',
        ]);
        
        auth()->user()->bProfile()->update(array_merge(
            $data,
        ));

        return redirect('/bp/' . auth()->user()->id );
    }
}
