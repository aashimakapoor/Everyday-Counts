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

   <body background="<?php echo base_url()?>images/back111.jpg" style="background-size:cover;background-attachment:fixed;background-repeat:no-repeat">
       
         
<div class="navbar navbar-inverse" style="background:rgba(0,0,0,0.8)" >
  <div class="panel-body" style="color:hsl(0, 100%, 70%);padding-left:10% ">
         <img src="<?php echo base_url()?>images/ico.png" style="height:50px"> 
           <b id="everyday" style="font-size:200%; ">Everyday</b>
           <b id="counts" style="font-size:200%; ">Counts</b>
           <div style="float:right">

             <button type="button" class="btn btn-default" aria-label="home" >
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/home">home</a>
           </button>



            <button type="button" class="btn btn-default" aria-label="user" >
               <span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/login">Login
            </a></button>
             
            <button type="button" class="btn btn-default" aria-label="plus-sign" >
               <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/Sign_Up">sign up
           </a> </button>
          
            <button type="button" class="btn btn-default" aria-label="euro" >
                <span class="glyphicon glyphicon-euro" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/pricing">Pricing
            </a></button>

           <button type="button" class="btn btn-default" aria-label="envelope" >
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/contact">Contact Us</a>
           </button>
           
            
      </div>
  </div>
</div>


<center><div style="padding:50px ;min-height:400px"> 
<div class="row" style="background-color:rgba(0,0,0,0.8);color:white;padding:30px;width:50%">


  <table style="width:100%;text-align:right"><b style="color:#d84a4a">Registered Users</b><br><br>
      <?php 
      foreach($result as $row)
        {?>
      <tr><td> <?php echo $row->id ;?></td><td><?php echo $row->email ;?></td></tr>
      <tr><td colspan="2"><?php echo "<hr />";?></td></tr>
  <?php }?>

  </table>
  </div></div></center>

  <br><br><br><br><br>
    
      

      <footer style="background:rgba(0,0,0,0.8) ;height:90px;font-weight:700;font-size:25px">
       
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