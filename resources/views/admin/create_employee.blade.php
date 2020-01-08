@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Create Company
    </div>

    <div class="card-body">
        <form action="{{ route("employee.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="company_id" value="{{ $id }}">
            <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                <label for="name">Firrst Name</label>
                <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name') }}" required>
                @if($errors->has('first_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('first_name') }}
                    </em>
                @endif
                
            </div>
            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                <label for="name">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}" required>
                @if($errors->has('last_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('last_name') }}
                    </em>
                @endif
                
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
               
            </div>
           
            <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                <label for="website">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{ old('phone_number') }}" required>
                @if($errors->has('phone_number'))
                    <em class="invalid-feedback">
                        {{ $errors->first('phone_number') }}
                    </em>
                @endif
               
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="Create Employee">
            </div>
        </form>


    </div>
</div>
@endsection