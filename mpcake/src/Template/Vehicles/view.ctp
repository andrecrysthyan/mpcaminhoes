<div class="container">
<div class="col-md-12">
	<div class="col-md-12 retira-padding box-titulo-veiculo">
	<h2><?=$vehicle['name']?></h2>
	<p>R$ <?=$vehicle['value']?></p>
	</div>
	<div class="col-md-12 retira-padding box-descricao-veiculo">
		<div class="col-md-6 imagem-veiculo-descricao retira-padding">
			<div class="col-md-12 retira-padding">
				<a class="fancybox-thumb" title="<?php echo $vehicle->name ?>" rel="fancybox-thumb" href="<?php echo $this->request->webroot;?>files/Vehicles/image/croped-<?php echo $vehicle->image ?>") ?><?php echo $this->Html->image("/files/Vehicles/image/croped-{$vehicle->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?></a>
			</div>
			<div class="row">
			 <?php $x = 0;?>
			<?php foreach($vehicle->images_vehicle as $image):?>
						<?php
						//debug($vehicle);
						if(!empty($vehicle->images_vehicle)){
							//debug($vehicle->images_vehicle[0]->image);
						?>
						 <?php if($x!=0 && $x%4==0){
				            echo "</div>\n<div class='row'>";
				          }
				          ?>
						<div class="col-md-3 bloco-mini-veiculos-view">
							<a class="fancybox-thumb" title="<?php echo $vehicle->name ?>" rel="fancybox-thumb" href="<?php echo $this->request->webroot;?>files/ImagesVehicle/image/croped-<?php echo $image->image ?>") ?><?php echo $this->Html->image("/files/ImagesVehicle/image/croped-{$image->image}", ['title' => $vehicle->name,'class' => 'img-responsive']) ?></a>
						</div>
					<?php ++$x;}?>
			<?php endforeach;?>
			
				</div>
		</div>
		<div class="col-md-6 imagem-veiculo-descricao">
			<h2>Descrição</h2>
			<p><span>Categoria:</span> <?=$vehicle['brand']?></p>
			<p><span>Modelo:</span> <?=$vehicle['model']?></p>
			<p><span>Ano:</span> <?=$vehicle['year']?></p>
			<h2>Detalhes</h2>
			<p><span>Detalhes:</span> <?=$vehicle['details']?></p>
			<h2>Valor</h2>
			<p><span>Valor: </span>R$ <?=$vehicle['value']?></p>
			<div class="onde-estamos col-md-12 retira-padding">
			<h2>Onde estamos</h2>
		<p><i class="fas fa-map-marker-alt " aria-hidden="true"></i><span>Av. Juscelino Kubitschek de Oliveira 4470 Planalto Patos de Minas / MG</span></p>
		<p><i class="fas fa-phone" aria-hidden="true"></i><span class="estilo-phone">(34) 3821-5100 Fixo</span></p>
		<p><?php 
		 			echo $this->Html->image('whatsapp-icone.png', ['title' => 'WhatsApp', 'class' => 'icone-whats-2'])
					?> (34) 99886-5100 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Júnior</p>
		<p><?php 
		 			echo $this->Html->image('whatsapp-icone.png', ['title' => 'WhatsApp', 'class' => 'icone-whats-2'])
					?> (34) 99888-5100 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Murilo</p>
		<p><?php 
		 			echo $this->Html->image('whatsapp-icone.png', ['title' => 'WhatsApp', 'class' => 'icone-whats-2'])
					?> (34) 99908-0850 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Luís Henrique</p>
		<p><?php 
		 			echo $this->Html->image('whatsapp-icone.png', ['title' => 'WhatsApp', 'class' => 'icone-whats-2'])
					?> (34) 99889-5100 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Eudes</p>
		<p><?php 
		 			echo $this->Html->image('whatsapp-icone.png', ['title' => 'WhatsApp', 'class' => 'icone-whats-2'])
					?> (34) 99238-1095 <?php 
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

<?php 
echo $this->Html->css(array('jquery.fancybox'));
echo $this->Html->script(array('jquery.fancybox', 'js_fancybox'));

?>