@extends('layouts.app')

@section('content')
    <h2><i class="far fa-thumbs-up"></i> {{$title}}</h2>
    <ul class="list-group">
        @foreach ($services as $item)
            <li class="list-group-item">{{$item}}</li>
        @endforeach
    </ul>
@endsection