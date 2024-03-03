 <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
     <div class="container-fluid">
         <a class="navbar-brand" href="#">Navbar</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
             aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class=" collapse navbar-collapse" id="navbarNavDropdown">
             <ul class="navbar-nav ms-auto ">
                 <li class="nav-item">
                     <a class="nav-link mx-2 active" aria-current="page" href="{{ url('/') }}">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link mx-2" href="#">Products</a>
                 </li>

                 @if (auth()->check())
                     @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'editor')
                         <li class="nav-item">
                             <form action="{{ route('logout') }}" method="POST">
                                 @csrf
                                 <button class="btn btn-success btn-sm mt-2" type="submit">Log-Out</button>
                             </form>
                         </li>
                     @elseif (auth()->user()->user_type == 'user')
                         <li class="nav-item">
                             <a class="nav-link mx-2" href="{{ route('user.profile') }}">Profile</a>
                         </li>
                         <li class="nav-item">
                             <form action="{{ route('logout') }}" method="POST">
                                 @csrf
                                 <button class="btn btn-success btn-sm mt-2" type="submit">Log-Out</button>
                             </form>
                         </li>
                     @else
                     @endif
                 @endif
                 @guest
                     <li class="nav-item">
                         <a class="nav-link mx-2" href="{{ route('login.view') }}">Login</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link mx-2" href="{{ route('register.view') }}">Register</a>
                     </li>
                 @endguest
             </ul>
         </div>
     </div>
 </nav>
