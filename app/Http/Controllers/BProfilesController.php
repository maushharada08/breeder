<?php

namespace App\Http\Controllers;

use App\Models\Breeder;
use Illuminate\Http\Request;

class BProfilesController extends Controller
{
    public function index(Breeder $breeder){
        return view('bprofile.index', compact('breeder'));
    }

    public function edit(Breeder $breeder){
        return view('bprofile.edit', compact('breeder'));
    }

    public function update(){
        $data = request()->validate([
            'username' => 'required',
            'adress' => 'required',
            'dog_type' => '',
            'introduction' => '',
        ]);
         
        auth()->user()->breeder()->bProfile->update(array_merge(
            $data,
        ));

        return redirect('/bp/' . auth()->user()->breeder->id );
    }
}
