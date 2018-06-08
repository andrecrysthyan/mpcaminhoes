<div class="container">
	<div class="col-md-12 retira-padding mostra-veiculos">
		<div class="row">
			 <?php $x = 0;?>
			<?php foreach($vehicles as $vehicle):?>
						<?php
						//debug($vehicle);
						if(!empty($vehicle->images_vehicle)){
							//debug($vehicle->images_vehicle[0]->image);
						?>
						 <?php if($x!=0 && $x%3==0){
				            echo "</div>\n<div class='row'>";
				          }
				          ?>
						<a href="<?=$this->Url->build(['controller'=>'Vehicles','action'=>'view',$vehicle->id])?>"><div class="col-md-4 bloco-veiculo">
						<?php echo $this->Html->image("/files/ImagesVehicle/image/croped-{$vehicle->images_vehicle[0]->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?>
						<div class="col-md-12 retira-padding bloco-nome-preco">
						<div class= "col-md-12 retira-padding nome-veiculo"><h2><?=$vehicle->name?></h2></div>
						<span class="col-md-12 retira-padding preco-veiculo">R$ <?=$vehicle['value']?></span>
					</div>
					<div class="col-md-12 retira-padding bloco-data-tipo">
						<p class="col-md-12"><i class="fas fa-truck-moving"></i><?=$vehicle->model?></p>
						<p class="col-md-12"><i class="fas fa-calendar-alt"></i>Ano/Modelo: <?=$vehicle->year?></p>
					</div>
					</div></a>
					<?php ++$x;}?>
			<?php endforeach;?>
		
	</div>
	</div>

</div>