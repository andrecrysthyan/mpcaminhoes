<?php

//$this->layout = false;
?>
<div class="col-md-12 retira-padding">

	<?php 
	 				echo $this->Html->image('04.jpg', ['title' => 'Mp Caminhoes', 'class' => 'animated pulse'])
					?>

					<p><?php 
	 				echo $this->Html->image('luz.png', ['title' => 'Mp Caminhoes', 'class' => 'farol'])
					?>
						<?php 
	 				echo $this->Html->image('luz.png', ['title' => 'Mp Caminhoes', 'class' => 'farol2'])
					?>
					</p>
				
	<div class="col-md-4 retira-padding caption-imagem">
		
		<p class="preto col-md-12 primeiro-titulo animated bounceInLeft">MP CAMINHÕES E CARRETAS</p>
		<p class="laranja col-md-12 animated bounceInRight segundo-titulo">Financie o seu caminhão</p>
		<p class="branco col-md-12 terceiro-titulo animated fadeInUp">A MP Caminhoes e Carretas facilita ao máximo o seu financiamento para proporcionar parcelas que cabem no seu bolso.</p>
		<p><div class="col-md-6 laranja btn1 animated fadeInLeftBig">VER VEÍCULOS</div>
			<div class="col-md-6 preto btn2 animated fadeInRightBig"> FALE CONOSCO</div></p>

</div>
</div>

