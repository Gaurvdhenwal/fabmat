<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="icon" href='LOGO/icon.ico' />
 <script src="scripts/jquery.js"></script>
 <script src="scripts/jquery.stellar.js"></script>
 <script >
 $(function(){
	 
	 $(window).stellar();
	 })
 
 </script>
<title>
	
	FabMat

</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel='stylesheet' href='font-awesome/css/font-awesome.css'/>
<link rel='stylesheet' href="css/navigation.css" />
<link rel="stylesheet" href="css/animate.css"/>
<link rel="stylesheet" href="css/home.css"/>

</head>
<body  id="home" data-spy="scroll" data-target=".navbar" data-offset="100">

<div  class="jumbotron" data-stellar-background-ratio="0.4"  >

<nav class="navbar navbar-default animated bounceInDown"  data-spy="affix" data-offset-top="100">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="fabmat.php"><span style="color:white"><img  src="LOGO/logo.svg" height='50px' width="150px"  /></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#products">PRODUCTS</a></li>
        <li><a href="#clients">CUSTOMERS</a></li>
        
        <li><a href="#contact">CONTACT</a></li>
        <li ><a href="signin.php" style="color:#22b8eb !important;">SIGN IN</a></li>
      </ul>
    </div>
  </div>
</nav>
<!----------------------------------------------navigation over--------------------->

<div id="header1" class="animated bounceInLeft" >
    	<h1 class="pull-right"><span class="inside-h1">Welcome to </span>FabMat</h1>
    </div>
	
    <div id="header2" class="pull-right animated bounceInRight" >
    	<h2>"A place full of totally awesome designs"</h2>
    </div>  
 <!--   
 <div id="content" class="container">
 	
    
            <h1 class="text-center ">Welcome to <span class="brandtext"> FabMat</span></h1>
            <p class="text-center lead">"A place full of cool and awesome designs"</p>
     	
 </div>
  -->

</div>
<!------ ----------------------------- main div jumbotron over--------------------------------> 

<div class="container-fluid" id="about">
	<h1 class="text-center">What do we do</h1>
    <hr/> 
    <div class="row">
    	<div class="col-lg-4">
        lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
        </div>
        <div class="col-lg-4 col-lg-offset-4">
        lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
        </div>
    </div>
</div>
<!-----------------------------------about section over---------------------------------------->

<div class="container-fluid" id="products" data-stellar-background-ratio="0.4" data-stellar-ration="0.8">
	<div class="row">
    	<div class="col-lg-12 text-center">
        	<h1 class="text-center ">Our Products</h1>
            <p class="lead">Some of the awesome things made by us</p>
        </div>
    </div>
    
   <hr class="animated pulse infinite "/>
    
    <div class="row text-center" >
    	<div class=" col-sm-6  col-xs-12 col-md-4 col-lg-4 showcase" >
        	<div class="imageholder">
        	
        	
            </div>
            
        </div>
        <div class=" showcase col-lg-4  col-sm-6  col-xs-12 col-md-4">
        	<div class="imageholder ">
        	
            </div>
        </div>
        <div class=" showcase col-lg-4  col-sm-6  col-xs-12 col-md-4">
        	<div class="imageholder">
        	
            </div>
        </div>
    </div>
	
</div>


<div id="clients"></div>

<div id="contact"></div>
</body>


<script src="scripts/bootstrap.js"></script>
<script src="scripts/home.js"></script>

</html>
