<!-- resources/views/tasks/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <!-- Form create new task -->
            <div class="col-md-8">
                <form action="{{ url('tasks') }}" method="POST" class="form-horizontal">@csrf
                        <div class="card">
                            <div class="card-header">@lang('app.new_task')</div>
                            <div class="card-body">
                                <!-- Task name -->
                                <div class="form-group">
                                    <label for="task-name" class="col-sm-3 control-label">Task</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="name" id="task-name" class="form-control">
                                    </div>
                                </div>
                                <!-- Add task button -->
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-primary">@lang('app.add_task')</button>
                                    </div>
                                </div>  
                            </div>
                        </div>
                </form>
            </div>
            <div class="col-md-8">
                <!-- Display Validation Errors -->
                @include('commo.error')
            </div>
    </div>
    <!-- Current Tasks -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('app.current_task')</div>

                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
