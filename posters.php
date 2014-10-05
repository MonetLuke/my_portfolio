<!DOCTYPE html>
<head>

<title>Posters</title>

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

<!-- main body //--> 
    
    <div id="mainbody" class="overflow"> 
        <h2> CLICK IMAGE TO ENLARGE </h2> 
        
            <div id="positionposter"> 
                <a class="fancybox img" rel="group" href="Images/Roundabout/HMV Poster.jpg"> <img src="Images/Roundabout/HMV Poster.jpg" width="200"/> <p class="img"> <h6> HMV Advert </h6> </a> 
            
                <a class="fancybox img right" rel="group" href="Images/Roundabout/Leccy Bricky.jpg"> <img src="Images/Roundabout/Leccy Bricky.jpg" width="200"/> <h6> Electric Brick Poster </h6>  </a> 
            
            
                <a class="fancybox img" rel="group" href="Images/Roundabout/chichibanner3.jpg"> <img src="Images/Roundabout/chichibanner3.jpg" width="200"/> <h6> ChiChi Banner </h6>  </a>
            
                <a class="fancybox img chichi" rel="group" href="Images/Roundabout/chichihomeandgifts.jpg"> <img src="Images/Roundabout/chichihomeandgifts.jpg" width="200"/> <h6> ChiChi Ad </h6>  </a>
             
                <a class="fancybox img" rel="group" href="Images/Roundabout/newposter.jpg"> <img src="Images/Roundabout/newposter.jpg" width="200"/> <h6> Gig Poster 1 </h6>  </a>
              
                <a class="fancybox img wizard" rel="group" href="Images/Roundabout/AcousticVic.jpg"> <img src="Images/Roundabout/AcousticVic.jpg" width="200"/> <h6> Gig Poster 2 </h6> </a>
                
            </div> 
    
        <script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox();
            });
        </script>
    
    </div> 
    
    
<!-- 	footer 	//--> 

<? include("footer.php"); ?>

</body>
</html>
