<?php
$products=array("Ketchup",
		 "Mayonnaise",
		 "Mustard",
		 "Sour cream");

function displayContent($tag, $textString){
	echo "<$tag> $textString </$tag><br>";
}

$productsArray=array("[0]"=>"Ketchup",
		 	"[1]"=>"Mayonnaise",
		 	"[2]"=>"Mustard",
		 	"[3]"=>"Sour cream");

function displayContent1($tag, $index, $value){
	echo "<$tag> $index, $value </$tag><br>";
}

$productInfo = array(
			array($products[0], "info0", "info00"),
		     	array($products[1], "info1", "info11")

);

?>
<!DOCTYPE html>
<html>
<head>
<title>What 2 eat? - The Food Guide</title>
</head>
<body>
  <h1>List of the products</h1>
	 <ul>
	  <?php
		foreach($products as $value){
			echo displayContent("li", $value);
		
		}
	  ?>
	</ul> 
   <h1>List of the products1</h1>
	 <ul>
	  <?php
		foreach($productsArray as $index => $index_value){
			echo displayContent1("li", $index, $index_value);
		}
	  ?>
	</ul> 

<h1>About Products:</h1>
<ul>
	<?php 

			foreach($productInfo as $value){
				foreach($value as $display){
				echo displayContent("li", $display);
				}
		
		}
		//echo $productInfo[0][0].": ".$productInfo[0][1].", ".			$productInfo[0][2].".<br>";

		//echo $productInfo[1][0].":  ".$productInfo[1][1].", 				".$productInfo[1][2].".<br>";
	?>
</ul>
</body>
</html>



