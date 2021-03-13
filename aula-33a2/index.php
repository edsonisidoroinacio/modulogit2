<!DOCTYPE html>
<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device=width, initial-scale=1">
			<title>Filmes Em Cartaz</title>
			<script type="text/javascript" src="script.js"></script>
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="style.css">
				
		</head>

		<body> 
       <!--Inicio do Projeto-->
        <?php include 'cabecalho.php'; ?>

      	

		    <!--carousel-->
		    <div  class="container">
		    	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		    		<!--Indicador mudança da foto-->
		    		<ol class="carousel-indicators">
		    			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
		    			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
		    			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		    			<li da ta-target="#carouselExampleControls" data-slide-to="3"></li>
		    			<li data-target="#carouselExampleControls" data-slide-to="4"></li>
		    		</ol>
		    		<!--Slides-->
		    		<div class="carousel-inner">
		    			<div class="carousel-item active">
		    				<img class="d-block w-100   " src="assets/img/supermercado7.jpg" alt="First slide" >
		    				<div class="carousel-caption text-dark">
		    					<h1>Econômia Certa!</h1>
		    					<p class="lead">São mais de 20.000 itens para você economizar</p>
		    				</div>
		    			</div>
		    			<div class="carousel-item ">
		    				<img class="d-block w-100 " src="assets/img/supermercado2.jpg" alt="Second slide" >
		    				<div class="carousel-caption text-dark">
		    					<h1>Econômia Certa!</h1>
		    					<p class="lead">São mais de 20.000 itens para você economizar</p>
		    				</div>
		    			</div>
		    			<div class="carousel-item ">
		    				<img class="d-block w-100 " src="assets/img/supermercado9.jpg" alt="Third slide" >
		    				<div class="carousel-caption text-dark">
		    					<h1>Econômia Certa!</h1>
		    					<p class="lead">São mais de 20.000 itens para você economizar</p>
		    				</div>
		    			</div>
		    			<div class="carousel-item ">
		    				<img class="d-block w-100 " src="assets/img/supermercado4.jpg" alt="Four slide" >
		    				<div class="carousel-caption text-dark">
		    					<h1>Econômia Certa!</h1>
		    					<p class="lead">São mais de 20.000 itens para você economizar</p>
		    				</div>
		    			</div>
		    			<div class="carousel-item ">
		    				<img class="d-block w-100 " src="assets/img/supermercado5.jpg" alt="Five slide">
		    				<div class="carousel-caption text-dark">
		    					<h1>Econômia Certa!</h1>
		    					<p class="lead">São mais de 20.000 itens para você economizar</p>
		    				</div>
		    			</div>
		    		</div>
		    		<!--ícone para mudar fotos na base da foto-->
		    		<a  class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    			<span class="sr-only">Anterior</span>
		    		</a>
		    		<a  class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    			<span class="sr-only">Próximo</span>
		    		</a>
		    	</div>
		    </div>
		    <br>
		    <!-- Fim do Carousel -->

		    <!--Cards-->
		    <div class="container" >
		    	<div class="row">
		    		<div class=" col-md-3">
		    		   <div class="card-deck">
		    			   <div class="card  altura_card  text-dark btn-info" >
		    			   	 <div class="card-body">
		    				  <img  class="card-img-top img-fluid ajuste" src="assets/img/c1.png" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title titulo">Óleo de Soya 150 ml</h5>
		    					<div class="botao-comprar">
		    						<button class="comprar">
		    					       <img src="assets/img/carrinho1.png" style="height: 20px;">
		    					      Comprar
		    					    </button>
		    					    
		    					    <select>
		    					    	<option>01</option>
		    					    	<option>02</option>
		    					    	<option>03</option>
		    					    	<option>04</option>
		    					    	<option>05</option>
		    					    	<option>06</option>
		    					    	<option>07</option>
		    					    	<option>08</option>
		    					    	<option>09</option>
		    					    	<option>10</option>
		    					    	<option>11</option>
		    					    </select>
		    					</div>
		    				  </div>
		    			    </div>
		    		      </div>
		    		   </div>
		    	    </div>
		    	  
		    		<div class=" col-md-3">
		    		   <div class="card-deck">
		    			   <div class="card  altura_card  text-dark btn-info">
		    			   	 <div class="card-body">
		    				  <img  class="card-img-top img-fluid ajuste" src="assets/img/c2.png" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title titulo">Título do card</h5>
		    					<div class="botao-comprar">
		    						<button class="comprar">
		    					       <img src="assets/img/carrinho1.png" style="height: 20px;">
		    					      Comprar
		    					    </button>
		    					    
		    					    <select>
		    					    	<option>01</option>
		    					    	<option>02</option>
		    					    	<option>03</option>
		    					    	<option>04</option>
		    					    	<option>05</option>
		    					    	<option>06</option>
		    					    	<option>07</option>
		    					    	<option>08</option>
		    					    	<option>09</option>
		    					    	<option>10</option>
		    					    	<option>11</option>
		    					    </select>
		    					</div>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    
		    		<div class=" col-md-3">
		    		   <div class="card-deck">
		    			   <div class="card  altura_card  text-dark btn-info">
		    			   	 <div class="card-body">
		    				  <img  class="card-img-top img-fluid ajuste" src="assets/img/c3.png" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title titulo">Título do card</h5>
		    					<div class="botao-comprar">
		    						<button class="comprar">
		    					       <img src="assets/img/carrinho1.png" style="height: 20px;">
		    					      Comprar
		    					    </button>
		    					    
		    					    <select>
		    					    	<option>01</option>
		    					    	<option>02</option>
		    					    	<option>03</option>
		    					    	<option>04</option>
		    					    	<option>05</option>
		    					    	<option>06</option>
		    					    	<option>07</option>
		    					    	<option>08</option>
		    					    	<option>09</option>
		    					    	<option>10</option>
		    					    	<option>11</option>
		    					    </select>
		    					</div>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    
		    	  
		    		<div class="col-md-3">
		    		   <div class="card-deck">
		    			   <div class="card  altura_card  text-dark btn-info">
		    			   	 <div class="card-body">
		    				  <img  class="card-img-top img-fluid ajuste" src="assets/img/c4.png" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title titulo">Título do card</h5>
		    					<div class="botao-comprar">
		    						<button class="comprar">
		    					       <img src="assets/img/carrinho1.png" style="height: 20px;">
		    					      Comprar
		    					    </button>
		    					    
		    					    <select>
		    					    	<option>01</option>
		    					    	<option>02</option>
		    					    	<option>03</option>
		    					    	<option>04</option>
		    					    	<option>05</option>
		    					    	<option>06</option>
		    					    	<option>07</option>
		    					    	<option>08</option>
		    					    	<option>09</option>
		    					    	<option>10</option>
		    					    	<option>11</option>
		    					    </select>
		    					</div>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    	</div><br>
		    		<div class="row">
		    		<div class=" col-md-3">
		    		   <div class="card-deck">
		    			   <div class="card  altura_card  text-dark btn-info"">
		    			   	 <div class="card-body">
		    				  <img  class="card-img-top img-fluid ajuste" src="assets/img/c5.png" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title titulo">Título do card</h5>
		    					<div class="botao-comprar">
		    						<button class="comprar">
		    					       <img src="assets/img/carrinho1.png" style="height: 20px;">
		    					      Comprar
		    					    </button>
		    					    
		    					    <select>
		    					    	<option>01</option>
		    					    	<option>02</option>
		    					    	<option>03</option>
		    					    	<option>04</option>
		    					    	<option>05</option>
		    					    	<option>06</option>
		    					    	<option>07</option>
		    					    	<option>08</option>
		    					    	<option>09</option>
		    					    	<option>10</option>
		    					    	<option>11</option>
		    					    </select>
		    					</div>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    	  
		    		<div class=" col-md-3">
		    		   <div class="card-deck">
		    			   <div class="card  altura_card  text-dark btn-info">
		    			   	 <div class="card-body">
		    				  <img  class="card-img-top img-fluid ajuste" src="assets/img/c6.png" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title titulo">Título do card</h5>
		    					<div class="botao-comprar">
		    						<button class="comprar">
		    					       <img src="assets/img/carrinho1.png" style="height: 20px;">
		    					      Comprar
		    					    </button>
		    					    
		    					    <select>
		    					    	<option>01</option>
		    					    	<option>02</option>
		    					    	<option>03</option>
		    					    	<option>04</option>
		    					    	<option>05</option>
		    					    	<option>06</option>
		    					    	<option>07</option>
		    					    	<option>08</option>
		    					    	<option>09</option>
		    					    	<option>10</option>
		    					    	<option>11</option>
		    					    </select>
		    					</div>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    
		    		<div class=" col-md-3">
		    		   <div class="card-deck">
		    			   <div class="card  altura_card  text-dark btn-info">
		    			   	 <div class="card-body">
		    				  <img  class="card-img-top img-fluid ajuste" src="assets/img/c7.png" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title titulo">Título do card</h5>
		    					<div class="botao-comprar">
		    						<button class="comprar">
		    					       <img src="assets/img/carrinho1.png" style="height: 20px;">
		    					      Comprar
		    					    </button>
		    					    
		    					    <select>
		    					    	<option>01</option>
		    					    	<option>02</option>
		    					    	<option>03</option>
		    					    	<option>04</option>
		    					    	<option>05</option>
		    					    	<option>06</option>
		    					    	<option>07</option>
		    					    	<option>08</option>
		    					    	<option>09</option>
		    					    	<option>10</option>
		    					    	<option>11</option>
		    					    </select>
		    					</div>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    
		    	  
		    		<div class="col-md-3">
		    		   <div class="card-deck">
		    			   <div class="card  altura_card  text-dark btn-info">
		    			   	 <div class="card-body">
		    				  <img  class="card-img-top img-fluid ajuste" src="assets/img/c8.png" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title titulo">Título do card</h5>
		    					<div class="botao-comprar">
		    						<button class="comprar">
		    					       <img src="assets/img/carrinho1.png" style="height: 20px;">
		    					      Comprar
		    					    </button>
		    					    
		    					    <select>
		    					    	<option>01</option>
		    					    	<option>02</option>
		    					    	<option>03</option>
		    					    	<option>04</option>
		    					    	<option>05</option>
		    					    	<option>06</option>
		    					    	<option>07</option>
		    					    	<option>08</option>
		    					    	<option>09</option>
		    					    	<option>10</option>
		    					    	<option>11</option>
		    					    </select>
		    					</div>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    	</div><br>
		    		<div class="row">
		    		<div class=" col-md-3">
		    		   <div class="card-deck">
		    			   <div class="card  altura_card  text-dark btn-info">
		    			   	 <div class="card-body">
		    				  <img  class="card-img-top img-fluid ajuste" src="assets/img/c9.jpg" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title titulo">Título do card</h5>
		    					<div class="botao-comprar">
		    						<button class="comprar">
		    					       <img src="assets/img/carrinho1.png" style="height: 20px;">
		    					      Comprar
		    					    </button>
		    					    
		    					    <select>
		    					    	<option>01</option>
		    					    	<option>02</option>
		    					    	<option>03</option>
		    					    	<option>04</option>
		    					    	<option>05</option>
		    					    	<option>06</option>
		    					    	<option>07</option>
		    					    	<option>08</option>
		    					    	<option>09</option>
		    					    	<option>10</option>
		    					    	<option>11</option>
		    					    </select>
		    					</div>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    	  
		    		<div class=" col-md-3">
		    		   <div class="card-deck">
		    			   <div class="card  altura_card  text-dark btn-info">
		    			   	 <div class="card-body">
		    				  <img  class="card-img-top img-fluid ajuste" src="assets/img/c10.png" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title titulo">Título do card</h5>
		    					<div class="botao-comprar">
		    						<button class="comprar">
		    					       <img src="assets/img/carrinho1.png" style="height: 20px;">
		    					      Comprar
		    					    </button>
		    					    
		    					    <select>
		    					    	<option>01</option>
		    					    	<option>02</option>
		    					    	<option>03</option>
		    					    	<option>04</option>
		    					    	<option>05</option>
		    					    	<option>06</option>
		    					    	<option>07</option>
		    					    	<option>08</option>
		    					    	<option>09</option>
		    					    	<option>10</option>
		    					    	<option>11</option>
		    					    </select>
		    					</div>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    
		    		<div class=" col-md-3">
		    		   <div class="card-deck">
		    			   <div class="card  altura_card  text-dark btn-info">
		    			   	 <div class="card-body">
		    				  <img  class="card-img-top img-fluid ajuste" src="assets/img/c11.png" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title titulo">Título do card</h5>
		    					<div class="botao-comprar">
		    						<button class="comprar">
		    					       <img src="assets/img/carrinho1.png" style="height: 20px;">
		    					      Comprar
		    					    </button>
		    					    
		    					    <select>
		    					    	<option>01</option>
		    					    	<option>02</option>
		    					    	<option>03</option>
		    					    	<option>04</option>
		    					    	<option>05</option>
		    					    	<option>06</option>
		    					    	<option>07</option>
		    					    	<option>08</option>
		    					    	<option>09</option>
		    					    	<option>10</option>
		    					    	<option>11</option>
		    					    </select>
		    					</div>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    
		    	  
		    		<div class="col-md-3">
		    		   <div class="card-deck">
		    			   <div class="card  altura_card  text-dark btn-info">
		    			   	 <div class="card-body">
		    				  <img  class="card-img-top img-fluid ajuste" src="assets/img/c12.png" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title titulo">Título do card</h5>
		    					<div class="botao-comprar">
		    						<button class="comprar">
		    					       <img src="assets/img/carrinho1.png" style="height: 20px;">
		    					      Comprar
		    					    </button>
		    					    
		    					    <select>
		    					    	<option>01</option>
		    					    	<option>02</option>
		    					    	<option>03</option>
		    					    	<option>04</option>
		    					    	<option>05</option>
		    					    	<option>06</option>
		    					    	<option>07</option>
		    					    	<option>08</option>
		    					    	<option>09</option>
		    					    	<option>10</option>
		    					    	<option>11</option>
		    					    </select>
		    					</div>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    	</div>
		    </div><br>


          	<div id="institucional">
          		<div class="container">
          			<div class="row">
          				<div class="col-md-12">
          					<h1>Institucional</h1>
          				</div>
          			</div>

          			<div class="row">
          				<article class="col-md-12">
          					<p>
	          					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non nisl quis mi ullamcorper condimentum. Nullam fermentum leo id lectus facilisis dignissim. In et nisl tellus. Etiam ullamcorper fermentum sapien in tincidunt. Nullam ac pulvinar mi, ut aliquet magna. In sit amet hendrerit nisi. Integer convallis ligula laoreet accumsan imperdiet. Morbi vitae vestibulum metus. Nunc odio elit, eleifend ut libero at, consequat tempus enim.
	          				</p>

	          				<p>
	          					In tempor metus non arcu lacinia porta. Nullam ornare convallis dui vitae facilisis. Suspendisse convallis nisi nec sagittis mattis. Etiam in condimentum purus, a blandit turpis. Duis consectetur orci eget augue iaculis, rhoncus malesuada justo pretium. Sed ipsum sem, vestibulum a metus non, vehicula varius risus. Duis egestas nisi et maximus tincidunt. Ut sollicitudin orci sit amet ex semper, faucibus euismod velit convallis. Mauris turpis enim, sagittis sed auctor vel, egestas in dolor. Nunc finibus pellentesque dictum. Fusce ac porttitor lorem.
	          				</p>
          				</article>
          			</div>
          		</div>
          	</div>


     		<div class="container" id="contato">
     			<div class="row">
     				<div class="col-md-12">
     					<h1>Contato</h1>
     				</div>
     			</div>

     			<div class="row">
     				<div class="col-md-12">
     					49 3222-2222
     				</div>
     			</div>

     			<div class="row">
     				<div class="col-md-12">
     					49 99999-9999
     				</div>
     			</div>

     			<div class="row" id="botao-contato">
     				<div class="col-md-12">
     					<button type="button" class="btn btn-primary">Ver Mais</button>
     				</div>
     			</div>
     		</div>

     		
        <?php include 'rodape.php'; ?>
        

	
             <!--javascripts-->
			<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>

			<script type="text/javascript">
			 	$(function () {
                  $('[data-toggle="popover"]').popover();
                  $('[data-toggle="popover"]').tooltip();
                });
			</script>


		</body>
</html>