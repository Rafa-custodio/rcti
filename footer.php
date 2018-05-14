	<!--  Informações de rodapé -->
	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>Sobre a Udemy</h3>
					<p>A Udemy é uma plataforma multilateral, pois conecta
					produtores de cursos online (instrutores) com alunos que desejam se aprofundar nos mais variados assuntos.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Navegação</h3>
					<ul class="fh5co-footer-links">
						<li><a href="index.php">Inicio</a></li>
						<li><a href="cursos.php">Cursos</a></li>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="contato.php">Contato</a></li>
					<!-- 	<li><a href="#">Meetups</a></li> -->
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Cursos disponíveis</h3>
					<ul class="fh5co-footer-links">
						<li><a href="https://www.udemy.com/protheus-12-arquitetura-e-instalacao-na-pratica/?couponCode=PROTHEUS12">Protheus 12</a></li>
						<li><a href="https://www.udemy.com/programando-em-advpl-aprenda-do-zero/?couponCode=PROTHEUS">ADVPL</a></li>
						<li><a href="https://www.udemy.com/protheus-treinamento-apsdu/?couponCode=RCTIACESSIVEL">APSDU</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Compartilhe</h3>
					<ul class="fh5co-footer-links">
						<li><a href="www.facebook.com">Facebook</a></li>
						<li><a href="www.Twitter.com">Twitter</a></li>
						<li><a href="www.youtube.com">YouTube</a></li>
						<li><a href="www.googleplus.com">Google+</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Palavras Chave</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Protheus</a></li>
						<li><a href="#">ERP</a></li>
						<li><a href="#">ADVPL</a></li>
						<li><a href="#">TOTVS</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; <?php echo date('Y'); ?>. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://www.rctitreinamentos.com.br" target="_blank">RCTI Treinamentos</a></small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

