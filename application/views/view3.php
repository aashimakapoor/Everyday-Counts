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