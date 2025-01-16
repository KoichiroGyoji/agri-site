@extends('layouts.app')

@section('content')

    <h1></h1>

    <div class="row">
        <div class="col-6">
            <form action="{{ route('store') }}" method="POST">
            @csrf

                <div class="form-group">
                    <label for="name">name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="">
                    <label for="url">url:</label>
                    <input type="text" id="url" name="url" class="form-control" value="">
                    <label for="price">price:</label>
                    <input type="text" id="price" name="price" class="form-control" value="">
                    <label for="content">content:</label>
                    <input type="text" id="content" name="content" class="form-control" value="">
                </div>
            
                <button type="submit" class="btn btn-primary">投稿</button>
            </form>
        </div>
    </div>
@endsection