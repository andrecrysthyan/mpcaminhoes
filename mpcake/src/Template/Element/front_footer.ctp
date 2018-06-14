<?php 
function showReadMore($string){
	$string = strip_tags($string);

	if (strlen($string) > 80) {

	    $stringCut = substr($string, 0, 80);

	    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
	}
	return $string;
}
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="col-md-12 retira-padding mapa">

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.6922062672666!2d-46.492456385631066!3d-18.63290890409417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ae8aad4e2115e5%3A0xc9212558010cb4c!2sMP+Caminh%C3%B5es+e+Carretas!5e0!3m2!1spt-BR!2sbr!4v1527963892557" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

<div class="col-md-12 retira-padding barra-footer">
	<div class="container-fluid">
	<div class="col-md-12 conteudo-barra-footer retira-padding">
	<div class="col-md-4 retira-padding mapa-marcador">
		<i class="fas fa-map-marker-alt fa-2x" aria-hidden="true"></i>
		<span>Av. Juscelino Kubitschek de Oliveira 4470 Planalto</span>
	</div>
	<div class="col-md-4 retira-padding fone-marcador">
		<i class="fas fa-phone fa-2x" aria-hidden="true"></i>
		<span>(34) 3821-5100 Fixo</span>
	</div>
	<div class="col-md-4 retira-padding mail-marcador">
		<i class="fas fa-envelope fa-2x" aria-hidden="true"></i>
		<span>contato@mpcaminhoes.com.br</span>
	</div>
</div>
</div>
</div>

<div class="col-md-12 retira-padding itens-footer">
	<div class="container">
	<div class="col-md-4 instagram-footer">
		<?php 
	 				echo $this->Html->image('instagram.png', ['title' => 'Instagram'])
					?>
		<span>Siga no instagram</span>
		<!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/72ea0c5fcae3556b949518ca32b76fe9.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>


	</div>
	
	<div class="col-md-4 noticias-transporte">

		<h2>Notícias do transporte</h2>
		<?php foreach ($news as $news): ?>
		<div class="row"><p><a href="<?=$this->Url->build(['controller'=>'News','action'=>'view',$news->id])?>"><figure>
			
					<?php 
					//Não funcionava pq vc é burro e usou aspas simples com as chaves.
	 				echo $this->Html->image("/files/News/image/{$news->image}", ['title' => 'Economizar gasolina', 'class' => 'col-md-6 retira-padding'])
					?>

					<!--<img title="" alt="" class="col-md-6 retira-padding" src="<?php echo $this->request->base ?>/files/News/image/{$news->image}">-->
			<!--<?php 
	 				//echo $this->Html->image('<?= h($news->image) ?>', ['title' => 'Economizar gasolina', 'class' => 'col-md-6 retira-padding'])
					?>--></figure>
			<figcaption><span class="col-md-6"><?= h($news->title) ?></span>
				<p class="col-md-6"><?= showReadMore($news->description) ?></p></figcaption></a></p></div>
		<?php endforeach; ?>

		<!--<p><figure><?php 
	 				//echo $this->Html->image('noticia2.jpg', ['title' => 'Teste bafômetro', 'class' => 'col-md-6 retira-padding'])
					?></figure>
			<figcaption><span class="col-md-6 retira-padding">DÁ PARA ENGANAR O TESTE DO BAFÔMETRO?</span>
				<p class="col-md-12 retira-padding">Tomar vinagre, usar antisséptico bucal ou comer chiclete não livra o motorista de resultado positivo no etilômetro.</p></figcaption></p>-->
	</div>
	<div class="col-md-4 face-footer">
		<?php 
	 				echo $this->Html->image('facebook.png', ['title' => 'Facebook'])
					?>
		<span>Siga no facebook</span>

		<div class="fb-page" data-href="https://www.facebook.com/mpcaminhoes/" data-tabs="timeline" data-height="423" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/mpcaminhoes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/mpcaminhoes/">MP Caminhões e Carretas.</a></blockquote></div>
	</div>
</div>
</div>

<div class="col-md-12 rodape retira-padding">
	<div class="col-md-3 logo-rodape-margin">
		<?php 
	 				echo $this->Html->image('logo-rodape.png', ['title' => 'Mp Caminhoes'])
					?>
	</div>


	<div class="col-md-6 onde-estamos">
		<h2>Converse com um de nossos consultores</h2>
		
		<div class="col-md-12">
		<p><i class="fas fa-phone" aria-hidden="true"></i><span class="estilo-phone">(34) 3821-5100 Fixo</span></p>
	</div>
	<div class="col-md-6">
		<p>(34) 99886-5100 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Júnior</p>
		<p>(34) 99888-5100 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Murilo</p>
		<p>(34) 99908-0850 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Luís Henrique</p>
		</div>
		<div class="col-md-6">
		
		<p>(34) 99889-5100 <?php 
	 				echo $this->Html->image('vivo.png', ['title' => 'Vivo'])
					?> | Eudes</p>
		<p>(34) 99238-1095 <?php 
	 				echo $this->Html->image('tim.png', ['title' => 'Tim'])
					?> | Televendas</p>
		</div>
		
	</div>

	<div class="col-md-3 seta-topo">
		<a href="#" class=”voltar-ao-topo”><i class="fas fa-chevron-circle-up fa-4x"></i></a>

		<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59de255dc28eca75e4625731/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	</div>


	<div class="col-md-12 endereco-rodape">
		Av. Juscelino Kubitschek de Oliveira 4470 Planalto
Patos de Minas / MG
	</div>
	

</div>

<script type="text/javascript">
	
jQuery(document).ready(function() {
            // Exibe ou oculta o botão
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > 200) {
                    jQuery('.voltar-ao-topo').fadeIn(200);
                } else {
                    jQuery('.voltar-ao-topo').fadeOut(200);
                }
            });
            
            // Faz animação para subir
            jQuery('.voltar-ao-topo').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, 300);
            })
        });


</script>