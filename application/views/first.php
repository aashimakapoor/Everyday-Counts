<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">

     <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
     <link href="<?php echo base_url()?>assets/mystyle.css" rel="stylesheet" >
  <link href="<?php echo base_url()?>assets/font/css/font-awesome.css" rel="stylesheet">
  <script type="text/javascript" src="assets/jquery/jquery.js"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script>
      function fun(x)
      {
         x.style.height="90px";
      }
      function fu(x)
      {
        x.style.height="70px";
      }
  </script>
  
   </head>

   <body background="<?php echo base_url()?>images/back111.jpg" style="background-size:cover;background-attachment:fixed;background-repeat:no-repeat">
       
         
<div class="navbar navbar-inverse" style="background:rgba(0,0,0,0.8)" >
  <div class="panel-body" style="color:hsl(0, 100%, 70%);padding-left:10% ">
         <img src="<?php echo base_url()?>images/ico.png" style="height:50px"> 
           <b id="everyday" style="font-size:200%; ">Everyday</b>
           <b id="counts" style="font-size:200%; ">Counts</b>
           <div style="float:right">
            <button type="button" class="btn btn-default" aria-label="user"  >
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
            <button type="button" class="btn btn-default" aria-label="eye-open" >
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><a href="<?php echo base_url()?>index.php/firstpage/users">Users</a>
           </button>

            
      </div>
  </div>
</div>
 

<br><br><br><br><br><br>
<div class="container" >
  <div class="col-md-3 col-sm-3 col-xs-3" style="margin-left:10px">
    <div class="panel">
      <img src="<?php echo base_url()?>images/ap1.jpg" style="height:100%;width:100%">
      <center><h3 >APTITUDE TEST</h3></center>
      <div style="padding:15px">
      <i class="fa fa-check-square"></i>
      <b> <span class="pull-right">quants</span>
       <hr style="margin-top:0px;margin-bottom:0px">
       <i class="fa fa-check-square"> </i> 
       <span class="pull-right">Logical Reasoning</span>
       <hr style="margin-top:0px;margin-bottom:0px">
       <i class="fa fa-check-square"> </i> 
       <span class="pull-right">Verbal</span></b>
       <hr style="margin-top:0px;margin-bottom:0px">
       
     <h2 style="font-size:15px;text-align:center"><b>Take tests, Analyze reports,
Learn & improve performance</b></h2></div>
   
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-3" style="margin-left:500px" >
    <div class="panel" >
      <img src="<?php echo base_url()?>images/co.jpg" style="width:100%;height:100%">
      <center><h3>CODING TEST</h3></center>
       <div style="padding:15px">
      <i class="fa fa-bug"></i>
       <span class="pull-right"><b>C</b></span>
       <hr style="margin-top:0px;margin-bottom:0px">
       <i class="fa fa-bug"> </i> 
       <span class="pull-right"> <b>C++</b></span>
       <hr style="margin-top:0px;margin-bottom:0px">
       <i class="fa fa-bug"> </i> 
       <span class="pull-right"><b>JAVA</b></span>
       <hr style="margin-top:0px;margin-bottom:0px">

      <h2 style="font-size:15px;text-align:center"><b>Take tests, Analyze reports,
