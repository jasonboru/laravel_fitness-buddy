@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Meals</div>

                <div class="panel-body">

                    <form action="/addmeal/{{ $meal->id }}/foods" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="food_name" class="col-sm-3 control-label">Food Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="food-name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="protein" class="col-sm-3 control-label">protein Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="protein" id="protein" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Carbohydrates" class="col-sm-3 control-label">Carbohydrates</label>

                            <div class="col-sm-6">
                                <input type="text" name="carbohydrates" id="carbohydrates" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fat" class="col-sm-3 control-label">Fat</label>

                            <div class="col-sm-6">
                                <input type="text" name="fat" id="fat" class="form-control">
                            </div>
                        </div>


                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i> Add Food
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
