@extends('layouts.main')

@section('content')
  <section id="form-create" class="container">
    <form action="{{ route('tools.store') }}" method="POST">
      @csrf
      <div class="row">
        {{-- name --}}
        <div class="col-6 form-floating mb-3">
          <input type="text" class="form-control" name="name" id="name" placeholder="Inserisci il nome">
          <label for="name">Nome:</label>
        </div>
        {{-- image_url --}}
        <div class="form-floating col-6 mb-3">
          <input type="url" class="form-control" name="image_url" id="image_url" placeholder="Inserisci URL">
          <label for="name">Immagine:</label>
        </div>
        {{-- description --}}
        <div class="form-floating mb-3">
          <textarea class="form-control" id="description" name="description" style="height: 100px"></textarea>
          <label for="Description">Descrizione</label>
        </div>
        {{-- category select: libreria, editor, framework --}}
        <div class="form-floating mb-3">
          <select class="form-select" id="category" name="category">
            <option selected>--</option>
            <option>Libreria</option>
            <option>Editor</option>
            <option>Framework</option>
          </select>
          <label for="floatingSelect">Categoria </label>
        </div>
        {{-- relaser_year --}}
        <div class="col-6 form-floating mb-3">
          <input type="number" class="form-control" name="relaser_year" id="year"
            placeholder="Inserisci anno di rilascio dello strumento">
          <label for="year">Anno:</label>
        </div>
        {{-- latest_version --}}
        <div class="col-6 form-floating mb-3">
          <input type="text" class="form-control" name="latest_version" id="version"
            placeholder="Inserisci ultima versione">
          <label for="version">Ultima versione:</label>
        </div>
        {{-- download_link --}}
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="download_link" id="download"
            placeholder="Inserisci link per scaricare">
          <label for="download">Link per scaricare:</label>
        </div>
        {{-- supported_os --}}
        <div class="col-6 form-floating mb-3">
          <input type="text" class="form-control" name="supported_os" id="supported_os"
            placeholder="Inserisci sistemi operativi supportati">
          <label for="supported_od">Sistemi operativi:</label>
        </div>
        {{-- vote --}}
        <div class="col-6 form-floating mb-3">
          <input type="number" class="form-control" name="vote" id="vote" min="1" max="10"
            placeholder="Inserisci il voto">
          <label for="vote">Voto:</label>
        </div>
        {{-- invia --}}
        <div class="col-3 my-3">
          <button type="submit" class="btn btn-primary">Invia</button>
        </div>
      </div>
    </form>
  </section>
@endsection
