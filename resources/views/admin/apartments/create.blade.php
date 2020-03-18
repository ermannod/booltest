{{-- estendi layout del template admin --}}
@extends('layouts.admin')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-8 add-product">
                <h1 class="text-center pb-3">Aggiungi un appartamento</h1>
                <hr>
                <form action="{{ route('admin.apartments.store')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="row form-group">
                      <label class="col-12 col-md-3" for="titolo">Titolo</label>
                      {{-- old per recuperare vallue in caso di errore compilazione form --}}
                      <input type="text" class="form-control col-12 col-md-9 @error('titolo') is-invalid @enderror" id="titolo" placeholder="Titolo" name="titolo" value="{{ old('titolo') }}" required autofocus>
                      @error('titolo')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <div class="valid-feedback col-12 col-md-9 offset-md-3">Ok!</div>
                      <div class="invalid-feedback col-12 col-md-9 offset-md-3">Aggiungi un titolo</div>
                    </div>
                    <div class="row form-group">
                        <label class="col-12 col-md-3" for="stanze">Numero di stanze</label>
                        <input type="number" min="1" max="10" class="form-control col-12 col-md-9 @error('stanze') is-invalid @enderror" id="stanze" placeholder="Numero di stanze" name="stanze" value="{{ old('stanze') }}" required>
                        @error('stanze')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="valid-feedback col-12 col-md-9 offset-md-3">
                            Ok!
                        </div>
                        <div class="invalid-feedback col-12 col-md-9 offset-md-3">
                            Aggiungi il numero di stanze
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-12 col-md-3" for="posti_letto">Numero posti letto</label>
                        <input type="number" min="1" max="10" class="form-control col-12 col-md-9 @error('posti_letto') is-invalid @enderror" id="posti_letto" placeholder="Numero di posti letto" name="posti_letto" value="{{ old('posti_letto') }}" required>
                        @error('posti_letto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="valid-feedback col-12 col-md-9 offset-md-3">
                          Ok!
                        </div>
                        <div class="invalid-feedback col-12 col-md-9 offset-md-3">
                          Aggiungi il numero di posti letto
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-12 col-md-3" for="bagni">Numero di bagni</label>
                        <input type="number" min="1" class="form-control col-12 col-md-9 @error('bagni') is-invalid @enderror" id="bagni" placeholder="Numero di bagni" name="bagni" value="{{ old('bagni') }}" required>
                        @error('bagni')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="valid-feedback col-12 col-md-9 offset-md-3">
                            Ok!
                        </div>
                        <div class="invalid-feedback col-12 col-md-9 offset-md-3">
                            Aggiungi il numero di bagni
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-12 col-md-3" for="dimensioni">Dimensioni (mq)</label>
                        <input type="number" min="1" class="form-control col-12 col-md-9 @error('dimensioni') is-invalid @enderror" id="dimensioni" placeholder="Dimensioni in mq" name="dimensioni" value="{{ old('dimensioni') }}" required>
                        @error('dimensioni')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="valid-feedback col-12 col-md-9 offset-md-3">
                            Ok!
                          </div>
                          <div class="invalid-feedback col-12 col-md-9 offset-md-3">
                            Aggiungi la dimensione in metri quadrati
                          </div>
                    </div>
                    <div class="row form-group">
                      <label class="col-12 col-md-3" for="descrizione">Descrizione</label>
                      <textarea type="text" class="form-control col-12 col-md-9 @error('descrizione') is-invalid @enderror" id="descrizione" placeholder="Descrizione" name="descrizione" rows="5" required>{{ old('descrizione') }}</textarea>
                      @error('descrizione')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <div class="valid-feedback col-12 col-md-9 offset-md-3">
                          Ok!
                        </div>
                        <div class="invalid-feedback col-12 col-md-9 offset-md-3">
                          Aggiungi una descrizione
                        </div>
                    </div>
                    <div class="row form-group">
                      <label class="col-12 col-md-3" for="via">Via</label>
                      <input type="text" class="form-control col-12 col-md-9 @error('via') is-invalid @enderror" id="via" placeholder="Via/Piazza" name="via" value="{{ old('via') }}" required>
                      @error('via')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <div class="valid-feedback col-12 col-md-9 offset-md-3">
                          Ok!
                        </div>
                        <div class="invalid-feedback col-12 col-md-9 offset-md-3">
                          Aggiungi la via o piazza
                        </div>
                    </div>
                    <div class="row form-group">
                      <label class="col-12 col-md-3" for="civico">N. civico</label>
                      <input type="text" class="form-control col-12 col-md-9 @error('civico') is-invalid @enderror" id="civico" placeholder="N. civico" name="civico" value="{{ old('civico') }}" required>
                        @error('civico')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      <div class="valid-feedback col-12 col-md-9 offset-md-3">
                          Ok!
                        </div>
                        <div class="invalid-feedback col-12 col-md-9 offset-md-3">
                          Aggiungi il numero civico
                        </div>
                    </div>
                    <div class="row form-group">
                      <label class="col-12 col-md-3" for="cap">CAP</label>
                      <input type="text" class="form-control col-12 col-md-9 @error('cap') is-invalid @enderror" id="cap" placeholder="CAP" name="cap" value="{{ old('cap') }}" required>
                      @error('cap')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <div class="valid-feedback col-12 col-md-9 offset-md-3">
                          Ok!
                        </div>
                        <div class="invalid-feedback col-12 col-md-9 offset-md-3">
                          Aggiungi il CAP
                        </div>
                    </div>
                    <div class="row form-group">
                      <label class="col-12 col-md-3" for="cita">Città</label>
                      <input type="text" class="form-control col-12 col-md-9 @error('cita') is-invalid @enderror" id="cita" placeholder="Città" name="cita" value="{{ old('cita') }}" required>
                      @error('cita')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <div class="valid-feedback col-12 col-md-9 offset-md-3">
                          Ok!
                        </div>
                        <div class="invalid-feedback col-12 col-md-9 offset-md-3">
                          Aggiungi la città
                        </div>
                    </div>
                    <div class="row form-group">
                      <label class="col-12 col-md-3" for="provincia">Provincia</label>
                      <input type="text" class="form-control col-12 col-md-9 @error('provincia') is-invalid @enderror" id="provincia" placeholder="Provincia" name="provincia" value="{{ old('provincia') }}" required>
                      @error('provincia')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <div class="valid-feedback col-12 col-md-9 offset-md-3">
                          Ok!
                        </div>
                        <div class="invalid-feedback col-12 col-md-9 offset-md-3">
                          Aggiungi la provincia
                        </div>
                    </div>
                    <div class="row form-group">
                      <label class="col-12 col-md-3" for="paese">Paese</label>
                      <input type="text" class="form-control col-12 col-md-9  @error('paese') is-invalid @enderror" id="paese" placeholder="Paese" name="paese" value="{{ old('paese') }}" required>
                      @error('paese')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <div class="valid-feedback col-12 col-md-9 offset-md-3">
                          Ok!
                        </div>
                        <div class="invalid-feedback col-12 col-md-9 offset-md-3">
                          Aggiungi il Paese
                        </div>
                    </div>
                    <hr>
                    <div class="row form-group">
                        <label class="col-12 col-md-3">Servizi</label>
                        <div class="col-12 col-md-9 d-flex flex-row flex-wrap">
                            @foreach ($options as $option)
                                <div class="col-6">
                                    <input class="form-check-input" type="checkbox" id="nome_{{ $option->id }}" name="nome_id[]" value="{{ $option->id }}"
                                    {{-- recuperare check selezionati in caso di errore --}}
                                    {{ in_array($option->id, old('nome_id', array())) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="nome_{{ $option->id }}">
                                        {{ $option->nome }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="row form-group">
                        <label class="col-12 col-md-3" for="img-1">Immagine 1</label>
                        <input class="col-12 col-md-9" type="file" class="form-control-file" id="img" name="img">
                    </div>
                    {{-- <div class="row form-group">
                      <label class="col-12 col-md-3" for="img-2">Immagine 2</label>
                      <input class="col-12 col-md-9" type="file" class="form-control-file" id="img-2" name="img-2">
                    </div>
                    <div class="row form-group">
                      <label class="col-12 col-md-3" for="img-3">Immagine 3</label>
                      <input class="col-12 col-md-9" type="file" class="form-control-file" id="img-3" name="img-3">
                    </div>
                    <div class="row form-group">
                      <label class="col-12 col-md-3" for="img-4">Immagine 4</label>
                      <input class="col-12 col-md-9" type="file" class="form-control-file" id="img-4" name="img-4">
                    </div>
                    <div class="row form-group">
                      <label class="col-12 col-md-3" for="img-5">Immagine 5</label>
                      <input class="col-12 col-md-9" type="file" class="form-control-file" id="img-5" name="img-5">
                    </div> --}}
                    <hr>
                    <div class="row form-group d-flex justify-content-center">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input input-visibilita" id="visibilita">
                          <label class="custom-control-label" for="visibilita">Visibilità annuncio</label>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-lg btn-block mt-2">Aggiungi un nuovo appartamento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
