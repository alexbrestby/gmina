@extends('layouts.app')

@section('content')
    <h3>{{$powet->p_name}}</h3>
    <p>{{$powet->description}}</p>

    @if (count($gmina) > 0)
    <div>
        @foreach ($gmina as $gm)
            @if ($gm->visible)
                <div class="item"><li class="list-group-item m-1"><a href="/gmina/{{$gm->id}}">{{$gm->g_name}}</a></li></div>
            @else
                <div class="item"><li class="list-group-item m-1 disabled"><a class="text-secondary" href="gmina/{{$gm->id}}">{{$gm->g_name}}</a></li></div>
            @endif    
        @endforeach
        {{-- {{$powets->links()}} --}}
    </div>
    @else
        <p>Не найдено!</p>
    @endif

@endsection