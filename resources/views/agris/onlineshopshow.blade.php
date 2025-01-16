@extends('layouts.app')

@section('content')

    <div class="row">
        
        <div class="col-12 mb-4">
            <h1 class="text-center font-a">{{ $agri->name }} の詳細ページ</h1>
        </div>
        
        <div class="col-6">
            <img src="{{ $agri->url }}" width="100%"/>
        </div>
        <div class="col-6 mt-5">
            <p class="font text-center">{{ $agri->content }}</p>
        
            <p class="font-a">{{ $agri->price }}円</p>
        </div>
        
        <div class="col-12 mt-3 mb-5 text-center">
            <a href="{{ route('purchase', ['id' => $agri->id]) }}" class="btn btn-primary font">購入画面</a>
        </div>
        
        
    </div>

@endsection