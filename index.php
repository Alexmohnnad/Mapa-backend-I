<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
		<header>
				<nav>				
					<img src="./imagens/logo.jpg"alt="Image" height="50" width="100 ">			
						<ul>
							<li><a href="historia.php" title="Nossa história" alt="Nossa história">Nossa história</a></li>
							<li><a href="contato.php" title="contato" alt="Artigos">Contato</a></li>
							<li><a href="local.php" title="localização" alt="Suporte">Onde nos encontrar</a></li>
						</ul>
		
							<input type="search" name="Pesquisar" placeholder="Pesquisar em todo o site ....."> 
				</nav>			
					<div class="header_topo">
            			<article class="header_topo_content">
                			<div class="header_topo_content_spacer">	                  
                	       		<h1>Venha para casa da dona Dirce, escolha sua marmita!!!</h1>                   
                   			 	<p>Impossível não voltar novamente</p>
                    			<p><a href="#" class="btn">Saiba Mais</a></p>
                			</div> 
						</article>	          
        			</div>
		</header>
	<main>	
		<section class="main_cardapio">
			<header class="main_cardapio_header">
				<h1>Desfrute do nosso cardápio</h1>
				<p>Faça o seu pedido entregamos para você!!!!!</p>
			</header>
			<?php
				foreach($produtos as $key => $value){
			?>
			<article>
				<a href="cardapio.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 75);?>...</p>
				<p><a href="cardapio.php?id=<?=$value['id'];?>"><button>Saiba mais<button></a></p>
			</article>
			<?php
				}
			?>			
		</section>
		<footer>
        <article class="main_footer">
            <div class="main_footer_content">
                <header>
                    <h1>Quer receber uma avaliação clinica gratuita?</h1>
                    <p>Informe seu nome e o seu e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form action="#" mothod="post">
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>				
            </div>
			<div class="main_footer_direito">
			<a href="https://api.whatsapp.com/send?phone=55******&text=Texto%20aqui"
   				 target="_blank"  style="position:fixed;bottom:10px;right:15px;">
    			<svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg>
			</a>
			<p>&copy; 2022 Dev web Alexandro</p>
			</div>			
        </article>

		</footer>
</body>
</html>