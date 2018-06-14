<div class="col-md-12 retira-padding faixa-laranja-header">
	<div class="container">
<a href="http://localhost/mpcake3/admin"><i class="fas fa-user-lock icone-admin"></i></a>


	</div>
</div>
<div class="fundo-header col-md-12">
	<div class="container">
		<div class="col-md-12 retira-padding conteudo-header">
			<div class="col-md-4 retira-padding">
				<?php 
					echo $this->Html->image('logomp.gif', ['title' => 'MP Caminhões','class' => 'img-responsive','url' => ['controller' => 'pages', 'action' => 'home']])
				?>
			</div>
			<div class="col-md-8">
				<div class="col-md-8 conteudo-header-2">
					<span class="telefone-principal">(34) 3821-5100</span>
					<a href="http://api.whatsapp.com/send?1=pt_BR&phone=5534998885100" target="_blank"><?php 
		 			echo $this->Html->image('whatsapp-icone.png', ['title' => 'WhatsApp', 'class' => 'icone-whats'])
					?>
					<span class="telefone-whatsapp">(34) 9 9888 5100</span></a>
					<div class="col-md-6">
						<p>(34) 99886-5100</p>
						<p>(34) 99908-0850</p>
					</div>
					<div class="col-md-6">
						<p>(34) 99889-5100 </p>
						<p>(34) 99238-1095</p>
					</div>
				</div>
				<div class="col-md-4 retira-padding icones-redes-sociais">
					<a href="https://www.facebook.com/mpcaminhoes/" target="_blank"><?php 
	 				echo $this->Html->image('facebook.png', ['title' => 'Facebook'])
					?></a>
					<a href="https://www.instagram.com/mp_caminhoes_carretas/" target="_blank"><?php 
	 				echo $this->Html->image('instagram.png', ['title' => 'Instagram'])
					?></a>
					<a href="https://www.youtube.com/channel/UCi4ScnYyuiY67IPhczF6SwA/featured" target="_blank"><?php 
	 				echo $this->Html->image('youtube.png', ['title' => 'Youtube'])
					?></a>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="col-md-12 menu-header">
					<nav  class="navbar navbar-default">	        
	        			<div class="navbar-header">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				                <span class="sr-only"></span> 
				                <span class="icon-bar"></span>
				               	<span class="icon-bar"></span>
				                <span class="icon-bar"></span> 
				            </button>
	        			</div>	
	        			<div class="collapse navbar-collapse" id="navbar">
	            			<ul class="nav navbar-nav">
	                			<li><?php echo $this->Html->link('Home', ['controller' => 'pages', 'action' => 'home'], ['class' => 'button-hover hover-bootom']);?>
	                			<li class="dropdown">
          							<a href="" class="dropdown-toggle button-hover hover-bootom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estoques<span class="caret"></span></a>
					    			<ul class="dropdown-menu">
					    				<?php foreach($categories as $category):?>
					        			<li><a href="<?=$this->Url->build(['controller'=>'vehicles','action'=>'by_categoy',$category['id']])?>" class="tamanho-drop button-hover hover-bootom"><?=$category['title']?></a></li>
					        			<?php endforeach;?>
					   				</ul>
        						</li>	
	                			<li><?php echo $this->Html->link('empresa', ['controller' => 'empresa', 'action' => 'index'], ['class' => 'button-hover hover-bootom']);?></li>
	                			<li class="dropdown">
          							<a href="" class="dropdown-toggle button-hover hover-bootom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Financiamentos<span class="caret"></span></a>
					    			<ul class="dropdown-menu">
					        			<li><?php echo $this->Html->link('consórcios', ['controller' => 'consorcio', 'action' => 'index'], ['class' => 'tamanho-drop button-hover hover-bootom']);?></li>
					    			</ul>
        						</li>	
	                			<li><?php echo $this->Html->link('consultas', ['controller' => 'consulta', 'action' => 'index'], ['class' => 'button-hover hover-bootom']);?></li>
	                			<li><?php echo $this->Html->link('contato', ['controller' => 'contato', 'action' => 'index'], ['class' => 'button-hover hover-bootom']);?></li>	
	            			</ul>
	        			</div>	             
	    			</nav>
				</div>



