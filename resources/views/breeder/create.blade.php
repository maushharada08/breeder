@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ブリーダー登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="/b" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="certificate" class="col-md-4 col-form-label text-md-end">{{ __('ブリーダー証明書') }}</label>

                            <div class="col-md-6">
                                <input id="certificate" type="file" class="form-control @error('certificate') is-invalid @enderror" name="certificate" value="{{ old('certificate') }}" >

                                @error('certificate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('申請') }}
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
