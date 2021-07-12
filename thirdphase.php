<!DOCTYPE html>
<html>
<head>

				<meta charset= "utf-8">

		<title> Control </title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<link rel="stylesheet" type="text/css" href="style.css">

<script src="sliders.js"></script>
	</head>

 
	<body>
	
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

	   $sql = "INSERT INTO direction ( ID ,Dire ) 
               VALUES ( NULL,'$_POST[Button1]')";

                      if (mysqli_query($conn,$sql)) {
						  if($_POST['Button1'] == "FORWARD"){  print("<h1>F</h1>");}
						  elseif ($_POST['Button1'] == "LEFT"){ print("<h1>L</h1>");}
						  elseif ($_POST['Button1'] == "STOP"){ print("<h1>S</h1>");}
						  elseif ($_POST['Button1'] == "RIGHT"){ print("<h1>R</h1>");}
						  else{ print("<h1>B</h1>");}
						  
                          } else {
                            echo "Error: " . "<br>" . mysqli_error($sql);
                      }


   	

mysqli_close($conn);
?>	
</table>
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