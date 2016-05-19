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
                        <a  href="pretransactions.html"><i class="fa fa-table fa-3x"></i> Prevoius Transactions</a>
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
                </div>

                <form action="demo_form.asp" method="get">
                    <input type="checkbox" name="payment" value="method"> MTN Mobile Money<br>
                    <input type="checkbox" name="payment" value="method"> Airtel Money<br>
                    <input type="checkbox" name="payment" value="method"> XAPIT(ZANACO)<br>
                    <input type="checkbox" name="payment" value="method"> Debit / Credit Card<br>
                    <input type="checkbox" name="payment" value="method" checked="checked"> ZOONA<br>
                </form>
            </div>
            <input type="submit" value="Add">
            <input type="submit" value="Remove">
            </form>
        </div>



        <!-- /. PAGE WRAPPER  -->
    </div>


@endsection
