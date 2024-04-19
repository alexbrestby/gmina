@extends('layouts.app')

@section('content')
<div>
    <h4 class="px-1"><i class="far fa-address-card"></i> {{$title}}</h4>
    <div class="d-flex flex-column">
        <div class="d-flex">
            <div class="px-1">Подписывайтесь на наш телеграм!</div>
            <div class="px-1 telegram-icon"><a class="text-dark" href="https://t.me/joinchat/3x1XQYqOsj43N2My"><i class="fab fa-2x fa-blinkin fa-telegram"></i></a></div>
        </div>
        <div class="d-flex">
            <div class="px-1">или напишите нам письмо</div>
            <div class="px-1"> <a href="mailto:admin@gmina.by">&nbspadmin@gmina.by</a> </div>
        </div>
    </div>
</div>
@endsection