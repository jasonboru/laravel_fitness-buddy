@extends('layouts.app')

@section('content')

<div class="container">
  <h2>All Meals</h2>

  @if (!$meals->isEmpty())

    <ul class="list-group">
      @foreach ($meals as $meal)
        <li class="list-group-item">
          <a href="/meals/{{$meal->id}}"> {{ $meal->name }} </a>
        </li>
      @endforeach
    </ul>

  @else
    <h5> You have no meals <a href="/meals/create">Create one now!!!</a></h5>

  @endif
</div>

@stop
