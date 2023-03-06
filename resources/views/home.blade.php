@extends('layouts.main')

{{-- app title --}}
@section('title', 'Home')

{{-- home content --}}
@section('content')
  <section id="home">
    <div class="container">
      <div class="row row-cols-4">
        @foreach ($tools as $tool)
          <div class="col mb-3">
            {{-- card --}}
            <a href="#">
              <div class="card">
                <figure>
                  <img src="{{ $tool->image_url }}" class="card-img-top" alt="{{ $tool->name }}">
                </figure>
                <div class="card-body">
                  <h2 class="card-text text-center">{{ $tool->name }}</h2>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
