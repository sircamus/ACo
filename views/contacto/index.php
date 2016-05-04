
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo ROOT_PATH; ?>assets/img/contact3.jpg'); background-size: cover; background-position: top center; padding: 120px 0;" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
		<h1 class="txtshdw">Ser profesor ahora es más fácil</h1>
		<span class="txtshdw">¿Quieres Personalizar un Plan o tienes alguna pregunta? </span>
	</div>
</section>

<div class="container">
	<div class="mrgtop"></div>
	<div class="postcontent nobottommargin">
		<h3>Envía un mensaje. <small>Te contactaremos en las próximas 48 horas.</small></h3>
		<div class="contact-widget">
			<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>" class="nobottommargin" onsubmit="return validateForm()">
				<div class="col_one_third">
					<label>Nombre <small>*</small></label>
					<input type="text" name="nombre" id="nombre" class="sm-form-control required" />
				</div>

				<div class="col_one_third">
					<label>Email <small>*</small></label>
					<input type="email" name="email" id="email" class="required email sm-form-control" />
				</div>

				<div class="col_one_third col_last"> 
					<label>Teléfono </label>
					<input type="text" name="telefono" class="sm-form-control" />
				</div>

				<div class="clear"></div>

				<div class="col_two_third">
					<label>Asunto <small>*</small></label>
					<input type="text" name="asunto" id="asunto" class="required sm-form-control" />
				</div>

				<div class="col_one_third col_last">
					<label>Plan Preferido</label>
					<select name="plan" class="selectpicker">
						<option value="null">-- Selecciona un Plan --</option>
						<option value="Inicial">Inicial</option>
						<option value="PlataformaWeb">Plataforma web</option>
						<option value="Profesional">Profesional</option>
						<option value="Personalizar">Deseo Personalizar un Plan</option>
					</select>
				</div>

				<div class="clear"></div>

				<div class="col_full">
					<label>Mensaje <small>*</small></label>
					<textarea class="required sm-form-control" name="mensaje" id="mensaje" rows="6" cols="30" style="resize:none;"></textarea>
				</div>

				<div class="col_full">
					<input type="submit" name="submit" value="Submit" class="button button-3d nomargin"/>
				</div>
			</form>  
		</div>
	</div>


	<div class="sidebar col_last nobottommargin">
		<div class="mrgtop"></div>
		<address>
			<strong>Oficinas:</strong><br>
			795 Folsom Ave, Suite 600<br>
			San Francisco, CA 94107<br>
		</address>
		<abbr title="Phone Number"><strong>Teléfonos:</strong></abbr> (55) 0000 0000<br>
		<strong>y</strong> (55) 0000 0000<br>
		<abbr title="Email Address"><strong>Email:</strong></abbr> consulta.escolar1@gmail.com

		<div class="widget noborder notoppadding">
			<a class="twitter-timeline" href="https://twitter.com/AcademicMX" data-widget-id="717791130033610752">Tweets de @AcademicMX</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>

		<div class="widget noborder notoppadding">
			<a href="http://www.facebook.com/AcademicConsultingMx" target="_blank" class="social-icon si-small si-dark si-facebook">
				<i class="icon-facebook"></i>
				<i class="icon-facebook"></i>
			</a>

			<a href="http://www.twitter.com/AcademicMX" target="_blank" class="social-icon si-small si-dark si-twitter">
				<i class="icon-twitter"></i>
				<i class="icon-twitter"></i>
			</a>
		</div>
	</div>
</div>
<div class="mrgtop"></div>

<script type="text/javascript">
	$('.selectsplitter').selectsplitter();
</script>