<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('home')) active @endif" aria-current="page" href="{{ route('home') }}">
                    <span data-feather="home"></span>
                    Главная 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('categories')) active @endif" href="{{ route('categories') }}">
                    <span data-feather="file"></span>
                    Категории
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('news')) active @endif" href="{{ route('news') }}">
                    <span data-feather="shopping-cart"></span>
                    Новости
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Загрузки
                </a>
            </li>

        </ul>
    </div>
</nav>