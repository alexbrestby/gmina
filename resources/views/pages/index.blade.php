@extends('layouts.app')

@section('content')
  <blockquote class="blockquote text-right">
    <!-- <small><p class="mb-0">«Народ, не знающий своего прошлого, не имеет будущего»</p></small> -->
    <!--<footer class="blockquote-footer"><small>М.В.Ломоносов</small></footer>-->
    <small><p class="mb-0"><a style="color: black; letter-spacing: 0.02em; text-decoration: none" href="https://president.gov.by/ru/quotes/category/ob-istoricheskoy-pamyati" target="_blank">
        «Нет благороднее миссии, чем сохранение исторической памяти во имя светлого будущего»</a></p></small>
    <footer class="blockquote-footer"><small>А.Г.Лукашенко</small></footer>
  </blockquote>

<div class="jumbotron rounded p-1 m-0">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="5000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="{{ asset ('images/slider_1.jpg') }}">
          <img class="d-block w-100" src="{{ asset ('images/slider_1.jpg') }}" alt="Высоко-Литовск">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h4>Высоко-Литовск</h4>
          <h5>Праздник 3-мая</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/slider_2.jpg') }}" alt="Братская Церковь">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брест</h4>
          <h5>Братская Церковь</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/kościol_1.jpg') }}" alt="Крестовоздвиженский костел">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брест</h4>
          <h5>Крестовоздвиженский костел</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/droga.jpg') }}" alt="Дорога в крепость">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брест</h4>
          <h5>Дорога в Крепость</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/dworzec_1.jpg') }}" alt="Вокзал Брест">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брест</h4>
          <h5>Железнодорожный вокзал</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/3-maja_2.jpg') }}" alt="ул. 3-мая">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брест</h4>
          <h5>ул. 3-мая</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/magistrat.jpg') }}" alt="Брест. Магистрат">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брест</h4>
          <h5>Магистрат</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/wojewódstwo.jpg') }}" alt="Полесское Воеводство">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брест</h4>
          <h5>Здание Полесского Воеводства</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/szk_techniczna.jpg') }}" alt="Техническая Школа">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брест</h4>
          <h5>Техническая Школа (Железнодорожный Техникум)</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/gimnazjum.jpg') }}" alt="Гимназия">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брест</h4>
          <h5>Гимназия им.Ромуальда Траугутта</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/nadbrzeżna.jpg') }}" alt="Набережная Мухавца">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брест</h4>
          <h5>улица Набережная</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/wiadukt_1.jpg') }}" alt="Пешеходный мост на вокзале">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брест</h4>
          <h5>Железнодорожный вокзал</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/twierdza_kaplica.jpg') }}" alt="Крепость. Нижний храм">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брестская Крепость</h4>
          <h5>Госпитальный храм</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/twierdza_1.jpg') }}" alt="Крепость. Госпитальные ворота">
        <div class="carousel-caption d-none d-md-block">
          <h4>Брестская Крепость</h4>
          <h5>Госпитальные ворота</h5>
        </div>
      </div>
    </div>
    <div class="carousel-outer d-block d-sm-none">
      <h4>Высоко-Литовск</h4>
      <h5>Праздник 3-мая</h5>
    </div>
  </div>
</div>
<div>

</div>
@endsection