Learn & improve performance</b></h2></div>
    
    </div>
    
  </div>
  

 <!-- <div class="col-md-5 col-sm-5 col-xs-5">
    <div class="panel">
      <img src="<?php echo base_url()?>images/c.jpg" width="100%">
       <center><h3>Thumbnail label</h3></center>
       <i class="fa fa-folder"> </i> 
       <span class="pull-right">hello,jorden</span>
       <hr style="margin-top:0px;margin-bottom:0px">
       <i class="fa fa-tags"> </i> 
       <span class="pull-right">hello,jorden</span>
       <hr style="margin-top:0px;margin-bottom:0px">
       <i class="fa fa-clock-o"> </i> 
       <span class="pull-right">hello,jorden</span>
       <hr style="margin-top:0px;margin-bottom:0px">


      <h2   style="font-size:15px">hello hkewjhfkjwehfjkewhk hdjhd dghgdh gewjgjwe gjewgew jgewjge jgegew guewgud eugeg jeguejfhew jkewhfjkehwjkfhew</h2>
      <a href="http://www.google.com">continue reading -></a>

    </div>
    
  </div>

  <div class="col-md-5 col-sm-5 col-xs-5">
    <div class="panel">
      <img src="<?php echo base_url()?>images/c.jpg" width="100%">
      <center><h3>Thumbnail label</h3></center>
       <i class="fa fa-folder"></i>
        <span class="pull-right">hello,jorden</span>
       <hr style="margin-top:0px;margin-bottom:0px">
       <i class="fa fa-tags"> </i> 
       <span class="pull-right">hello,jorden</span>
       <hr style="margin-top:0px;margin-bottom:0px">
       <i class="fa fa-clock-o"> </i> 
       <span class="pull-right">hello,jorden</span>
       <hr style="margin-top:0px;margin-bottom:0px">

      <h2 style="font-size:15px">hello hkewjhfkjwehfjkewhk hdjhd dghgdh gewjgjwe gjewgew jgewjge jgegew guewgud eugeg jeguejfhew jkewhfjkehwjkfhew</h2>
      <a href="http://www.google.com">continue reading -></a>
    </div>
    
  </div> -->
  </div>
  <br>
  <br>
  <br>
  <br><br><br>
  <div class="row" style="height:150px;background-color:#75e398 ;text-align:center" >
    <div class="panel-body" style="color:hsl(0, 100%, 70%)">
    
       <div class="col-md-2 col-sm-2"  style="height:15px;margin-left:20px">

      <img  onmouseover= "fun(this)" onmouseout="fu(this)"  src="<?php echo base_url()?>images/9.png" style="height:70px" ><br>
           <strong><b style="color:white;font-size:20px">Aptitude Test</b></strong>
       </div>

       <div  class="col-md-2 col-sm-2 col-xs-2" style="margin-left:20px">
           <img onmouseover= "fun(this)" onmouseout="fu(this)"  src="<?php echo base_url()?>images/8.png" style="height:70px"><br>
            <b style="color:white;font-size:20px">Hands-On Coding Tests</b>
       </div>

       <div class="col-md-2 col-sm-2 col-xs-2"  style="margin-left:20px">
           <img onmouseover= "fun(this)" onmouseout="fu(this)" src="<?php echo base_url()?>images/10.png" style="height:70px"> <br>
            <b style="color:white;font-size:20px">Analytics & Reporting</b>
       </div>

       <div   class="col-md-2 col-sm-2 col-xs-2 " style="margin-left:20px" >
           <img onmouseover= "fun(this)" onmouseout="fu(this)" src="<?php echo base_url()?>images/12.png"style="height:70px" ><br>
            <b style="color:white;font-size:20px">Interactive Tutorials</b>
       </div>

       <div class="col-md-2 col-sm-2 col-xs-2 " style="margin-left:20px">
           <img onmouseover= "fun(this)" onmouseout="fu(this)" src="<?php echo base_url()?>images/11.png" style="height:70px"><br>
          <b style="color:white;font-size:20px">Written Ability Tests </b>
                                                                
       </div>
       </div>
      </div>
       <br><br>
       <br>
       <br><br><br>
      <div class="row" style="background:rgba(0,0,0,0.5)">
       <div style="text-align:center">
          <div class="col-md-6 col-xs-6 col-sm-6">
              <b><h3 style="color:#75e398">Robust Assessment Platform</h3></b>
             <b> <p style="color:white;text-align:justify">Tests based on MCQs, Code snippets, Hands-On programming challenges delivered via Internet or College/University LAN. Ability to resume when power or network failure occurs.  </p>
          </b><br>
              <b><h3 style="color:#75e398">Interactive Online Training</h3></b>
             <b><p style="color:white;text-align:justify"> Our interactive online tutor modules identify the strength and weakness of the students and improve their problem solving, programming & communication skills.
             </p></b>
          </div>
          
          <div class="col-md-6 col-xs-6 col-sm-6">
              <b><h3 style="color:#75e398"> Extensive Analytics & Reports</h3></b>
             <b> <p style="color:white">30+ instant reports for Training & Placement department to plan & manage campus training & placement activities.</p><br>
             </b>
              <b><h3 style="color:#75e398"> Affordable & More Efficient</h3></b>
               <b><p style="color:white">In-Person training forces to grasp all concepts in 5-7 days. Our interactive onine training modules allow students to learn as per their convenience. Also cost effective when compared with In-Person training.</p>
          </b></div>

    </div>
    </div><br><br><br><br><br>
    <br>
      

     <footer style="background:rgba(0,0,0,0.8) ;height:90px;font-weight:700;font-size:25px;">
       
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