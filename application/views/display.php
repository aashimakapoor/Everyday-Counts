<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">

     <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
	 <link href="<?php echo base_url()?>assets/mystyle.css" rel="stylesheet" >
  <link href="<?php echo base_url()?>assets/font/css/font-awesome.css" rel="stylesheet">
  <script type="text/javascript" src="<?php echo base_url()?>assets/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
  
<script type="text/javascript">
  
function fun()
{

  var x=$('input[name=inlineRadioOptions]:checked').val();
  //alert(x);
  if(x=='apti')
  {
     location.href="aptitude";
  }
  else if(x=="verb")
  {
   location.href="verbal";
  }

  else if(x=="logi")
  {
   location.href="logical";
  }
    else if(x=="tech")
  {
   location.href="code";
  }
}

</script>



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
                <span class="glyphicon glyphicon-stats" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/report">Report</a>
            </button>

           <button type="button" class="btn btn-default" aria-label="book" >
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/tutorial">Tutorials
           </a></button>
            <button type="button" class="btn btn-default" aria-label="log-out" style="background-color:#db1d13">
                <span class="glyphicon glyphicon-log-out"  aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/home"><b style="color:black">Logout</b>
           </a></button>

            
      </div>
  </div>
</div>

<center><div>
 <div class="row" style="background:rgba(0,0,0,0.5);width:600px;height:300px;margin-left:80px;margin-top:100px;box-shadow: 30px 30px 30px black">
 
    
    <div style="margin-top:40px">
      <div style="background-color:#008966;color:white;width:90px;height:30px;margin-left:10px"><b>Test Center</b></div>
      <br><hr>
 <div style="margin-left:30px"><label class="radio-inline" style="color:black">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="apti"><b> MCQ - Aptitude</b>
</label>
<label class="radio-inline"  style="color:black">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="verb"> <b>Verbal</b>
</label>
<label class="radio-inline"  style="color:black">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="logi"> <b>Logical Reasoning</b>
</label>
<label class="radio-inline"  style="color:black">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="tech"><b>Technical</b>
</label>
 <button type="button" class="btn btn-default" style="background-color:#008966;color:white" onclick="fun()">
             <b>  Show</b>

            </button>
</div>

</div>
<hr>
</div></div></center>

<br><br><br><br><br><br>
 <footer style="background:rgba(0,0,0,0.8);height:90px;font-weight:700;font-size:25px">
       
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