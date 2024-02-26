<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogsController extends Controller
{
    public function index(){
        $keyword1 = request('input1');
        $keyword2 = request('input2');
        
        $cond = ['type' => $keyword1, 'adress' => $keyword2];
        if($keyword1 && $keyword2) {
            $query = Dog::where($cond);
        }else{
            $query = Dog::where('type', $keyword1);
        }
        
        $searchCount = $query->count();
        $searchDogs = $query->latest()->paginate(3);
        
        $attentionDogs = Dog::query()->inRandomOrder()->take(2)->get();
        $dogs = Dog::query()->latest()->paginate(2);
        return view('dogs.index', compact('keyword1', 'keyword2', 'query', 'cond', 'searchCount','searchDogs', 'attentionDogs','dogs'));
    }

    public function show(Dog $dog){
        return view('dogs.show', compact('dog'));
    }

    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('dogs.create');
    }

    public function store(){
        $data = request()->validate([
            'type' => 'required',
            'sex' => 'required',
            'price' => ['required', 'integer'],
            'image' => ['required', 'image']
        ]); 
        
        $imagePath = request('image')->store('dogs', 'public');
        $imageArray = ['image' => $imagePath ];

        auth()->user()->dogs()->create(array_merge(
            $data,
            $imageArray ?? [],
        ));

        return redirect('/bp/'. auth()->user()->id );
    
    }
}
