@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="">
                Admin
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        List of Compaines
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('Id') }}
                        </th>
                        <th>
                            {{ trans('Name') }}
                        </th>
                        <th>
                            {{ trans('Email') }}
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                        <tr>
                            
                            <td>
                                {{ $company->id ?? '' }}
                            </td>
                            <td>
                                {{ $company->name ?? '' }}
                            </td>
                            <td>
                                {{ $company->email ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('company.employees', $company->id) }}">
                                    Show Employees
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('company.edit', $company->id) }}">
                                    Edit
                                </a>

    

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
