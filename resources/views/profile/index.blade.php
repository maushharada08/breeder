@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-12">
            <div><img src="/bg.jpg" class="w-100 m-0 p-0"></div>
            <div class=" d-flex justify-content-center">
                <div class="col-2">
                    <img src="{{ $user->profile->profileImage() }}" class=" w-100 rounded-circle position-relative border border-3" style="top:-50%">
                </div>
            </div>
            
            <h3 class="d-flex justify-content-center">{{ $user->profile->username }}</h3>
            @can('update', $user->profile)
            <div class="d-flex justify-content-center">
                <a href="/profile/{{ $user->id }}/edit">
                    <button class="btn btn-light"><i class="fa-solid fa-pen-to-square"></i></button>
                </a>
            </div>
            @endcan

            <p class="d-flex justify-content-center">{{ $user->profile->prefecture }}</p>
            @can('update', $user->profile)
            <a href="/b/{{ $user->id }}/create">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-secondary">ブリーダー登録</button>
                </div>
            </a>
            @endcan

        </div>
    </div>
</div>
@endsection
