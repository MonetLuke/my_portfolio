<!DOCTYPE html>
<head>

<title>Logos</title>

<meta charset="utf-8">
<link href="styles.css" rel="stylesheet" media="screen" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" /> 
<link rel="stylesheet" type="text/css" href="css_sizes/screen_small.css" media="only screen and (min-width:50px) and (max-width:450px)"/>
<link rel="stylesheet" type="text/css" href="css_sizes/screen_medium.css" media="only screen and (min-width:451px) and (max-width:800px)" />  
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

<link href='http://fonts.googleapis.com/css?family=Orbitron:500' rel='stylesheet' type='text/css'>

<!-- Lightbox --> 

<script src="jquery.v1.10.2.js" type="text/javascript"> </script> 
<script src="source/jquery.fancybox.pack.js"> </script> 
<link href="source/jquery.fancybox.css" rel="stylesheet" media="screen" /> 

</head>



<body class="texture">

<!-- note: texture class is the background //--> 

<!-- header //--> 

<? include("header.php"); ?>  

<!--  main body //-->

    <div id="mainbody" class="overflow"> 
    
        <h2> CLICK IMAGE TO ENLARGE </h2> 
        
        <!-- Lightbox Images //--> 
        
        <a class="fancybox img" rel="group" href="Images/Roundabout/electricbricklogo-colour.png"> <img src="Images/Roundabout/electricbricklogo-colour.png" width="200"/> <p class="img"> <h6> Electric Brick Logo </h6> </a> 
        
        <a class="fancybox img firedash" rel="group" href="Images/Roundabout/firedash.png"> <img src="Images/Roundabout/firedash.png" width="200"/> <h6> Fire Dash Logo </h6>  </a> 
        
        <a class="fancybox img" rel="group" href="Images/Roundabout/JMJA.png"> <img src="Images/Roundabout/JMJA.png" width="200" height="120"/> <h6> JMJA Logo </h6>  </a>
        
        <a class="fancybox img altbrick" rel="group" href="Images/Roundabout/Brickaltlogo.png"> <img src="Images/Roundabout/Brickaltlogo.png" width="200"/> <h6> Alternative Electric Brick Logo </h6>  </a>
         
          
        <script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox();
            });
        </script>
    
    
    </div> 


<!-- Footer //--> 

<? include("footer.php"); ?>

</body>
</html>
