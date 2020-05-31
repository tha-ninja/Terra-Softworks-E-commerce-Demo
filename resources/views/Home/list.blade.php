 @extends('layouts.front')
 @section('content')
<style type="text/css">
    .overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .3s ease;
  background-color: red;
}
.icon {
  color: white;
  font-size: 100px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.fa-user:hover {
  color: #eee;
}
image {
  display: block;
  width: 100%;
  height: auto;
}
.cotainer {
  position: relative;
  width: 100%;
  max-width: 400px;
}
.cotainer:hover .overlay {
  opacity: 1;
}
</style>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div class="row">
  <div class="col-lg-12">
  <div class="card m-b-20 text-white bg-success text-xs-center">
                                    <div class="card-body">
                                       
                                            <p class="text-center"><i class="fa fa-info-circle"></i> <strong>SAVE UP TO </strong>Ksh 300 on select items. <u>Shop now! </u><i class="fa fa-close"></i></p>
                                       
                                    </div>
                                </div> 
                              </div>
                             

        <div class="col-lg-3">
            <img height="60" src="https://media-exp1.licdn.com/dms/image/C4D0BAQHZvR5oy1GyXA/company-logo_200_200/0?e=2159024400&v=beta&t=JVw7FIJtc1Ono5n8Wp-EnN-fMZbr5JRjRVCZLjYEsFc">
        </div>
        <div class="col-lg-6">
           <h4><b>TERRA SOFTWORKS LIMITED</b></h4>
        </div>
        <div class="col-lg-3">
            <div class="pull-right">
                <p>
            <i class="fa fa-search"></i>
                <i class="fa fa-truck"></i>
                <i class="fa fa-tag"></i>
            </p>
            </div>
               
        </div>

         <div class="col-lg-12">
  <div class="card m-b-20 bg-muted text-xs-center">
<p>Trending Products & Services</p>
  </div></div>
    </div>
  
                      

                       <div class="row">
                        <div class="col-md-12">
                            <button class="pull-right fa fa-envelope btn btn-info"></button>
                             <div class="card-box">
                                <div class="text-center">
                        <h1 class="header-title"><b>Trending</b></h1>
                                    <p class="text-muted font-14 m-b-30">
                                        Top Deals This Week
                                    </p>
                                </div>
                                <div class="row">
                           
                           <div class="col-xl-3">
    <div class="card-box">
        <div>
            <div class="cotainer">
            <span class="badge badge-danger">Sale 47%</span>
            <img class="image" src="{{ asset('assets/images/hp-elitebook-1590498907.jpg') }}" style="width: 200px; height: 120px;">
            <div class="overlay">
  <a href="{{ route('payment')}}" class="icon" title="Add To Cart">
    <i class="fa fa-cart-plus"></i>
  </a>
  </div>
</div>
                
                        <div class="text-center">
                            <p class="mb-1 text-muted">
                                        Electronics
                                    </p>
                            <p class="text-warning mb-1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <p class="mb-1">
                                <strong>HP 15 Pavillion 45.5 G</strong>
                            </p>
                            <p class="text-muted mb-1">
                                <strong>
                                    <strike>Ksh65,000</strike>
                                </strong>
                            </p>
                            <p class="mb-1">
                                <strong>Ksh60,000</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        

        <div class="col-xl-3">
    <div class="card-box">
        <div>
           <div class="cotainer">
            <span class="badge badge-danger">Sale 47%</span>
            <img class="image" src="{{ asset('assets/images/hp-elitebook-1590498907.jpg') }}" style="width: 200px; height: 120px;">
            <div class="overlay">
  <a href="{{ route('payment')}}" class="icon" title="Add To Cart">
    <i class="fa fa-cart-plus"></i>
  </a>
  </div>
</div>
               
                
                        <div class="text-center">
                            <p class="mb-1 text-muted">
                                        Electronics
                                    </p>
                            <p class="text-warning mb-1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <p class="mb-1">
                                <strong>HP 15 Pavillion 45.5 G</strong>
                            </p>
                            <p class="text-muted mb-1">
                                <strong>
                                    <strike>Ksh65,000</strike>
                                </strong>
                            </p>
                            <p class="mb-1">
                                <strong>Ksh60,000</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        

        <div class="col-xl-3">
    <div class="card-box">
        <div>
            <div class="cotainer">
            <span class="badge badge-danger">Sale 47%</span>
            <img class="image" src="{{ asset('assets/images/hp-elitebook-1590498907.jpg') }}" style="width: 200px; height: 120px;">
            <div class="overlay">
  <a href="{{ route('payment')}}" class="icon" title="Add To Cart">
    <i class="fa fa-cart-plus"></i>
  </a>
  </div>
</div>
                        <div class="text-center">
                            <p class="mb-1 text-muted">
                                        Electronics
                                    </p>
                            <p class="text-warning mb-1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <p class="mb-1">
                                <strong>HP 15 Pavillion 45.5 G</strong>
                            </p>
                            <p class="text-muted mb-1">
                                <strong>
                                    <strike>Ksh65,000</strike>
                                </strong>
                            </p>
                            <p class="mb-1">
                                <strong>Ksh60,000</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        

        <div class="col-xl-3">
    <div class="card-box">
        <div>
            <div class="cotainer">
            <span class="badge badge-danger">Sale 47%</span>
            <img class="image" src="{{ asset('assets/images/hp-elitebook-1590498907.jpg') }}" style="width: 200px; height: 120px;">
            <div class="overlay">
  <a href="{{ route('payment')}}" class="icon" title="Add To Cart">
    <i class="fa fa-cart-plus"></i>
  </a>
  </div>
</div>
                        <div class="text-center">
                            <p class="mb-1 text-muted">
                                        Electronics
                                    </p>
                            <p class="text-warning mb-1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <p class="mb-1">
                                <strong>HP 15 Pavillion 45.5 G</strong>
                            </p>
                            <p class="text-muted mb-1">
                                <strong>
                                    <strike>Ksh65,000</strike>
                                </strong>
                            </p>
                            <p class="mb-1">
                                <strong>Ksh60,000</strong>
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

                        <!-- end row -->

@stop                        