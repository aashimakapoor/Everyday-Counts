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
       
         
<div class="navbar navbar-inverse" style="background:rgba(0,0,0,0.8)">
  <div class="panel-body" style="color:hsl(0, 100%, 70%);padding-left:10% ">
         <img src="<?php echo base_url()?>images/ico.png" style="height:50px"> 
            <b id="everyday" style="font-size:200%; ">Everyday</b>
           <b id="counts" style="font-size:200%; ">Counts</b>
           <div style="float:right">
            <button type="button" class="btn btn-default" aria-label="home" >
               <span class="glyphicon glyphicon-home" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/disp">Home</a>
            </button>
             
            <button type="button" class="btn btn-default" aria-label="check" >
               <span class="glyphicon glyphicon-check" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/tests">Tests</a>
            </button>
          
            <button type="button" class="btn btn-default" aria-label="stats" >
                <span class="glyphicon glyphicon-stats" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/report">Report</a>
            </button>

           <button type="button" class="btn btn-default" aria-label="book" >
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/tutorial">Tutorials</a>
           </button>
            <button type="button" class="btn btn-default" aria-label="log-out" style="background-color:#db1d13">
                <span class="glyphicon glyphicon-log-out"  aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/home"><b style="color:black">Logout</b>
           </a></button>

            
      </div>
  </div>
</div>

<div  class="col-sm-10 col-md-10 col-xs-10">
  <div class="row" style="background:rgba(0,0,0,0.5);padding:100px">
    <a  id="1" href="<?php echo base_url()?>index.php/firstpage/test1?id=1"><b style="font-size:20px;color:black;background-color:white"><i class="fa fa-book" style="color:black"></i>Aptitude Test 1</b></a>
    <h5 style="margin-left:10px;color:#d84a4a"> No. of Questions:20</h5><hr>
     <a id="2" href="<?php echo base_url()?>/index.php/firstpage/test1?id=2"><b style="font-size:20px;color:black;background-color:white"><i class="fa fa-book" style="color:black"></i>Aptitude Test 2</b></a>
    <h5 style="margin-left:10px;color:#d84a4a"> No. of Questions:15</h5><hr>
     <a id="3" href="<?php echo base_url()?>/index.php/firstpage/test1?id=3"><b style="font-size:20px;color:black;background-color:white"><i class="fa fa-book" style="color:black"></i>Aptitude Test 3</b></a>
    <h5 style="margin-left:10px;color:#d84a4a"> No. of Questions:10</h5><hr>
     <a id="4" href="<?php echo base_url()?>/index.php/firstpage/test1?id=4"><b style="font-size:20px;color:black;background-color:white"><i class="fa fa-book" style="color:black"></i>Aptitude Test 4</b></a>
    <h5 style="margin-left:10px;color:#d84a4a"> No. of Questions:10</h5><hr>
    <a id="5" href="<?php echo base_url()?>/index.php/firstpage/test1?id=5"><b style="font-size:20px;color:black;background-color:white"><i class="fa fa-book" style="color:black"></i>Aptitude Test 5</b></a>
    <h5 style="margin-left:10px;color:#d84a4a"> No. of Questions:10</h5><hr>
     
     
          
  </div>
</div>

<br><br><br><br><br><br>
 
 <footer style="background:rgba(0,0,0,0.8);margin-top:700px;height:90px;font-weight:700;font-size:25px;clear:both">
       
<div class="panel-body" style="color:hsl(0, 100%, 70%);padding-left:21% ">
   <div class="col-md-4 col-xs-4 col-sm-4">
     <a href="<?php echo base_url()?>index.php/firstpage/privacy" style="color:white">Privacy Policy</a>
   </div>
   <div class="col-md-4 col-xs-4 col-sm-4">
      <a href="<?php echo base_url()?>index.php/firstpage/terms" style="color:white">Terms of Use</a>
   </div>
  
   <div class="col-md-4 col-xs-4 col-sm-4">
     <a href="<?php echo base_url()?>index.php/firstpage/pricing" style="color:white">Pricing</a> 
   </div>

</div>


</footer>


</body>
</html>
