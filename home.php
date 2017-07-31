<!DOCTYPE html>
<html>
<head>
	<title>Dev3Tech - Home | sites e sistemas baratos</title>
	<link rel="shortcut icon" href="images/shotcut.png">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.o, maximun-scale=1.0">
	<meta charset ="description" content="dev3tech.com.br: software, desenvolvimento de sites e sistemas para pequenos e micro negócios"/>
	<meta charset= "keyword" content="empresa, sites,baratos,Ribeirão,das,Neves,Minas,Gerais,Belo,Horizonte,qualidade,Sistemas,sistema,gerenciamento,barato,em,conta,dev3tech,d3t,"/>
	<meta charset= "author" content="DEV3TECH"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<meta name="google-site-verification" content="es03mbE1fNKfMEpRXXmY94nU8IJ1dH2-wUwKXf7scME" />
	<link rel="alternate" href="http://dev3tech.com.br/" hreflang="pt-br" />
<script> 
$(document).ready(function(){
    $(".mobile-menu").click(function(){
        $(".mobile-menu ul").slideToggle("slow");
    });

    /*deslizamento menu*/	
		$('.seletor-ancora').click(function () {
	        var alvo = $(this).attr('href').split('#').pop();
	        $('html, body').animate({scrollTop: $('#' + alvo).offset().top}, 1500);
	        $('.menu-mobile').slideUp();
	        return false;
    	});
});
</script>
</head>
<body>
	<header>
		<div class="container">
			<?php include("menu_home.php");?>
			</div><!--container-->
			<div class="chamada-1">
				<h2>Melhores Sistemas e Sites</h2>
				<p>Venha Você fazer parte tambem!</p>
			</div><!--chamada-1-->
			<a href="https://www.facebook.com/Dev3tech/" target="_blank"><img src="images/facebook.png" style="position: absolute;top: 75vh; right: 10vh"></a>
	</header>
	<section class="sessao-1">
		<div class="container">
			<div class="texto-sessao-1">
				<h2>Desenvolvendo sites e sistemas de qualidade</h2>
				<p>Sites e sistemas que se adaptam em qualquer tela!</p>
				<ul>
					<li>Sites Demonstrativos.</li>
					<li>Registro de domínio.</li>
					<li>E-mail profissional.</li>
					<li>E muito mais.</li>
				</ul>
				<a href="#anchor" class="seletor-ancora"><div class="btn1-texto">Entre em contato</div></a>
			</div><!--texto-sessao-1-->
			<div class="device-sessao"></div><!--device-secao-->
			<div class="clear"></div>
		</div>
	</section><!--sessao-1-->
	<section class="sessao-2">
			<h2>Nossos Templates</h2>
			<p></p>

			<div class="wraper-templates">

				 <!-- <div class="templates">
					<div class="templates-single">
						<div class="titulo-templates-single">
							<h2>Justin city</h2>
							<p>Site de esporte</p>
						</div>
						<div class="imagem-template">
							<img src="images/logo2.png"/>
						</div>
					</div>
				</div> -->

				<div class="templates">
							<h2></h2>
						<div class="imagem-template">
							<a href="" target="_blank"></a>
						</div>
				</div>

				<div class="templates">
							<h2>Justin City</h2>
						<div class="imagem-template">
							<a href="http://justincity.dev3tech.com.br/" target="_blank">
							<img src="images/jc.JPG" alt="Justincity" /></a>
						</div>
				</div>


				<div class="templates">
							<h2>Template Light</h2>
						<div class="imagem-template">
							<a href="http://template1.dev3tech.com.br/" target="_blank"><img src="images/tp.JPG" alt="template || Dev3Tech" /></a>
						</div>
				</div>

				<div class="templates">
							<h2></h2>
						<div class="imagem-template">
							<a href="" target="_blank"></a>
						</div>
				</div>

			</div><!--wraper-templates-->
	</section><!--sessao-2-->
	<section class="sessao-3">
		<div class="parte-1">
			<div class="wraper-parte-1">
				<h2>Nosso time</h2>
				<p>Nosso time é jovem e empreendedor que busca constantemente conhecimentos para melhorar nossos produtos, sempre buscando transparência e um serviço de qualidade.</p>
			</div><!--wraper-parte-1-->
		</div><!--parte-1-->
		<div class="parte-2">
			<div class="sobre-autor mySlides">
				<div class="titulo-autor">
				<div class="wraper-titulo-autor">
					<h2>Raphael de Jesus</h2>
					<p>Co-Founder / Desenvolvedor</p>
					</div><!--wraper-titulo-autor-->
					<img src="images/rj.jpg">
				</div><!--titulo-autor-->
				<div class="texto-autor">
				<p>"Lutem, lutem e lutem novamente até que cordeiros se tornem dragões."</p>
				</div><!--texto-autor-->
			</div><!--sobre-autor-->
			<div class="sobre-autor mySlides">
				<div class="titulo-autor">
				<div class="wraper-titulo-autor">
					<h2>Felipe Jardim</h2>
					<p>Co-Founder / Desenvolvedor</p>
					</div><!--wraper-titulo-autor-->
					<img src="images/fj.jpg">
				</div><!--titulo-autor-->
				<div class="texto-autor">
				<p>"Programadores são ferramentas para  converter cafeína em código."</p>
				</div><!--texto-autor-->
			</div><!--sobre-autor-->
			<div class="slider-bullets">
				<span class="demo"></span>
				<span class="demo"></span>
			</div><!--slider-bullets-->
		</div><!--parte-2-->
		<div class="clear"></div>
	</section><!--sessao-3-->
	<section class="sessao-4">
		<div class="container seletor-ancora" id="anchor">
			<div class="form">
			<div class="texto-contato">
				<h2>Entre em contato</h2>
				<p>Nos envie o seu pedido, entraremos em contato o mais breve!</p>
				<p>Email: contato@dev3tech.com.br</p>
			</div><!--texto-contato-->
				<form action="envio_formulario.php" id="formulario-email" name="envio_formulario" method="post">
						<div class="input-form w100">
							<input type="text" name="nome" placeholder="Nome:" required/>
						</div><!--input-form w100-->

						<div class="input-form w50">
							<input type="text" name="email" placeholder="E-mail:" required/>
						</div><!--input-form w100-->

						<div class="input-form w50">
							<input type="text" name="telefone" placeholder="Telefone:" required/>
						</div><!--input-form w100-->

						<div class="input-form w100">
							<textarea name="mensagem" placeholder="Mensagem:" required></textarea>
						</div><!--input-form w100-->

						<div class="input-form w100">
							<input type="submit" name="acao" value="ENVIAR" id="acao" />
						</div><!--input-form w100-->
				</form>
				</div><!--form-->
		</div><!--container-->
	</section><!--sessao-4-->
	<?php
		include("footer.php");
	?>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<script src="js/slide.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100058519-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>