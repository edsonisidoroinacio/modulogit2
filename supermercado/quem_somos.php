<!DOCTYPE html>
<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Filmes Em Cartaz</title>
			<script type="text/javascript" src="script.js"></script>
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="style.css">
				
		</head>

		<body> 
       <!--Inicio do Projeto-->
        <?php include 'cabecalho.php'; ?>

      	    <div id="titulo" >
          		<div class="container">
          			<div class="row">
          				<div class="col-md-12">
          					<h1>Quem Somos</h1>
          				</div>
          			</div>

          			<div class="row">
          				<div class="col-md-12">
          					<p>
	          					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non nisl quis mi ullamcorper condimentum. Nullam fermentum leo id lectus facilisis dignissim. In et nisl tellus. Etiam ullamcorper fermentum sapien in tincidunt. Nullam ac pulvinar mi, ut aliquet magna. In sit amet hendrerit nisi. Integer convallis ligula laoreet accumsan imperdiet. Morbi vitae vestibulum metus. Nunc odio elit, eleifend ut libero at, consequat tempus enim.
	          				</p>

	          				<p>
	          					In tempor metus non arcu lacinia porta. Nullam ornare convallis dui vitae facilisis. Suspendisse convallis nisi nec sagittis mattis. Etiam in condimentum purus, a blandit turpis. Duis consectetur orci eget augue iaculis, rhoncus malesuada justo pretium. Sed ipsum sem, vestibulum a metus non, vehicula varius risus. Duis egestas nisi et maximus tincidunt. Ut sollicitudin orci sit amet ex semper, faucibus euismod velit convallis. Mauris turpis enim, sagittis sed auctor vel, egestas in dolor. Nunc finibus pellentesque dictum. Fusce ac porttitor lorem.
	          				</p>
          				</div>
          			</div>
          		</div>
          	</div>

          	<div class="container">
		    	<div class="row">
		    		<div class=" col-md-4">
		    		   <div class="card-deck">
		    			   <div class="card ">
		    			   	 <div class="card-body centralizar_imagem">
		    				  <img   class="card-img-top img-fluid ajuste borda " src="assets/img/9.jpg" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title">Título do card</h5>
		    					<p class="card-text">Produtos com grande promoção</p>
		    					<p class="card-text"><small class="text-muted">Atualizados a 3 minutos</small></p>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    	  
		    		<div class=" col-md-4">
		    		   <div class="card-deck">
		    			   <div class="card">
		    			   	 <div class="card-body centralizar_imagem">
		    				  <img  class="card-img-top img-fluid ajuste borda" src="assets/img/7.jpg" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title">Título do card</h5>
		    					<p class="card-text">Produtos com grande promoção</p>
		    					<p class="card-text"><small class="text-muted">Atualizados a 3 minutos</small></p>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    
		    	  
		    		<div class="col-md-4">
		    		   <div class="card-deck">
		    			   <div class="card">
		    			   	 <div class="card-body centralizar_imagem">
		    				  <img  class="card-img-top img-fluid ajuste borda" src="assets/img/8.png" alt="imagem da capa do dard">
		    				   <div class="card-body">
		    					<h5 class="card-title">Título do card</h5>
		    					<p class="card-text">Produtos com grande promoção</p>
		    					<p class="card-text"><small class="text-muted">Atualizados a 3 minutos</small></p>
		    				   </div>
		    			     </div>
		    		       </div>
		    		   </div>
		    	    </div>
		    	</div>
		    </div>

		    

     		
        <?php include 'rodape.php'; ?>
        

	
             <!--javascripts-->
			<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
			<script type="text/javascript" src="script.js"></script>
			 <script type="text/javascript">
			 	$(function () {
                  $('[data-toggle="popover"]').popover();
                  $('[data-toggle="popover"]').tooltip();
                });
			 </script>


		</body>
</html>