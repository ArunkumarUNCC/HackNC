<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Eventile</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

    <!-- javascript
    ================================================== -->

    <script src="js/jquery.js"></script>
	<script src="js/jquery-1.11.2.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/portfolio/jquery.quicksand.js"></script>
	<script src="js/portfolio/setting.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
    
    <script type="text/javascript">
		$(function(){
			$.ajax({
    			url: "header.php",
    			success: function (data) { $('#wrapper').prepend(data);
					$('.navbar-nav li.active').removeClass("active");
					$("#polarity").addClass("active"); 
					},
    			dataType: 'html'
	  		});
			
			$.ajax({
    			url: "footer.php",
    			success: function (data) { $('footer').append(data); },
    			dataType: 'html'
	  		});
		});
		
	</script>

</head>

<body>
<div id="wrapper">	
	<section id="featured">
    
    </section>
    
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Search Plans</span></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	
    <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-6" style="margin:0 auto;float:none">
						<div class="box">
                        	<form name="detailsForm">
							<div class="box-gray aligncenter">
								<h4>Enter Details</h4>
								<div class="icon">
								<i class="fa fa-desktop fa-3x"></i>
								</div>
								<p>
                                	
                                 <input type="text" name="getHashTag" id="getHashTag" placeholder="Give any tag" />	
                                 	<input type="text" name="getLocation" id="getLocation" placeholder="Give Location" />
								 
								</p>
									
							</div>
							<div class="box-bottom">
								<input type="submit" value="Submit" class="btn btn-theme" />
							</div>
                            </form>
						</div>
					</div>
					<!--<div class="col-lg-6">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Enter Location</h4>
								<div class="icon">
								<i class="fa fa-pagelines fa-3x"></i>
								</div>
								<p>
								 <input type="text" name="getLocation" id="getLocation" placeholder="Give Location" />
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>-->
					
					
				</div>
			</div>
		</div>
    </div>    
    
	<footer>
	</footer>
</div>
</body>