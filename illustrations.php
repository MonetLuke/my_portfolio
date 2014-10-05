<!DOCTYPE html>
<head>

<title>Illustrations</title>
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
 
<!-- Main Section   //--> 


	<div id="mainbody" class="overflow"> 
    
    	<div class="links"> 
        
            <h2> <a href="websites.php">WEBSITES</a>      </h2> |
            <h2> <a href="illustrations.php">ARTWORK</a> 	  </h2> |
            <h2> <a href="posters.php">ADVERTS</a>	  </h2> | 
            <h2> <a href="logos.php">LOGO'S</a>	   </h2> |
            
        </div> 
        
        <div id="position"> 
            <a class="fancybox img" rel="group" href="Images/Roundabout/ricbrickcomplete.jpg"> <img src="Images/Roundabout/ricbrickcomplete.jpg" width="200"/> <p class="img"> <h6> Elect Ric Brick <br/> Design for Print </h6> </a>             
            <a class="fancybox img right" rel="group" href="Images/Roundabout/Billyscrimoriginalcolour.png"> <img src="Images/Roundabout/Billyscrimoriginalcolour.png" width="200"/> <h6> Billy Scrim </h6>  </a> 
            <a class="fancybox img" rel="group" href="Images/Roundabout/mrfishfinished.png"> <img src="Images/Roundabout/mrfishfinished.png" width="200"/> <h6> Ebenezer Fish </h6>  </a>
            
            <a class="fancybox img gilly" rel="group" href="Images/Roundabout/GillyFinal.png"> <img src="Images/Roundabout/GillyFinal.png" width="200"/> <h6> Gilly </h6>  </a>
             
            <a class="fancybox img" rel="group" href="Images/Roundabout/tomvfirstblood.png"> <img src="Images/Roundabout/tomvfirstblood.png" width="200"/> <h6> Sacred Goblet </h6>  </a>
              
            <a class="fancybox img wizard" rel="group" href="Images/Roundabout/Wizardnew2.png"> <img src="Images/Roundabout/Wizardnew2.png" width="200"/> <h6> Wizard </h6> </a>
   
   		</div> 

		<script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox();
            });
        </script>
    
    
    </div> 

<!-- footer //--> 
<? include("footer.php"); ?>


</body>
</html>
