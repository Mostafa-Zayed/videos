<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('assets/img/sidebar-2.jpg')}}">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{isActive('index')}}">
            <a class="nav-link" href="{{route('dashboard.index')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{isActive('users')}}">
            <a class="nav-link" href="{{route('dashboard.users.index')}}">
              <i class="material-icons">people</i>
              <p>Users  &nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-sm" style="border-radius: 3.2rem;">{{\App\Models\User::count()}}</button></p>
            </a>
          </li>
          <li class="nav-item {{isActive('categories')}}">
            <a class="nav-link" href="{{route('dashboard.categories.index')}}">
              <i class="material-icons">subject</i>
              <p>Categories  &nbsp;&nbsp;&nbsp;<button class="btn btn-danger btn-sm" style="border-radius: 3.2rem;">{{\App\Models\Category::count()}}</button></p>
            </a>
          </li>

          <li class="nav-item {{isActive('courses')}}">
            <a class="nav-link" href="{{route('dashboard.courses.index')}}">
              <i class="material-icons">subject</i>
              <p>Courses  &nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-sm" style="border-radius: 3.2rem;">{{\App\Models\Course::count()}}</button></p>
            </a>
          </li>

          <li class="nav-item {{isActive('skills')}}">
            <a class="nav-link" href="{{route('dashboard.skills.index')}}">
              <i class="material-icons">list_alt</i>
              <p>Skills  &nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-sm" style="border-radius: 3.2rem;">{{\App\Models\Skill::count()}}</button></p>
            </a>
          </li>
          <li class="nav-item {{isActive('tages')}}">
            <a class="nav-link" href="{{route('dashboard.tages.index')}}">
              <i class="material-icons">code</i>
              <p>Tages  &nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-sm" style="border-radius: 3.2rem;">{{\App\Models\Tage::count()}}</button></p>
            </a>
          </li>
          <li class="nav-item {{isActive('pages')}}">
            <a class="nav-link" href="{{route('dashboard.pages.index')}}">
                <i class="material-icons">pages</i>
              <p>Pages  &nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-sm" style="border-radius: 3.2rem;">{{\App\Models\Page::count()}}</button></p>
            </a>
          </li>

          <li class="nav-item {{isActive('videos')}}">
            <a class="nav-link" href="{{route('dashboard.videos.index')}}">
              <i class="material-icons">ondemand_video</i>
              <p>videos &nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-sm" style="border-radius: 3.2rem;">{{\App\Models\Video::count()}}</button></p>
            </a>
          </li>
          <li class="nav-item {{isActive('messages')}}">
                <a class="nav-link" href="{{route('dashboard.messages.index')}}">
                    <i class="material-icons">email</i>
                    <p>Messages &nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-sm" style="border-radius: 3.2rem;">{{\App\Models\Message::count()}}</button></p>
                </a>
            </li>
        </ul>
      </div>
    </div>
