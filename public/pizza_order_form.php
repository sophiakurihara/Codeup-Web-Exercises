<!DOCTYPE html>
<html>
	<head>
		<title>Pizza!!!</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<main>
		<h1>Pizza is life...</h1>
			<p><strong>SO LET'S ORDER ONE!</strong></p>

		<form method="POST" action="/pizza_order_form.php">

		<h4>Where should we send it?</h4>
		<p>
			<label for="pick_up">I'm choosing Carryout.</label>
			<input type="checkbox" name="pick_up" id="pick_up">
		</p>

		<section>
			<p>
			<label for="address_type">Address Type:</label>
			<select name="address_type" id="address_type">
				<option value="0" selected>House</option>
				<option value="1">Apartment</option>
				<option value="2">Dorm</option>
				<option value="3">Business</option>
				<option value="4">Hotel</option>
				<option value="5">Other</option>
			</select>
			</p>
			<!-- street address -->
			<p>
				<label for="street_address">Street Address:</label>
				<input type="text" name="street_address" id="street_address" autofocus>
			</p>
			<!-- suite/apt# -->
			<p>
				<label for="suite_number">Suite/Apt #:</label>
				<input type="text" name="suite_number" id="suite_number">
			</p>
			<!-- city -->
			<p>
				<label for="city">City and State:</label>
				<input type="text" name="city" id="city">
			</p>
			<!-- zip -->
			<p>
				<label for="zip_code">Zip Code:</label>
				<input type="text" name="zip_code" id="zip_code">
			</p>

		</section>
		<header>
		<h2>Build your pizza!</h2>
		</header>
			<h4>Choose size and crust:</h4>
		<p>
			<label for="pizza_size">Size</label>
			<select id="pizza_size" name="pizza_size">
				<option value="0">Small 10"</option>
				<option value="1">Medium 12"</option>
				<option value="2" selected>Large 14"</option>
				<option value="3">Extra Large 16"</option>
			</select>
		</p>
		<p>
			<label for="pizza_crust">Crust</label>
			<select id="pizza_crust" name="pizza_crust">
				<option value="0" selected>Hand Tossed</option>
				<option value="1">Handmade Pan</option>
				<option value="2">Crunchy Thin Crust</option>
				<option value="3">Brooklyn Style</option>
				<option value="4">Gluten-Free</option>
			</select>
		</p>
		<p>
			<label for="quantity">How Many Pizzas?</label>
			<input type="text" name="quantity" id="quantity">
		</p>
		</section>
		<section>
			<h4>Choose cheese and sauce:</h4>
			<p>
				<label for="cheese">Cheese?</label>
				<input type="checkbox" name="cheese" id="cheese">
			</p>
			<label>
				<input type="radio" name="a_cheese" value="Left">
				Left
			</label>
			<label>
				<input type="radio" name="a_cheese" value="Right">
				Right
			</label>
			<label>
				<input type="radio" name="a_cheese" value="Both" checked>
				Both
			</label>
			<select id="cheese_type" name="cheese_type">
				<option>Light</option>
				<option selected>Normal</option>
				<option>Extra</option>
				<option>Double</option>
			</select>
			<p>
				<label for="sauce">Sauce?</label>
				<input type="checkbox" name="sauce" id="sauce">
			</p>
			<p>
				<label>
					<input type="radio" name="a_sauce" value="tomato sauce" checked>
					Tomato Sauce
				</label>
				<label>
					<input type="radio" name="a_sauce" value="marinara sauce">
					Marinara Sauce
				</label>
				<label>
					<input type="radio" name="a_sauce" value="garlic parmesan">
					Garlic Parmesan
				</label>
				<label>
					<input type="radio" name="a_sauce" value="bbq sauce">
					BBQ Sauce
				</label>
				<label>
					<input type="radio" name="a_sauce" value="alfredo sauce">
					Alfredo Sauce
				</label>
				<select id="sauce_type" name="sauce_type">
					<option>Light</option>
					<option selected>Normal</option>
					<option>Extra</option>
					<option>Double</option>
				</select>
			</p>
			</section>
			<section>
				<h4>Choose Toppings:</h4>
				<p>
					Choose Meats:
				</p>
				<p>
				<label for="Pepperoni">Pepperoni</label>
				<input type="checkbox" name="Pepperoni" id="Pepperoni">
				<label for="Italian Sausage">Italian Sausage</label>
				<input type="checkbox" name="Italian Sausage" id="Italian Sausage">
				<label for="Bacon">Bacon</label>
				<input type="checkbox" name="Bacon" id="Bacon">
				<label for="Chicken">Chicken</label>
				<input type="checkbox" name="Chicken" id="Chicken">
				<label for="Salami">Salami</label>
				<input type="checkbox" name="Salami" id="Salami">
				</p>
				<p>
				<label for="Ham">Ham</label>
				<input type="checkbox" name="Ham" id="Ham">
				<label for="Beef">Beef</label>
				<input type="checkbox" name="Beef" id="Beef">
				</p>
				<p>
					Choose Non-Meats:
				</p>
				<p>
				<label for="Mushrooms">Mushrooms</label>
				<input type="checkbox" name="Mushrooms" id="Mushrooms">
				<label for="Onions">Onions</label>
				<input type="checkbox" name="Onions" id="Onions">
				<label for="Spinach">Spinach</label>
				<input type="checkbox" name="Spinach" id="Spinach">
				<label for="Jalapenos">Jalapenos</label>
				<input type="checkbox" name="Jalapenos" id="Jalapenos">
				<label for="Pineapples">Pineapples</label>
				<input type="checkbox" name="Pineapples" id="Pineapples">
				</p>
				<p>
				<label for="Olives">Olives<Roasted Red Peppers/label>
				<input type="checkbox" name="Olives" id="Olives">
				<label for="Roasted Red Peppers">Roasted Red Peppers</label>
				<input type="checkbox" name="Roasted Red Peppers" id="Roasted Red Peppers">
				<label for="Green Peppers">Green Peppers</label>
				<input type="checkbox" name="Green Peppers" id="Green Peppers">
				<label for="Diced Tomatoes">Diced Tomatoes</label>
				<input type="checkbox" name="Diced Tomatoes" id="Diced Tomatoes">
				</p>
				<textarea id="special_instructions" name="special_instructions" rows="7" cols="30">Special Instructions</textarea>
				<p>
					<button type="submit" name="order" id="order">Place Order</button>
				</p>
		</main>
		</form>
	</body>
</html>