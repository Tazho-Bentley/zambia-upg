@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="wrapper"></div>
            </div>
        </div>

        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center"></li>
                    <li>
                        <a class="active-menu"  href="home"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="paymethods"><i class="fa fa-desktop fa-3x"></i> Merchant Information </a>
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
            <form>
                <div id="page-inner">
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
                        </form>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                        <form >
                            <input type="submit" value="Add">
                            <input type="submit" value="Remove">
                        </form>
                    </div><hr/><hr/><hr/>

                    <div>
                        <form>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Company Information</h2>
                                        <h5>Change your company details here. </h5>
                                    </div>
                                </div><hr/>
                            </div>

                            <div>
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                            <label class="control-label col-sm-3" for="name">Company Name</label>
                                        <div class="col-sm-7">
                                            <input type="name" class="form-control" id="name" placeholder="Enter company name">
                                        </div><br><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" id="email">Company Email</label>
                                            <div class="col-sm-7">
                                        <input type="email" class="form-control" id="email" placeholder="Enter company email">
                                            </div>
                                    </div><br><br><br>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="number">Telephone Number</label>
                                            <div class="col-sm-7">
                                                <input type="contact" class="form-control" id="contact" placeholder="Enter company contact number">
                                            </div>
                                    </div><br><br>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="address">Company Address</label>
                                            <div class="col-sm-7">
                                        <input type="address" class="form-control" id="address" placeholder="Enter company address">
                                            </div>
                                    </div><br><br><br>


                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </div><br><br><br><br><hr/>

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
                                    </form>
                                </div>
                            </form><hr/>
                            </div>
                    </div>
                    </form>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
