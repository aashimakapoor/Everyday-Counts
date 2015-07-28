<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">

     <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
     <link href="<?php echo base_url()?>assets/font/css/font-awesome.css" rel="stylesheet">
     <link href="<?php echo base_url()?>assets/mystyle.css" rel="stylesheet" >
     <script type="text/javascript" src="<?php echo base_url()?>assets/jquery/jquery.js"></script>
     <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
  
   </head>

   <body background="<?php echo base_url()?>images/back111.jpg" style="background-size:cover;background-align:center;background-repeat:no-repeat">
       
<div class="navbar navbar-inverse"  style="background:rgba(0,0,0,0.8)">      
   
  <div class="panel-body" style="color:hsl(0, 100%, 70%); padding-left:10%">
     <img src="<?php echo base_url()?>images/ico.png" style="height:50px"> 
      <b id="everyday" style="font-size:200%; ">Everyday</b>
           <b id="counts" style="font-size:200%; ">Counts</b>
      <div style="float:right">

      <button type="button" class="btn btn-default" aria-label="home" >
          <span class="glyphicon glyphicon-home" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/home">home
         </a>
       </button>
      
       <button type="button" class="btn btn-default" aria-label="user" >
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/Login">Login</a>
       </button>

       <button type="button" class="btn btn-default" aria-label="plus-sign" >
          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/Sign_Up">sign up
           </a>           
       </button>

       
        <button type="button" class="btn btn-default" aria-label="envelope" >
           <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/contact">Contact Us</a>
       </button>
   </div>
</div>
</div>

<div class="row" style="background:rgba(0,0,0,0.5);margin-top:80px;margin-left:250px;height:400px;width:800px">
 <div style="width:109%">
   <b style="color:white;margin-left:250px;font-size:20px">
      <font face="Comic Sans MS">Pricing Plans - Individuals</font><br />
      
      <br /></b><br><br >
    <div class="col-md-11 col-xs-11 col-sm-11" style="background-color:#5ec39d">
      <b><p>Our pricing plans are simple. You pay a certain amount to take certain number of tests or courses. (The tests/courses can be chosen from the list   available.) 
      </p> </b>
    </div> 
      <br>
    <div class="col-md-11 col-xs-11  col-sm-11" style="background-color:#0000ff">
     <b> <p>Individual candidates can register (Sign Up), login to select a pricing plan. </p></b><br>
    </div>
    <div class="col-md-11 col-xs-11 col-sm-11" style="background-color:#5ec39d">
     <b> <p>On successful completion of the payment for the pricing plan, the credit points will be added to your account immediately. </p></b><br>
    </div>

    <div class="col-md-11col-xs-11  col-sm-11" style="background-color:#0000ff">
      <b><p>The credit points can then be used to access paid articles like practice tests, company specific tests and tutorials. </p></b><br>
    </div>
  </div>
</div><br><br> <br> <br> <br> <br>

<footer style="background:rgba(0,0,0,0.8);height:90px;font-weight:700;font-size:25px">
       
<div class="panel-body" style="color:hsl(0, 100%, 70%);padding-left:21% ">
   <div class="col-md-4 col-xs-4 col-sm-4">
     <a href="<?php echo base_url()?>index.php/firstpage/privacy" style="color:white">Privacy Policy</a>
   </div>
   <div class="col-md-4 col-xs-4 col-sm-4">
      <a href="<?php echo base_url()?>index.php/firstpage/terms" style="color:white">Terms of Use</a>
   </div>
  
   <div class="col-md-4 col-xs-4 col-sm-4">
     <a href="<?php echo base_url()?>index.php/firstpage/pricing" style="color:white">Pricing</a> </a>
   </div>

</div>

</footer>
</body>

</html>