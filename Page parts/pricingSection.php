<head>
<style>
/*=============================
	Start Pricing Table CSS
===============================*/
.pricing-table.section{
   padding:100px 0;
}
.pricing-table .section-title{
   text-align: center;
   margin-bottom: 60px;
   padding: 0 250px;
}
.pricing-table .section-title h2 {
   font-size: 32px;
   font-weight: 600;
   text-transform: capitalize;
   margin-bottom: 24px;
   position: relative;
   color: #2C2D3F;
}
.section-title p{
   font-size:15px;
   color:#888;
   margin-top:15px;
}



.pricing-table{
	background:#f9f9f9;
	position:relative;
}
.pricing-table .single-table {
	background: #fff;
	border:1px solid #ddd;
	text-align: center;
	position: relative;
	overflow: hidden;
	margin: 15px 0;
	padding:45px 35px 30px 35px;
}
/* Table Head */
.pricing-table .single-table .table-head {
	text-align:center;
}
.pricing-table .single-table .icon i{
	font-size:65px;
	color:#1a76d1;
}
.pricing-table .single-table .title {
	font-size: 21px;
	color: #2C2D3F;
	margin-top: 30px;
	margin-bottom: 15px;
}
.pricing-table .single-table .amount {
	font-size:36px;
	font-weight:600;
	color:#1a76d1;
}
.pricing-table .single-table .amount span{
	display:inline-block;
	font-size:14px;
	font-weight:400;
	color:#868686;
	margin-left:8px;
}
/* Table List */
.pricing-table .single-table .table-list {
	padding: 10px 0;
	text-align: left;
	margin-top: 30px;
}
.pricing-table .table-list li {
	position: relative;
	color: #666;
	text-transform: capitalize;
	margin-bottom: 18px;
	padding-right: 32px;
}
.pricing-table .table-list li:last-child{
	margin-bottom:0px;
}
.pricing-table .table-list li.cross i{
	background:#aaaaaa;
}
.pricing-table .table-list i {
	font-size: 7px;
	text-align: center;
	margin-right: 10px;
	position: absolute;
	right: 0;
	height: 16px;
	width: 16px;
	line-height: 16px;
	text-align: center;
	color: #fff;
	background: #1a76d1;
	border-radius: 100%;
	padding-left: 1px;
}

/* Table Bottom */
.pricing-table .table-bottom {
	margin-top: 25px;
}
.pricing-table .btn {
	padding: 12px 25px;
	width: 100%;
	color:#fff;
    background-color: blue;
}
.pricing-table .btn:before{
	background:#2C2D3F;
}
.pricing-table .btn:hover{
	color:white;
}
.pricing-table .btn i {
	font-size: 16px;
	margin-right: 10px;
}
/*=============================
	End Pricing Table CSS
===============================*/

</style>
</head>
<body>
 <!-- Pricing Table -->
<section class="pricing-table section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>We Provide You The Best Treatment In Resonable Price</h2>
					<img src="assets/Uplods/section-img.png" alt="#">
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Single Table -->
			<div class="col-lg-4 col-md-12 col-12">
				<div class="single-table">
					<!-- Table Head -->
					<div class="table-head">
						<div class="icon">
							<i class="fas fa-user-md"></i> <!-- استبدال icofont-ui-cut -->
						</div>
						<h4 class="title">Plastic Surgery</h4>
						<div class="price">
							<p class="amount">$199<span>/ Per Visit</span></p>
						</div>	
					</div>
					<!-- Table List -->
					<ul class="table-list">
						<li><i class="fas fa-check"></i>Lorem ipsum dolor sit</li>
						<li><i class="fas fa-check"></i>Cubitur sollicitudin fentum</li>
						<li class="cross"><i class="fas fa-times"></i>Nullam interdum enim</li>
						<li class="cross"><i class="fas fa-times"></i>Donec ultricies metus</li>
						<li class="cross"><i class="fas fa-times"></i>Pellentesque eget nibh</li>
					</ul>
					<div class="table-bottom">
						<a class="btn" href="appointment.php">Book Now</a>
					</div>
				</div>
			</div>
			<!-- End Single Table-->

			<!-- Single Table -->
			<div class="col-lg-4 col-md-12 col-12">
				<div class="single-table">
					<!-- Table Head -->
					<div class="table-head">
						<div class="icon">
							<i class="fas fa-tooth"></i> 
						</div>
						<h4 class="title">Teeth Whitening</h4>
						<div class="price">
							<p class="amount">$299<span>/ Per Visit</span></p>
						</div>	
					</div>
					<!-- Table List -->
					<ul class="table-list">
						<li><i class="fas fa-check"></i>Lorem ipsum dolor sit</li>
						<li><i class="fas fa-check"></i>Cubitur sollicitudin fentum</li>
						<li><i class="fas fa-check"></i>Nullam interdum enim</li>
						<li class="cross"><i class="fas fa-times"></i>Donec ultricies metus</li>
						<li class="cross"><i class="fas fa-times"></i>Pellentesque eget nibh</li>
					</ul>
					<div class="table-bottom">
						<a class="btn" href="appointment.php">Book Now</a>
					</div>
				</div>
			</div>
			<!-- End Single Table-->

			<!-- Single Table -->
			<div class="col-lg-4 col-md-12 col-12">
				<div class="single-table">
					<!-- Table Head -->
					<div class="table-head">
						<div class="icon">
							<i class="fas fa-heartbeat"></i>
						</div>
						<h4 class="title">Heart Surgery</h4>
						<div class="price">
							<p class="amount">$399<span>/ Per Visit</span></p>
						</div>	
					</div>
					<!-- Table List -->
					<ul class="table-list">
						<li><i class="fas fa-check"></i>Lorem ipsum dolor sit</li>
						<li><i class="fas fa-check"></i>Cubitur sollicitudin fentum</li>
						<li><i class="fas fa-check"></i>Nullam interdum enim</li>
						<li><i class="fas fa-check"></i>Donec ultricies metus</li>
						<li><i class="fas fa-check"></i>Pellentesque eget nibh</li>
					</ul>
					<div class="table-bottom">
						<a class="btn" href="appointment.php">Book Now</a>
					</div>
				</div>
			</div>
			<!-- End Single Table-->
		</div>	
	</div>	
</section>	
<!--/ End Pricing Table -->
</body>