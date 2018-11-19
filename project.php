


<?php

//$_REQUEST is used for getting both get and post
if($_SERVER["REQUEST_METHOD"]=="GET")
{
	echo "<html>";
	$name=$_REQUEST["tname"];//name should be the same as given in the html file attribute name
	$head=$_REQUEST["head"];
	$head_size=$_REQUEST["head_size"];
	$head_style=$_REQUEST["head_style"];
	$head_color=$_REQUEST["head_color"];
	$bgcolor=$_REQUEST["bgcolor"];
	$para=$_REQUEST["para"];
	$color=$_REQUEST["color"];
	$size=$_REQUEST["size"];
	$style=$_REQUEST["style"];
	$image=$_REQUEST["img_file"];
	$image_height=$_REQUEST["img_height"];
	$image_width=$_REQUEST["img_width"];
	$code=$_REQUEST["code"];
	
	
	echo "<head><title>$name
	</title></head>
	 <style type=text/css>
	 body {font-family:$style;color:$color;font-size:$size;}
	 h1 {font-size:$head_size;font-family:$head_style;color:$head_color;}
	 img {height:$image_height;width:$image_width;}
	 #myimg {position: absolute;z-index: 9;background-color: #f1f1f1;border: 1px solid #d3d3d3;}
	 .ok {position:relative;background-color:blue;color:white;left:650px}
	 </style>";
	 echo "<body bgcolor=$bgcolor >";

	echo "<h1 align=center>$head</h1>";
	$string = "HelloWorld.fdgfdgfg.gfdgdfgfdgf.";  
	$char="";
	for ($i=0; $i<strlen($para); $i++) 
	{  
		if($para[$i]=="|")
		{
		
		echo "<p>$char<p>";
		$char="";
		}
	else
		$char=$char.$para[$i];
	}
			
		
    
      
    

	//echo "<center><img src=$image></center>";
	echo "<br><br>
	<div id='myimg'>
		<img src=$image></div>";
	echo "$code";
	
	echo "<form action='feedback.html'>
    <input type='submit' value='OK' class='ok' />
</form>";
	echo "</body>";
	echo "</html>";

 echo" <script language='javascript'>
dragElement(document.getElementById('myimg'));
function dragElement(elmnt)
 {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  elmnt.onmousedown = dragMouseDown;
  
function dragMouseDown(e)
 {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }
function elementDrag(e)
 {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + 'px';
    elmnt.style.left = (elmnt.offsetLeft - pos1) + 'px';
  }
function closeDragElement()
 {
    // stop moving when mouse button is released:
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>";

}


?>

