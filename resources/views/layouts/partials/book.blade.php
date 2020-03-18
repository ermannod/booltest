{{-- RIQUADRO BIANCO DELLA RICERCA APPARTAMENTI --}}
<div class="booking-container">
  <h1>Prenota alloggi e attività unici.</h1>
  <form id="search" action="{{ route('apartments.index') }}" method="get" enctype="multipart/form-data">
    @csrf
    @method("GET")
    <div class="form-group">
      <label id="dove-box" for="place">Dove</label>
      <input id="search-dove" type="text" class="form-control" name='place' id="place"  placeholder="Ovunque">
      <input id="lat" type='text' name='lat' value="">
      <input id="lon" type='text' name='lon' value="">
      <div id="item-list">

      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-sm-6">
          <label for="check-in">Check-in</label>
          <input type="date" class="form-control" name='check-in' id="check-in"  placeholder="dd/mm/aaaa">
        </div>
        <div class="col-sm-6">
          <label for="check-out">Check-out</label>
          <input type="date" class="form-control" name='check-out' id="check-out"  placeholder="dd/mm/aaaa">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Ospiti</label>
      <select class="form-control" id="exampleFormControlSelect1">
        {{-- <option>Adulti <i class="fas fa-minus-circle"></i> 0+ <i class="fas fa-plus-circle"></i></option> --}}
        @for ($i=0; $i <= 10; $i++)
          <option>{{$i}}</option>
        @endfor
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Cerca</button>
  </form>
</div>
