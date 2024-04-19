@extends('layouts.app')

@section('content')
<h1>Гмины</h1>
<div>
    <p>
        Гми́на (польск. gmina — волость) — наименьшая административная единица Польши. Название произошло от немецкого gemeinde («община»).
        Гмины объединяются в повяты, а те, в свою очередь, в воеводства. В современной Польше существуют гмины трёх основных типов:
    <ul>
        <li>Городская гмина (gmina miejska) — состоит только из города, обычно достаточно крупного</li>
        <li>Городско-сельская гмина (смешанная; gmina miejsko-wiejska) — состоит из города и окружающих его деревень</li>
        <li>Сельская гмина (gmina wiejska) — состоит только из деревень и сельской местности.</li>
    </ul>
    <a href="https://ru.wikipedia.org/wiki/%D0%93%D0%BC%D0%B8%D0%BD%D0%B0" target="_blank">(Википедия)</a>
    </p>
</div>
@if (count($gmina) > 0)
<div>
    @foreach ($gmina as $gm)
    @if ($gm->visible)
    <div class="item">
        <li class="list-group-item m-1"><a href="gmina/{{$gm->id}}">{{$gm->g_name}}</a></li>
    </div>
    @else
    <div class="item">
        <li class="list-group-item m-1 disabled"><a class="text-secondary" href="gmina/{{$gm->id}}">{{$gm->g_name}}</a></li>
    </div>
    @endif
    @endforeach
    {{-- {{$powets->links()}} --}}
    </ul>
    @else
    <p>Не найдено!</p>
    @endif
    <div class="mx-2" style="clear:both;"><a href="/powets" class="btn btn-outline-dark btn-sm px-5 mt-3">Назад</a></div>
@endsection