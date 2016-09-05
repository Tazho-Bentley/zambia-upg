@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.client')

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <form>
                <div id="page-inner">
                    <form>
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Account</h2>
                                    <h5>Change your basic account settings. </h5>
                                 </div>
                            </div><hr/>

                            <div>
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="control-label col-sm-3" for="name">Client Name</div>
                                        <div class="col-sm-7">
                                            <input type="name" class="form-control" id="name" placeholder="New username">
                                        </div><br><br>
                                    </div>

                                    <div class="form-group">
                                        <div class="control-label col-sm-3" id="email">Client Email</div>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" id="email" placeholder="Change email">
                                        </div>
                                    </div><br><br><br>


                                </form>
                            </div>
                        </div>
                    </form><hr/>


                    <form>
                        <div>
                             <div class="row">
                                <div class="col-md-12">
                                    <h2>Password</h2>
                                    <h5>Change your password or recover your current one. </h5><hr/>
                                </div>
                             </div>

                             <div>
                                 <form class="form-horizontal" role="form">
                                     <div class="form-group">
                                         <div class="control-label col-sm-3" for="password">Current password</div>
                                         <div class="col-sm-7">
                                             <input type="password" class="form-control" id="name" placeholder="Enter current password">
                                         </div><br><br>
                                     </div>

                                     <div class="form-group">
                                         <div class="control-label col-sm-3" id="password">New Password</div>
                                         <div class="col-sm-7">
                                             <input type="email" class="form-control" id="password" placeholder="Enter new password">
                                         </div>
                                     </div><br><br><br>

                                     <div class="form-group">
                                         <div class="control-label col-sm-3" id="password">Verify Password</div>
                                         <div class="col-sm-7">
                                             <input type="email" class="form-control" id="password" placeholder="Re-enter password">
                                         </div>
                                     </div><br><br><br>


                                 </form>
                            </div>
                        </div>
                    </form><hr/>

                    <form>
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Email Nofications </h2>
                                    <h5>Control when and how often UPGZambia sends emails to you. </h5>
                                </div>
                            </div><hr/>

                            <div>
                                <form action="demo_form.asp" method="get">
                                    <input type="checkbox" name="payment" value="method"> Someone from my address book joins UPGZambia <br><br>
                                    <input type="checkbox" name="payment" value="method"> I'm sent a direct message<br><br>
                                    <input type="checkbox" name="payment" value="method"> Things I missed since I last logged in <br><br>
                                    <input type="checkbox" name="payment" value="method"> News about UPGZambia feature updates<br><br>
                                    <input type="checkbox" name="payment" value="method"> Have received a new notification<br><br>
                                    <input type="checkbox" name="payment" value="method"> When a new payment method has been used<br><br>
                                    <input type="checkbox" name="payment" value="method"> When I have a new transaction<br><br>
                                    <input type="checkbox" name="payment" value="method" checked="checked"> Updates about my performance<br><br>
                                </form>
                            </div>
                        </div>
                    </form><hr/>

                    <div class="col-sm-offset-2 col-sm-10">
                        <form >
                            <input type="submit" value="Save">
                        </form>
                    </div><br><br>
                </div>
            </form>
        </div>
    </div>


    @endsection