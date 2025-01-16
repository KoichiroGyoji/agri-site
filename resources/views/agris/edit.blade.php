@extends('layouts.app2')

@section('content')

    <h1>{{ $agri->name }} の編集ページ</h1>

    <div class="row">
        <div class="col-6">
            <form action="{{ route('update', [ $agri->id, $agri->name, $agri->url, $agri->price, $agri->content ]) }}" method="POST">
                @csrf
                @method('PUT')
            
                <div class="form-group">
                    <input type="hidden" id="id" name="id" class="form-control" value="{{ $agri->id }}">
                    <label for="name">name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $agri->name ?? '') }}">
                    <label for="url">url:</label>
                    <input type="text" id="url" name="url" class="form-control" value="{{ old('url', $agri->url ?? '') }}">
                    <label for="price">price:</label>
                    <input type="text" id="price" name="price" class="form-control" value="{{ old('price', $agri->price ?? '') }}">
                    <label for="content">content:</label>
                    <input type="text" id="content" name="content" class="form-control" value="{{ old('content', $agri->content ?? '') }}">
                </div>
            
                <button type="submit" class="btn btn-primary mt-2">更新</button>
            </form>
        </div>
    </div>

@endsection