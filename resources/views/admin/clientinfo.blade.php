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
                            <th>Company</th>
                            <th>Physical Address</th>
                            <th>Phone Number</th>
                            <th>User Identification</th>
                            <th>View</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($info as $data)
                            <tr class="gradeA">
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->c_name }}</td>
                                <td>{{ $data->c_address }}</td>
                                <td>{{ $data->c_telephone }}</td>
                                <td>{{ $data->userID }}</td>
                                <td><a href="#" class="btn btn-info">View</a></td>\
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
