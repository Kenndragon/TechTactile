<?php
  use App\Http\Controllers\ProductController;
  $total = 0;
  if(Session::has('user')){
    $total = ProductController::cartItem();
  }
?>    
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">TechTactile</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/myorders">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
              </li>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
              </form> 
            </ul>
            <li class="nav-item dropdown navbar-nav d-flex flex-row me-1">
            @if(Session::has('user'))
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Session::get('user')['name']}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
            </li>
            @else
            <li class="nav-item dropdown navbar-nav d-flex flex-row me-1">
              <a class="nav-link" href="/login">Login</a>
              <a class="nav-link" href="/register">Register</a>
            </li>
            @endif
          </div>
        </div>
      </nav>