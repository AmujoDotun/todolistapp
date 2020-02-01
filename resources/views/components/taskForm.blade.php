
{{ Form::open(['route' => 'task.store', 'method' => 'POST']) }}

    {{ Form::label('name', 'Task Name', ['class' => 'form-lable']) }}
    {{ Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Task Name']) }}

    {{ Form::label('description', 'Task Description', ['class' => 'form-lable mt-3']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Task Description']) }}

    {{ Form::label('date', 'Due Date', ['class' => 'form-lable mt-3']) }}
    {{ Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control']) }}

    <div class="row justify-content-center">
        <div class="col-sm-6">
            <buttom class="btn btn-block btn-success" type="submit">
                Create Task
            </buttom>
        </div>
    </div>


{{ Form::close() }}