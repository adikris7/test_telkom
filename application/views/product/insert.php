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
<title>Insert</title>
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
        <li class="active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Product<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('product');?>">Product</a></li>
            <li><a href="<?php echo base_url('product/list');?>">Product List</a></li>
            <li><a href="<?php echo base_url('product/insert');?>">Insert Product</a></li>
            <li><a href="<?php echo base_url('product/update');?>">Product Update</a></li>
          </ul>
        </li>
      </li>
      <li><a href="<?php echo base_url('cart');?>">Cart</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="<?php echo base_url('admin');?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

  <style>
      .container{
          padding-left: 0px;
      }
  </style>
    <div class="container">
      <form action ="<?php echo base_url('product/ActionInsert');?>" method="POST">
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="colFormLabel" class="col-sm-2 col-form-label-lg">Title</label>
            </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="title" >
                </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">  
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label-lg">Description</label>
            </div>
            <div class="col-sm-4">
                <textarea class="form-control" name="description" rows="4 "></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="colFormLabel" class="col-sm-2 col-form-label-lg">Price</label>
            </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="price" >
                </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="colFormLabel" class="col-sm-2 col-form-label-lg">Quantity</label>
            </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="quantity" >
                </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="colFormLabel" class="col-sm-2 col-form-label-lg">Featured</label>
            </div>
            <div class="form-check col-sm-2">
                <input class="form-check-input" type="radio" name="featured" value="Featured">
                <label class="form-check-label" for="inlineCheckbox1">Featured</label>
            </div>
            <div class="form-check col-sm-6">
                <input class="form-check-input" type="radio" name="featured" value="Unfeatured">
                <label class="form-check-label" for="inlineCheckbox2">Unfeatured</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="colFormLabel" class="col-sm-2 col-form-label-lg">Show/Hide</label>
            </div>
            <div class="form-check col-sm-2">
                <input class="form-check-input" type="radio" name="show" value="Show">
                <label class="form-check-label" for="inlineCheckbox1">Show</label>
            </div>
            <div class="form-check col-sm-6">
                <input class="form-check-input" type="radio" name="show" value="Hide">
                <label class="form-check-label" for="inlineCheckbox2">Hide</label>
            </div>
        </div>
        <div class="form-group row center">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-4">
                <button type="reset" class="btn btn-primary" value="RESET">Cancel</button>
                <button type="submit" class="btn btn-primary" value="SIMPAN">Submit</button>
            </div>
        </div>
      </form>
      
    </div>

</section>
<!-- Section: Design Block -->

</body>
</html>