<ul class="sidebar-menu">
	<li class="header"><span>Menu</span></li>
	
    <li><?= $this->Html->link("Noticias", ['controller'=>'news','action' => 'index']) ?></li>
    <li><?= $this->Html->link("Categoria de veiculos", ['controller'=>'categories','action' => 'index']) ?></li>
    <li><?= $this->Html->link("Veiculos", ['controller'=>'vehicles','action' => 'index']) ?></li>
    <li><?= $this->Html->link("Imagens de veiculos", ['controller'=>'ImagesVehicle','action' => 'index']) ?></li>
    <li><?= $this->Html->link("Usuarios", ['controller'=>'users','action' => 'index']) ?></li>

</ul>