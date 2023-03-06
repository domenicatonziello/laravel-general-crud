@extends('layouts.main')
@section('title', 'Edit')


@section('content')
  <form method="POST" action="{{ route('tools.update', $tool->id) }}" class="container" novalidate>
    @method('PUT')
    @csrf
    <div class="row">
      <div class="col-6">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required
            value="{{ old('name', $tool->name) }}">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="image_url" class="form-label">Image</label>
          <input type="url" class="form-control" id="image_url" name="image_url" required
            value="{{ old('image_url', $tool->image_url) }}">
        </div>
      </div>
      <div class="col-12">
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" id="description" cols="30" class="form-control">{{ old('description', $tool->description) }}</textarea>
        </div>
      </div>
      <div class="col-4">
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" id="category" name="category" required>
            <option value="">select Category</option>
            <option @if (old('category', $tool->category) === 'Editor') selected @endif>Editor</option>
            <option @if (old('category', $tool->category) === 'Libreria') selected @endif>Libreria</option>
            <option @if (old('category', $tool->category) === 'Framework') selected @endif>Framework</option>
          </select>
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="release_year" class="form-label">Release Year</label>
          <input type="number" class="form-control" id="release_year" name="release_year" required
            value="{{ old('release_year', $tool->release_year) }}">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="latest_version" class="form-label">Latest version</label>
          <input type="number" class="form-control" id="latest_version" name="latest_version" required
            value="{{ old('latest_version', $tool->latest_version) }}">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required
            value="{{ old('name', $tool->name) }}">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="vote" class="form-label">Vote</label>
          <input type="number" class="form-control" id="vote" name="vote" required
            value="{{ old('vote', $tool->vote) }}">
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-success mt-4 w-25">SEND</button>
    </div>
  </form>
@endsection
