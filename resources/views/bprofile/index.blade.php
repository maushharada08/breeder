@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-12 position-relative">
            <div class=""><img src="/bg.jpg" class="w-100 m-0 p-0" style="background-color:rgba(0,0,0,0.3);"></div>
            <h3 class="pt-5 position-absolute top-0 start-50 translate-middle text-white d-flex justify-content-center">ブリーダー情報</h3>
            <div class="my-2 d-flex justify-content-between">
                <h4 class="pt-2"><strong>{{ $user->bProfile->username }}ブリーダー</strong></h4>
                <a href="/bp/{{ $user->id }}/edit">
                    <button class="btn btn-outline-secondary">編集</button>
                </a>
                
            </div>
            <div class="pt-2"><strong>犬舎所在地</strong></div>
            <div>{{ $user->bProfile->adress }}</div>
            <!-- <div class="pt-2"><strong>取扱犬種</strong></div> -->
            <!-- <span class="border rounded-3 py-0 px-2"></span> -->
            <div class="pt-2"><strong>犬舎紹介文</strong></div>
            <div>{{ $user->bProfile->introduction }}</div>

        </div>
        <div class="mt-3 col-12 d-flex justify-content-center">
            <a href="/d/{{ $user->id }}/create">
                <button class="btn btn-primary">新規登録</button>

            </a>
        </div>

        <div class="col-12 border-top border-bottom my-3">
            @foreach( $user->dogs as $dog )
            <a href="/d/{{ $dog->id }}" class="text-decoration-none text-dark">
                <div class="card-body d-flex border-bottom">
                    <div class="col-4 position-relative">
                        <div><img src="/storage/{{ $dog->image }}" class="w-100 p-1"></div>
                        <div class="position-absolute bottom-0 end-0">{{ $dog->sex }}</div>
                    </div>
                    <div class="col-8 p-3">
                        <h3>{{ $dog->type }}</h3>
                        <p>見学：{{ $dog->user->bProfile->adress }}</p>
                        <p>価格：<span class="text-danger">{{ $dog->price }}円</span></p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
