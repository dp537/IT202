<html>
<head>
	<script>
	function mySamples(){
	//var myVar = 10;
	//alert("My var is" + myVar);
	console.log("Hello world");

	//var name = prompt("What's your name?");
	//alert("Hello, " + name);
	var number = 0;
	for(var i =0; i< 10; i++){
		number += 0.1;
	}
	console.log("Added float is " + number);
	
	var myParagraph = document.getElementById("myPara");
	myParagraph.innerText = "Changed it";
	let number1 = (prompt("Pick a number"));
	let number2 = prompt("Pick another number");
	myParagraph.innerText = number1 + " + " +  number2 + "  = ";
	myParagraph.innerText += (number1+number2);
	console.log(myParagraph);
	//let myPar2 = myParagraph;
	}
	</script>
</head>
<body onload = "mySamples();">
	<p id ="myPara">Just showing that we loaded something...</p>
</body>
</html>
<?php

if (isset($_Get['name'])){
	echo "You're GET name is " . $_GET['name'];
}
?>
