<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		include("head.php");
	 ?>
</head>
<body>
	<header>
		<?php 
			include("navbar.php");
		 ?>
	</header>
	<main class="content check-out" id="check-out">
		<section class="page-title">			
			<h2 class="text-center">Check Out</h2>
		</section>
		<section class="grid col-7-3 gap-default wrapper">
			<div class="billing-details-form">
				<h1>Billing Details</h1>
				<form action="place-order.php" method="post" class="">
					<div class="f-l-names">
						<ul class="h-fields">
							<li>
								<label for="f-name" class="mendatory">First Name</label>
								<input type="text" id="f-name" placeholder="First Name"></li>
							<li>
								<label for="l-name" class="mendatory">Last Name</label>
								<input type="text" id="l-name" placeholder="Last Name"></li>
						</ul>
					</div>
					<div class="company-name">
						<label for="cmp-name">Company Name</label>
						<input type="text" id="cmp-name" class="cmp-name">
					</div>
					<div class="country-name">
						<label for="cnt-name" id="">Country</label>
						<select name="countries" id="cnt-name" class="form-dropdown">
							<option value="usa">USA</option>
							<option value="can">Canada</option>
							<option value="ind">India</option>
							<option value="cn">China</option>
							<option value="cmb">Columbia</option>
						</select>
					</div>
					<div class="adrs-details">
						<label for="adrs-line-1" class="mendatory">Address</label>
						<input type="text" id="adrs-line-1" placeholder="Address Line 1">
						<input type="text" id="adrs-line-2" placeholder="Address Line 2">
						<label for="town-city" class="mendatory">Town/City</label>
						<input type="text" id="town-city" placeholder="Town/City">
						<label for="cnt-box" class="mendatory">Country</label>
						<input type="text" id="cnt-box" placeholder="Country id your residence">
						<label for="postal_code" class="mendatory">Postal Code / Zip code</label>
						<input type="text" id="postal_code" placeholder="Postal / Zip code">
					</div>
					<div class="contact-details">
						<ul class="h-fields">
							<li>
								<label for="phone" class="mendatory">Phone</label>
								<input type="tel" id="phone" placeholder="Phone Number">
							</li>
							<li>
								<label for="email" class="mendatory">E-mail</label>
								<input type="email" id="email" placeholder="E-mail address">
							</li>
						</ul>
					</div>
					<div class="create-account">
						<input type="checkbox" name="create-account" value="create-account" id="create-account">
						<label for="create-account">Create Account</label>
					</div>
				</form>
				
			</div>
			<div class="inventory-list">
				<h2>Your Order</h2>
				<div class="invoice-summary">
					<ul>
						<li class="title-heads">
							<span class="text-left"><strong>Product</strong></span>
							<span class="text-right"><strong>Total</strong></span>
						</li>
						<li class="item-seperator">
							<span class="text-left item-purchased">
								<ul>
									<li class="product-name">Herbal Oil</li>
									<li class="product-counts">2</li>
								</ul>
							</span>
							<span class="text-right item-total">
								<strong>36$</strong>
							</span>
						</li>
						<li class="item-seperator">
							<span class="text-left item-purchased">
								<ul>
									<li class="product-name">Herbal Oil</li>
									<li class="product-counts">2</li>
								</ul>
							</span>
							<span class="text-right item-total">
								<strong>12$</strong>
							</span>
						</li>
						<li>
							<ul class="purchase-subtotal">
								<li class="total">
									<strong>Subtotal</strong>
								</li>
								<li class="amount">
									<strong>48$</strong>
								</li>
							</ul>
						</li>
						<li>
							<ul class="purchase-total">
								<li class="total">
									<strong>Total</strong>
								</li>
								<li class="amount">
									<strong>48$</strong>
								</li>
							</ul>
						</li>
					</ul>

				</div>
				<div class="payment-mode">
					<ul>
						<li>
							<input type="radio" name="payment-option" value="check-pay" checked> Check Payment<br>
						</li>
						<li>
							Please send a check to Swagat Hebals, 3765 Finnian way, Dublin, CA - 94568
						</li>
						<li>
							<input type="radio" name="payment-option" value="" checked> PayPal<br>
						</li>
					</ul>
				</div>
				<div class="submit-button">
					<button class="btn btn-success">
						PLACE ORDER
					</button>
				</div>

				
			</div>
		</section>
	</main>
	<footer class="default">
		<?php 
			include("footer.php");
		 ?>
	</footer>

</body>
</html>