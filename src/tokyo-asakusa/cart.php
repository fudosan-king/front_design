<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
    		<?php require 'header2.php'; ?>

	      	<main>
	      		<section class="section_breakcumb">
	      			<div class="container">
	      				<div class="row">
	      					<div class="col-12">
	      						<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
									    <li class="breadcrumb-item"><a href="#">Home</a></li>
									    <li class="breadcrumb-item active" aria-current="page">Cart</li>
								  	</ol>
								</nav>
	      					</div>
	      				</div>
	      			</div>
	      		</section>

	      		<section class="section_sub section_border">
	      			<div class="container">
	      				<div class="row">
	      					<div class="col-12">
	      						<h2 class="headline headline_sub">My shopping cart</h2>
	      						<div class="row">
	      							<div class="col-12 col-md-10 mx-auto">
	      								<table class="table table_shoppingcart">
	      									<thead>
	      										<tr>
	      											<th width="10%"></th>
	      											<th>Product</th>
	      											<th>Price</th>
	      											<th>Quantity</th>
	      											<th>Total</th>
	      										</tr>
	      									</thead>
	      									<tbody>
	      										<tr>
	      											<td><img src="images/1x/pro01.jpg" alt="" class="img-fluid"></td>
	      											<td>3 X ORGANIC DRISCOLL'S BLACKBERRY 170G</td>
	      											<td>$25.50</td>
	      											<td>1</td>
	      											<td>$54.44</td>
	      										</tr>
	      										<tr>
	      											<td><img src="images/1x/pro01.jpg" alt="" class="img-fluid"></td>
	      											<td>3 X ORGANIC DRISCOLL'S BLACKBERRY 170G</td>
	      											<td>$25.50</td>
	      											<td>1</td>
	      											<td>$54.44</td>
	      										</tr>
	      										<tr>
	      											<td colspan="3"><p class="text-right mb-0"><b>DELIVERY DATE</b></p></td>
	      											<td colspan="2"><p class="text-right"><i class="fal fa-calendar-alt"></i> <b>Tuesday, 11/6</b></p></td>
	      										</tr>
	      										<tr>
	      											<td colspan="3"><p class="text-right mb-0"><b>DELIVERY TIME</b></p></td>
	      											<td colspan="2"><p class="text-right"><i class="fal fa-clock"></i> <b>1PM - 4PM</b></p></td>
	      										</tr>
	      										<tr>
	      											<td colspan="5">
	      												<p class="text-right"><b>$102.51 to FREE delivery.</b> 
		      												<i class="fas fa-question-circle fa-lg green" data-toggle="tooltip" data-placement="left" title="Tooltip on left"></i>
		      											</p>
	      											</td>
	      										</tr>
	      										<tr>
	      											<td colspan="2">
	      												<div class="box_promotion">
				      										<div class="form-group">
				      											<input type="text" class="form-control" placeholder="Enter Promotion Code">
				      											<a href="#" class="btn btnApplycode">APPLY CODE</a>
				      										</div>
			      										</div>
	      											</td>
	      											<td colspan="3">
	      												<div class="row">
	      													<div class="col-6 mb-2"><b>SUBTOTAL</b></div>
	      													<div class="col-6 mb-2"><b>$47.49</b></div>
	      													<div class="col-6 mb-2"><b>DELIVERY</b></div>
	      													<div class="col-6 mb-2"><b>S6.95</b></div>
	      													<div class="col-6 mb-2"><b>TOTAL</b></div>
	      													<div class="col-6 mb-2"><b>$54.44</b></div>
	      													<div class="col-6 mb-2"><b>TOTAL SAVINGS</b></div>
	      													<div class="col-6 mb-2"><b>$33.33 (38%)</b></div>
	      												</div>
	      											</td>
	      										</tr>
	      									</tbody>
	      								</table>
	      							</div>
	      						</div>
	      						<hr>
	      						<div class="row mt-5">
	      							<div class="col-6">
			      						<a href="categories.php" class="btn btnGray"><i class="fal fa-long-arrow-left fa-lg"></i> COUTINUE SHOPPING</a>
			      					</div>
			      					<div class="col-6 text-right">
			      						<a href="checkout.php" class="btn btn_Green">GO TO CHECKOUT <i class="fal fa-long-arrow-right fa-lg"></i></a>
			      					</div>
	      						</div>
	      					</div>
	      					
	      				</div>
	      			</div>
	      		</section>

	      		

	      		<?php require 'section_newsletter.php'; ?>

	      	</main>

	      	<?php require 'footer.php'; ?>        
    </div>

    <?php require 'js-footer.php'; ?>

</body>

</html>