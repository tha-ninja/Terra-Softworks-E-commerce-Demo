 @extends('layouts.layout')
 @section('content')

 <div class="row">

                                    <div class="col-md-12">
                                       
                                        <div class="card text-center m-b-20">
                                             <div class="row"> 
                                            <div class="col-md-12">
                                                <div class="card m-b-20 text-white bg-primary text-xs-center">
                                    <div class="card-body">
                                       
                                            <p><i class="fa fa-info-circle"></i> You can upload your business logo to make you online shop feel more personal to your brand. <span class="badge badge-inverse badge-pill">Upload Business Logo <i class="fa fa-arrow-right"></i></span></p>
                                       
                                    </div>
                                </div> 

                                                <h3>TAKE YOUR BUSINESS ONLINE</h3>
                                                <P>Set up your online e-commerce shop and grow your business across the world.</P>

                                                <a href="{{ route('shop.list')}}" class="text-center text-info fa fa-link"> PREVIEW ONLINE SHOP</a>
                                                <br><br>
                                          
                                                <button type="button" class="pull-left btn btn-primary waves-effect waves-light w-sm m-b-5 fa fa-plus btn-round" style="margin-left: 10px"> Add Item</button>
                                                <br>
                                               
                                            </div>

                                            
                                        
                                        </div>
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#"><i class="fa fa-cart-arrow-down"></i> My Shop</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-info" href="{{route('shop.list')}}"><i class="fa fa-list"></i> List View<span class="badge badge-warning"> BETA</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link disabled text-danger" href="#"><i class="fa fa-warning"></i> 50 Pending Orders</a>
                                                    </li>
                                                     <li class="nav-item">
                                                        <a class="nav-link disabled text-info" href="#"><i class="fa fa-envelope"></i> Customer FeedBack</a>
                                                    </li>

                                                     <li class="nav-item">
                                                        <a class="nav-link disabled text-info" href="#"><i class="fa fa-paint-brush"></i> Branding</a>
                                                    </li>

                                                     <li class="nav-item">
                                                        <a class="nav-link disabled text-info" href="#"><i class="fa fa-truck"></i> Delivery Settings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                <div class="col-xl-3">
    <div class="card-box">
        <div>
            <img src="{{ asset('assets/images/hp-elitebook-1590498907.jpg') }}" style="width: 200px; height: 120px;">
                <br>
                    <br>
                        <br>
                            <div class="text-left">
                                <p class="font-8">
                                    <strong>HP 15 Pavillion 45.5 G</strong>
                                </p>
                            </div>
                            <div class="text-right">
                                <p class="text-muted font-6">
                                    <strong>Ksh65,000</strong>
                                </p>
                            </div>
                            <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="text-warning mb-1">
                                        Seller Score
                                    </p>
                                        <p class="text-warning mb-1">
                                        0 
                                            <i class="fa fa-star-o"></i>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-info mb-1">
                                            <i class="fa fa-pencil"></i> 
                                           &nbsp;&nbsp;&nbsp;&nbsp;
                                            
                                            <i class="fa fa-trash"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row 2 --->
                    <div class="col-xl-3">
    <div class="card-box">
        <div>
            <img src="{{ asset('assets/images/hp-elitebook-1590498907.jpg') }}" style="width: 200px; height: 120px;">
                <br>
                    <br>
                        <br>
                            <div class="text-left">
                                <p class="font-8">
                                    <strong>HP 15 Pavillion 45.5 G</strong>
                                </p>
                            </div>
                            <div class="text-right">
                                <p class="text-muted font-6">
                                    <strong>Ksh65,000</strong>
                                </p>
                            </div>
                            <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="text-warning mb-1">
                                        Seller Score
                                    </p>
                                        <p class="text-warning mb-1">
                                        0 
                                            <i class="fa fa-star-o"></i>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-info mb-1">
                                            <i class="fa fa-pencil"></i> 
                                           &nbsp;&nbsp;&nbsp;&nbsp;
                                            
                                            <i class="fa fa-trash"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
    <div class="card-box">
        <div>
            <img src="{{ asset('assets/images/hp-elitebook-1590498907.jpg') }}" style="width: 200px; height: 120px;">
                <br>
                    <br>
                        <br>
                            <div class="text-left">
                                <p class="font-8">
                                    <strong>HP 15 Pavillion 45.5 G</strong>
                                </p>
                            </div>
                            <div class="text-right">
                                <p class="text-muted font-6">
                                    <strong>Ksh65,000</strong>
                                </p>
                            </div>
                            <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="text-warning mb-1">
                                        Seller Score
                                    </p>
                                        <p class="text-warning mb-1">
                                        0 
                                            <i class="fa fa-star-o"></i>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-info mb-1">
                                            <i class="fa fa-pencil"></i> 
                                           &nbsp;&nbsp;&nbsp;&nbsp;
                                            
                                            <i class="fa fa-trash"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
    <div class="card-box">
        <div>
            <img src="{{ asset('assets/images/hp-elitebook-1590498907.jpg') }}" style="width: 200px; height: 120px;">
                <br>
                    <br>
                        <br>
                            <div class="text-left">
                                <p class="font-8">
                                    <strong>HP 15 Pavillion 45.5 G</strong>
                                </p>
                            </div>
                            <div class="text-right">
                                <p class="text-muted font-6">
                                    <strong>Ksh65,000</strong>
                                </p>
                            </div>
                            <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="text-warning mb-1">
                                        Seller Score
                                    </p>
                                        <p class="text-warning mb-1">
                                        0 
                                            <i class="fa fa-star-o"></i>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-info mb-1">
                                            <i class="fa fa-pencil"></i> 
                                           &nbsp;&nbsp;&nbsp;&nbsp;
                                            
                                            <i class="fa fa-trash"></i>
                                        </p>
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


                        
                        <!-- end row -->

@stop                        