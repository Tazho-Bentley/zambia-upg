@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="wrapper"></div>
            </div>
        </div>

        </nav>

        @include('includes.client')

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Company Information</h2>
                                <h5>Change your company details here. </h5>
                            </div>
                        </div><hr/>
                        <div class="row panel">
                            <div class="col-lg-12 panel-body">
                                <h4><span class="label label-success">Company Name:</span> {{$c_name}}</h4>
                                <h4><span class="label label-success">Company Email:</span> {{$email}}</h4>
                                <h4><span class="label label-success">Company Telephone:</span> {{$c_telephone}}</h4>
                                <h4><span class="label label-success">Company Address:</span> {{$c_address}}</h4>
                            </div>
                            <button type="button" class="btn btn-default btn-primary btn-sm" data-toggle="modal" data-target="#companyinfo">
                                Edit
                            </button>
                        </div>
                    </div>
                </div>
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Payment Methods</h2>
                            <h5>Select pay methods your business uses</h5>
                            @if(empty($payment_opt))
                                <h5>No payment options registered</h5>
                            @else
                                <ul>
                                    @foreach($payment_opt as $opt)
                                        {!! $opt !!}<br>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div><hr/>
                            <div class="row panel">
                                <div class="panel-body col-lg-12">
                                    <button type="button" class="btn btn-default btn-primary btn-sm" data-toggle="modal" data-target="#paymentinfo">Add/Remove</button>
                                </div>
                            </div>
                        </div><hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Deactivate Account</h2>
                        <form action="#" method="get">
                            <input type="checkbox" name="payment" value="method"> Are you sure you want to deactivate your account<br><br>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Deactivate</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- My Modals for this page!-->
    <!-- This is what happens when you dont read comments. chita and shemiah 2016 -->
    <div class="modal fade" id="paymentinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Payment Methods</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" action="{{url('/payment')}}">
                        <fieldset class="form-group">
                            @foreach($payment_opt_all as $opt)
                                {!! $opt !!}<br><br>
                            @endforeach
                        </fieldset>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <input type="hidden" value="{{\Illuminate\Support\Facades\Session::token()}}" name="_token">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="companyinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Company Information</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" action="{{url('/company-info-save')}}">
                        <fieldset class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Name</span>
                                <input type="text" required id="company_name" name="company_name" class="form-control" placeholder="{{$c_name}}" aria-describedby="sizing-addon1">
                            </div><hr/>
                            <div class="input-group">
                                <span class="input-group-addon">Address</span>
                                <input type="text" required name="company_address" class="form-control" id="company_address" placeholder="{{$c_address}}" aria-describedby="sizing-addon1">
                            </div><hr/>
                            <div class="input-group">
                                <span class="input-group-addon">Phone Number</span>
                                <input type="text" required name="company_telephone" class="form-control" id="company_telephone" placeholder="{{$c_telephone}}" aria-describedby="sizing-addon1">
                            </div>
                        </fieldset>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <input type="hidden" value="{{\Illuminate\Support\Facades\Session::token()}}" name="_token">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
