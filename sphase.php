<!DOCTYPE html>
<html>
<head>

		
		<title> Control </title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<link rel="stylesheet" type="text/css" href="style.css">

<script src="sliders.js"></script>
	</head>

 
	<body>
	
	
	
	<form name = "formControl" action="sphase.php" method="post">

<div style="text-align:center;">
  

<label class="slidecontainer"> <p>  <span id = "p1"> 50</span> :محرك 1 </p> 
  <input type="range" min="1" max="100" value="50" class="slider" id="slid1" name="n11" onchange="myFunction()" >
</lable>

<div class="slidecontainer"> <p> <span id = "p2"  > 50 </span> : محرك 2</p>
  <input type="range" min="1" max="100" value="50" class="slider" id="slid2"  name="n22" onchange="myFunction()">
</div>


<label class="slidecontainer"> <p> <span id = "p3"  >50 </span> : محرك 3 </p>
  <input type="range" min="1" max="100" value="50" class="slider" id="slid3" name="n3" onchange="myFunction()">
</label>

<label class="slidecontainer"> <p> <span id = "p4"  > 50 </span>: محرك 4  </p>
  <input type="range" min="1" max="100" value="50" class="slider" id="slid4" name="n4" onchange="myFunction()">
</label>

<label class="slidecontainer"> <p> <span id = "p5"  > 50 </span> :محرك 5  </p>
  <input type="range" min="1" max="100" value="50" class="slider" id="slid5"  name="n5" onchange="myFunction()">
</label>

<label class="slidecontainer"> <p> <span id = "p6"  > 50 </span>: محرك 6 </p>
  <input type="range" min="1" max="100" value="50" class="slider" id="slid6"  name="n6" onchange="myFunction()">
</label>
  
  
</div>

<div style="text-align:center;padding:10px;margin-top:7px;">
<button type="submit" formaction="sphase.php" > حفظ </button>
<button type="submit">تشغيل</button>
</div>


<p></p><p></p>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot";




// Create connection
$conn = mysqli_connect($servername, $username, $password ,$dbname) or die(mysqli_error());

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "UPDATE armmove SET angle='$_POST[n11]'  WHERE id=1 ";

if (mysqli_query($conn,$sql1)) {
   
} else {
  echo "Error: " . "<br>" . mysqli_error($sql);
}
//////////////////////////////1
$sql2 = "UPDATE armmove SET angle='$_POST[n22]'  WHERE id=2 ";

if (mysqli_query($conn,$sql2)) {
   
} else {
  echo "Error: " . "<br>" . mysqli_error($sql);
}
///////////////////////////////////2
$sql3 = "UPDATE armmove SET angle='$_POST[n3]'  WHERE id=3 ";

if (mysqli_query($conn,$sql3)) {
  
} else {
  echo "Error: " . "<br>" . mysqli_error($sql);
}
/////////////////////////////////////3

$sql4 = "UPDATE armmove SET angle='$_POST[n4]'  WHERE id=4 ";

if (mysqli_query($conn,$sql4)) {
   
} else {
  echo "Error: " . "<br>" . mysqli_error($sql);
 
}////////////////////4


$sql5 = "UPDATE armmove SET angle='$_POST[n5]'  WHERE id=5 ";

if (mysqli_query($conn,$sql5)) {
   
} else {
  echo "Error: " . "<br>" . mysqli_error($sql);
}

/////////////////////////////////////////5

$sql6 = "UPDATE armmove SET angle='$_POST[n6]'  WHERE id=6 ";

if (mysqli_query($conn,$sql6)) {
   
} else {
  echo "Error: " . "<br>" . mysqli_error($sql);
}
///////////////////////////////////////////////////////////////

$sqlT = "SELECT  *  FROM armmove ";

if ($result = mysqli_query($conn,$sqlT)) {
  
   
?>	
<div class="DT">
<table>
<tr >
  <th>ID</th>
  <th>Angle</th>

</tr >
<?php 


 for ($x = 0 ; $row = mysqli_fetch_row($result) ; ++$x){
   
	print("<tr>");
	foreach($row as $key => $value)
    print("<td>$value</td>"); 
    print("</tr>");
}
  
} else {
  echo "Error: ". mysqli_error($sqlT);
}



?>	
</table>



<?php 
$sqlT = "SELECT  *  FROM offon ";

if ($result = mysqli_query($conn,$sqlT)) {
  
   
?>	


<table>
<tr >
  <th>ID</th>
  <th>OFF / ON</th>

</tr >
<?php 


 for ($x = 0 ; $row = mysqli_fetch_row($result) ; ++$x){
   
	print("<tr>");
	foreach($row as $key => $value)
	if( $value== "OFF"){
		 print("<td>ON</td>"); 
         
	}else{
         print("<td>$value</td>"); 
       
		 }
		 
		  print("</tr>");
}
  
} else {
  echo "Error: ". mysqli_error($sqlT);
}


mysqli_close($conn);
?>	


</table>
</div>





</form>


<form action="thirdphase.php" method="post">




<section style="text-align:center; padding-top:100px; padding-bottom:30px;"> 

<div>
<input  style="width:150px; padding:7px; margin: 4px;" name="Button1" type="submit" value="FORWARD" > 
</div>


<div>
<input style="width:90px; padding:7px; margin: 4px;"  name="Button1" type="submit" value="LEFT"> 
<input style="width:90px; padding:7px; margin: 4px;"  name="Button1" type="submit" value="STOP" > 
<input style="width:90px; padding:7px; margin: 4px;"  name="Button1" type="submit"  value="RIGHT"> 
</div>


<div>
<input style="width:150px; padding:7px; margin: 4px;" name="Button1" type="submit"  value="BACKWARD"> 
</div>


</section>

</form>

<script>
  window.watsonAssistantChatOptions = {
      integrationID: "0aa2e822-fbc4-457a-a7fd-6e06a0d4a0b3", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "71beaeb8-9485-40ac-9b7b-bb46721e8ec5", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>











	</body>
</html>