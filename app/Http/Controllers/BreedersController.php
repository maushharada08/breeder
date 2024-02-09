<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BreedersController extends Controller
{

    public function create(User $user){
        $this->authorize('update', $user->profile);

        return view('breeder.create', compact('user'));
    }

    public function store(User $user){
        // $this->authorize('update', $user->profile);
        
        $data = request()->validate([
            'certificate' => ['required', 'image'],
        ]);

        $imagePath = request('certificate')->store('breeder', 'public');
        $imageArray = ['certificate' => $imagePath ];
        
        auth()->user()->breeder()->create(array_merge(
            $imageArray,
        ));

        return redirect('/bp/' . auth()->user()->id );
    }
}
