<!DOCTYPE html>
<html lang="pt-br">
		<head>
				<meta charset="utf-8">
				<title>Aula 32</title>
				<link rel="stylesheet"  href="assets/libs/bootstrap-4.1.3/css/bootstrap.min.css">
				<link rel="stylesheet" href="assets/css/estilo.css">
				
		</head>

		<body> 
       <!--Inicio do Projeto-->
        <?php include 'cabecalho.php'; ?>
        <br>
           
          	<div class="container" id="contatos">
		    	<div class="row">
		    		<div class="col-md-12">
          					<h1>Contatos</h1>
          			</div>
		    		<div class="col-md-6">
		    			<div class="input-group mb-3">
		    				<input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
		    			</div>
		    			<div class="input-group mb-3">
		    				<input type="text" class="form-control" placeholder="Phone" aria-label="Recipient's username" aria-describedby="basic-addon2">
		    			</div>
		    			<div class="input-group mb-3">
		    				<input type="text" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon3">
		    			</div>
		    			<div class="input-group mb-3">
		    				<textarea class="form-control" placeholder="Mensagem" aria-label="With textarea"></textarea>
		    			</div>
		    			<br>
		    			<button class="btn btn-dark" type="submit">Enviar</button>
		    		</div>
		    		<div class="col-md-6">
		    		
  
  <div class="form-group">
  
    <input type="text" class="form-control" id="inputAddress" placeholder="Endereço">
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="inputAddress2" placeholder="Complemento">
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-6">
      
      <select id="inputState" class="form-control" >
        <option selected>Cidade...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      
      <select id="inputState" class="form-control" >
        <option selected>Estado...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      
      <input type="text" class="form-control" id="inputZip" placeholder="CEP">
    </div>
  </div>
  

		    		</div>
		    	</div>
		    </div>
      	

     		
         <?php include 'rodape.php'; ?>
        

	
             <!--javascripts-->
			 <script src="assets/libs/jquery.js"></script>
			 <script src="assets/libs/popper.min.js"></script>
			 <script src="assets/libs/bootstrap-4.1.3/js/bootstrap.min.js"></script>

			 <script type="text/javascript">
			 	$(function () {
                  $('[data-toggle="popover"]').popover();
                  $('[data-toggle="popover"]').tooltip();
                });
			 </script>


		</body>
</html>