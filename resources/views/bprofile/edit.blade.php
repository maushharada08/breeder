@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Breeder profile') }}</div>
                <div class="card-body">
                    <form method="POST" action="/bp/{{ $breeder->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username')  }}" >

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="adress" class="col-md-4 col-form-label text-md-end">{{ __('犬舎所在地') }}</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" >

                                @error('adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="d-flex">
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" value="chihuahua" name="dog_type" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        チワワ
                                    </label>
                                </div>

                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" value="shih_tzu" name="dog_type" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        シーズー
                                    </label>
                                </div>
                                
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" value="shiba" name="dog_type" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        柴犬
                                    </label>
                                </div>

                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox" value="other" name="dog_type" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        その他
                                    </label>
                                </div>
                           
                            
                                @error('dog_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="introduction" class="col-md-4 col-form-label text-md-end">{{ __('犬舎紹介文') }}</label>

                            <div class="col-md-6">
                                <textarea id="introduction" type="text" class="form-control @error('introduction') is-invalid @enderror" name="introduction" value="{{ old('introduction') }}" ></textarea>

                                @error('introduction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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
