<script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
<?php

//$this->layout = false;
?>
<div class="col-md-12 col-xs-12 retira-padding">



<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <?php 
	 				echo $this->Html->image('04.jpg', ['title' => 'Mp Caminhoes'])
					?>
      <div class="carousel-caption">
        <p><?php 
	 				echo $this->Html->image('luz.png', ['title' => 'Mp Caminhoes', 'class' => 'farol'])
					?>
						<?php 
	 				echo $this->Html->image('luz.png', ['title' => 'Mp Caminhoes', 'class' => 'farol2'])
					?>
					</p>

		
		<div class="col-md-6 blocos-slider">
		<p class="preto col-md-12 col-xs-12 primeiro-titulo animated bounceInLeft write"></p>
		<p class="laranja col-md-12 col-xs-12 animated bounceInRight segundo-titulo">Financie o seu caminhão</p>
		<p class="branco col-md-12 col-xs-12 terceiro-titulo animated fadeInUp">A MP Caminhões e Carretas facilita ao máximo o seu financiamento para proporcionar parcelas que cabem no seu bolso.</p>
		<p><div class="col-md-6 col-xs-12 laranja btn1 animated fadeInLeftBig"><?php echo $this->Html->link('VER VEÍCULOS', ['controller' => 'vehicles', 'action' => 'index']);?></div>
			
			<div class="col-md-6 col-xs-12 preto btn2 animated fadeInRightBig"><?php echo $this->Html->link('FALE CONOSCO', ['controller' => 'contato', 'action' => 'index']);?></div></p>
		</div>
	</div>
    </div>
    <div class="item">
       <?php 
	 				echo $this->Html->image('02.jpg', ['title' => 'Mp Caminhoes'])
					?>
      <div class="carousel-caption">
        <div class="col-md-6 blocos-slider">
		<p class="preto col-md-12 col-xs-12 primeiro-titulo animated bounceInLeft write"></p>
		<p class="laranja col-md-12 col-xs-12 animated bounceInRight segundo-titulo">Financie o seu caminhão</p>
		<p class="branco col-md-12 col-xs-12 terceiro-titulo animated fadeInUp">A MP Caminhões e Carretas facilita ao máximo o seu financiamento para proporcionar parcelas que cabem no seu bolso.</p>
		<p><div class="col-md-6 col-xs-12 laranja btn1 animated fadeInLeftBig"><?php echo $this->Html->link('VER VEÍCULOS', ['controller' => 'vehicles', 'action' => 'index']);?></div>
			<div class="col-md-6 col-xs-12 preto btn2 animated fadeInRightBig"><?php echo $this->Html->link('FALE CONOSCO', ['controller' => 'contato', 'action' => 'index']);?></div></p>



		</div>
      </div>
    </div>
    <div class="item">
       <?php 
	 				echo $this->Html->image('07.jpg', ['title' => 'Mp Caminhoes'])
					?>
      <div class="carousel-caption">
        <div class="col-md-6 blocos-slider">
		<p class="preto col-md-12 col-xs-12 primeiro-titulo animated bounceInLeft write"></p>
		<p class="laranja col-md-12 col-xs-12 animated bounceInRight segundo-titulo">Financie o seu caminhão</p>
		<p class="branco col-md-12 col-xs-12 terceiro-titulo animated fadeInUp">A MP Caminhões e Carretas facilita ao máximo o seu financiamento para proporcionar parcelas que cabem no seu bolso.</p>
		<p><div class="col-md-6 col-xs-12 laranja btn1 animated fadeInLeftBig"><?php echo $this->Html->link('VER VEÍCULOS', ['controller' => 'vehicles', 'action' => 'index']);?></div>
			<div class="col-md-6 col-xs-12 preto btn2 animated fadeInRightBig"><?php echo $this->Html->link('FALE CONOSCO', ['controller' => 'contato', 'action' => 'index']);?></div></p>



		</div>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





	<!--<?php 
	 				echo $this->Html->image('04.jpg', ['title' => 'Mp Caminhoes', 'class' => 'animated pulse col-md-12 retira-padding'])
					?>

					<p><?php 
	 				echo $this->Html->image('luz.png', ['title' => 'Mp Caminhoes', 'class' => 'farol'])
					?>
						<?php 
	 				echo $this->Html->image('luz.png', ['title' => 'Mp Caminhoes', 'class' => 'farol2'])
					?>
					</p>
				
	<div class="col-md-4 col-xs-12 retira-padding caption-imagem">
		
		<p class="preto col-md-12 col-xs-12 primeiro-titulo animated bounceInLeft write"></p>
		<p class="laranja col-md-12 col-xs-12 animated bounceInRight segundo-titulo">Financie o seu caminhão</p>
		<p class="branco col-md-12 col-xs-12 terceiro-titulo animated fadeInUp">A MP Caminhões e Carretas facilita ao máximo o seu financiamento para proporcionar parcelas que cabem no seu bolso.</p>
		<p><div class="col-md-6 col-xs-12 laranja btn1 animated fadeInLeftBig"><?php echo $this->Html->link('VER VEÍCULOS', ['controller' => 'vehicles', 'action' => 'index']);?></div>
			<div class="col-md-6 col-xs-12 preto btn2 animated fadeInRightBig"><?php echo $this->Html->link('FALE CONOSCO', ['controller' => 'contato', 'action' => 'index']);?></div></p>

