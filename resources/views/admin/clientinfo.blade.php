@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-3">
            @include('includes.administrator')
        </div>
        <div class="col-md-9">
            <div>
                <div id="page-inner">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%"></th>
                            <th style="width: 20%">Company</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th style="width: 20%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($infor as $info)
                            <tr>
                                <td>1</td>
                                <td>
                                    <a>{{ $info->c_name}}</a>
                                    <br />
                                </td>
                                <td>{{ $info->c_address}}</td>
                                <td>{{ $info->c_telephone}}</td>
                                <td>{{ $client_name}}</td>
                                <td>
                                    <button type="button" class="btn btn-error btn-xs">Suspended</button>
                                </td>
                                <td>
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View</a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Suspend</a>
                                        </div>
                                    </div>
                                </td>
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
