@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('新規登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="/d" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <div class="dropdown">
                                <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('犬種') }}</label>
                                <select class="form-select" name="type" value="{{ old('type') }}" aria-label="Default select example">
                                    <option value="">Open this select menu</option>
                                    <option value="チワワ">チワワ</option>
                                    <option value="シーズー">シーズー</option>
                                    <option value="その他">その他</option>
                                </select>
                            </div>
                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                
                        </div>

                        <div class="row mb-3">
                            <label for="sex" class="col-md-4 col-form-label text-md-end">{{ __('性別') }}</label>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="男の子" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        男の子
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="女の子" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        女の子
                                    </label>
                                </div>

                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('価格') }}</label>

                            <div class="col-md-6">
                                <div class="d-flex">
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" >
                                    <div class="mt-2 mx-2">円</div>
                                </div>
                                
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('画像') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" >
                                <!-- <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image[]" value="{{ old('image') }}" >
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image[]" value="{{ old('image') }}" > -->

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
