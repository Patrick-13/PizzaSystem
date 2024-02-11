@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Type:</label>
        <select  id="type" name="type">
            <option value="margarita">margarita</option>
            <option value="hawaiian">hawaiian</option>
            <option value="veg supreme">veg supreme</option>
            <option value="volcano">volcano</option>
        </select>
        <label for="type">Choose base type:</label>
        <select  id="base" name="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin & crispy">thin & crispy</option>
            <option value="Thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label> <br/>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br/>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br/>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br/>
        </fieldset>
        <input class="bg-green-600 px-5 text-white border-0 mt-5" type="submit" value="Order Pizza">
    </form>
</div>
@endsection
