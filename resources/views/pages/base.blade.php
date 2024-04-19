@extends('layouts.app')

@section('content')

<div class="row">
  <div class="jumbotron">
    <h2><i class="far fa-folder-open"></i> {{$title}}</h2>
    <p class="lead">К вашим услугам информациионная база с данными переписи населения белорусских земель Речи Посполитой периода 1919-1939 гг.</p>
    <hr class="my-4">
    <p>На сегодня наша база содержит {{$counter}} уникальную запись</p>
    <a class="btn btn-outline-dark btn-sm" href="/powets" role="button">Узнать больше</a>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <img class="card-img godlo-img" src="{{ asset('images/godlo.png') }}" alt="godlo">
        <h5 class="card-title">Историческая справка</h5>
        <p class="card-text">Административное устройство Западной Беларуси в составе межвоенной Польши.</p>
        <a href="/reference" class="btn btn-outline-dark btn-sm blinking">Ознакомиться</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <img class="card-img gallery-img" src="{{ asset('images/gallery.png') }}" alt="godlo">
        <h5 class="card-title">Фотогалерея</h5>
        <p class="card-text">Коллекция фотографий и сканированных страниц из архивов Республики Беларусь.</p>
        <a href="/gallery" class="btn btn-outline-dark btn-sm">Посмотреть</a>
      </div>
    </div>
  </div>
</div>

@endsection