<div class="container">
	<div class="col-md-12 retira-padding promocao-semana">


		
				<h2>Promoção da semana</h2>
				
			
			<section id="dg-container" class="dg-container">
				<div class="dg-wrapper">
					<?php foreach($Vehicles as $vehicle):?>
						<?php
						//debug($vehicle);
						if(!empty($vehicle->images_vehicle)){
							debug($vehicle->images_vehicle[0]->image);
						?>
						<a href="#"><?php echo $this->Html->image("/files/ImagesVehicle/image/croped-{$vehicle->images_vehicle[0]->image}", ['title' => 'Promoção da semana']) ?><div>
<?=$vehicle['name']?> - 
<span class="preco-promocao">R$ <?=$vehicle['value']?></span>
</div></a>
					<?php }?>
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
	<div class="col-md-12 retira-padding mostra-veiculos">
		<div class="row">
		<a href=""><div class="col-md-4 bloco-veiculo">
			<?php echo $this->Html->image('veiculo.png', ['title' => 'Veiculo1', 'class' => 'img-responsive']) ?>
			<div class="col-md-12 retira-padding bloco-nome-preco">
			<div class= "col-md-12 retira-padding nome-veiculo"><h2>Carreta Caçamba Basculante Ls Facchini 2011 20m³</h2></div>
			<span class="col-md-12 retira-padding preco-veiculo">R$ 115.900</span>
		</div>
		<div class="col-md-12 retira-padding bloco-data-tipo">
			<p class="col-md-12"><i class="fas fa-truck-moving"></i>RANDON Bi Caçamba Basculante</p>
			<p class="col-md-12"><i class="fas fa-calendar-alt"></i>Ano/Modelo: 2011</p>
		</div>
		</div></a>
		<a href=""><div class="col-md-4 bloco-veiculo">
			<?php echo $this->Html->image('veiculo.png', ['title' => 'Veiculo1', 'class' => 'img-responsive']) ?>
			<div class="col-md-12 retira-padding bloco-nome-preco">
			<div class= "col-md-12 retira-padding nome-veiculo"><h2>Carreta Caçamba Basculante Ls Facchini 2011 20m³</h2></div>
			<span class="col-md-12 retira-padding preco-veiculo">R$ 115.900</span>
		</div>
		<div class="col-md-12 retira-padding bloco-data-tipo">
			<p class="col-md-12"><i class="fas fa-truck-moving"></i>RANDON Bi Caçamba Basculante</p>
			<p class="col-md-12"><i class="fas fa-calendar-alt"></i>Ano/Modelo: 2011</p>
		</div>
		</div></a>
		<a href=""><div class="col-md-4 bloco-veiculo">
			<?php echo $this->Html->image('veiculo.png', ['title' => 'Veiculo1', 'class' => 'img-responsive']) ?>
			<div class="col-md-12 retira-padding bloco-nome-preco">
			<div class= "col-md-12 retira-padding nome-veiculo"><h2>Carreta Caçamba Basculante Ls Facchini 2011 20m³</h2></div>
			<span class="col-md-12 retira-padding preco-veiculo">R$ 115.900</span>
		</div>
		<div class="col-md-12 retira-padding bloco-data-tipo">
			<p class="col-md-12"><i class="fas fa-truck-moving"></i>RANDON Bi Caçamba Basculante</p>
			<p class="col-md-12"><i class="fas fa-calendar-alt"></i>Ano/Modelo: 2011</p>
		</div>
		</div></a>
	</div>
	<div class="row">
		<a href=""><div class="col-md-4 bloco-veiculo">
			<?php echo $this->Html->image('veiculo.png', ['title' => 'Veiculo1', 'class' => 'img-responsive']) ?>
			<div class="col-md-12 retira-padding bloco-nome-preco">
			<div class= "col-md-12 retira-padding nome-veiculo"><h2>Carreta Caçamba Basculante Ls Facchini 2011 20m³</h2></div>
			<span class="col-md-12 retira-padding preco-veiculo">R$ 115.900</span>
		</div>
		<div class="col-md-12 retira-padding bloco-data-tipo">
			<p class="col-md-12"><i class="fas fa-truck-moving"></i>RANDON Bi Caçamba Basculante</p>
			<p class="col-md-12"><i class="fas fa-calendar-alt"></i>Ano/Modelo: 2011</p>
		</div>
		</div></a>
		<a href=""><div class="col-md-4 bloco-veiculo">
			<?php echo $this->Html->image('veiculo.png', ['title' => 'Veiculo1', 'class' => 'img-responsive']) ?>
			<div class="col-md-12 retira-padding bloco-nome-preco">
			<div class= "col-md-12 retira-padding nome-veiculo"><h2>Carreta Caçamba Basculante Ls Facchini 2011 20m³</h2></div>
			<span class="col-md-12 retira-padding preco-veiculo">R$ 115.900</span>
		</div>
		<div class="col-md-12 retira-padding bloco-data-tipo">
			<p class="col-md-12"><i class="fas fa-truck-moving"></i>RANDON Bi Caçamba Basculante</p>
			<p class="col-md-12"><i class="fas fa-calendar-alt"></i>Ano/Modelo: 2011</p>
		</div>
		</div></a>
		<a href=""><div class="col-md-4 bloco-veiculo">
			<?php echo $this->Html->image('veiculo.png', ['title' => 'Veiculo1', 'class' => 'img-responsive']) ?>
			<div class="col-md-12 retira-padding bloco-nome-preco">
			<div class= "col-md-12 retira-padding nome-veiculo"><h2>Carreta Caçamba Basculante Ls Facchini 2011 20m³</h2></div>
			<span class="col-md-12 retira-padding preco-veiculo">R$ 115.900</span>
		</div>
		<div class="col-md-12 retira-padding bloco-data-tipo">
			<p class="col-md-12"><i class="fas fa-truck-moving"></i>RANDON Bi Caçamba Basculante</p>
			<p class="col-md-12"><i class="fas fa-calendar-alt"></i>Ano/Modelo: 2011</p>
		</div>
		</div></a>
	</div>
	<div class="row">
		<a href=""><div class="col-md-4 bloco-veiculo">
			<?php echo $this->Html->image('veiculo.png', ['title' => 'Veiculo1', 'class' => 'img-responsive']) ?>
			<div class="col-md-12 retira-padding bloco-nome-preco">
			<div class= "col-md-12 retira-padding nome-veiculo"><h2>Carreta Caçamba Basculante Ls Facchini 2011 20m³</h2></div>
			<span class="col-md-12 retira-padding preco-veiculo">R$ 115.900</span>
		</div>
		<div class="col-md-12 retira-padding bloco-data-tipo">
			<p class="col-md-12"><i class="fas fa-truck-moving"></i>RANDON Bi Caçamba Basculante</p>
			<p class="col-md-12"><i class="fas fa-calendar-alt"></i>Ano/Modelo: 2011</p>
		</div>
		</div></a>
		<a href=""><div class="col-md-4 bloco-veiculo">
			<?php echo $this->Html->image('veiculo.png', ['title' => 'Veiculo1', 'class' => 'img-responsive']) ?>
			<div class="col-md-12 retira-padding bloco-nome-preco">
			<div class= "col-md-12 retira-padding nome-veiculo"><h2>Carreta Caçamba Basculante Ls Facchini 2011 20m³</h2></div>
			<span class="col-md-12 retira-padding preco-veiculo">R$ 115.900</span>
		</div>
		<div class="col-md-12 retira-padding bloco-data-tipo">
			<p class="col-md-12"><i class="fas fa-truck-moving"></i>RANDON Bi Caçamba Basculante</p>
			<p class="col-md-12"><i class="fas fa-calendar-alt"></i>Ano/Modelo: 2011</p>
		</div>
		</div></a>
		<a href=""><div class="col-md-4 bloco-veiculo">
			<?php echo $this->Html->image('veiculo.png', ['title' => 'Veiculo1', 'class' => 'img-responsive']) ?>
			<div class="col-md-12 retira-padding bloco-nome-preco">
			<div class= "col-md-12 retira-padding nome-veiculo"><h2>Carreta Caçamba Basculante Ls Facchini 2011 20m³</h2></div>
			<span class="col-md-12 retira-padding preco-veiculo">R$ 115.900</span>
		</div>
		<div class="col-md-12 retira-padding bloco-data-tipo">
			<p class="col-md-12"><i class="fas fa-truck-moving"></i>RANDON Bi Caçamba Basculante</p>
			<p class="col-md-12"><i class="fas fa-calendar-alt"></i>Ano/Modelo: 2011</p>
		</div>
		</div></a>
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
				$('#dg-container').gallery();
			});
		</script>