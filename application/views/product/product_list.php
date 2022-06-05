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
    <title>Product list</title>
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

</nav>

  <table class="table table-bordered">  
        <tbody>  
          <tr >  
              <td><b>id</b></td>  
              <td><b>title</b></td>  
              <td><b>description</b></td>  
              <td><b>price</b></td> 
              <td><b>quantity</b></td>
              <td><b>image</b></td>  
              <td><b>featured</b></td>  
              <td><b>show/hide</b></td>  
              <td><b>action</b></td>
          </tr>  
          <?php  
          foreach ($data_onero as $dbo)  
          {  
              ?><tr>  
              <td><?php echo $dbo->id_barang;?></td>  
              <td><?php echo $dbo->title;?></td>  
              <td><?php echo $dbo->description;?></td>  
              <td><?php echo $dbo->price;?></td>  
              <td><?php echo $dbo->quantity;?></td>  
              <td><?php echo $dbo->image;?></td>  
              <td><?php echo $dbo->featured;?></td>  
              <td><?php echo $dbo->show;?></td> 
              <td><a href="<?php echo base_url('product/update/'). $dbo->id_barang?>">Update</a> | 
              <a href="<?php echo base_url('product/ActionDelete/'). $dbo->id_barang?>">Delete</a></td> 
              </tr>  
          <?php }  
          ?>  
        </tbody>  
    </table> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>