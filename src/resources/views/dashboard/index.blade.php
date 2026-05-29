@extends('layouts.main')

@section('title')
    <title>TechScreenAI — Dashboard</title>
@endsection

@section('styles')
    @vite(['resources/css/dashboard/index.css'])
@endsection

@section('content')
    <main>
        <header>
            <div>
                <h1>Дашборд</h1>
            </div>
            <button class="btn-primary">Новый скрининг</button>
        </header>
        <div class="dashboard-grid">
            <div class="card stat-card">
                <span class="label">Пройдено сессий</span>
                <span class="value">12</span>
            </div>
            <div class="card stat-card">
                <span class="label">Средний результат</span>
                <span class="value">78%</span>
            </div>
        </div>
        <div class="dashboard-grid">
            <div class="card main-controls">
                <h2>Доступные симуляции</h2>
                <div class="interview-type-list">

                    <div class="type-item">
                        <div class="type-info">
                            <h4>JavaScript & React</h4>
                            <p>Core JS, Hooks, Async. 30 минут.</p>
                        </div>
                        <button class="btn-secondary">Запустить</button>
                    </div>

                    <div class="type-item">
                        <div class="type-info">
                            <h4>System Design</h4>
                            <p>Архитектура, масштабирование, API. 45 минут.</p>
                        </div>
                        <button class="btn-secondary">Запустить</button>
                    </div>

                    <div class="type-item">
                        <div class="type-info">
                            <h4>Behavioral (STAR)</h4>
                            <p>Оценка софт-скиллов и опыта. 20 минут.</p>
                        </div>
                        <button class="btn-secondary">Запустить</button>
                    </div>

                </div>
            </div>
            <div class="card recent-activity">
                <h2>История сессий</h2>
                <div class="activity-list">
                    <div class="activity-item">
                        <div>
                            <strong>Node.js Backend</strong>
                            <p>Вчера</p>
                        </div>
                        <span class="score">82%</span>
                    </div>

                    <div class="activity-item">
                        <div>
                            <strong>React & TS</strong>
                            <p>3 дня назад</p>
                        </div>
                        <span class="score">75%</span>
                    </div>

                    <div class="activity-item">
                        <div>
                            <strong>Algorithms</strong>
                            <p>5 дней назад</p>
                        </div>
                        <span class="score">61%</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection