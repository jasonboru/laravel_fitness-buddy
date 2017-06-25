@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 style="color:#777" >Add Foods To:</h3>
                    <hr>
                    <h2>{{$meal->name}}</h2>
                    <small>{{$meal->created_at}}</small>
                  </div>

                  <div class="panel-body">

                      <form action="/addmeal/{{ $meal->id }}/foods" method="POST" class="form-horizontal">
                          {{ csrf_field() }}

                          <!-- Task Name -->
                          <div class="form-group">
                              <label for="food_name" class="col-sm-3 control-label">Food Name</label>

                              <div class="col-sm-6">
                                  <input type="text" name="food_name" id="Food-name" class="form-control" placeholder="Food Name">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="protein" class="col-sm-3 control-label">Protein</label>

                              <div class="col-sm-6">
                                  <input type="text" name="protein" id="protein" class="form-control" placeholder="Protein/g">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="Carbohydrates" class="col-sm-3 control-label">Carbohydrates</label>

                              <div class="col-sm-6">
                                  <input type="text" name="Carbohydrates" id="Carbohydrates" class="form-control" placeholder="Carbohydrates/g">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="fat" class="col-sm-3 control-label">Fat</label>

                              <div class="col-sm-6">
                                  <input type="text" name="fat" id="fat" class="form-control" placeholder="Fat/g">
                              </div>
                          </div>


                          <!-- Add Task Button -->
                          <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-6">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
