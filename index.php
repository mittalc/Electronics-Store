<style>
  .container-fluid{
    border-bottom:1px solid white;}
  
  .container-fluid, .panel-body, .dummy {
    background-color:black;}
  
  .dummy{
    padding-bottom: 14px;
    margin: 0px;
}
</style>
  <?php
//ini_set('display_startup_errors',1);
//ini_set('display_errors',1);
//error_reporting(-1);
session_start();
if($_SESSION["uid"])
{
    header("location:profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME | MOBILE MART </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
   
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
     integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 
     crossorigin="anonymous">
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container-fluid"> 
        <div class="navbar navbar-header"> 
            <a href="#" class="navbar-brand"></a>
        </div>
        <ul class="nav navbar-nav">
          <li> <h1><a href="index.php" style="text-decoration:none;"><i class="fas fa-home"></i>Mobile Mart</a></h1></li>
            
        </ul>

        <ul class="nav navbar-nav navbar-right">
          
            <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> &nbsp; &nbsp; &nbsp;<i class="fas fa-cart-plus"></i>Cart <span class="badge">0</span></a>
            <div class="dropdown-menu" style="width:400px;">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                       
                        </div>
                    </div>
                    <div class="panel-body"><b>Sign up or login to continue!</b></div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            </li>

            <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-sign-in-alt"></i>Account</a>
            <!--signin dropdown -->
            <ul class="dropdown-menu" style="padding:0px">
            <div style="width:300px;">
                <div class="panel panel-primary">
                                  <div style="background-color:black;" > <a href="customer_registration.php"><i class="fas fa-user-plus"></i>Click here to register</a></div>

                <div class="panel-heading" style="background-color:black;">Login</div>
                <div class="panel-heading" style="background-color:black;">
                <form onsubmit="return false" id="login">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required/>
                <label for="email">Password</label>
                <input type="password" class="form-control" name="password" id="password" required/>
                <p><br/></p>
                <a href="coming.html" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" id = "Login" value="login" style="float:right ; >
                </form>
                </div>
                <div class="panel-footer" id="e_msg"></div>
                </div>
                </div>       
            </ul>
            </li>
        </ul>
    </div>
</div>

<!-- side-->
<p class="dummy"><br/></p>
<p class="dummy"><br/></p>
<p class="dummy"><br/></p>


<div class="container-fluid"> 
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">

         <div id="get_category">

         </div>   

          <!--  <div class="nav nav-pills nav-stacked"> 
                <li class="active"><a href="#"><h4>Categories</h4></a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Categories</a></li>
            </div> -->
            <div id="get_brand">

            </div>  
           <!-- <div class="nav nav-pills nav-stacked"> 
                <li class="active"><a href="#"><h4>BRANDS</h4></a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Categories</a></li>
            </div> -->
        </div>

        <div class="col-md-8">
        <div class="row">
            <div class="col-md-12" id="product_img"> 
            </div>
        </div>
            <div class="panel panel-info">
                  <center><div class="panel-heading" style="font-size:large;">PRODUCTS</div></center>
                  
            <div class="panel-body">
            <div id="get_product">
            <!--here we get product details from ajax -->

            </div>
              <!--  <div class="col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">Samsung Glaxy</div>
                        <div class="panel-body"> <img src="product_images/images.jpg"/></div>
                        <div class="panel-heading">$500.00
                            <button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
                        </div>
                        </div>
                    </div> -->
                
            </div>
             <div class="panel-footer" style="color:black;"><h5>Disclaimer - This is an academic project created for self learning. <br>
                  Please don't add any confidential information or reuse any passwords </h5></div>
        </div>
</div>  
        <div class="col-md-1"></div>
    </div>
    <div class ="row">
    <div class="col-md-12">
    <center>
    <ul class="pagination" id="pageno"> 
    <li><a href="#">1</a></li>
  
    </center>
    </div>
    </div>

    </div>
    </div>

</body>
</html>