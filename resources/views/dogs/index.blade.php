@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-12 my-3">
            <div class="first-view">
                <img src="bg.jpg" class="w-100">
            </div>
            <div class="search-area">
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline">
                        <label for="type-search">犬種から探す</label>
                            <input class="form-control mr-sm-2" id="type-search" type="text" name="input1" type="search" value="{{ $keyword1 }}" placeholder="例）チワワ" aria-label="Search">
                        <label for="type-search">地域から探す</label>
                            <input class="form-control mr-sm-2" id="type-search2" type="text" name="input2" type="search" value="{{ $keyword2 }}" placeholder="例）東京都" aria-label="Search">
                        <button class="mx-2 btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>

                @if (request('input1'))
                    <h3 class="d-flex justify-content-center">検索結果</h3>
                    <div class="text-secondary d-flex justify-content-center">{{ $searchCount}}件</div>
                    @foreach ( $searchDogs as $dog )
                    <a href="/d/{{ $dog->id }}" class="text-decoration-none text-dark">
                        <div class="card col-12 w-100 mb-3">
                            <img src="/storage/{{ $dog->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>犬種：{{ $dog->type }}</h3>
                                <p>性別：{{ $dog->sex }}</p>
                                <p>見学：{{ $dog->user->bProfile->adress }}</p>
                                <p>価格：<span class="text-danger">{{ $dog->price }}円</span></p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    <a href="">もっと見る</a>
                @endif
                
            </div>

            <div class="attention-dogs py-3 my-3">
                <h3 class="d-flex justify-content-center">注目わんちゃん</h3>
                @foreach ( $attentionDogs as $dog )
                <a href="/d/{{ $dog->id }}" class="text-decoration-none text-dark">
                    <div class="card col-12 w-100 mb-3">
                        <img src="/storage/{{ $dog->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>犬種：{{ $dog->type }}</h3>
                            <p>性別：{{ $dog->sex }}</p>
                            <p>見学：{{ $dog->user->bProfile->adress }}</p>
                            <p>価格：<span class="text-danger">{{ $dog->price }}円</span></p>
                        </div>
                    </div>
                </a>
                @endforeach
                <a href="">もっと見る</a>
            </div>

            <div class="new-dogs py-3 my-3">
                <h3 class="d-flex justify-content-center">新着わんちゃん</h3>
                @foreach ( $dogs as $dog )
                <a href="/d/{{ $dog->id }}" class="text-decoration-none text-dark">
                    <div class="card col-12 w-100 mb-3">
                        <img src="/storage/{{ $dog->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>犬種：{{ $dog->type }}</h3>
                            <p>性別：{{ $dog->sex }}</p>
                            <p>見学：{{ $dog->user->bProfile->adress }}</p>
                            <p>価格：<span class="text-danger">{{ $dog->price }}円</span></p>
                        </div>
                    </div>
                </a>
                @endforeach
                <a href="">もっと見る</a>
            </div>
            
        </div>
    </div>
</div>
@endsection
