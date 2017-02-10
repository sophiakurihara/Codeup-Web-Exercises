<?php 
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Practice</title>
	
	<link rel="stylesheet" href="css/scratchpad.css">
</head>
<body>
	<h1><a href="form.php?search_query=javascript+the+good+parts">All Youtube Results for "JavaScript The Good Parts</a></h1>

	<h2>Examples of links using query strings</h2>
    <ul>
        <li><a href="?page=2">Page 2</a></li>
        <li><a href="?page=2&limit=10">Page 2, Limit to 10 results at a time</a>
        <li><a href="?zipcode=78205&property_type=condo">Condos in 78205</a></li>
        <li><a href="http://caniuse.com/?feat=input-placeholder#feat=input-placeholder">Can I use placeholders instead of labels?</a></li>
    </ul>

    <h1>Property search below:</h1>
    <!-- Form's action is where the request goes -->
	<form action="form.php" method="GET">
		<p>
			<label for="zipcode">zipcode</label>
			<input type="text" id="zipcode" name="zipcode">
		</p>
		<p>
			<label for="property_type">property_type</label>
			<input type="text" id="property_type" name="property_type">
		</p>
		<p>
			<label for="min_price">Min Price</label>
			<input type="text" name="min_price" id="min_price">
		</p>
		<p>
			<label for="max_price">Max Price</label>
			<input type="text" name="max_price" id="max_price">
		</p>
		<button type="submit">Search now!</button>
	</form>

	<h1>Search youtube</h1>   
	<form action="https://youtube.com/results" method="GET">
		<p>
			<label for="search_query">Search</label>
			<input type="text" name="search_query" id="search_query">
		</p>
		<button type="submit">Find videos</button>
		
	</form>
</body>
</html>