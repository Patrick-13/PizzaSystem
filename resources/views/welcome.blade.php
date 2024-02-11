@extends('layouts.app')


@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @endauth
    </div>
@endif
    <div class="content">
        <img src="/sample.png" alt="pizza house logo">
        <div class="title m-b-md">
            Bersabe & Nobleza's Pizza House
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="{{ route('pizzas.create')}}">Order a Pizza</a>
    </div>
</div>
@endsection
