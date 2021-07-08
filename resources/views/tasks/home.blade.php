@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('New Task') }}</div>
                    <div class="card-body">
                        <form action="{{ route ('home.store') }}" method="POST">
                            @csrf
                            <!-- Task Name -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Task&nbsp;<span
                                        style="color: red">*</span></label>

                                <div class="col-sm-6">
                                    <input type="text" name="name" placeholder="Enter task" class="form-control">
                                </div>
                            </div>
                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Add Task
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- list --}}
                    @if (count($tasks)>0)
                        
                    @endif
                    <div style="margin-top: 5%;" class="card">
                        <div class="card-header">
                            Current Tasks
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <p style="font-weight: bold">Task</p>
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $task->name }}</td>
                                        <td>
                                            <form action="{{ route('home.destroy', ['home' => $task->id]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
