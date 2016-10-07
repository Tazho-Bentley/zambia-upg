@extends('layouts.app')

@section('content')
<div class="container">
    <div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">

            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-one"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are UPG</h2>
                                                <p style="color:#ffffff;">Unified Payment Gateway is a next-generation payment and e-Commerce checkout system that is based in Lusaka,
                                                    Zambia that enables merchants to receive money with no transaction markups or charges using one single account.</p>
                                                <p style="color:#ffffff;"></p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Pay Online</h2>
                                                <p style="color:#ffffff;">Our payment gateway system connects to payment system APIs and allows merchants access payment platforms using one account.</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Its Not Magic</h2>
                                                <p style="color:#ffffff;">You are asking how??</p>
                                                <p style="color:#ffffff;">UPG handles most of the work that the merchants are handling themselves and does the coordinating between business owners and the online payment providers.</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- End slider area -->
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Payment Processing</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-gift"></i>
                        <p>Easy Integration</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Benefits of Online Payments</h2>
                    <p>Business owners will only make one connection with UPG and the system handles all the back end activities.

                        Business owners can now receive money from their customers without them worrying which payment platform the customers are using.

                        This gives a better room for expansion should another online payment provider join the industry as it will only need to be connected
                        to the API. This will reduce the cost especially on the part of the business owners</p>

                    <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi.
                        Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a
                        consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales
                        libero.</p>
                </div>
                <div class="col-sm-4">
                    <h2>Register Today</h2>
                    <form>
                        <div class="input-group"><input style="border-color: #0f0f0f" type="text" placeholder="Company Name"></div><br>
                        <div class="input-group"><input style="border-color: #0f0f0f" type="text" placeholder="Name"></div><br>
                        <div class="input-group"><input style="border-color: #0f0f0f" type="text" placeholder="Mobile Phone"></div><br>
                        <div class="input-group"><input style="border-color: #0f0f0f" type="email" placeholder="Type your email"></div><br>
                        <input type="submit" value="Register">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
