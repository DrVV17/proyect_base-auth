<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Hello Site</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('pages.index')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('pages.about')}}">About us</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{route('contact.show')}}">Contact</a>
      </li>
    </ul>
    
  </div>
</nav>