@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">購入情報確認</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('purchaseSend') }}">
                        @csrf
                        <input type="hidden" name="email" value="{{ $contact['email'] }}">
                        <input type="hidden" name="goods" value="{{ $contact['goods'] }}">
                        <input type="hidden" name="price" value="{{ $contact['price'] }}">
                        <input type="hidden" name="quantity" value="{{ $contact['quantity'] }}">
                        <input type="hidden" name="contact" value="{{ $contact['contact'] }}">
                        <input type="hidden" name="sumprice" value="{{ $contact['sumprice'] }}">
                        
                        <div class="row mb-3">
                            <label for="goods" class="col-3 text-md-right">メールアドレス:</label>
                            <div class="col-9">
                                {{ $contact['email'] }}
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="goods" class="col-3 text-md-right">商品名:</label>
                            <div class="col-9">
                                {{ $contact['goods'] }}
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="price" class="col-3 text-md-right">値段:</label>
                            <div class="col-9">
                                {{ $contact['price'] }}
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="quantity" class="col-3 text-md-right">個数:</label>
                            <div class="col-9">
                                {{ $contact['quantity'] }}
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="quantity" class="col-3 text-md-right">合計金額:</label>
                            <div class="col-9">
                                {{ $contact['sumprice'] }}
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="contact" class="col-3 text-md-right">備考:</label>
                            <div class="col-9">
                                {{ $contact['contact'] }}
                            </div>
                        </div>

                        <div class="form-group row">
                        
                            <div class="col-2 offset-6">
                                <button type="submit" class="btn btn-primary">
                                    送信
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