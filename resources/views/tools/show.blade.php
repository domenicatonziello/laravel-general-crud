@extends('layouts.main')

{{-- app title --}}
@section('title', 'Tools')

{{-- home content --}}
@section('content')
  <section id="show">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card overflow-hidden w-75">
                <div class="w-100 d-flex ">
                    <div class="w-50 py-5 px-5">
                        <ul class="list-unstyled d-flex flex-column justify-content-between h-100 m-0">
                            <li>Nome: {{$tool->name}}</li>
                            <li>Descrizione: {{$tool->description}}</li>
                            <li>Categoria: {{$tool->category}}</li>
                            <li>Anno di rilascio: {{$tool->release_year}}</li>
                            <li>Ultima versione: {{$tool->latest_version}}</li>
                            <li>Sistemi supportati: {{$tool->supported_os}}</li>
                            <li>Voto: {{$tool->vote}}/10</li>
                        </ul>
                    </div>
                    <div class="w-50">
                        <figure class="m-0">
                            <img src="{{$tool->image_url}}" alt="{{$tool->name}}" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{route('tools.destroy', $tool->id)}}" method="POST" class="text-center">
            @csrf
            @method("DELETE")
            <button class="btn btn-outline-danger mt-3">Cancella</button>
        </form>
    </div>
  </section>
@endsection