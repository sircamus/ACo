
<script>
	$( document ).ready(function() {
		var hash = location.hash
		, hashPieces = hash.split('?')
		, activeTab = $('[href=' + hashPieces[0] + ']');
		activeTab && activeTab.tab('show');
	});

</script>
<section id="slider" class="slider-parallax full-screen">

	<div class="slider-parallax-inner">
		<div style="margin-top:20px;" class="center">
			<div class="container">
				<ul id="myTab2" class="nav nav-pills boot-tabs">
					<li class="active"><a href="#start" data-toggle="tab">Inicial</a></li>
					<li><a href="#web" data-toggle="tab">Plataforma Web</a></li>
					<li><a href="#pro" data-toggle="tab">Profesional</a></li>
					<li><a href="<?php echo ROOT_URL; ?>contacto" class="pers">Personalizar Plan</a></li>
				</ul>
			</div>
			<div id="myTabContent2" class="tab-content">
				<div class="tab-pane fade in active" id="start">
					<div class="full-screen section nopadding nomargin noborder ohidden" style="background-image: url('<?php echo ROOT_PATH; ?>assets/img/pricing1.jpg'); background-size: cover; background-position: top center;">
						<div class="row nomargin" style="position: relative; z-index: 2;">
							<div class="col-md-offset-1 col-md-5 col-sm-6 full-screen">
								<div class="vertical-middle col-padding">
									<div class="pricing">
										<div class="pricing-box">
											<div class="pricing-title noborder">
												<h3>Inicial</h3>
											</div>
											<div class="pricing-price">
												<span class="price-unit"></span>&dollar;12<span class="price-tenure">/mo</span>
											</div>
											<div class="pricing-features noborder" >
												<ul>
													<li><strong>Full</strong> Access</li>
													<li><i class="icon-code"></i> Source Files</li>
													<li><strong>1000</strong> User Accounts</li>
													<li><strong>2 Years</strong> License</li>
													<li><i class="icon-star3"></i>
														<i class="icon-star3"></i>
														<i class="icon-star3"></i>
														<i class="icon-star3"></i>
														<i class="icon-star3"></i></li>
													</ul>
												</div>
												<div class="pricing-action noborder">
													<a href="#" class="button btn-block button-large button-circle t600 btn-lg bgcolor border-color">Sign Up</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 full-screen pricing-extended">
									<div class="vertical-middle col-padding">
										<div class="pricing-desc">
											<div class="pricing-title nobg noborder">
												<h3>How many Themes can you Download today?</h3>
												<p class="lead">We create &amp; craft projects that ooze creativity in every aspect. We try to create a benchmark in everything. </p>
											</div>
											<div class="pricing-features noborder" style="background:#FFF;">
												<ul class="clearfix">
													<div class="col-lg-6">
														<li><i class="icon-desktop"></i> Ultra Responsive Layouts</li>
														<li><i class="icon-eye-open"></i> Retina Ready Designs</li>
														<li><i class="icon-beaker"></i> Advanced Admin Panel</li>
														<li><i class="icon-magic"></i> Tons of Customization Options</li>
													</div>
													<div class="col-lg-6">
														<li><i class="icon-font"></i> Support for Custom Fonts</li>
														<li><i class="icon-stack3"></i> Premium Sliders Included</li>
														<li><i class="icon-file2"></i> Photoshop Source Files Included</li>
														<li><i class="icon-support"></i> 24x7 Priority Email Support</li>
													</div>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="tab-pane fade" id="web">
						<div class="full-screen section nopadding nomargin noborder ohidden" style="background-image: url('<?php echo ROOT_PATH; ?>assets/img/pricing2.jpg'); background-size: cover; background-position: bottom right;">
							<div class="row nomargin" style="position: relative; z-index: 2;">
								<div class="col-md-offset-1 col-md-5 col-sm-6 full-screen">
									<div class="vertical-middle col-padding">
										<div class="pricing">
											<div class="pricing-box">
												<div class="pricing-title noborder">
													<h3>Plataforma Web</h3>
												</div>
												<div class="pricing-price">
													<span class="price-unit"></span>&dollar;12<span class="price-tenure">/mo</span>
												</div>
												<div class="pricing-features noborder" >
													<ul>
														<li><strong>Full</strong> Access</li>
														<li><i class="icon-code"></i> Source Files</li>
														<li><strong>1000</strong> User Accounts</li>
														<li><strong>2 Years</strong> License</li>
														<li><i class="icon-star3"></i>
															<i class="icon-star3"></i>
															<i class="icon-star3"></i>
															<i class="icon-star3"></i>
															<i class="icon-star3"></i></li>
														</ul>
													</div>
													<div class="pricing-action noborder">
														<a href="#" class="button btn-block button-large button-circle t600 btn-lg bgcolor border-color">Sign Up</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 full-screen pricing-extended">
										<div class="vertical-middle col-padding">
											<div class="pricing-desc">
												<div class="pricing-title nobg noborder">
													<h3>How many Themes can you Download today?</h3>
													<p class="lead">We create &amp; craft projects that ooze creativity in every aspect. We try to create a benchmark in everything. </p>
												</div>
												<div class="pricing-features noborder" style="background:#FFF;">
													<ul class="clearfix">
														<div class="col-lg-6">
															<li><i class="icon-desktop"></i> Ultra Responsive Layouts</li>
															<li><i class="icon-eye-open"></i> Retina Ready Designs</li>
															<li><i class="icon-beaker"></i> Advanced Admin Panel</li>
															<li><i class="icon-magic"></i> Tons of Customization Options</li>
														</div>
														<div class="col-lg-6">
															<li><i class="icon-font"></i> Support for Custom Fonts</li>
															<li><i class="icon-stack3"></i> Premium Sliders Included</li>
															<li><i class="icon-file2"></i> Photoshop Source Files Included</li>
															<li><i class="icon-support"></i> 24x7 Priority Email Support</li>
														</div>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>							
						</div>


						<div class="tab-pane fade" id="pro">
							<div class="full-screen section nopadding nomargin noborder ohidden" style="background-image: url('<?php echo ROOT_PATH; ?>assets/img/pricing3.jpg'); background-size: cover; background-position: top center;">
								<div class="row nomargin" style="position: relative; z-index: 2;">
									<div class="col-md-offset-1 col-md-5 col-sm-6 full-screen">
										<div class="vertical-middle col-padding">
											<div class="pricing">
												<div class="pricing-box">
													<div class="pricing-title noborder">
														<h3>Profesional</h3>
													</div>
													<div class="pricing-price">
														<span class="price-unit"></span>&dollar;12<span class="price-tenure">/mo</span>
													</div>
													<div class="pricing-features noborder" >
														<ul>
															<li><strong>Full</strong> Access</li>
															<li><i class="icon-code"></i> Source Files</li>
															<li><strong>1000</strong> User Accounts</li>
															<li><strong>2 Years</strong> License</li>
															<li><i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i></li>
															</ul>
														</div>
														<div class="pricing-action noborder">
															<a href="#" class="button btn-block button-large button-circle t600 btn-lg bgcolor border-color">Sign Up</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6 full-screen pricing-extended">
											<div class="vertical-middle col-padding">
												<div class="pricing-desc">
													<div class="pricing-title nobg noborder">
														<h3>How many Themes can you Download today?</h3>
														<p class="lead">We create &amp; craft projects that ooze creativity in every aspect. We try to create a benchmark in everything. </p>
													</div>
													<div class="pricing-features noborder" style="background:#FFF;">
														<ul class="clearfix">
															<div class="col-lg-6">
																<li><i class="icon-desktop"></i> Ultra Responsive Layouts</li>
																<li><i class="icon-eye-open"></i> Retina Ready Designs</li>
																<li><i class="icon-beaker"></i> Advanced Admin Panel</li>
																<li><i class="icon-magic"></i> Tons of Customization Options</li>
															</div>
															<div class="col-lg-6">
																<li><i class="icon-font"></i> Support for Custom Fonts</li>
																<li><i class="icon-stack3"></i> Premium Sliders Included</li>
																<li><i class="icon-file2"></i> Photoshop Source Files Included</li>
																<li><i class="icon-support"></i> 24x7 Priority Email Support</li>
															</div>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="section nomargin" style="background-color:#602983; z-index:999;">
						<div class="divcenter center" style="max-width: 900px;">
							<h2 class="nobottommargin t300 ls1" style="color:#FFF;">¿Deseas personalizar tu Plan? <a href="<?php echo ROOT_URL; ?>contacto" data-scrollto="#template-contactform" data-offset="140" data-easing="easeInOutExpo" data-speed="1250" class="button button-border button-circle button-light button-large notopmargin nobottommargin" style="position: relative; top: -3px;">CONTÁCTANOS</a></h2>
						</div>
					</div>
				</div>
					</section><!-- #slider end -->