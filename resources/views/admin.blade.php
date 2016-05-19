@extends('layouts.app')

@section('content')
    @extends('layouts.app')

@section('content')
    <div class="container">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">

                    </li>


                    <li>
                        <a class="active-menu"  href="home"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="paymethods"><i class="fa fa-desktop fa-3x"></i> Payment Methods </a>
                    </li>

                    <li  >
                        <a  href="ontransactions"><i class="fa fa-table fa-3x"></i> Ongoing Transactions</a>
                    </li>

                    <li  >
                        <a  href="pasttransactions"><i class="fa fa-table fa-3x"></i> Prevoius Transactions</a>
                    </li>
                    <li  >
                        <a  href="account"><i class="fa fa-edit fa-3x"></i> My Account </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Admin</h2>
                        <h5>Welcome Admin to your home page.</h5>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped projects">
            <thead>
            <tr>
                <th style="width: 1%"></th>
                <th style="width: 20%">Company</th>
                <th>Client</th>
                <th>Choose with Kuma</th>
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
                            <img src="assets/img/user.png" class="avatar" alt="Avatar">
                        </li>
                    </ul>
                </td>
                <td class="project_progress">
                    <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
                    </div>
                    <small>57% Complete</small>
                </td>
                <td>
                    <button type="button" class="btn btn-success btn-xs">Success</button>
                </td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
                            <img src="assets/img/user7.png" class="avatar" alt="Avatar">
                        </li>
                    </ul>
                </td>
                <td class="project_progress">
                    <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="47"></div>
                    </div>
                    <small>47% Complete</small>
                </td>
                <td>
                    <button type="button" class="btn btn-success btn-xs">Success</button>
                </td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>#</td>
                <td>
                    <a>Botha International</a>
                    <br />
                    <small>Created 01.01.2015</small>
                </td>
                <td>
                    <ul class="list-inline">
                        <li>
                            <img src="assets/img/user2.png" class="avatar" alt="Avatar">
                        </li>
                    </ul>
                </td>
                <td class="project_progress">
                    <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="77"></div>
                    </div>
                    <small>77% Complete</small>
                </td>
                <td>
                    <button type="button" class="btn btn-success btn-xs">Success</button>
                </td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>#</td>
                <td>
                    <a>Clientele Amigo</a>
                    <br />
                    <small>Created 01.01.2015</small>
                </td>
                <td>
                    <ul class="list-inline">
                        <li>
                            <img src="assets/img/user3.png" class="avatar" alt="Avatar">
                        </li>
                    </ul>
                </td>
                <td class="project_progress">
                    <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                    </div>
                    <small>60% Complete</small>
                </td>
                <td>
                    <button type="button" class="btn btn-success btn-xs">Success</button>
                </td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>#</td>
                <td>
                    <a>The Royal Guard Hotels</a>
                    <br />
                    <small>Created 01.01.2015</small>
                </td>
                <td>
                    <ul class="list-inline">
                        <li>
                            <img src="assets/img/user4.png" class="avatar" alt="Avatar">
                        </li>
                    </ul>
                </td>
                <td class="project_progress">
                    <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="12"></div>
                    </div>
                    <small>12% Complete</small>
                </td>
                <td>
                    <button type="button" class="btn btn-success btn-xs">Success</button>
                </td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>#</td>
                <td>
                    <a>Lamper Airlines</a>
                    <br />
                    <small>Created 01.01.2015</small>
                </td>
                <td>
                    <ul class="list-inline">
                        <li>
                            <img src="assets/img/user6.png" class="avatar" alt="Avatar">
                        </li>
                    </ul>
                </td>
                <td class="project_progress">
                    <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="35"></div>
                    </div>
                    <small>35% Complete</small>
                </td>
                <td>
                    <button type="button" class="btn btn-success btn-xs">Success</button>
                </td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>#</td>
                <td>
                    <a>The Emmanuel Medical Center</a>
                    <br />
                    <small>Created 01.01.2015</small>
                </td>
                <td>
                    <ul class="list-inline">
                        <li>
                            <img src="assets/img/user5.png" class="avatar" alt="Avatar">
                        </li>
                    </ul>
                </td>
                <td class="project_progress">
                    <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="87"></div>
                    </div>
                    <small>87% Complete</small>
                </td>
                <td>
                    <button type="button" class="btn btn-success btn-xs">Success</button>
                </td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>#</td>
                <td>
                    <a>UTTAMA Glass Factory</a>
                    <br />
                    <small>Created 01.01.2015</small>
                </td>
                <td>
                    <ul class="list-inline">
                        <li>
                            <img src="assets/img/user7.png" class="avatar" alt="Avatar">
                        </li>
                    </ul>
                </td>
                <td class="project_progress">
                    <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="77"></div>
                    </div>
                    <small>77% Complete</small>
                </td>
                <td>
                    <button type="button" class="btn btn-success btn-xs">Success</button>
                </td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>#</td>
                <td>
                    <a>Prospect Park Boulevards</a>
                    <br />
                    <small>Created 01.01.2015</small>
                </td>
                <td>
                    <ul class="list-inline">
                        <li>
                            <img src="assets/img/user8.png" class="avatar" alt="Avatar">
                        </li>
                    </ul>
                </td>
                <td class="project_progress">
                    <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="77"></div>
                    </div>
                    <small>77% Complete</small>
                </td>
                <td>
                    <button type="button" class="btn btn-success btn-xs">Success</button>
                </td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                </td>
            </tr>
            </tbody>
        </table>
        <!-- end project list -->

    </div>


@endsection