@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            {{ trans('messages.new_task') }}
        </div>
        <div class="panel-body">
            @include('common.errors')
            {!! Form::open(['action' => 'TaskController@store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                {!! Form::token() !!}
                <div class="form-group">
                    {!! Form::label('email', trans('messages.task'), ['class' => 'col-sm-3 control-label']); !!}  
                    <div class="col-sm-6">
                        {{ Form::text('name', '', array_merge(['class' => 'form-control'])) }}
                    </div> 
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        {!! Form::submit(trans('messages.add_task'), ['class' => 'btn btn-default']); !!}  
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    @if (count($tasks))
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ trans('messages.current_tasks') }}
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>{{ trans('messages.task') }}</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>
                            <td>
                                {!! Form::open(['url' => "tasks/" . $task->id , 'method' => 'DELETE']) !!}
                                    {!! Form::token() !!}
                                    {!! Form::submit(trans('messages.delete'), ['class' => 'btn btn-danger']); !!} 
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
