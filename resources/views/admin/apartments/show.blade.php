@extends('layouts.public')
@section('content')
<nav class="info-room-navbar navbar navbar-expand navbar-light justify-content-between">
  <div class="container">
    <div class="ul-left col-lg-6">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link text-white title" {{--onclick="myFunction()"--}} href="#title">Panoramica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#services">Servizi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#graphic">Statistiche</a>
        </li>
      </ul>
    </div>
    <div class="ul-right col-lg-6">
      <ul class="navbar-nav float-right">
        <li class="nav-item">
          <a class="nav-link text-dark" href="#"><i class="far fa-share-square"></i> Condividi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#"><i class="far fa-heart"></i> Salva</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<div class="container stacca">
  <div class="row">
    <div class="col-lg-12 scrol-left">
      <div class="title" id="title">
        <h2>{{$apartment->titolo}}</h2>

        <!-- Button modifica -->
        <button class="btn-apartment-crud modif" type="submit" name="button">
            <a href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}" class="btn btn-primary float-left">Modifica</a>
        </button>
        <!-- fine -->

        <div class="user-container float-right">
          <img class="user-img" src="https://a0.muscache.com/im/pictures/user/bbb4fb56-fdd7-4ee5-8cc6-fc03ffd4d7bf.jpg?aki_policy=profile_x_medium" alt="">
          <p class="text-center">{{$apartment->user->first_name}}</p>
        </div>
      </div>

      <div class="info section">
        <h4>Info</h4>
        <a href="#">{{$apartment->cita}}</a>
        <p>Stanze: {{$apartment->stanze}}, Posti letto: {{$apartment->posti_letto}}, Bagni: {{$apartment->bagni}}</p>
      </div>
      <div class="description section">
          <h4>Descrizione</h4>
        <p>{{$apartment->descrizione}}</p>
      </div>
      <div class="services-container section" id="services">
        <h4>Servizi</h4>
        <div class="services">
          <div class="col-lg-6">
            @forelse ($apartment->options as $option)
              {{ $option->nome }}{{ $loop->last ? '' : ',' }}
            @empty
                -
            @endforelse
          </div>
        </div>
      </div>


      <!-- parte da implementare con le immagini -->
      <div class="room section">
        <h4>Immagini appartamento</h4>
        <div class="row container-admin-img container-fluid">
          <div class="col-sm-2">
            <!-- <img class="room-img" src="{{$apartment->img}}" alt="foto:{{$apartment->title}}"> -->
            <img class="room-img" src="https://r-cf.bstatic.com/images/hotel/max1024x768/669/66981196.jpg" alt="">
          </div>
          <div class="col-sm-2">
            <!-- <img class="room-img" src="{{$apartment->img}}" alt="foto:{{$apartment->titolo}}"> -->
            <img class="room-img" src="https://r-cf.bstatic.com/images/hotel/max1024x768/669/66981196.jpg" alt="">
          </div>
          <div class="col-sm-2">
            <!-- <img class="room-img" src="{{$apartment->img}}" alt="foto:{{$apartment->titolo}}"> -->
            <img class="room-img" src="https://r-cf.bstatic.com/images/hotel/max1024x768/669/66981196.jpg" alt="">
          </div>
          <div class="col-sm-2">
            <!-- <img class="room-img" src="{{$apartment->img}}" alt="foto:{{$apartment->titolo}}"> -->
            <img class="room-img" src="https://r-cf.bstatic.com/images/hotel/max1024x768/669/66981196.jpg" alt="">
          </div>
          <div class="col-sm-2">
            <!-- <img class="room-img" src="{{$apartment->img}}" alt="foto:{{$apartment->titolo}}"> -->
            <img class="room-img" src="https://r-cf.bstatic.com/images/hotel/max1024x768/669/66981196.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- fine -->


      <div id="graphic">
          <h4>Statistiche</h4>

          <div class="d-flex justify-content-center">
              <div class="graphic">
                <div class="graphic-title">
                  <h5>Visualizzazioni</h5>
                </div>
                <div class="grafici">
                    <div class="grafico1">
                        <div class="canv-container">
                            <canvas id="yourChart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
              </div>

              <div class="graphic">
                <div class="graphic-title">
                  <h5>Messaggi</h5>
                </div>
                <div class="grafici">
                    <div class="grafico2">
                       <div class="canv-container">
                           <canvas id="myChart" width="400" height="400"></canvas>
                       </div>
                   </div>
                </div>
              </div>
          </div>

      </div>



    </div>
  </div>
</div>
@endsection
