 @extends('layouts.layout')
 @section('content')

                        <div class="row">

                          <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://www.iconbunny.com/icons/media/catalog/product/2/9/2911.12-bar-chart-icon-iconbunny.jpg" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5">Transactions</h5>
                                            <p class="m-b-5 font-13"><b>528</b></p>
                                            
                                        </div>
                                    </div>
                                    <br>
                                    <hr>

                                    <small class="text-muted"><i class="mdi mdi-refresh"></i> <b>Transactions Processed</b></small>
                                </div>
                            </div>

                             <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://freeiconshop.com/wp-content/uploads/edd/wallet-flat.png" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5">Available</h5>
                                            <p class="m-b-5 font-13"><small>Ksh</small><b> 20,128</b></p>
                                            
                                        </div>
                                    </div>
                                    <br>
                                    <hr>

                                    <small class="text-muted"><i class="mdi mdi-refresh"></i> <b>Available Balance in (Ksh)</b></small>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://cdn3.iconfinder.com/data/icons/e-commerce-2-2/380/2-512.png" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5">Shop Orders</h5>
                                            <p class="m-b-5 font-13"><b> 54</b></p>
                                            
                                        </div>
                                    </div>
                                    <br>
                                    <hr>

                                    <small class="text-muted"><i class="mdi mdi-refresh"></i> <b>Online Shop Orders</b></small>
                                </div>
                            </div><!-- end col --><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://library.kissclipart.com/20180922/vuw/kissclipart-group-icon-png-clipart-computer-icons-user-fc8119adf663dce8.jpg" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5">Customers</h5>
                                            <p class="m-b-5 font-13"><b> 32</b></p>
                                            
                                        </div>
                                    </div>
                                    <br>
                                    <hr>

                                    <small class="text-muted"><i class="mdi mdi-refresh"></i> <b>Customer Information</b></small>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Sales Overview - 2020</h4>
                                    <p class="text-muted font-14 m-b-30">
                                        A snapshot of how your business revenue is perfoming this year.
                                    </p>
                                 <canvas id="bar" height="300"></canvas>
                            </div>
                        </div>

                        </div>
                        <!-- end row -->

@stop                        