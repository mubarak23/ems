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
                            <button type="button" class="btn btn-primary" 
                            data-toggle="modal" data-target="#exampleModal">
                             Launch demo modal
                            </button>
                                
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
