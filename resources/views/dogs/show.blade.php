@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">

        <div class="col-12 my-3">
            <div class="card-body border-bottom">
                <div class="col-12 position-relative">
                    <div><img src="/storage/{{ $dog->image }}" class="w-100 p-1"></div>
                </div>
                <div class="col-12 p-3">
                    <h3>犬種：{{ $dog->type }}</h3>
                    <p>性別：{{ $dog->sex }}</p>
                    <p>見学：{{ $dog->user->bProfile->adress }}</p>
                    <p>価格：<span class="text-danger">{{ $dog->price }}円</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
