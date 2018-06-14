	<div class="col-md-4 noticias-transporte">

		<h2><?= h($news->title) ?></h2>
		<div class="row"><p><figure>
			
					<?php 
					//Não funcionava pq vc é burro e usou aspas simples com as chaves.
	 				echo $this->Html->image("/files/News/image/{$news->image}", ['title' => $news->title, 'class' => 'col-md-6 retira-padding'])
					?>

					<!--<img title="" alt="" class="col-md-6 retira-padding" src="<?php echo $this->request->base ?>/files/News/image/{$news->image}">-->
			<!--<?php 
	 				//echo $this->Html->image('<?= h($news->image) ?>', ['title' => 'Economizar gasolina', 'class' => 'col-md-6 retira-padding'])
					?>--></figure>
			<figcaption><span class="col-md-6"></span>
				<p class="col-md-6"><?= h($news->description) ?></p></figcaption></p></div>
				<div class="col-md-12">
					<?= ($news->text) ?>

				</div>

		<!--<p><figure><?php 
	 				//echo $this->Html->image('noticia2.jpg', ['title' => 'Teste bafômetro', 'class' => 'col-md-6 retira-padding'])
					?></figure>
			<figcaption><span class="col-md-6 retira-padding">DÁ PARA ENGANAR O TESTE DO BAFÔMETRO?</span>
				<p class="col-md-12 retira-padding">Tomar vinagre, usar antisséptico bucal ou comer chiclete não livra o motorista de resultado positivo no etilômetro.</p></figcaption></p>-->
	</div>