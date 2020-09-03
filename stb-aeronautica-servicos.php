<!DOCTYPE HTML>
<!--
	Concentric by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>Untitled</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>



.lb-album2{
	width: 100%;
	margin: auto;
	padding-top: 5%;
	text-align: center;
	font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif;
}
.lb-album2 li{
	float: left;
	margin: 10px 10px 50px 10px;
	position: relative;
	list-style:none;
}
.lb-album2 li > a,
.lb-album2 li > a img{
	display: block;
}
.lb-album2 li > a{
	width:300px;
	height:230px;
	position: relative;
	padding: 2px;

	-webkit-box-shadow: 1px 1px 2px #fff, 1px 1px 2px rgba(158,111,86,0.3) inset;
	-moz-box-shadow: 1px 1px 2px #fff, 1px 1px 2px rgba(158,111,86,0.3) inset;
	box-shadow: 1px 1px 2px #fff, 1px 1px 2px rgba(158,111,86,0.3) inset;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;

}
.lb-album2 li > a span{
	position: absolute;
	width:300px;
	height:230px;
	top: 0px;
	left: 0px;
	padding:2px;
	text-align: center;
	line-height: 150px;
	color: rgba(193,41,41,1);
	text-shadow: 0px 1px 1px rgba(255,255,255,0.6);
	font-size: 24px;
	opacity: 0;
	filter: alpha(opacity=0); /* internet explorer */
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"; /*IE8*/
	background: rgba(193,41,41,1);
	background: -moz-radial-gradient(center, ellipse cover, rgba(0,0,0,1) 0%, rgba(55,123,68,1) 100%);
	background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(0,0,0,0.5)), color-stop(100%,rgba(55,123,68,1)));
	background: -webkit-radial-gradient(center, ellipse cover, rgba(0,0,0,0.5) 0%,rgba(55,123,68,1) 100%);
	background: -o-radial-gradient(center, ellipse cover, rgba(0,0,0,0.5)  0%,rgba(55,123,68,1) 100%);
	background: -ms-radial-gradient(center, ellipse cover, rgba(0,0,0,0.5)  0%,rgba(55,123,68,1) 100%);
	background: radial-gradient(center, ellipse cover, rgba(0,0,0,0.5)  0%,rgba(55,123,68,1) 100%);
	-webkit-transition: opacity 0.3s linear;
	-moz-transition: opacity 0.3s linear;
	-o-transition: opacity 0.3s linear;
	-ms-transition: opacity 0.3s linear;
	transition: opacity 0.3s linear;
}
.lb-album2 li > a:hover span{
	opacity: 1;
	filter: alpha(opacity=99); /* internet explorer */
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=99)"; /*IE8*/
}



