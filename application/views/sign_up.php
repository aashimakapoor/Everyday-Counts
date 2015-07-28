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

<script>
    function myFunction() {
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
        if (pass1 != pass2) {
            //alert("Passwords Do not match");
            document.getElementById("pass1").style.borderColor = "#E34234";
            document.getElementById("pass2").style.borderColor = "#E34234";
            alert("password does not match");
            return false;

        }
        
    }
</script>
  
   </head>

   <body background="<?php echo base_url()?>images/back111.jpg" style="background-size:cover;background-align:center;background-repeat:no-repeat">
   		 
         
<div class="navbar navbar-inverse" style="background:rgba(0,0,0,0.8)" >
  <div class="panel-body" style="color:hsl(0, 100%, 70%);padding-left:10% ">
         <img src="<?php echo base_url()?>images/ico.png" style="height:50px"> 
           <b id="everyday" style="font-size:200%; ">Everyday</b>
           <b id="counts" style="font-size:200%; ">Counts</b>
           <div style="float:right">

            <button type="button" class="btn btn-default" aria-label="home" >
               <span class="glyphicon glyphicon-home" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/home">Home
            </a></button>

            <button type="button" class="btn btn-default" aria-label="user" >
               <span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/login">Login
            </a></button>
             
            
            <button type="button" class="btn btn-default" aria-label="euro" >
                <span class="glyphicon glyphicon-euro" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/pricing">Pricing</a>
            </button>

           <button type="button" class="btn btn-default" aria-label="envelope" >
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/contact">Contact Us</a>
           </button>

            
      </div>
  </div>
</div>

   <div class="row" style="background:rgba(0,0,0,0.5);width:600px;margin-top:150px;margin-left:350px;height:350px;box-shadow: 30px 30px 30px black">
   
      <form name="myForm"class="form-horizontal" style="padding:30px" method="POST" action="signup" onsubmit='return myFunction()'>
   <div> <b style="font-size:27px;font-family:Comic Sans MS;margin-left:100px;margin-top:0%;color:#008966">Register for an account</b>

   </div><br>
  <div class="form-group" style="width:500px;align:left" >
    <label for="inputEmail3" class="col-sm-2 control-label"  style="color:black" ></label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group" style="width:500px;align:left">
    <label for="inputPassword3" class="col-sm-2 control-label"   style="color:black"></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pass1" name="pass" placeholder="Password">
    </div>
  </div>
  <div class="form-group" style="width:500px;align:left">
    <label for="inputPassword3" class="col-sm-2 control-label"   style="color:black"></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pass2" name="con_pass" placeholder="confirm Password">
    </div>
  </div>
 
  <div class="form-group" style="width:500px;align:left" >
    <div class="col-sm-offset-2 col-sm-10">
     <b> <input type="submit"  class="btn btn-default" value="Register" style="width:388px;color:white;background-color:#008966"></input></b>
    </div>
  </div>
</form>
</div></center><br><br> <br> <br> <br> <br>


<br><br><br><br><br>
    <br>
      

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























