@extends('layouts.main')

{{-- font awesome --}}
@section('cdns')
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
    integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
    crossorigin='anonymous' />
@endsection

@section('title', 'Tools')

@section('content')
  <section id="main-tools">
    <div class="container">
      <table class="table">
        <thead>
          {{-- table first row (title of column) --}}
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Latest version</th>
            <th scope="col">Vote</th>
            <th scope="col" class="text-end">Commands</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tools as $tool)
            <tr>
              <th scope="row">{{ $tool->name }}</th>
              <td>{{ $tool->category }}</td>
              <td> {{ $tool->latest_version }}</td>
              <td>{{ $tool->vote }}</td>
              {{-- buttons --}}
              <td class="text-end">
                {{-- show button {{route(tools.show), $tool->id}} --}}
                <a class="btn btn-small btn-primary" href="{{ route('tools.show', $tool->id) }}"><i
                    class="fa-solid fa-folder-open"></i></a>
                {{-- edit button {{route(tools.edit), $tool->id}} --}}
                <a class="btn btn-small btn-warning text-white" href="{{ route('tools.edit', $tool->id) }}"><i
                    class="fa-solid fa-pen-to-square"></i></a>
                {{-- delete button {{route(tools.destroy), $tool->id}} --}}
                <form class="d-inline" action="{{ route('tools.destroy', $tool->id) }}" method="POST">
                  {{-- cross site request forgery --}}
                  @csrf
                  {{-- custom method delete --}}
                  @method('DELETE')
                  <button type="submit" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      {{-- add button  --}}
      <div class="text-center">
        <a class="btn btn-small btn-success" href="{{ route('tools.create') }}"><i class="fa-solid fa-plus"></i></a>
      </div>
    </div>
  </section>
@endsection
