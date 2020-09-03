<?php header('Content-Type: text/html; charset=utf-8');session_start();
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


$url = "https://www.googleapis.com/blogger/v3/blogs/2929820609014562867/posts?key=AIzaSyAJ1QmC331cOjUZY1ODz5TloZhPC720iug"; 
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
$resultado = json_decode(curl_exec($ch));



?>
<!DOCTYPE HTML>

<html>

	<head>
		<title>STB Aeronáutica</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

<?php require "header.php" ?>

			<!-- Banner -->
				<div id="banner">
					<div class="container">
						<section>
							<header>
								<h2>Usinagem mecânica de precisão</h2>
							</header>
						</section>
					</div>
				</div>

			<!-- Intro -->
				<div id="intro">
					<div class="container">
						<section>
							<header>
								<h2>Tecnologia de ponta</h2>
							</header>
							<div class="content">
								<p>A STB Aeronáutica conta com equipamentos de última geração, área de engenharia que desenvolve todo projeto das peças, por meio de software de programação.</p>
								<a href="stb-aeronautica.php" class="button">Quem somos</a>
							</div>
						</section>
					</div>
				</div>

			<!-- Main -->
				<div id="main">

					<div class="container">

						<!-- Row #1 -->
							<header>
								<h2>Atendemos os mais diversos segmentos do mercado</h2>
							</header>
							<ul class="featured">
								<li>
									<span class="pennant"><span class="icon solid fas fa-plane-departure"></span></span>
									<h3>Setor Aeroespacial</h3>
								</li>
								<li>
									<span class="pennant"><span class="icon solid fas fa-seedling"></span></span>
									<h3>Setor Agrícola</h3>
								</li>
								<li>
									<span class="pennant"><span class="icon solid fas fa-oil-can"></span></span></span>
									<h3>Setor de Óleo e Gás</h3>
								</li>
							
							</ul>
							<section>

					</section>
						<ul class="actions special">
							<li><a href="stb-aeronautica-servicos.php" class="button alt">Veja peças</a></li>
						</ul>

					</div>
				</div>
			<!-- Staff -->
				<div id="staff">
					<div class="container">
						<section>
							<header>
								<h2>Certificações</h2>
							</header>
							<ul class="staff">
								<li><a href="#"><img src="images/iso9001.png" alt=""></a></li>
								<li><a href="#"><img src="images/iso9100.png" alt=""></a></li>
								<li><a href="#"><img src="images/abs-evaluations.png" alt=""></a></li>
							</ul>
							<p>Sistemas de gestão que garantem a otimização de processos, maior agilidade no desenvolvimento de produtos e produção ágil.</p>
						</section>
					</div>
				</div>
 






			<!-- Tweet -->
				<div id="tweets">
					<div class="container">
						<span class="tweet">EQUIPAMENTOS DE ÚLTIMA GERAÇÃO</span><a href="stb-aeronautica-estrutura.php" class="button">Conheça nossa estrutura</a>
					</div>
				</div>


				<div id="staff">
						<section>
							<header>
								<h2>Notícias / Novidades</h2>
							</header>
							
							
	 							<?php $i=0; foreach ( $resultado->items as $post ) {
	 									$posts= $post->content;
	 							  ?>
								<div class="blog" style="">
									<li style="width: 100%;display:inline-block;">
										<h3><?= $post->title ?></h3>
										<div style="height:420px;"> 
										
										<p><?=  substr($post->content, 0, strrpos(substr($post->content, 0, 470), ' ')) . '...';  ?></p>
										</div>
									</li>

									<ul class="actions special">
										<li><a href="<?=$post->url?>" target="_blank" class="button alt">Leia</a></li>
										<li><!-- <?=$post->updated  ?> -->Em 17/08/2020,<br>por STB Aeronáutica</li>
									</ul>
								</div>
								<?php  if(++$i > 2) break; } ?>
								
							
						</section>
				</div>


			<!-- Contact -->
				<div id="contact">
					<div class="container">
						<section>
							<header>
								<h2>Fale Conosco</h2>
							</header>
						</section>
						<form method="post" action="#">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-6 col-12-narrower">
									<input name="name" placeholder="Nome" type="text" class="text" />
								</div>
								<div class="col-6 col-12-narrower">
									<input name="email" placeholder="Email" type="text" class="text" />
								</div>
								<div class="col-12">
									<textarea name="message" placeholder="Menssagem"></textarea>
								</div>
								<div class="col-12">
									<a href="#" class="button alt">Enviar Mensagem</a>
								</div>
							</div>
						</form>
					</div>
				</div>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<!-- Social -->
							<section>
								<ul class="social">
									<li><a href="#" class="icon brands fa-facebook-f"><span>Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-twitter"><span>Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-linkedin"><span>Linkedin</span></a></li>
								</ul>
							</section>

						<!-- Copyright -->
							<div class="copyright">
								 STB Aeronáutica&reg; - 2008 | <script>document.write(new Date().getFullYear());</script>
							</div>

					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>