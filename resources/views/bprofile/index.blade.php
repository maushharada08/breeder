@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-12 position-relative">
            <div class=""><img src="/bg.jpg" class="w-100 m-0 p-0" style="background-color:rgba(0,0,0,0.3);"></div>
            <h3 class="pt-5 position-absolute top-0 start-50 translate-middle text-white d-flex justify-content-center">ブリーダー情報</h3>
            <div class="my-2 d-flex justify-content-between">
                <h4 class="pt-2"><strong>{{ $breeder->user->bProfile->username }}ブリーダー</strong></h4>
                <a href="/bp/{{ $breeder->id }}/edit">
                    <button class="btn btn-outline-secondary">編集</button>
                </a>
                
            </div>
            <div class="pt-2"><strong>犬舎所在地</strong></div>
            <div>{{ $breeder->user->bProfile->adress }}</div>
            <div class="pt-2"><strong>取扱犬種</strong></div>
            @if ( count( $breeder->user->bProfile->dog_type ) > 0 )
            <span class="border rounded-3 py-0 px-2">{{ $breeder->user->bProfile->dog_type }}</span>
            @endif
            <div class="pt-2"><strong>犬舎紹介文</strong></div>
            <div>{{ $breeder->user->bProfile->introduction }}</div>

        </div>
    </div>
</div>
@endsection
