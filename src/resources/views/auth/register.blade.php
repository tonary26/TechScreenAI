@extends('layouts.input')

@section('title')
    <title>TechScreenAI — Регистрация</title>
@endsection

@section('styles')
    @vite(['resources/css/auth/form.css'])
@endsection

@section('form')
    <div class="auth-container">
        <div class="logo">TechScreen<span>.AI</span></div>
        <h2>Создать аккаунт</h2>
        <p class="subtitle">Начните тренировать технические навыки с ИИ</p>

        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" placeholder="Алексей" required autocomplete="name">
            </div>

            <div class="form-group">
                <label for="email">Электронная почта</label>
                <input type="email" id="email" name="email" placeholder="name@domain.com" required autocomplete="email">
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required autocomplete="new-password">
            </div>

            <button type="submit" class="btn-submit">Зарегистрироваться</button>
        </form>

        <div class="auth-footer">
            Уже есть аккаунт?<a href="{{ route('auth.login.show') }}">Войти</a>
        </div>
    </div>
@endsection
