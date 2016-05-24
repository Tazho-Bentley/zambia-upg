@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-3">
            @include('includes.administrator')
        </div>
        <div class="col-md-9">
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
@endsection