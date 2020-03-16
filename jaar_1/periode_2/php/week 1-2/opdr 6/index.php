<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Opdracht</title>
	<style>
	table{
		text-align: left;
		width: 700px;
	}
</style>
</head>
<body>
	<?php

	$products = array(
		"Banaan" => array("Description" => "Lekker fruitig", "Price" => "0.99", "qt" => 0),
		"Appel" => array("Description" => "Gold Brand", "Price" => "2.99", "qt" => 0),
		"Peer" => array("Description" => "Ook lekker fruitig", "Price" => "1.50", "qt" => 0),
		"Aardbei" => array("Description" => "Rood en klein", "Price" => "0.50", "qt" => 0),
		"Kiwi" => array("Description" => "Geïmporteerd uit China", "Price" => "12.95", "qt" => 0),
	);

	if(isset($_POST["Update"]) || isset($_POST["submit"])){
		foreach ($_POST["products"] as $name => $qt){
			$products[$name]["qt"] = $qt;
		}
	}

	$total = 0;
	foreach ($products as $product ){
		$total += $product["Price"]*$product["qt"];
	}

	$msg = "";
	if(isset($_POST["submit"])){
		if($total > 0) {
			$file = fopen("OnlineOrders/" . time() . ".txt", "w+");
			foreach ($products as $name => $product) {
				if ($product["qt"] > 0) {
					fwrite($file, $name . " - " . $product["Description"] . " - € " . $product["Price"] . " x " . $product["qt"] . " = € " . $product["Price"] * $product["qt"] . "\n");
				}
			}
			fwrite($file, "\nTotal: € " . $total . "\n");
			fclose($file);

			foreach ($products as $name => $product) {
				$products[$name]["qt"] = 0;
			}
			$total = 0;
			$msg = "Your order has been submitted!";
		}else{
			$msg = "Please choose one or more items!";
		}
	}

	?>

	<h1>Order Form</h1>
	<hr>

	<form action="" method="post">

		<table>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th></th>
			<th>Quantity</th>
			<th></th>
			<th>Total</th>

			<?php foreach ($products as $name => $product): ?>
				<tr>
					<td><?=$name?></td>
					<td><?=$product["Description"]?></td>
					<td>&euro; <?=$product["Price"]?></td>
					<td>x</td>
					<td><input type="number" value="<?=$product["qt"]?>" name="products[<?=$name?>]"/></td>
					<td>=</td>
					<td>&euro; <?=$product["Price"]*$product["qt"]?></td>
				</tr>
			<?php endforeach; ?>
		</table>
		<p>Total: &euro; <?=$total?></p>
		<input type="submit" value="Update" name="Update">
		<input type="submit" value="Submit" name="submit">
		<?=$msg?>

	</form>
</body>
</html>
