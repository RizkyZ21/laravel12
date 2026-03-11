<nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background: rgba(255,255,255,0.9); backdrop-filter: blur(6px);">
  <div class="container">

    <a class="navbar-brand fw-bold" href="{{ url('/') }}" style="color:#2563eb;">
        Zuhri
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link fw-semibold" href="{{ url('/') }}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold" href="{{ url('/about') }}">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold" href="{{ url('/detail') }}">Detail</a>
        </li>

      </ul>

    </div>
  </div>
</nav>

<style>
.navbar-nav .nav-link{
    color:#374151;
    transition:0.2s;
}

.navbar-nav .nav-link:hover{
    color:#2563eb;
}

.navbar-brand{
    letter-spacing:0.5px;
}
</style>
