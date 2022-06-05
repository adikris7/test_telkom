<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Cart</title>
</head>
<body>

<style>
    .container-total{
        padding-left: 50%;
    }
    .card-btn{
        padding-left: 60%;
    }
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Onero Store</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url('home');?>">Home</a></li>
      <li class="dropdown">
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Product<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('product');?>">Product</a></li>
            <li><a href="<?php echo base_url('product/list');?>">Product List</a></li>
            <li><a href="<?php echo base_url('product/update');?>">Product Update</a></li>
          </ul>
        </li>
      </li>
      <li class="active"><a href="<?php echo base_url('cart');?>">Cart</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="<?php echo base_url('admin');?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
        
<section class="h-100">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
          <div>
            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                  class="fas fa-angle-down mt-1"></i></a></p>
          </div>
        </div>
        
        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-3 col-lg-3 col-xl-3">
                <img src="images/oreo.jpg" class="img-rounded" alt="">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">Product Title</p>
                <h5 class="mb-0">Rp.10.000</h5>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 ">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fas fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="2" type="number"
                  class="form-control form-control-sm" />
            
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0">Rp.20.000</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <button type="button" class="text-danger"><i class="fas fa-trash fa-lg"></i></button>
              </div>
            </div>
          </div>
        </div>
        
        <br></br>

        <div class="card rounded-circle">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-3 col-lg-3 col-xl-3">
                 <img src="images/oreo.jpg" class="img-rounded" alt="">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">Product Title</p>
                <h5 class="mb-0">Rp.10.000</h5>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fas fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="2" type="number"
                  class="form-control form-control-sm" />

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0">Rp.20.000</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <button type="button" class="text-danger"><i class="fas fa-trash fa-lg"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="container-total">
            <div class="row">
              <div class="col-md-6">
                <h1>Grand Total</h1>
              </div>
              <div class="col-md-6">
                <h1>Rp.40.000</h1>
              </div>
           </div>    
        </div>
        <div class="card-btn">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <button type="button" class="btn btn-secondary btn-lg">Continue Shopping</button>
                <button type="button" class="btn btn-primary btn-lg">Checkout</button>
              </div>
           </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>