</div>-->
</div>

<div class="container">
	<div class="col-md-12 col-xs-12 retira-padding promocao-semana">


		
				<h2>Promoção da semana</h2>
				
			
			<section id="dg-container" class="dg-container">
				<div class="dg-wrapper">
					<?php foreach($Vehicles_promo as $vehicle):?>						
						<a href="<?=$this->Url->build(['controller'=>'Vehicles','action'=>'view',$vehicle->id])?>"><?php echo $this->Html->image("/files/Vehicles/image/croped-{$vehicle->image}", ['title' => 'Promoção da semana']) ?>
						<div><?=$vehicle['name']?> - <span class="preco-promocao">R$ <?=$vehicle['value']?></span>
</div></a>
			
					<?php endforeach;?>
					<!--<a href="#"><?php echo $this->Html->image('4.jpg', ['title' => 'Promoção da semana']) ?><div>http://lifeingreenville.com/</div></a>
					<a href="#"><?php echo $this->Html->image('5.jpg', ['title' => 'Promoção da semana']) ?><div>http://circlemeetups.com/</div></a>
					<a href="#"><?php echo $this->Html->image('6.jpg', ['title' => 'Promoção da semana']) ?><div>http://www.castirondesign.com/</div></a>
					<a href="#"><?php echo $this->Html->image('7.jpg', ['title' => 'Promoção da semana']) ?><div>http://www.foundrycollective.com/</div></a>
					<a href="#"><?php echo $this->Html->image('8.jpg', ['title' => 'Promoção da semana']) ?><div>http://www.mathiassterner.com/home</div></a>
					<a href="#"><?php echo $this->Html->image('9.jpg', ['title' => 'Promoção da semana']) ?><div>http://learnlakenona.com/</div></a>
					<a href="#"><?php echo $this->Html->image('10.jpg', ['title' => 'Promoção da semana']) ?><div>http://www.neighborhood-studio.com/</div></a>
					<a href="#"><?php echo $this->Html->image('11.jpg', ['title' => 'Promoção da semana']) ?><div>http://www.beckindesign.com/</div></a>
					<a href="#"><?php echo $this->Html->image('12.jpg', ['title' => 'Promoção da semana']) ?><div>http://kicksend.com/</div></a>-->
				</div>
				<nav>	
					<span class="dg-prev">&lt;</span>
					<span class="dg-next">&gt;</span>
				</nav>
			</section>


	</div>

</div>
<div class="container">
	<div class="col-md-12 col-xs-12 retira-padding mostra-veiculos">
		<div class="row">
			 <?php $x = 0;?>
			<?php foreach($Vehicles as $vehicle):?>
						<?php
						//debug($vehicle);
						//if(!empty($vehicle->images_vehicle)){
							//debug($vehicle->images_vehicle[0]->image);
						?>
						 <?php if($x!=0 && $x%3==0){
				            echo "</div>\n<div class='row'>";
				          }
				          ?>
						<a href="<?=$this->Url->build(['controller'=>'Vehicles','action'=>'view',$vehicle->id])?>"><div class="col-md-4 col-xs-12 bloco-veiculo" data-aos="zoom-in">
						<?php echo $this->Html->image("/files/Vehicles/image/croped-{$vehicle->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?>
						<div class="col-md-12 col-xs-12 retira-padding bloco-nome-preco">
						<div class= "col-md-12 col-xs-12 retira-padding nome-veiculo"><h2><?=$vehicle->name?></h2></div>
						<span class="col-md-12 col-xs-12 retira-padding preco-veiculo">R$ <?=$vehicle['value']?></span>
					</div>
					<div class="col-md-12 col-xs-12 retira-padding bloco-data-tipo">
						<p class="col-md-6 col-xs-6"><span class="nome-campo">Modelo:</span></p>
						<p class="col-md-6 col-xs-6"><span class="nome-campo">Marca:</span></p>
						<p class="col-md-6 col-xs-6"><?=$vehicle->brand?></p>
						<p class="col-md-6 col-xs-6"><?=$vehicle->model?></p>

						<p class="col-md-12 col-xs-12"><span class="nome-campo">Ano/Modelo:</span> <?=$vehicle->year?></p>
					</div>
					</div></a>
					<?php ++$x;//}?>
			<?php endforeach;?>
		
	</div>
	</div>

</div>


<script type="text/javascript">
	
setInterval(function(){
	$(".farol").fadeOut();
	$(".farol").fadeIn();
},10);

setInterval(function(){
	$(".farol2").fadeOut();
	$(".farol2").fadeIn();
},10);
</script>


<script type="text/javascript">
			$(function() {
				$('#dg-container').gallery({
					autoplay	:	true
				});
			});
		</script>

		<script type="text/javascript">

$(function(){

        $(".write").typed({

            strings: ["MP CAMINHÕES E CARRETAS", "Entre em contato", "Realize seu sonho!"],

            typeSpeed: 30,
            loop: true,

        });

    });

</script>