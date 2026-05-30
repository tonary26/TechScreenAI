<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    @vite(['resources/css/main.css'])
    @yield('styles')
</head>
<body>
<aside>
    <div>
        <div class="logo">TechScreen<span>AI</span></div>
        <ul class="nav-links">
            <li><a href="#" class="active">Главная</a></li>
            <li><a href="#">История</a></li>
            @guest()
                <li><a href="{{ route('auth.login.show') }}">Авторизация</a></li>
            @endguest

            @auth
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <li><button class="active-btn" type="submit">Выйти</button></li>
                </form>
            @endauth
        </ul>
    </div>

    <div class="user-profile">
        <strong>Алексей Н.</strong>
        <span>Frontend Dev</span>
    </div>
</aside>
@yield('content')
</body>
</html>