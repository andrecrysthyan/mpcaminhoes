<div class="container">
<div class="col-md-12">
	<div class="col-md-12 retira-padding box-titulo-veiculo">
	<h2><?=$vehicle['name']?></h2>
	<p><?=$vehicle['value']?></p>
	</div>
	<div class="col-md-12 retira-padding box-descricao-veiculo">
		<div class="col-md-6 imagem-veiculo-descricao retira-padding">
			<div class="col-md-12 retira-padding">
				<?php echo $this->Html->image("/files/ImagesVehicle/image/croped-{$vehicle->images_vehicle[0]->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?>
			</div>
			<div class="row">

				<div class="col-md-3">
					<?php echo $this->Html->image("/files/ImagesVehicle/image/croped-{$vehicle->images_vehicle[1]->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?>
				</div>
				<div class="col-md-3">
					<?php echo $this->Html->image("/files/ImagesVehicle/image/croped-{$vehicle->images_vehicle[2]->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?>
				</div>
				<div class="col-md-3">
					<?php echo $this->Html->image("/files/ImagesVehicle/image/croped-{$vehicle->images_vehicle[3]->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?>
				</div>
				<div class="col-md-3">
					<?php echo $this->Html->image("/files/ImagesVehicle/image/croped-{$vehicle->images_vehicle[4]->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?>
				</div>
		</div>
		<div class="row">
				<div class="col-md-3">
					<?php echo $this->Html->image("/files/ImagesVehicle/image/croped-{$vehicle->images_vehicle[5]->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?>
				</div>
				<div class="col-md-3">
					<?php echo $this->Html->image("/files/ImagesVehicle/image/croped-{$vehicle->images_vehicle[6]->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?>
				</div>
				<div class="col-md-3">
					<?php echo $this->Html->image("/files/ImagesVehicle/image/croped-{$vehicle->images_vehicle[7]->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?>
				</div>
				<div class="col-md-3">
					<?php echo $this->Html->image("/files/ImagesVehicle/image/croped-{$vehicle->images_vehicle[8]->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?>
				</div>
		</div>
		</div>
		<div class="col-md-6 imagem-veiculo-descricao">
			<h2>Descrição</h2>
			<p><?=$vehicle['brand']?></p>
			<p><?=$vehicle['model']?></p>
			<p><?=$vehicle['year']?></p>
			<h2>Detalhes</h2>
			<p><?=$vehicle['details']?></p>
			<h2>Valor</h2>
			<p>R$ <?=$vehicle['value']?></p>
			<div class="onde-estamos col-md-12 retira-padding">
			<h2>Onde estamos</h2>
		<p><i class="fas fa-map-marker-alt " aria-hidden="true"></i><span>Av. Juscelino Kubitschek de Oliveira 4470 Planalto Patos de Minas / MG</span></p>
		<p><i class="fas fa-phone" aria-hidden="true"></i><span class="estilo-phone">(34) 3821-5100 Fixo</span></p>
		<p>(34) 99886-5100 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Júnior</p>
		<p>(34) 99888-5100 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Murilo</p>
		<p>(34) 99908-0850 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Luís Henrique</p>
		<p>(34) 99889-5100 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Eudes</p>
		<p>(34) 99238-1095 <?php 
	 				echo $this->Html->image('tim.png', ['title' => 'Tim'])
					?> | Televendas</p>
		<p>Converse com um de nossos consultores</p>
		<i class="fas fa-envelope" aria-hidden="true"></i><span>contato@mpcaminhoes.com.br</span>
	</div>
		</div>
	</div>

	<div class="col-md-12">
		<form>
		<input class="col-md-12 col-xs-12" type="text" name='data[Contato][nome]' id='ContatoNome' required='required' placeholder="Nome">	
			</input>
			<input class="col-md-12 col-xs-12" type="text" name='data[Contato][email]' id='ContatoEmail' required='required' placeholder="Email">	
			</input>
			<input class="col-md-12 col-xs-12" type="text" name='data[Contato][telefone]' id='ContatoTelefone' required='required' placeholder="Telefone">	
			</input>
			<textarea class="col-md-12 col-xs-12" name='data[Contato][mensagem]' id='ContatoMensagem' required='required' rows="13" placeholder="Mensagem"></textarea>
			<button type='submit'>Enviar</button>
		</form>
	</div>
</div>
</div>