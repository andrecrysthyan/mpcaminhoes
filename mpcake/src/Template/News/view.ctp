	<div class="container">
	<div class="col-md-12 noticias-transporte view-noticias">

		<h2><?= h($news2->title) ?></h2>
		<div class="row">
			
			<div class="col-md-12">
			<p><figure>
			
					<?php 
					//Não funcionava pq vc é burro e usou aspas simples com as chaves.
	 				echo $this->Html->image("/files/News/image/{$news2->image}", ['title' => $news2->title, 'class' => 'col-md-6 retira-padding'])
					?>

					<!--<img title="" alt="" class="col-md-6 retira-padding" src="<?php echo $this->request->base ?>/files/News/image/{$news->image}">-->
			<!--<?php 
	 				//echo $this->Html->image('<?= h($news->image) ?>', ['title' => 'Economizar gasolina', 'class' => 'col-md-6 retira-padding'])
					?>--></figure>
			<figcaption>
				<p class="col-md-6"><?= h($news2->description) ?></p></figcaption></p></div>
				<div class="col-md-12 col-xs-12">
					<p><?= ($news2->text) ?></p>

				</div>
			</div>

			<div class="col-md-12 seta-voltar">

				<i class="fas fa-chevron-circle-left fa-2x"><?php echo $this->Html->link('voltar', ['controller' => 'news', 'action' => 'index'], ['class' => 'entrar-admin']);?></i>
				
			</div>

		<!--<p><figure><?php 
	 				//echo $this->Html->image('noticia2.jpg', ['title' => 'Teste bafômetro', 'class' => 'col-md-6 retira-padding'])
					?></figure>
			<figcaption><span class="col-md-6 retira-padding">DÁ PARA ENGANAR O TESTE DO BAFÔMETRO?</span>
				<p class="col-md-12 retira-padding">Tomar vinagre, usar antisséptico bucal ou comer chiclete não livra o motorista de resultado positivo no etilômetro.</p></figcaption></p>-->
	</div>
</div>