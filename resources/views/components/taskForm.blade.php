
{{ Form::label('name', 'Task Name', ['class' => 'form-lable']) }}
{{ Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Task Name']) }}

{{ Form::label('description', 'Task Description', ['class' => 'form-lable mt-3']) }}
{{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Task Description']) }}

{{ Form::label('due_date', 'Due Date', ['class' => 'form-lable mt-3']) }}
{{ Form::date('due_date', \Carbon\Carbon::now(), ['class' => 'form-control']) }}

<div class="row justify-content-center">
    <div class="col-sm-4">
        <a href="{{ route('task.index')}}" class="btn btn-block btn-secondary">Go Back</a>
    </div>
    <div class="col-sm-4">
        <button class="btn btn-block btn-success" type="submit">
            Create Task
        </button>
    </div>
</div>


