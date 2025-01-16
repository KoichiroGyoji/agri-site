@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12 mb-3">
            <h1 class="text-center font-a">商品リスト</h1>
        </div>
        
        @if (count($agris) > 0)
        
            @foreach ($agris as $agri)
                
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ $agri->url }}"  class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="{{ route('onlineshopshow', ['id' => $agri->id]) }}" class="card-text font">{{ $agri->name }}</a>
                            <p class="card-text font">{{ Str::limit($agri->content, 20) }}</p>
                            <a href="{{ route('purchase', ['id' => $agri->id]) }}" class="btn btn-primary font">購入画面</a>
                        </div>
                    </div>
                </div>
            
            @endforeach
            
        @endif    
        
    </div>
@endsection