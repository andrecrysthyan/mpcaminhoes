<div class="container">
	<div class="col-md-12 col-xs-12 retira-padding mostra-veiculos mostra-veiculos-categoria">
		<div class="row">
			 <?php $x = 0;?>
			<?php foreach($vehicles as $vehicle):?>
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