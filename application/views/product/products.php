<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Product</title>
</head>
<body>
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
          </ul>
        </li>
      </li>
      <li><a href="<?php echo base_url('cart');?>">Cart</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url('home');?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="<?php echo base_url('admin');?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<section style="background-color: #eee;">
    <div class="text-center container py-5">
        <h1 class="mt-4 mb-5"><strong>Products</strong></h1>
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                    data-mdb-ripple-color="light">
                    <img src="images/oreo.jpg" alt="">
                    <a href="#!">
                    <!-- <div class="mask">
                        <div class="d-flex justify-content-start align-items-end h-100">
                        <h5><span class="badge bg-primary ms-2">New</span></h5>
                        </div>
                    </div> -->
                    <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="" class="text-reset">
                    <h5 class="card-title mb-3">Product Title</h5>
                    </a>
                    <!-- <a href="" class="text-reset">
                    <p>Category</p>
                    </a> -->
                    <h6 class="mb-3">Rp.10.000</h6>
                <a href="#" class="btn btn-sm btn-primary">Add to cart</a>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                    <a href="#!">
                    <div class="mask">
                        <div class="d-flex justify-content-start align-items-end h-100">
                        <img src="images/oreo.jpg" alt="">
                        <!-- <h5>
                            <span class="badge bg-primary ms-2">New</span><span
                            class="badge bg-success ms-2">Eco</span><span class="badge bg-danger ms-2">-10%</span>
                        </h5> -->
                        </div>
                    </div>
                    <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="" class="text-reset">
                    <h5 class="card-title mb-3">Product Title</h5>
                    </a>
                    <!-- <a href="" class="text-reset">
                    <p>Category</p>
                    </a> -->
                    <h6 class="mb-3">Rp.10.000</h6>
                <a href="#" class="btn btn-sm btn-primary">Add to cart</a>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                    <img src="images/oreo.jpg" alt="">
                    <!-- <div class="mask">
                        <div class="d-flex justify-content-start align-items-end h-100">
                        <h5><span class="badge bg-danger ms-2">-10%</span></h5>
                        </div>
                    </div> -->
                    <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="" class="text-reset">
                    <h5 class="card-title mb-3">Product Title</h5>
                    </a>
                    <h6 class="mb-3">Rp.10.000</h6>
                    <a href="#" class="btn btn-sm btn-primary">Add to cart</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>