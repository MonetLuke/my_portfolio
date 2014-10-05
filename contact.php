<!DOCTYPE html>
<head>
<title>Get in touch!</title>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet" media="screen" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" /> 
<link rel="stylesheet" type="text/css" href="css_sizes/screen_small.css" media="only screen and (min-width:50px) and (max-width:450px)"/>
<link rel="stylesheet" type="text/css" href="css_sizes/screen_medium.css" media="only screen and (min-width:451px) and (max-width:800px)" />  
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->


<link href='http://fonts.googleapis.com/css?family=Orbitron:500' rel='stylesheet' type='text/css'>
</head>

<body class="texture">

<!-- note: texture class is the background //--> 

<!-- header //--> 

<? include("header.php"); ?>  

<!--  main body //--> 

    <div id="con_body" > 
        <h2> TO CONTACT PLEASE FILL IN FIELDS </h2>
        <form action="form-complete.php" method="post" class="forms" >      
            <h2>  NAME  </h2>
            <input id="name" class="box" type="text" name="name" maxlength="20" required /> 
       
            <h2> EMAIL  </h2>
            <input id="email" class="box" type="email" name="email" required /> 
           
            <h2>  PHONE NUMBER </h2> 
            <input id="number" class="box" type="text" name="number" /> 
             
            <h2>  MESSAGE </h2>
            <textarea id="message" name="message" rows="5" cols="56" required placeholder="send a message">   
            </textarea> 
            <br/> 
            <br/>
            <br/>
            <input type="submit" value="Submit"  /> 
        </form>
    
    </div> 
    
<? include("footer.php");  ?>   
    
</body>
</html>
