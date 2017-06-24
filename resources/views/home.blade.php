@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome, {{ Auth::user()->name }}! </div>

                @if (!$meals->isEmpty())

                <ul class="list-group">
                  @foreach ($meals as $meal)
                    <li class="list-group-item">
                      {{ $meal->name }}
                    </li>
                  @endforeach
                </ul>

                @else

                <div class="panel-body">
                    Looks like you haven't eaten anything today. <a href="/meals/create">You should change that.</a>
                </div>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection
