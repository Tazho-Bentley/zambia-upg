@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div id="wrapper"></div>
        </div>
    </div>

    </nav>
    <!-- /. NAV TOP  -->
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
                    <h2>Dashboard</h2>
                    <h5>Welcome back to your home page.</h5>

                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">Messages</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">Notifications</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">Transactions</p>

                        </div>
                    </div>

                <div class="panel-body">

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 ">
                    <div class="panel ">
                        <div class="main-temp-back">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6"> <i class="fa fa-cloud fa-3x"></i> Lusaka City </div>
                                    <div class="col-xs-6">
                                        <div class="text-temp"> 29° </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-desktop"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">Display</p>
                            <p class="text-muted">Looking Good</p>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /. ROW  -->
            <div class="row">


                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Performance Chart
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <i class="fa fa-bar-chart-o fa-5x"></i>
                            <h3>120 GB </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                            Disk Space Available

                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            <i class="fa fa-edit fa-5x"></i>
                            <h3>20,000 </h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            Articles Pending

                        </div>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">

                    <div class="chat-panel panel panel-default chat-boder chat-panel-head" >
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Chat with Admin
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i>Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i>Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i>Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i>Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i>Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <ul class="chat-box">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="img/1.png" alt="User" class="img-circle" />
                                    </span>
                                    <div class="chat-body">
                                        <strong >Client</strong>
                                        <small class="pull-right text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                                        </small>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">

                                        <img src="img/2.png" alt="User" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">

                                        <small class=" text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i>13 mins ago</small>
                                        <strong class="pull-right">Admin</strong>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                         <img src="img/1.png" alt="User" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">

                                        <strong >Client</strong>
                                        <small class="pull-right text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i>14 mins ago</small>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message to send..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Payment Methods
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>

        </div>
@endsection
