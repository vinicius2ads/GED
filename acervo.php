<?php
     session_start();
     require_once('conexao.php'); // conectando ao bancou
     $con = open_database();
     selectDb();
     $rs = mysql_query("SELECT * FROM documentos;"); 
     close_database($con); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Diários</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style type="text/css">
		body{
			background-image: url('imagens/ged.png');
			font-family: 'Roboto', sans-serif;
		}
		.cabecalho h2,h1{
			font-family: 'Russo One', sans-serif;
		}	

		.cabecalho h3{
			letter-spacing: 3px;
			font-size: 10pt;
			margin-top: 5px;
		}	
		
		.diarios{
			background: #c5c5c5; /* Cor atras  */
			padding: 0 5em 2em 5em;
		}

		.page-header{
			padding: 0;	
			margin:0;
		}

		.page-header img{
			float:left;
			margin-right: 2em;
			width: 100px;
		}

		.page-header h1{
			margin:0;
			padding: 1em 0;
		}

		.cabecalho{
			margin-bottom: 2em;
		}

		.cabecalho h2,.cabecalho h3{
			margin:0;
		}

		div.cabecalho:before{
		    height: 8px;
		    width: 250px;
		    display: block;
		    background: #000000; /* primeira faixa de cor abaixo do logo */
		    content: "";
		    position: relative;
		    top: -20px;
		    margin-top: 10px;
		}

		div.cabecalho{
			border-top: 2px solid #000000; /* ultima linha */
			margin-left: 15px;
			margin-right: 15px;
    		padding-left: 0px;
    		padding-right: 0px;
			
		}
		.lista-diarios{
			list-style: none;
			float:left;
			width: 100%;
			padding: 0;
			position: relative;
		}
		
		.lista-diarios li{
			float:left;
			width: 100%;
			
			box-sizing: border-box;
			padding: 2em 1.5em;
			margin: 1px;
			border:1px solid #000000; /* cor dos quadrados */
			
			
		}		
		
		.lista-diarios i{
			font-size: 2.9em;
			
		}	

		.lista-diarios a{
			margin-bottom: 0.2em;
		}			

		.lista-diarios .item-texto{
			float: left;
			width: 90%;
			word-wrap: break-word;
			text-align: justify;
		}

		.lista-diarios h3{
			margin: 0;
			/*min-height: 35px;*/
			letter-spacing: 0.1em;
			font-size: 13pt;	
			line-height: 50px;		
		}
		.lista-diarios h3 i{
			float: left;
			margin-right: 0.5em;
		}

		.lista-diarios .item-texto  span{
			font-size: 10pt;
			display: block;
			margin-top: 0.5em;			
		}		

		.lista-diarios .item-texto span:before{
			content: "";
			height:1px;
			width: 70px;
			background: #ddd;
			display: block;
		}

		.lista-diarios .ementa-trigger{
			cursor: pointer;
			user-select: none;
			font-size: 16pt;
			top:5px;
			margin-left: 0.5em;
		}
		.lista-diarios .ementa-section{
			width: 100%;
			word-break: break-word;
			display: none;
		}

		.lista-diarios .drow{
			margin-top:10px;
		}

		.lista-diarios .ementa-section{
			padding: 10px 15px;
		    background: #d0eadd;
		    margin-top: 10px;
		}

		.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
		    z-index: 3;
		    color: #fff;
		    cursor: default;
		    background-color: #333333;
		    border-color: #333333;
		}

		.pagination>li>a, .pagination>li>span {
			color:#333;
		}		

		.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover{
			background-color: #265a88;
		}

		.popover{
		    max-width: 500px; /* Max Width of the popover (depending on the container!) */		    
		    word-break: break-word;
		}

		.col-one{
			float:left; width: 70%;
		}
		.col-two{			
			float:left; text-align: right; width: 30%;
		}								

		@media(max-width: 1200px){

			
			.cabecalho{
				margin-bottom: 1em;
			}
		}
		@media (max-width: 990px){

			.col-one{
				width: 100%;
			}			

			.col-two{
				width: 100%;				
				text-align: left;
				margin-top: 2em;
			}

			.col-two i{
				float:right;
			}
			
		}


		@media(max-width: 480px){

			.page-header{
				text-align: center;
			}
			.page-header img{
				float: none;
				margin: 0 auto;
				width: 200px;
			}

			.diarios{
				padding: 1em;
			}

			.lista-diarios .item-texto{
				width: 70%;
			}

			.col-one,.col-two{
				width: 100%;			
			}


		}
		

		
	</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-83545863-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-83545863-3');
    </script>
</head>
<body>


	<div class="container">
		<section class="diarios">

			<div class="page-header">

				<h1 class="text-center">ACERVO ELETRÔNICO</h1>

				<img class="" src="imagens/Maracai.png" style="margin-bottom:20px;">	
		
				<h1>Maracaí - São Paulo</h1>

				<p class="text-justify">O Diário Oficial Eletrônico é o veículo oficial do município para publicação de todos os atos das entidades da Administração Direta (Prefeitura e Câmara), bem como da Administração Indireta (autarquias, fundações, empresas públicas). Instituido pela Lei nº 2.713 de 03 de maio de 2017, decreto 044 de 08 de junho 2017.</p>
				
			</div>


			<div class="row">

				<div class="cabecalho">

						<div class="row">
							<div class="col-md-6 col-sm-12">
								<h2>Edições</h2>
								<h3>Diários Oficiais Eletrônicos</h3>		
							</div>

							<div class="col-md-6 col-sm-12">
								<form class="navbar-form navbar-right" role="search">
									<div class="input-group">
										<input type="text" id="pesquisa" class="form-control pull-right" style="margin-right: 35px, border: 1px solid black;" placeholder="Buscar Publicação" name="pesquisa">
										<span class="input-group-btn">
											<button type="reset" class="btn btn-default">
												<span class="glyphicon glyphicon-remove">
													<span class="sr-only">limpar</span>
												</span>
											</button>
											<button type="submit" class="btn btn-default">
												<span class="glyphicon glyphicon-search">
													<span class="sr-only">Pesquisar</span>
												</span>
											</button>
										</span>
									</div>
									</form>	
							</div>
						</div>
						
				</div>				

				<div class="col-md-12">

					
					
					<ul class="lista-diarios">
						
												
						<li>

							

							
									
							<div class="col-one">
                            <?php while ($row = mysql_fetch_array($rs)) { ?>
            
								<h3><img src="imagens/pdf.png"></img> Assunto: &nbsp <?php echo $row['assunto'] ?> <span class='badge' style='background:#0aa655'>id: &nbsp<?php echo $row['id'] ?></span></h3>
								<h3 align="left">Data: &nbsp <?php echo $row['data'] ?> </h3>
							</div>
                            <div class="row col-md-7">
        <table  class="table table-striped table table-hover">
            <?php } ?>  
        </table>
     </div>
						
						</li>
		</section>
	</div>

	  <!-- jQuery -->
    <script src="https://www.dioenet.com.br/public/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://www.dioenet.com.br/public/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$('[data-toggle="popover"]').popover();

			$(".ementa-trigger").click(function( event ){
				
				var ementaTrigger = $(this);
				$(this).parent().siblings(".ementa-section").slideToggle("fast",function(){
								
					ementaTrigger.hasClass("glyphicon-circle-arrow-down") ? 
					ementaTrigger.removeClass("glyphicon-circle-arrow-down").addClass("glyphicon-circle-arrow-up") :	
					ementaTrigger.removeClass("glyphicon-circle-arrow-up").addClass("glyphicon-circle-arrow-down");						
					
				});

			});
		})
	</script>
</body>
</html>