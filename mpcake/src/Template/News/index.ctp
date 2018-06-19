	<div class="container">
	<div class="col-md-12 noticias-transporte view-noticias">

		
		<div class="row">
			<?php $x = 0;?>
			<?php foreach($news2 as $news2):?>
						<?php
						//debug($vehicle);
						//if(!empty($vehicle->images_vehicle)){
							//debug($vehicle->images_vehicle[0]->image);
						?>
						 <?php if($x!=0 && $x%3==0){
				            echo "</div>\n<div class='row'>";
				          }
				          ?>
			<div class="col-md-4"><a href="<?=$this->Url->build(['controller'=>'News','action'=>'view',$news2->id])?>">
				<h2><?= h($news2->title) ?></h2>
			<p><figure>
			
					<?php 
					//Não funcionava pq vc é burro e usou aspas simples com as chaves.
	 				echo $this->Html->image("/files/News/image/{$news2->image}", ['title' => $news2->title, 'class' => 'col-md-12 retira-padding'])
					?>

					<!--<img title="" alt="" class="col-md-6 retira-padding" src="<?php echo $this->request->base ?>/files/News/image/{$news->image}">-->
			<!--<?php 
	 				//echo $this->Html->image('<?= h($news->image) ?>', ['title' => 'Economizar gasolina', 'class' => 'col-md-6 retira-padding'])
					?>--></figure>
			<figcaption>
				<p class="col-md-12"><?= h($news2->description) ?></p></figcaption></p></a></div>

				<?php ++$x;//}?>
			<?php endforeach;?>
				
			</div>

			

		<!--<p><figure><?php 
	 				//echo $this->Html->image('noticia2.jpg', ['title' => 'Teste bafômetro', 'class' => 'col-md-6 retira-padding'])
					?></figure>
			<figcaption><span class="col-md-6 retira-padding">DÁ PARA ENGANAR O TESTE DO BAFÔMETRO?</span>
				<p class="col-md-12 retira-padding">Tomar vinagre, usar antisséptico bucal ou comer chiclete não livra o motorista de resultado positivo no etilômetro.</p></figcaption></p>-->
	</div>
</div>