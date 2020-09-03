			<!-- Header -->
				<div id="header">
					<div>
<?php
    $url = $_SERVER['REQUEST_URI'];
    $parteurl = explode('/', $url);
    $parteurldesejada = $parteurl[2];
?>
						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html"><img src="images/stb-aero-logo.png" alt=""></a></h1>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="<?php if($parteurldesejada == 'index.php' OR $parteurldesejada == NULL ) {echo 'current_page_item';} ?>"><a href="index.php">HOME</a></li>
									<li class="<?php if($parteurldesejada == 'stb-aeronautica.php') {echo 'current_page_item';} ?>"><a href="stb-aeronautica.php">QUEM SOMOS</a></li>
									<li class="<?php if($parteurldesejada == 'stb-aeronautica-servicos.php') {echo 'current_page_item';} ?>"><a href="stb-aeronautica-servicos.php">SERVIÇOS</a></li>
									<li class="<?php if($parteurldesejada == 'stb-aeronautica-estrutura.php') {echo 'current_page_item';} ?>"><a href="stb-aeronautica-estrutura.php">ESTRUTURA</a></li>
									<li><a href="https://www.youtube.com/channel/UCXRTtHyu0TaMNB6feIj8kjw?view_as=subscriber">VÍDEOS</a></li>
									<li><a href="https://stbaeronautica.blogspot.com/" target="_blank">BLOG</a></li>
									<li><a href="stb-aeronautica-fale-conosco.php">FALE CONOSCO</a></li>
								</ul>
							</nav>

					</div>
				</div>