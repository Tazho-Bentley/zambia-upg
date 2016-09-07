@extends('layouts.app')

@section('content')
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
    <script type="text/javascript">
        window.onload = function () {
            test = 23;
            test1 = 26;
            var chart = new CanvasJS.Chart("chartContainer",
                    {
                        title:{
                            text: "Transactions Per Payment Method"
                        },

                        data: [
                            {
                                type: "bar",

                                dataPoints: [
                                    { x: 10, y: {{$airtel_count}}, label:"Airtel" },
                                    { x: 20, y: {{$mtn_count}}, label:"MTN" },
                                    { x: 30, y: 0, label:"Xapit" },
                                    { x: 40, y: 0, label:"Card Services" },
                                    { x: 50, y: 0, label:"Zoona" }
                                ]
                            }
                        ]
                    });

            chart.render();
        }
    </script>
    <script src="js/canvasjs.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <div class="container">
        <div class="col-md-3">
            @include('includes.administrator')
        </div>
        <div class="col-md-9">
            <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Client Demographics
                            </div>
                            <div class="panel-body">
                                <div class="panel-body row">
                                    <div class="col-lg-6">
                                        <div class="panel-heading">
                                            Total Transactions(#)
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="counter">{{$transactions}}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel-heading">
                                            Total Transaction Value
                                        </div>
                                        <div class="col-lg-12">
                                            <span>ZMK </span><span class="counter">{{$total}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body row">
                                    <div class="col-lg-6">
                                        <div class="panel-heading">
                                            Total Users
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="counter">{{$user_count}}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel-heading">
                                            Active Users
                                        </div>
                                        <div class="col-lg-12">
                                            <span>ZMK </span><span class="counter">{{$total}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Performance Chart
                            </div>
                            <div class="panel-body">
                                <div id="chartContainer" style="height: 400px; width: 100%;">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
    </div>

@endsection