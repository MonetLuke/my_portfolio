<!DOCTYPE html>
<head>

<meta charset="utf-8">
<link href="styles.css" rel="stylesheet" media="screen" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" /> 
<link rel="stylesheet" type="text/css" href="css_sizes/screen_small.css" media="only screen and (min-width:50px) and (max-width:450px)"/>
<link rel="stylesheet" type="text/css" href="css_sizes/screen_medium.css" media="only screen and (min-width:451px) and (max-width:800px)" />  
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Orbitron:500' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"/> </script>   
<script src="jquery.roundabout.js" type="text/javascript"/>  </script> 

<script>
   $(document).ready(function() {
      $('ul').roundabout();
   });
</script>
 


<title>Luke Monet Designs</title>

</head>

<body class="texture" > 

<!-- note: texture class is the background //--> 

<!-- header //--> 

<? include("header.php"); ?>  

<!-- main body //--> 

    <div id="altbody" class="roundabout-holder roundabout-moveable-item"> 
        
        <ul> 
            <li> <a class="hover" href="websites.php"> <img src="Images/Roundabout/bricksite.jpg" width="320" height="290"> <h3> Websites </h3> </a>  					 		</li> 
            <li> <a class="hover" href="logos.php"> <img src="Images/Roundabout/firedashthumb.jpg" width="320"> <h3> Logos </h3> </a> 
            </li> 
            <li> <a class="hover" href="illustrations.php"> <img src="Images/Roundabout/ricbrickthumbnail.jpg" width="320" > <h3> Illustrations </h3> </a>	   		</li> 
            <li> <a class="hover" href="posters.php"> <img src="Images/Roundabout/hmvthumb.jpg" width="320"> <h3> Ads/Posters </h3> </a>  
            </li> 
         </ul> 
    </div> 

<!-- footer //--> 

<? include("footer.php"); ?>

</body>
</html>
