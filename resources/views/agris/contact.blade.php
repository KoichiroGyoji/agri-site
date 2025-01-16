@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="row justify-content-center">
            <div class="col-12">
                
                <h1 class="text-center font-a mb-3">お問い合わせ</h1>
        
                <form method="POST" action="{{ route('confirm') }}">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="email" class="col-md-3 col-form-label text-md-right">メールアドレス</label>

                        <div class="col-9">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
         
                    <div class="form-group row mb-3">
                        <label for="contact" class="col-md-3 col-form-label text-md-right">お問い合わせ内容</label>
                        <div class="col-9">
                            <textarea id="contact" class="form-control  @error('contact') is-invalid @enderror" name="contact" cols="30" rows="10"></textarea>

                            @error('contact')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-9 offset-3">
                            <button type="submit" class="btn btn-primary">
                                お問い合わせ内容の確認へ
                            </button>
                        </div>
                    </div>
                </form>
                
                </div>
            </div>
        </div>
    </div>
    
@endsection