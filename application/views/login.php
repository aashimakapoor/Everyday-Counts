<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <meta http-equiv="Pragma" content="no-cache">
   <meta http-equiv="Expires" content="-1">

     <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/font/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/mystyle.css" rel="stylesheet" >
  <script type="text/javascript" src="<?php echo base_url()?>assets/jquery/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>


<script>
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    if (x == null || x == "") {
        alert("The email you entered does not belong to any account.");
        return false;
    }
}
</script>


  
   </head>

   <body background="<?php echo base_url()?>images/back111.jpg" style="background-size:cover;background-align:center;background-repeat:no-repeat">
   		 
<div class="navbar navbar-inverse" style="background:rgba(0,0,0,0.8)" >      
   
  <div class="panel-body" style="color:hsl(0, 100%, 70%); padding-left:10%">
   <img src="<?php echo base_url()?>images/ico.png" style="height:50px"> 
     <b id="everyday" style="font-size:200%; ">Everyday</b>
           <b id="counts" style="font-size:200%; ">Counts</b>
     <div style="float:right">
            
      <button type="button" class="btn btn-default" aria-label="home" >
          <span class="glyphicon glyphicon-home" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/home">home
         </a>
      </button>

            
			<button type="button" class="btn btn-default" aria-label="plus-sign" >
  				<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/Sign_Up">sign up
          </a>           
			</button>

			
      <button type="button" class="btn btn-default" aria-label="euro" >
          <span class="glyphicon glyphicon-euro" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/pricing">Pricing</a>
      </button>


      <button type="button" class="btn btn-default" aria-label="envelope">
         <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/contact">Contact Us</a>
      </button>
    </div>
  </div>
</div>


  <div class="row" style="background:rgba(0,0,0,0.5);width:600px;margin-top:150px;margin-left:350px;height:320px;box-shadow: 30px 30px 30px black">
      <form  name="myForm" class="form-horizontal" style="padding:30px" onsubmit="return validateForm()" method="post" action="log_in">
         <div> <b style="font-size:35px;font-family:Comic Sans MS ;margin-left:140px;margin-top:0%;color:#008966">Let's get started.</b>
         </div><br>
 <div class="form-group" style="width:500px;align:left" >
    <label for="inputEmail3" class="col-sm-2 control-label"  style="color:black" ></label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group" style="width:500px;align:left">
    <label for="inputPassword3" class="col-sm-2 control-label"   style="color:black" ></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
    </div>
  </div>
 
 <div class="form-group" style="width:500px;align:left" >
    <div class="col-sm-offset-2 col-sm-10">
     <b> <input type="submit"  class="btn btn-default" value="Login" style="width:388px;color:white;background-color:#008966"></input></b>
    </div>
  </div>

</form></div>
<br><br> <br> <br> <br> <br>

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