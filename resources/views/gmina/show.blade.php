@extends('layouts.app')

@section('content')
<div class="px-1">
    <h3>{{$gmina->g_name}}</h3>
    <p>{{ nl2br(e($gmina->content)) }}</p>

</div>

@if (count($city) > 0)
<div>
    @foreach ($city as $ct)
    @if ($ct->visible)
    <div class="item">
        <li class="list-group-item m-1"><a href="/city/{{$ct->id}}">{{$ct->city_name}}</a></li>
    </div>
    @else
    <div class="item">
        <li class="list-group-item m-1 disabled"><a class="text-secondary" href="gmina/{{$gm->id}}">{{$ct->city_name}}</a></li>
    </div>
    @endif
    @endforeach
    {{-- {{$gmina->links()}} --}}
</div>
@else
<p>Не найдено!</p>
@endif

<div class="mx-2" style="clear:both;"><a href="/gmina" class="btn btn-outline-dark btn-sm px-5 mt-3">Назад</a></div>
@endsection