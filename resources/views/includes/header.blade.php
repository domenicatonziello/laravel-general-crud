<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">Dev Magazine</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if (Route::is('home')) active @endif" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Route::is('tools.index')) active @endif"
            href="{{ route('tools.index') }}">Tools</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