.lb-overlay{
	width: 0px;
	height: 0px;
	position: fixed;
	overflow: hidden;
	left: 0px;
	top: 0px;
	padding: 0px;
	z-index: 99;
	text-align: center;
	background: rgba(47,43,42,1);
	background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,0.8) 0%, rgba(47,43,42,1) 100%);
	background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(255,255,255,0.8)), color-stop(100%,rgba(47,43,42,1)));
	background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,0.8) 0%,rgba(47,43,42,1) 100%);
	background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,0.8) 0%,rgba(47,43,42,1) 100%);
	background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,0.8) 0%,rgba(47,43,42,1) 100%);
	background: radial-gradient(center, ellipse cover, rgba(255,255,255,0.8) 0%,rgba(47,43,42,1) 100%);
}
.lb-overlay > div{
	position: relative;
	color: rgba(47,43,42,1);
	width: 550px;
	height: 80px;
	margin: 40px auto 0px auto;
	text-shadow: 0px 1px 1px rgba(255,255,255,0.6);
}
.lb-overlay div h3,
.lb-overlay div p{
	padding: 0px 20px;
	width: 200px;
	height: 60px;
}
.lb-overlay div h3{
	font-size: 36px;
	float: left;
	text-align: right;
	border-right: 1px solid rgba(27,54,81,0.4);
}
.lb-overlay div h3 span,
.lb-overlay div p{
	font-size: 16px;
	font-family: Constantia, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
	font-style: italic;
}
.lb-overlay div h3 span{
	display: block;
	line-height: 6px;
}
.lb-overlay div p{
	font-size: 14px;
	text-align: left;
	float: left;
	width: 260px;
}
.lb-overlay a.lb-close{
	background: rgba(27,54,81,0.8);
	z-index: 1001;
	color: #fff;
	position: absolute;
	top: 43px;
	left: 50%;
	font-size: 15px;
	line-height: 26px;
	text-align: center;
	width: 50px;
	height: 23px;
	overflow: hidden;
	margin-left: -25px;
	opacity: 0;
	filter: alpha(opacity=0); /* internet explorer */
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"; /*IE8*/
	-webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
	box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
}
.lb-overlay img{
	/* height: 100%; For Opera max-height does not seem to work */
	
	position: relative;
	opacity: 0;
	filter: alpha(opacity=0); /* internet explorer */
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"; /*IE8*/
	-webkit-box-shadow: 1px 1px 4px rgba(0,0,0,0.3);
	-moz-box-shadow: 1px 1px 4px rgba(0,0,0,0.3);
	box-shadow: 0px 2px 7px rgba(0,0,0,0.2);
	-webkit-transition: opacity 0.5s linear;
	-moz-transition: opacity 0.5s linear;
	-o-transition: opacity 0.5s linear;
	-ms-transition: opacity 0.5s linear;
	transition: opacity 0.5s linear;
}
.lb-prev, .lb-next{
	text-indent: -9000px;
	position: absolute;
	top: -32px;
	width: 24px;
	height: 25px;
	left: 50%;
	opacity: 0.8;
	filter: alpha(opacity=80); /* internet explorer */
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=80)"; /*IE8*/
}
.lb-prev:hover, .lb-next:hover{
	opacity: 1;
	filter: alpha(opacity=99); /* internet explorer */
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=99)"; /*IE8*/
}
.lb-prev{
	margin-left: -30px;
	background: transparent url(images/arrows.png) no-repeat top left;
}
.lb-next{
	margin-left: 6px;
	background: transparent url(images/arrows.png) no-repeat top right;
}
.lb-overlay:target {
	width: auto;
	height: auto;
	bottom: 0px;
	right: 0px;
	padding: 80px 100px 120px 100px;
}
.lb-overlay:target img,
.lb-overlay:target a.lb-close{
	opacity: 1;
	filter: alpha(opacity=99); /* internet explorer */
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=99)"; /*IE8*/
}
/* 
	100% Height for Opera as the max-height seems to be ignored, not optimal for large screens 
	http://bricss.net/post/11230266445/css-hack-to-target-opera 
*/
x:-o-prefocus, .lb-overlay img {
    height: 100%;
}
		</style>
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">
<?php require "header.php" ?>
			<!-- Tweet -->
				<div id="tweets" style="background-image: url(images/home-servicos.jpg);">
					<div class="container">
					</div>
				</div>
			<!-- Main -->
				<div id="main">
					<div class="container">

						<!-- Content -->
							<div class="row">
								<div id="content" class="col-12">
									<article>
										<header>
											<h2>STB Aeronáutica - Peças / Serviços</h2>
											<span class="byline">Atuando há 25 anos no mercado da usinagem de precisão</span>
										</header>
										<p>A STB Aeronáutica é uma empresa que realiza as atividades no ramo da Usinagem em máquinas CNC desde 1995 e está instalada na cidade de Botucatu/SP desde 2008.</p>
										
                <div class="container"> 
                	<section>
               
                <ul class="lb-album2">
                        <li>
                            <a href="#image-1">
                                <img src="images/thumbs/01.jpg" alt="">
                                <span> <img src="images/lupa.png" alt="lupa"> </span>
                            </a>
                            <div class="lb-overlay" id="image-1">
                                <img src="images/full/01.jpg" alt="" />
                                <div>
                                    <a href="#image-8" class="lb-prev">Prev</a>
                                    <a href="#image-2" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-2">
                                <img src="images/thumbs/02.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-2">
                                <img src="images/full/02.jpg" alt="image02" />
                                <div>                           
                                    <a href="#image-1" class="lb-prev">Prev</a>
                                    <a href="#image-3" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-3">
                                <img src="images/thumbs/03.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-3">
                                <img src="images/full/03.jpg" alt="image03" />
                                <div>                           
                                    <a href="#image-2" class="lb-prev">Prev</a>
                                    <a href="#image-4" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li>

                        <li>
                            <a href="#image-4">
                                <img src="images/thumbs/04.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-4">
                                <img src="images/full/04.jpg" alt="" />
                                <div>                           
                                    <a href="#image-3" class="lb-prev">Prev</a>
                                    <a href="#image-5" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li>


                        <li>
                            <a href="#image-5">
                                <img src="images/thumbs/05.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-5">
                                <img src="images/full/05.jpg" alt="image03" />
                                <div>                           
                                    <a href="#image-4" class="lb-prev">Prev</a>
                                    <a href="#image-6" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li>

                        <li>
                            <a href="#image-6">
                                <img src="images/thumbs/06.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-6">
                                <img src="images/full/06.jpg" alt="image03" />
                                <div>                           
                                    <a href="#image-5" class="lb-prev">Prev</a>
                                    <a href="#image-7" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li>

                        <li>
                            <a href="#image-7">
                                <img src="images/thumbs/07.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-7">
                                <img src="images/full/07.jpg" alt="image03" />
                                <div>                           
                                    <a href="#image-6" class="lb-prev">Prev</a>
                                    <a href="#image-8" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-8">
                                <img src="images/thumbs/08.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-8">
                                <img src="images/full/08.jpg" alt="" />
                                <div>                           
                                    <a href="#image-7" class="lb-prev">Prev</a>
                                    <a href="#image-1" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li> 
                                                <li>
                            <a href="#image-9">
                                <img src="images/thumbs/09.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-9">
                                <img src="images/full/09.jpg" alt="" />
                                <div>                           
                                    <a href="#image-8" class="lb-prev">Prev</a>
                                    <a href="#image-10" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li> 
                         <li>
                            <a href="#image-10">
                                <img src="images/thumbs/10.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-10">
                                <img src="images/full/10.jpg" alt="" />
                                <div>                           
                                    <a href="#image-9" class="lb-prev">Prev</a>
                                    <a href="#image-11" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li>  
                                                 <li>
                            <a href="#image-11">
                                <img src="images/thumbs/11.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-11">
                                <img src="images/full/11.jpg" alt="" />
                                <div>                           
                                    <a href="#image-10" class="lb-prev">Prev</a>
                                    <a href="#image-12" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li> 
                                                 <li>
                            <a href="#image-12">
                                <img src="images/thumbs/12.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-12">
                                <img src="images/full/12.jpg" alt="" />
                                <div>                           
                                    <a href="#image-11" class="lb-prev">Prev</a>
                                    <a href="#image-13" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li>  
                                                 <li>
                            <a href="#image-13">
                                <img src="images/thumbs/13.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-13">
                                <img src="images/full/13.jpg" alt="" />
                                <div>                           
                                    <a href="#image-12" class="lb-prev">Prev</a>
                                    <a href="#image-14" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li> 
                                                 <li>
                            <a href="#image-14">
                                <img src="images/thumbs/14.jpg" alt="">
                                <span><img src="images/lupa.png" alt="lupa"></span>
                            </a>
                            <div class="lb-overlay" id="image-14">
                                <img src="images/full/14.jpg" alt="" />
                                <div>                           
                                    <a href="#image-13" class="lb-prev">Prev</a>
                                    <a href="#image-15" class="lb-next">Next</a>
                                </div>
                                <a href="#page" class="lb-close">x fechar</a>
                            </div>
                        </li>  

       
                        </ul>
                </section>
                </div>


									</article>
								</div>
							</div>

					</div>
				</div>


			<!-- Contact -->
				<div id="contact">
					<div class="container">
						<section>
							<header>
								<h2>Solicite um orçamento</h2>
							</header>
						</section>
						<form method="post" action="phpmailer/mailer.php">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-6 col-12-narrower">
									<input name="name" placeholder="Nome" type="text" class="text" />
								</div>
								<div class="col-6 col-12-narrower">
									<input name="email" placeholder="Email" type="text" class="text" />
								</div>
								<div class="col-12">
									<textarea name="mensagem" placeholder="Mensagem"></textarea>
								</div>
								<div class="col-12-narrower"><hr>
									<label for="">Tem um arquivo do projeto? Envie para nós!</label><br><br>
									<input name="arquivo" placeholder="Tem um arquivo do projeto?" type="file" class="text" />
								</div>
								<div class="col-12">
									<input type="submit" name="bt-orca" class="button alt" value="Enviar">
								</div>
							</div>
						</form>
					</div>
				</div>


<?php require "footer.php" ?>

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