@extends('layouts.input')

@section('title')
    <title>TechScreenAI — Авторизация</title>
@endsection

@section('styles')
    @vite(['resources/css/auth/form.css'])
@endsection

@section('form')
    <div class="auth-container">
        <div class="logo">TechScreen<span>.AI</span></div>
        <h2>Авторизация</h2>
        <p class="subtitle">Начните тренировать технические навыки с ИИ</p>

        <form action="#" method="POST">
            <div class="form-group">
                <label for="email">Электронная почта</label>
                <input type="email" id="email" name="email" placeholder="name@domain.com" required autocomplete="email">
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required autocomplete="new-password">
            </div>

            <button type="submit" class="btn-submit">Авторизоваться</button>
        </form>

        <div class="auth-footer">
            Еще нет аккаунта?<a href="{{ route('auth.register.show') }}">Создайте.</a>
        </div>
    </div>
@endsection
