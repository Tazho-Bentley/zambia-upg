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

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <form>
                <div id="page-inner">
                    <form>
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Account</h2>
                                    <h5>Change your basic account and language settings. </h5>
                                 </div>
                            </div>

                            <div>
                                <form>
                                    Username <input type="text" name="username"> <br>
                                    Email <input type="text" name="email"><br>
                                    <br><br>
                                </form>
                            </div>
                        </div>
                    </form>


                    <form>
                        <div>
                             <div class="row">
                                <div class="col-md-12">
                                    <h2>Password</h2>
                                    <h5>Change your password or recover your current one. </h5>
                                </div>
                             </div>

                             <div>
                                <form>
                                    Current password <input type="text" name="current"> <br>
                                    New password <input type="text" name="new"> <br>
                                    Verify password <input type="text" name="verify"> <br>
                                    <br><br>
                                </form>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Email Nofications </h2>
                                    <h5>Control when and how often UPGZambia sends emails to you. </h5>
                                </div>
                            </div>

                            <div>
                                <form action="demo_form.asp" method="get">
                                    <input type="checkbox" name="payment" value="method"> MTN Mobile Money<br>
                                    <input type="checkbox" name="payment" value="method"> Airtel Money<br>
                                    <input type="checkbox" name="payment" value="method"> XAPIT(ZANACO)<br>
                                    <input type="checkbox" name="payment" value="method"> Debit / Credit Card<br>
                                    <input type="checkbox" name="payment" value="method" checked="checked"> ZOONA<br>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>

                <input type="submit" value="Save">

            </form>
        </div>
    </div>


    @endsection