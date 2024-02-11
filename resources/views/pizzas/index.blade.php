@extends('layouts.app')
@section('content')
        <div class="wrapper pizza-index">
        <h1>Pizza Order</h1>
                    @foreach($pizzas as $pizza)
                    <div class="pizza-item">
                        <img src="/sample.png" alt="pizzaorder">
                       <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a></h4>
                    </div>
                    @endforeach
                </div>
            </div>

@endsection
