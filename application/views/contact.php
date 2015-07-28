<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">

     <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/font/css/font-awesome.css" rel="stylesheet">
   <link href="<?php echo base_url()?>assets/mystyle.css" rel="stylesheet" >
  <script type="text/javascript" src="assets/jquery/jquery.js"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
  
   </head>

   <body background="<?php echo base_url()?>images/back111.jpg" style="background-size:cover;background-align:center;background-repeat:no-repeat">
       
         
<div class="navbar navbar-inverse" style="background:rgba(0,0,0,0.8)" >
  <div class="panel-body" style="color:hsl(0, 100%, 70%);padding-left:10% ">
   <img src="<?php echo base_url()?>images/ico.png" style="height:50px"> 
   <b id="everyday" style="font-size:200%; ">Everyday</b>
           <b id="counts" style="font-size:200%; ">Counts</b>
    <div style="float:right">
        <button type="button" class="btn btn-default" aria-label="home" >
           <span class="glyphicon glyphicon-home" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/home">home
           </a>
        </button>


        <button type="button" class="btn btn-default" aria-label="user" >
           <span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/login">Login
            </a>
        </button>
             
        <button type="button" class="btn btn-default" aria-label="plus-sign" >
          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/Sign_Up">sign up
           </a> 
        </button>
          
        <button type="button" class="btn btn-default" aria-label="euro" >
          <span class="glyphicon glyphicon-euro" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/pricing">Pricing
            </a>
        </button>

    </div>
  </div>
</div>

<center>
  <div class="row" style="background:rgba(0,0,0,0.5);width:700px;margin-top:100px;margin-left:350pxheight:300px;box-shadow: 30px 30px 30px black">
      <form class="form-horizontal" style="padding:50px" method="post" action="contact_us">
         <div> <b style="font-size:22px;margin-top:0%;color:#008966">Contact us </b>
                <br><br><b style="color:black">Contact us for queries related to pricing, issues, our contact numbers or feedback. Please mention your message & contact details below.
              </b>
         </div>
         
  <div class="form-group" style="width:500px" >
    <label for="inputEmail3" class="col-sm-2 control-label"  style="color:black"></label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
    </div>
  </div>
  
  <div class="form-group" style="width:500px;margin-left:130px">
  
   
   <div class="col-sm-10">
   <textarea class="form-control" rows="3" name="msg">Your Message</textarea>
    
  </div></div>
  
  <div class="form-group" style="width:300px">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" style="background-color:#008966">Send Message</button>
    
    </div><br><br>
   
   <div style="margin-left:50px"><b style="background-color:#75e398;color:#008966">Mobile : 9962475645</b>
    </div>
  </div>
</form>
</center>

</div><br><br> <br> <br> <br> <br>

<footerstyle="background:rgba(0,0,0,0.8);height:90px;font-weight:700;font-size:25px">
       
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