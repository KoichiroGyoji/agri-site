@extends('layouts.app2')

@section('content')

    @if(Auth::check())

        <h1>データベース一覧</h1>
    
        @if (count($agris) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>url</th>
                        <th>price</th>
                        <th>content</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agris as $agri)
                    <tr>
                        <td><a href="{{ route('show', ['id' => $agri->id]) }}">{{ $agri->id }}</a></td>
                        <td>{{ $agri->name }}</td>
                        <td>{{ $agri->url }}</td>
                        <td>{{ $agri->price }}</td>
                        <td>{{ $agri->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            
        <a href="{{ route('create') }}" class="btn btn-primary">新規メッセージの投稿</a>
        
        @endif
        
    @endif

@endsection