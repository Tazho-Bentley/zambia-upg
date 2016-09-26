@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-3">
            @include('includes.administrator')
        </div>
        <div class="col-md-9">
            <div>
                <div id="page-inner">
                    <table class="table table-bordered" id="table_id">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Role</th>
                            <th>Suspend/Activate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($info as $data)
                            <tr class="gradeA">
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->role }}</td>
                                <td><a href="#" class="btn btn-info">Suspend/Activate</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search"></div>
                    </div>
                </div>
            </div>
            <!-- end project list -->
        </div>
    </div>
@endsection
