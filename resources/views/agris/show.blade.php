@extends('layouts.app2')

@section('content')

    <div class="row">
        
        <div class="col-md-12">
            <h1 class="text-center test2">{{ $agri->name }} の詳細ページ</h1>
        </div>
        
        <div class="col-md-6">
            <img src="{{ $agri->url }}" width="100%"/>
        </div>
        <div class="col-md-6">
            
            <p class="text-center test2a">{{ $agri->content }}</p>
            
            <p class="text-center test2a">{{ $agri->price }}円</p>
            
        </div>
        
         <div class="col-md-12 mt-4"> 
            {{-- メッセージ編集ページへのリンク --}} 
            <div class="button003">
	            <a href="{{ route('edit', ['id' => $agri->id]) }}" class="btn btn-primary text-center">編集</a>
            </div>
            
        </div>
        
        <div class="col-md-12">
            
            {{-- メッセージ削除フォーム --}}
                <form action="{{ route('destroy', [ $agri->id, $agri->name, $agri->url, $agri->price, $agri->content ]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="id" name="id" class="form-control" value="{{ $agri->id }}">
                    <input type="hidden" id="name" name="name" class="form-control" value="{{ $agri->name }}">
                    <input type="hidden" id="url" name="url" class="form-control" value="{{ $agri->url }}">
                    <input type="hidden" id="price" name="price" class="form-control" value="{{ $agri->price }}">
                    <input type="hidden" id="content" name="content" class="form-control" value="{{ $agri->content }}">
                    
                    
                    <button type="submit" class="btn btn-danger text-center button003">削除</button>
                </form>
            
        </div>
        <div class="mb-5 col-12">
            
        </div>
            
            
    </div>
        
    

@endsection