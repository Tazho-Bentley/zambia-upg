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
                    <div class="col-md-12">
                        <h2>Company Information</h2>
                        <h5>Change your company details here. </h5>
                    </div>
                </div><hr/>
                <div class="row panel">
                    <div class="col-lg-6 panel-body">
                        <div>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="name">Company Name</label>
                                    <div class="col-sm-7">
                                        <input type="name" class="form-control" id="name" placeholder="Enter company name">
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="number">Telephone Number</label>
                                    <div class="col-sm-7">
                                        <input type="contact" class="form-control" id="contact" placeholder="Enter company contact number">
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="address">Company Address</label>
                                    <div class="col-sm-7">
                                        <input type="address" class="form-control" id="address" placeholder="Enter company address">
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div><hr/>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 panel-body">
                        <label>Company Name</label><br>
                        <label>Company Email</label><br>
                        <label>Company Telephone</label><br>
                        <label>Company Address</label><br>
                        <label>Name</label><br>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-12">
                        <h2>Payment Methods</h2>
                        <h5>Select pay methods your business uses</h5>
                    </div>
                </div><hr/>

                <div>
                    <form action="demo_form.asp" method="get">
                        <input type="checkbox" name="payment" value="method"> MTN Mobile Money<br><br>
                        <input type="checkbox" name="payment" value="method"> Airtel Money<br><br>
                        <input type="checkbox" name="payment" value="method"> XAPIT(ZANACO)<br><br>
                        <input type="checkbox" name="payment" value="method"> Debit / Credit Card<br><br>
                        <input type="checkbox" name="payment" value="method" checked="checked"> ZOONA<br><br>
                        <input type="submit" value="Add">
                        <input type="submit" value="Remove">
                    </form>
                </div><hr/>

                <div class="row">
                    <div class="col-md-12">
                        <h2>Deactivate Account</h2>
                        <form action="demo_form.asp" method="get">
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


@endsection
