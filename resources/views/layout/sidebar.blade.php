<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="{{route('adminHome')}}">Admin</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('indexUsers')}}">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('UrlShort')}}">URLShort</a>
          </li>
          
        </ul>
        <form action="{{route('logout')}}" method="post" class="d-flex">
         @csrf
         @method('DELETE')
          <button class="btn btn-outline-danger text-white" type="submit">logout</button>
        </form>
      </div>
    </div>
  </nav>