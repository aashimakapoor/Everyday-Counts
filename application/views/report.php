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
                <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> <a href="<?php echo base_url()?>index.php/firstpage/report">Report</a>
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
<div style="margin-top:50px">
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="container" style="background:rgba(0,0,0,0.6);width:250px;height:250px;margin-left:250px;;margin-bottom:30px">
  <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left:5px">
    
      <img src="<?php echo base_url()?>images/re.png" style="height:100px;width:190px">
      <h4 style="color:white">Aptitude Test - Score Report</h4>
    
       
     <h6 style="font-size:10px;text-align:center"><b style="color:white">- View your individual (single) aptitude test score reports. </b></h6>
    <button type="button" class="btn btn-default btn-lg active" style="background-color:#5ec39d;color:white;width:90px;height:35px;margin-left:40px"><a href="<?php echo base_url()?>index.php/firstpage/view1" style="color:white">View</a></button>

</div></div></div>


<div class="col-md-6 col-sm-6  col-xs-6">
<div class="container" style="background:rgba(0,0,0,0.8);width:250px;height:250px;margin-left:120px;margin-bottom:30px">
  <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left:5px">
    
      <img src="<?php echo base_url()?>images/re.png" style="height:100px;width:190px">
      <h4 style="color:white">Verbal Test- Score Report</h4>
    
       
     <h6 style="font-size:10px;text-align:center"><b style="color:white">- View your individual (single) verbal test score reports. </b></h6>
    <button type="button" class="btn btn-default btn-lg active" style="background-color:#7a3ad8;color:white;width:90px;height:35px;margin-left:40px"><a href="<?php echo base_url()?>index.php/firstpage/view2" style="color:white">View</a></button>

</div></div></div>
</div>
<div><div class="col-md-6 col-sm-6  col-xs-6" >
<div class="container" style="background:rgba(0,0,0,0.8);width:250px;height:250px;margin-left:250px">
  <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left:5px">
    
      <img src="<?php echo base_url()?>images/re.png" style="height:100px;width:190px">
      <h4 style="color:white">Logical Reasoning- Score Report</h4>
    
       
     <h6 style="font-size:10px;text-align:center"><b style="color:white">- View your individual (single) logical reasoning test score reports. </b></h6>
    <button type="button" class="btn btn-default btn-lg active" style="background-color:#d84a4a;color:white;width:90px;height:35px;margin-left:40px"><a href="<?php echo base_url()?>index.php/firstpage/view3" style="color:white">View</a></button>

</div></div></div>

<div class="col-md-6 col-sm-6  col-xs-6" >
<div class="container" style="background:rgba(0,0,0,0.6);width:250px;height:250px;margin-left:120px">
  <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left:5px">
    
      <img src="<?php echo base_url()?>images/re.png" style="height:100px;width:190px">
      <h4 style="color:white">Coding Test- Score Report</h4>
    
       
     <h6 style="font-size:10px;text-align:center"><b style="color:white">- View your individual (single) coding test score reports. </b></h6>
    <button type="button" class="btn btn-default btn-lg active" style="background-color:#d87a3a;color:white;width:90px;height:35px;margin-left:40px"><a href="<?php echo base_url()?>index.php/firstpage/view4" style="color:white">View</a></button>

</div></div></div>
</div>
 <br>
 
 <footer style="background:rgba(0,0,0,0.8);margin-top:600px;height:90px;font-weight:700;font-size:25px">
       
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
  


</div></footer>
</body></html>




