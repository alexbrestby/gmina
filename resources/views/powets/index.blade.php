@extends('layouts.app')

@section('content')
<h1>Поветы Брестского воеводства</h1>
<div>
    <p>
        Пове́т (иначе по́вят от польск. powiat [ˈpɔvʲat], рус. дореф. повѣтъ, укр. повіт, белор. павет) — бывшая административно-территориальная единица в Великом княжестве Литовском и Речи Посполитой,
        нынешняя средняя административно-территориальная единица в Республике Польша. В России соответствует территориальной единице — району.
        Этимологически термин «повет» происходит от слова «вече» и дословно обозначает район, в котором мужское население в состоянии собраться на единое вече для решения местных вопросов.
        Исходя из этого изначально и определялся размер поветов. <a href="https://ru.wikipedia.org/wiki/%D0%9F%D0%BE%D0%B2%D0%B5%D1%82" target="_blank">(Википедия)</a>
    </p>
</div>
@if (count($powets) > 0)
<div>
    @foreach ($powets as $powet)
    @if ($powet->visible)
    <div class="item">
        <li class="list-group-item m-1"><a href="powets/{{$powet->id}}">{{$powet->p_name}}</a></li>
    </div>
    @else
    <div class="item">
        <li class="list-group-item m-1 disabled"><a class="text-secondary" href="powets/{{$powet->id}}">{{$powet->p_name}}</a></li>
    </div>
    @endif
    @endforeach
    {{-- {{$powets->links()}} --}}
    </ul>
    @else
    <p>Не найдено!</p>
    @endif

    @endsection