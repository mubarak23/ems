@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Create Employee
    </div>

    <div class="card-body">
        <form action="{{ route("employee.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="employee_id" value="{{ $id }}">
            <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                <label for="name">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
                @if($errors->has('title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </em>
                @endif
                
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="name">Description</label>
                <textarea type="text" id="description" name="description" class="form-control"
                 value="{{ old('description') }}" required>
                 </textarea>
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif
                
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="Create Task">
            </div>
        </form>


    </div>
</div>
@endsection