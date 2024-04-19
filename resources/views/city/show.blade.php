@extends('layouts.app')

@section('content')
<div class="px-1">
    <h3>{{$city->city_name}}</h3>

</div>

@if (count($citizen) > 0)
<div>
    @foreach ($citizen as $ctz)
    @if ($ctz->f_name != null)
    <div class="item">
        <li class="list-group-item m-1"><a href="/citizen/{{$ctz->id}}">{{$ctz->f_name}} {{$ctz->l_name}}</a></li>
    </div>
    @elseif ($ctz->visible == 0)
    <div class="item">
        <li class="list-group-item m-1 disabled"><a class="text-secondary" href="citizen/{{$ctz->id}}">{{$ctz->f_name}} {{$ctz->l_name}}</a></li>
    </div>
    @endif
    @endforeach
    {{-- {{$gmina->links()}} --}}
</div>
@else
<p>Не найдено!</p>
@endif

<div class="m-2" style="clear:both;"><a href="/gmina" class="btn btn-outline-dark btn-sm px-5 mt-3">Назад</a></div>
@endsection