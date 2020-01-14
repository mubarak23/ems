@extends('layouts.admin')
@section('content')
@can('users_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="">
                Admin
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        <a href="{{ route('employees.create', $company_id)}}" class="btn btn-primary">Create Employee</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        
                        <th>
                            Id
                        </th>
                        <th>
                            First Name
                        </th>
                        <th>
                            Last Name
                        </th>
                        <th>
                           Email
                        </th>
                        <th>
                            Phone Number
                        </th>
                        <th>
                        Action 
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as  $employee)
                        <tr>
                            
                            <td>
                                {{ $employee->id ?? '' }}
                            </td>
                            <td>
                                {{ $employee->first_name ?? '' }}
                            </td>
                            <td>
                                {{ $employee->last_name ?? '' }}
                            </td>
                            <td>
                                {{ $employee->email ?? '' }}
                            </td>
                            <td>
                                {{ $employee->phone_number ?? '' }}
                            </td>
                            
                            <td>
                            
                                
                                <a class="btn btn-xs btn-info" href="">
                                    Assign Task
                                </a>

                                <form action="" method="POST" action={{ route('employee.delete')}} onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>


@endsection
