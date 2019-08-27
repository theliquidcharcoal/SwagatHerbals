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
		 <section class="page-title">			
			<h2 class="text-center">Products / SUVALIN</h2>
		</section>
	</header>
	<main class="content single-product-body wrapper">
		<section class="grid col-2 gap-default">
			<div class="product-slider">
				<div class="main-image">
					<h2>Image 1</h2>
					<img class="img-responsive" src="images/Vintage PSD 2.jpg" alt="default">
				</div>
				<div class="thumb-images">
					<img class="img-responsive active" src="images/Vintage PSD 3.jpg" alt="Image 1">
					<img class="img-responsive" src="images/Vintage PSD 4.jpg" alt="Image 2">
					<img class="img-responsive" src="images/Vintage PSD 5.jpg" alt="Image 3">
					<!-- <img src="http://placehold.it/250x200?text=bird" alt="Image 4"> -->
				</div>
			</div>
			<div class="product-information">
				<h2 class="product-title">Product Name</h2>
				<div class="product-price"><span class="">19$</span></div>
				<div class="product-ratings">
					<ul>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="far fa-star"></i></li>
						<li><i class="far fa-star"></i></li>
						<li class="review-counts">(1 customer ratings)</li>
					</ul>
				</div>
				<div class="product-details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, dolores qui! Quidem harum, exercitationem quia porro. Architecto modi placeat provident nemo, laboriosam magni distinctio excepturi aliquam, sapiente perferendis esse repellat.</p>
					<ul class="benefits-list">
						<li data-icon="&#xe052;">All products meet quality standards.</li>
						<li data-icon="&#xe052;">100% Natural</li>
						<li data-icon="&#xe052;">100% Ayurvedic</li>
						<li data-icon="&#xe052;">100% Effective</li>
					</ul>
				</div>
				<div class="purchase-section">
					<ul>
						<li class="add-renove-product">
							<span class="icon_minus_alt2 addQty"></span>
							<span class="total_prod_count totalQty"> 2 </span>
							<span class="icon_plus_alt2 minusQty"></span>
						</li>
						<li class="add-to-cart-btn">
							<span class="btn btn-success"><a href="#">ADD TO CART</a></span>
						</li>
					</ul>
				</div>
				<div class="product-cat-details">
					<ul>
						<li>
							<strong>SKU</strong>
							<span>:</span>
							<span>156</span>
						</li>
						<li>
							<strong>CATEGORY</strong>
							<span>:</span>
							<span>MALE</span>
						</li>
						<li>
							<strong>TAGS</strong>
							<span>:</span>
							<span>HEALTHY, ORGANIC, AYURVEDIC</span>
						</li>
					</ul>
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