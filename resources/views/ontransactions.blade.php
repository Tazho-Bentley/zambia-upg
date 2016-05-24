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
                        <h2>Ongoing Transactions</h2>
                        <h5>View your ongoing transactions.</h5>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Payment Option</th>
                                            <th>Amount (K)</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="gradeA">
                                            <td>10001</td>
                                            <td>VISA</td>
                                            <td>347</td>
                                            <td class="center">April, 2016</td>
                                            <td class="center">Delivered</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10002</td>
                                            <td>MTN Money</td>
                                            <td>200</td>
                                            <td class="center">April, 2016</td>
                                            <td class="center">Processing</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10003</td>
                                            <td>Airtel Money</td>
                                            <td>700</td>
                                            <td class="center">April, 2016</td>
                                            <td class="center">Processing</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10004</td>
                                            <td>Airtel Money</td>
                                            <td>750</td>
                                            <td class="center">April, 2016</td>
                                            <td class="center">Error</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10005</td>
                                            <td>Xapit</td>
                                            <td>400</td>
                                            <td class="center">April, 2016</td>
                                            <td class="center">Delivered</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10006</td>
                                            <td>VISA</td>
                                            <td>500</td>
                                            <td class="center">May, 2016</td>
                                            <td class="center">Delivered</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10007</td>
                                            <td>Airtel Money</td>
                                            <td>700</td>
                                            <td class="center">May, 2016</td>
                                            <td class="center">Processing</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10008</td>
                                            <td>MTN Money</td>
                                            <td>200</td>
                                            <td class="center">May, 2016</td>
                                            <td class="center">Processing</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10009</td>
                                            <td>VISA</td>
                                            <td>250</td>
                                            <td class="center">May, 2016</td>
                                            <td class="center">Processing</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10010</td>
                                            <td>Airtel</td>
                                            <td>550</td>
                                            <td class="center">May, 2016</td>
                                            <td class="center">Processing</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
