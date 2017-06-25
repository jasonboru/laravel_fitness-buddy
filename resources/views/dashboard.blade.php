@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome, {{ Auth::user()->name }}! </div>

                <div class="panel-body">
                  <a href="/meals/create" class="btn btn-primary">Create Meal</a>
                  <h3>Your Meals</h3>
                  @if(count($meals) > 0)
                    <table class="table table-striped">
                      <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                      </tr>
                      @foreach($meals as $meal)
                        <tr>
                          <td><a href="/meals/{{$meal->id}}">{{$meal->name}}</a></td>
                          <td><a href="/meals/{{$meal->id}}/edit" class="btn btn-default">Edit</a></td>
                        </tr>
                      @endforeach
                    </table>
                  @else
                    <p>You have no meals</p>
                  @endif

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
