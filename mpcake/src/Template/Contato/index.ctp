

<div class="container">
	<div class="col-md-12 pag-contato">
		<h2 class="h2-contato">Contato</h2>

		<div class="col-md-6 onde-estamos" data-aos="zoom-in">
		<h2>Onde estamos</h2>
		<i class="fas fa-map-marker-alt " aria-hidden="true"></i><span>Av. Juscelino Kubitschek de Oliveira 4470 Planalto Patos de Minas / MG</span>
		<p><i class="fas fa-phone" aria-hidden="true"></i><span class="estilo-phone">(34) 3821-5100 Fixo</span></p>
		<p><?php 
		 			echo $this->Html->image('whatsapp-icone.png', ['title' => 'WhatsApp', 'class' => 'icone-whats icone-whats-2'])
					?> (34) 99886-5100 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Júnior</p>
		<p><?php 
		 			echo $this->Html->image('whatsapp-icone.png', ['title' => 'WhatsApp', 'class' => 'icone-whats icone-whats-2'])
					?> (34) 99888-5100 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Murilo</p>
		<p><?php 
		 			echo $this->Html->image('whatsapp-icone.png', ['title' => 'WhatsApp', 'class' => 'icone-whats icone-whats-2'])
					?> (34) 99908-0850 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Luís Henrique</p>
		<p><?php 
		 			echo $this->Html->image('whatsapp-icone.png', ['title' => 'WhatsApp', 'class' => 'icone-whats icone-whats-2'])
					?> (34) 99889-5100 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?></p>
		<p><?php 
		 			echo $this->Html->image('whatsapp-icone.png', ['title' => 'WhatsApp', 'class' => 'icone-whats icone-whats-2'])
					?> (34) 99238-1095 <?php 
	 				echo $this->Html->image('tim.png', ['title' => 'Tim'])
					?> | Televendas</p>
		<p>Converse com um de nossos consultores</p>
		<i class="fas fa-envelope" aria-hidden="true"></i><span>contato@mpcaminhoes.com.br</span>
	</div>

	<div class="col-md-6" data-aos="zoom-in">

		<?php echo $this->Form->create($contact);
echo $this->Form->input('nome');
echo $this->Form->input('email');
echo $this->Form->input('telefone');
echo $this->Form->input('mensagem');
echo $this->Form->button('Enviar');
echo $this->Form->end();?>
	
		<!--<input class="col-md-12 col-xs-12" type="text" name='data[Contato][nome]' id='ContatoNome' required='required' placeholder="Nome">	
			</input>
			<input class="col-md-12 col-xs-12" type="text" name='data[Contato][email]' id='ContatoEmail' required='required' placeholder="Email">	
			</input>
			<input class="col-md-12 col-xs-12" type="text" name='data[Contato][telefone]' id='ContatoTelefone' required='required' placeholder="Telefone">	
			</input>
			<textarea class="col-md-12 col-xs-12" name='data[Contato][mensagem]' id='ContatoMensagem' required='required' rows="13" placeholder="Mensagem"></textarea>
			<button type='submit'>Enviar</button>-->
	
	</div>
	</div>

</div>

