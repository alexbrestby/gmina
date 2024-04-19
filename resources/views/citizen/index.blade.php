@extends('layouts.app')

@section('content')


@if (count($citizen) > 0)
<div>
    @foreach ($citizen as $ctz)
    @if ($ctz->visible)
    <div class="item">
        <h4 class="mx-4">{{$ctz->l_name}} {{$ctz->f_name}}</h4>
        <ul class="p-3">
            <li class="list-group-item p-2">Дата рождения: &nbsp{{$ctz->day ?? " - "}}.{{$ctz->month ?? " - "}}.{{$ctz->year ?? "-"}}</li>
            <li class="list-group-item p-2">Родители: отец - {{$ctz->dad ?? "нет данных"}}, мать - {{$ctz->mom ?? "нет данных"}}</li>
            <li class="list-group-item p-2">Возврат из беженства: {{$ctz->wozwrat ?? "нет данных"}}</li>
            <li class="list-group-item p-2">Основное занятие: {{$ctz->prof}}</li>
            <li class="list-group-item p-2">Надел земли: @if ($ctz->nadel == "posiada") да @endif</li>
            @if ($ctz->city_b || $ctz->gmina_b || $ctz->powet_b)
            <li class="list-group-item p-2">Место рождения: @if ($ctz->city_b) {{$ctz->city_b}} @endif @if ($ctz->gmina_b) гмина-{{$ctz->gmina_b}} @endif @if ($ctz->powet_b) повет-{{$ctz->powet_b}} @endif</li>
            @endif
            <li class="list-group-item p-2">Архив Брестской области: фонд:{{$ctz->fond}} дело:{{$ctz->delo}} опись:{{$ctz->opis}} номер записи:{{$ctz->num_zap}}</li>
            @if ($ctz->uwagi)
            <li class="list-group-item p-2">Примечание: {{$ctz->uwagi}}</li>
            @endif

        </ul>
    </div>
    @else
    <div class="item">
        <li class="list-group-item m-1 disabled"><a class="text-secondary" href="city/{{$czt->id}}">{{$ctz->citizen_name}}</a></li>
    </div>
    @endif
    @endforeach
    {{-- {{$gmina->links()}} --}}
</div>
@else
<p>Не найдено!</p>
@endif
<div class="m-4" style="clear:both;"><a href="/city/{{$ctz->city_id}}" class="btn btn-outline-dark btn-sm px-5 mt-3">Назад</a></div>
@endsection