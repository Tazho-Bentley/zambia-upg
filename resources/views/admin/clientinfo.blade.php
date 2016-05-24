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
                            <th>Client</th>
                            <th>Status</th>
                            <th style="width: 20%">#Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a>Double Helix Ltd.</a>
                                    <br />
                                    <small>Created 07.03.2016</small>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li>
                                            <img src="img/user.png" class="avatar" alt="Avatar">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-error btn-xs">Suspended</button>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Suspend </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>
                                    <a>NAM-CODE Security & Travel Agency</a>
                                    <br />
                                    <small>Created 01.01.2015</small>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li>
                                            <img src="img/user7.png" class="avatar" alt="Avatar">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs">Active</button>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Suspend </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
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
