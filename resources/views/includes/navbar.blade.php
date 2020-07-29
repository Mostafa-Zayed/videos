<nav class="navbar navbar-expand-lg fixed-top bg-danger " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{route('home')}}" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" >
          videos
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
            <!-- Example single danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </button>
                <div class="dropdown-menu">
                    @foreach($categories as $category)
                    <a class="dropdown-item" href="{{route('category',['category'=>$category->name])}}">{{ucfirst($category->name)}}</a>
                    @endforeach
                </div>
            </div>
            <!-- Example single danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Skills
                </button>
                <div class="dropdown-menu">
                    @foreach($skills as $skill)
                    <a class="dropdown-item" href="{{route('skill',['skill'=>$skill->name])}}">{{$skill->name}}</a>
                    @endforeach
                </div>
            </div>
            <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="{{route('contact')}}">
                    Contact Us
                </a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="{{url('login')}}">
                        Login
                    </a>
                </li>
                @if(Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Star on GitHub"  href="{{url('/register')}}">
                            Register
                        </a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>
