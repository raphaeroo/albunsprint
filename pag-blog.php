 <?php
/* Template Name: pagina-blog */
 ?>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="icon" href="https://albunsprint.com.br/wp-content/uploads/Logo/LOGO_TAB-100x100.png" sizes="32x32" />
<head>
 	<title>Blog | Álbuns Print</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/info-sense/style.css" />
 </head>
 <body>
 <section id="topo-cima">
<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="https://albunsprint.com.br/">
  	<img src="<?php bloginfo('template_directory'); ?>/info-sense/logo.png" class="logo-ap" alt="Álbuns Print"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav links">
      <a class="nav-item nav-link" href="https://albunsprint.com.br/"><i class="fas fa-home"></i> Home</a>
      <a class="nav-item nav-link" href="https://albunsprint.com.br/#produtos"><i class="fas fa-book"></i> Produtos</a>
      <a class="nav-item nav-link" href="https://albunsprint.com.br/#comofunciona"><i class="fas fa-cog"></i> Como Funciona</a>
      <a class="nav-item nav-link" href="https://albunsprint.com.br/#faleconosco"><i class="fas fa-comment-alt"></i> Fale Conosco</a>
      <a class="nav-item nav-link" href="https://albunsprint.com.br/minha-conta/"><i class="fas fa-user"></i> Minha Conta</a>
    </div>
  </div>
</nav>
</div>
 </section>
<section id="corpo">
	<div class="hero-h1">
	<div class="col-12 text-center">
		<h1>Informações</h1>
	</div>
</div>
<div class="p-5em"></div>
<div class="container">
	<div class="row">
		
		<?php
            $args = array( 
                'post_type' => 'blog', 
                'posts_per_page' => 150, 
                'order' => 'asc', 
                'orderby' => 'date' 
            );
                        
            $loop = new WP_Query( $args );
            $i = 0;
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="col-md-3 col-sm-6">
			<a href="<?php the_permalink(); ?>">
			<div class="cat-info text-center">
				<div class="thumb" style="background:url(<?php the_post_thumbnail_url( 'large' ); ?>);height: 130px;width: 100%;background-size: contain;background-position: center;background-repeat: no-repeat;">
                </div>
                 <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                  <?php echo excerpt('10'); ?><br /><br />
                  <a class="btn btn-primary bto" href="<?php the_permalink(); ?>">Saiba mais</a>
			</div>
		</a>
		</div>
		 <?php
        $i ++;
                         if($i % 3 == 0) { 
                    echo '<br /><br />';
                   }
        
            endwhile; 
        ?>

</div>
</div>
<div class="p-5em"></div>
</section>


<section id="rodape">
	<div class="container">
		<div class="col-12 text-center"><h2>Fale Conosco</h2></div>
		<div class="p-5em"></div>
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<h3>Contatos</h3>
				<p><i class="fa fa-phone"></i> (11) 2304-0232 <br /><i class="fab fa-whatsapp"></i> (11) 96664-1808</p>
				<p>Dúvidas Frequentes</p>
				<p><i style="color: #f29113" class="fas fa-question"></i> Como faço para enviar minhas fotos para o Álbum Recordação?</p>
				<p><i style="color: #f29113" class="fas fa-question"></i> A Álbuns Print faz álbuns personalizados?</p>
				<br>
				<p><img src="<?php bloginfo('template_directory'); ?>/info-sense/ssl.png" width="40" height="40" />
Site protegido com Certificado SSL</p>
			</div>
			<div class="col-md-4 col-sm-12">
				<p>Dúvidas? Nos mande um e-mail!</p>
				<form>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="E-mail">
  </div>
 <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mensagem" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary bto">Enviar</button>
</form>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="p-5em"></div>
				<p>Nossas Mídias Sociais</p>
				<div class="row text-center">
				<div class="col fb"> <i class="fab fa-facebook"></i></div>
				<div class="col insta"> <i class="fab fa-instagram"></i></div>
				<div class="col yt"> <i class="fab fa-youtube"></i></div>
			</div>
			<br /><br />
			<p><img src="<?php bloginfo('template_directory'); ?>/info-sense/pagseguro.png" width="40" height="40" /> Fique tranquilo na hora de pagar, usamos Pagseguro.</p>
			</div>
		</div>
		<div class="col-12 text-center">
			<p><b>FORMAS DE PAGAMENTO</b></p>
			<img src="<?php bloginfo('template_directory'); ?>/info-sense/card-footer.png" />
			<br /><br /><br />
			<span style="font-size: 0.7rem">Nossa <a href="https://albunsprint.com.br/wp-content/uploads/2019/01/Pol%C3%ADtica-de-Privacidade.pdf" taget="_blank">Política de Privacidade</a> e <a href="https://albunsprint.com.br/wp-content/uploads/2019/01/CONTRATO-DE-PRESTA%C3%87%C3%83O-DE-SERVI%C3%87O.pdf" target="_blank">Termos de Uso</a>.</span>
	</div>
</section>
 </body>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 </html>