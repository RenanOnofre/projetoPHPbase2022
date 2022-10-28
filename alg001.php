<?php include 'cotacao.php' ?>
<html>
	<head>
		<title>Alg002</title>
		<meta charset="utf-8">
		<script type="text/javascript">
			var dolares = 0;
			
			function conversor(){
				//acessar o que foi digitado
				var reais = document.getElementById('reais').value;
				
				//converter de string para float
				reais = parseFloat(reais);
				
				//converter para dolares
				dolares = reais / <?php echo $EURBRL->ask; ?> ;
				
				console.log(dolares);
				
				alert(dolares + " dolares");
			}
		</script>
		
	</head>
	
	<body>
		
		<!-- Cria um formulario -->
		<p>Converter Reais para dólares.</p>
		<form>
			<fieldset>
				<label>Reais</label>
				<input type="text" id="reais" />			
				<input type="submit"  onclick="conversor()" />
			</fieldset>
		</form>

	</body>
<html>