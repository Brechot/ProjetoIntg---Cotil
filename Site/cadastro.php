<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css.css">
			<link rel="stylesheet" type="text/css" href="respon.css">
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
				<script src="https://kit.fontawesome.com/9fefcf6978.js" crossorigin="anonymous"></script>
	<title>Cadastro</title>
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">

		<style type="text/css">
			
			#sucess{
				color: green;
				font-weight: bold;
			}

			#error{
				color: red;
				font-weight: bold;
			}

		</style>
	</head>


		

</head>
<body class="bkg">
	<div class="principal">
		<div class="header">
			<div class="ctrHeader">
					<div class="azul amarelo1">
						<div class="amarelo2">
							<button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
							  </svg></button>

							<div class="offcanvas offcanvas-start bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
								<div class="offcanvas-header">
									<h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"></h5>
									<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
								</div>
								<div class="offcanvas-body">
									<p><div class="iconx"><a class="nav-link" href="produtos.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-handbag" viewBox="0 0 16 16">
									    <path d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2zm3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6h4z"/>
									  </svg> Produtos</a></div></p>
									<p><div class="iconx"><a class="nav-link" href="historia.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
										<path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
										<path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
									  </svg> História</a></div></p>
									<p><div class="iconx"><a class="nav-link" href="contato.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
										<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
									  </svg> Contato</a></div></p>
									<p><div class="iconx"><a class="nav-link" href="promocoes.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
										<path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
										<path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
									  </svg> Promoção</a></div></p>
									<p><div class="iconx"><a class="nav-link" href="favoritos.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
										<path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
									  </svg> Favoritos</a></div></p>
									<p><div class="iconx"><a class="nav-link" href="Login.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
										<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
										<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
										</svg> Login</a></div></p>
									<p><div class="iconx"><a class="nav-link" href="carrinho.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
										<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
										</svg> Carrinho</a></div></p>
									<p><div class="iconx"><a class="nav-link" href="https://www.instagram.com/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
										<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
									  </svg> Instagram</a></div></p>
									<p><div class="iconx"><a class="nav-link" href="https://pt-br.facebook.com/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
										<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
									  	</svg> Facebook</a></div></p>
									<p><div class="iconx"><a class="nav-link" href="https://twitter.com/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
										<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
									  	</svg> Twitter</a></div></p>
								</div>
							</div>
						</div>
						<div class="amarelo2">
							<div class="logo">
								<a href="index.html">FShop</a>	
							</div>
						</div>
					</div>
					<div class="azul">
						<div class="srch">
							<nav class="navbar navbar-dark cor">
							  <div class="container-fluid">
							    <form class="d-flex">
							      <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
							    </form>
							  </div>
							</nav>
						</div>
						<div class="about">
						</div>
					</div>
					<div class="azul">
						<div class="icon">
							<a href="favoritos.html">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
								<path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
								</svg>
							</a>
						</div>
						<div class="icon">
							<a href="Login.php">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
								<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
								<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
								</svg>
							</a>
						</div>
						<div class="icon">
							<a href="carrinho.html">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
								<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
							</svg>
							</a>
						</div> 
					</div>
			</div>
		</div>

		

		<form method="post" enctype="multipart/form-data">

<div class="estica">
	<div class="container" style="margin-top: 40px;">
	<form>
	  <div class="row align-items-start csscadastro">
	    <div class="col-md-3">
	    	Nome Completo:<br>
			<div class="input-group mb-3">
				<span class="input-group-text" id="nomeS">*</span>
				<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="nome" name="nome">
			  </div>
	    </div>
	     <div class="col-md-4">
		E-mail:<br>
		  <div class="input-group mb-3">
			<span class="input-group-text" id="emailS">*</span>
			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="email" name="email">
		  </div>
	    </div>
	  </div>

			 <div class="row align-items-start csscadastro">
	    <div class="col-md-4">
	      Senha:
		  <div class="input-group mb-3">
			<span class="input-group-text" id="senhaS">*</span>
			<input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="senha" name="senha">
		  </div>
	    </div>


		 <div class="col-md-2">
	    Sexo:
	    <div class="input-group mb-3">
			<label class="input-group-text" for="inputGroupSelect01" id="sexoS">*<!-- C/Obrigatório--></label>
				<select class="form-select" id="sexo" name="sexo">
					<option selected value="0"></option>
					<option value="Masculino">Maculino</option>
					<option value="Feminino">Feminino</option>
					<option value="Indefinido">Indefinido</option>
		  		</select>
		</div>
	    </div>
		 <div class="col-md-2">
		RG:
	    <div class="input-group mb-3">
  			<span class="input-group-text" id="rgS">*</span>
  			<input type="text" size="5" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="rg" name="rg">
		</div>
	    </div>

	    <div class="col-md-3">
			Data de Nascimento(dd/mm/aaaa):
			<div class="input-group mb-3">
			  <span class="input-group-text" id="dataS">*</span>
			  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="data" name="data">
		</div>
		  </div>
	  </div>

	  <div class="row align-items-start csscadastro">
	    <div class="col-md-3">
	      Telefone 1:
		  <div class="input-group mb-3">
			<span class="input-group-text" id="tel1S">*</span>
			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="tel1" name="tel1">
	  </div>
	    </div>
	    <div class="row align-items-start csscadastro">
	    <div class="col-md-3">
			Foto:<br>
			<input type="file" name="foto" accept="image/gif, image/png, image/jpg, image/jpeg"> 
			<br><br>
			<input type="submit" onclick=Cadastrar() value="Cadastrar" class="btn-dark">


		
		  <div class="col-md-2">
			<button type="reset" class="btn btn-dark" onclick=Limpar();>Limpar</button>
		  </div>
		  <div class="col-md-2">
			  <sub><i>(*) Campos Obrigatórios</i></sub>
			</div>
	  </div>
			<hr>
		</form>
	</body>
<script type="text/javascript" src="jq/jquery-3.6.0.js"></script>
		<script type="text/javascript" src="jq/jquery.mask.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
			
			jQuery(function($){
				$("#cpf").mask("999.999.999-99");
				$("#cep").mask("99.999-999");
				$("#rg").mask("99.999.999-9");
				$("#idade").mask("99");
				$("#data").mask("99/99/9999");
				$("#tel1").mask("(99) 9 9999-9999");
				$("#tel2").mask("(99) 9 9999-9999");
				});

				var nome = document.getElementById("nome").value;
				var sobre = document.getElementById("sobre").value;
				var email = document.getElementById("email").value;
				var endereco = document.getElementById("endereco").value;
				var cep = document.getElementById("cep").value;
				var idade = document.getElementById("idade").value;
				var cpf = document.getElementById("cpf").value;
				var sexo = document.getElementById("sexo").value;
				var rg = document.getElementById("rg").value;
				var data= document.getElementById("data").value;
				var tel1 = document.getElementById("tel1").value;
				var tel2 = document.getElementById("tel2").value;
				var senha = document.getElementById("senha").value;
				var csenha = document.getElementById("csenha").value;


				function Cadastrar(){

				var nome = document.getElementById("nome").value;
				var sobre = document.getElementById("sobre").value;
				var email = document.getElementById("email").value;
				var endereco = document.getElementById("endereco").value;
				var cep = document.getElementById("cep").value;
				var idade = document.getElementById("idade").value;
				var cpf = document.getElementById("cpf").value;
				var rg = document.getElementById("rg").value;
				var sexo = document.getElementById("sexo").value;
				var rg = document.getElementById("rg").value;
				var data= document.getElementById("data").value;
				var tel1 = document.getElementById("tel1").value;
				var tel2 = document.getElementById("tel2").value;
				var senha = document.getElementById("senha").value;
				var csenha = document.getElementById("csenha").value;
				
				
					if(nome==""){
						
						document.getElementById("nomeS").innerHTML = "❌"
						document.getElementById("nomeS").style.borderColor = "red";
					}else{
						document.getElementById("nomeS").innerHTML = "✔️"
						document.getElementById("nomeS").style.borderColor = "green";
					}if (sobre == 0){
						
						document.getElementById("sobreS").innerHTML = "❌"
						document.getElementById("sobreS").style.borderColor = "red";
					}else{
						document.getElementById("sobreS").innerHTML = "✔️"
						document.getElementById("sobreS").style.borderColor = "green";
					}
					if (email == 0){
						
						document.getElementById("emailS").innerHTML = "❌"
						document.getElementById("emailS").style.borderColor = "red";
					}else{
						document.getElementById("emailS").innerHTML = "✔️"
						document.getElementById("emailS").style.borderColor = "green";
					}
					if (endereco == 0){
						document.getElementById("enderecoS").innerHTML = "❌"
						document.getElementById("enderecoS").style.borderColor = "red";
					}else{
						document.getElementById("enderecoS").innerHTML = "✔️"
						document.getElementById("enderecoS").style.borderColor = "green";
					}
					if (cep == 0){
						
						document.getElementById("cepS").innerHTML = "❌"
						document.getElementById("cepS").style.borderColor = "red";
					}else{
						document.getElementById("cepS").innerHTML = "✔️"
						document.getElementById("cepS").style.borderColor = "green";
					}
					if (idade <= 18){
						
						document.getElementById("idadeS").innerHTML = "❌"
						document.getElementById("idadeS").style.borderColor = "red";
					}else{
						document.getElementById("idadeS").innerHTML = "✔️"
						document.getElementById("idadeS").style.borderColor = "green";
					}
					if (cpf == 0){
						
						document.getElementById("cpfS").innerHTML = "❌"
						document.getElementById("cpfS").style.borderColor = "red";
					}else{
						document.getElementById("cpfS").innerHTML = "✔️"
						document.getElementById("cpfS").style.borderColor = "green";
					}
					if (sexo == 0){
						
						document.getElementById("sexoS").innerHTML = "❌"
						document.getElementById("sexoS").style.borderColor = "red";
					}else{
						document.getElementById("sexoS").innerHTML = "✔️"
						document.getElementById("sexoS").style.borderColor = "green";
					}
					if (rg == 0){
						
						document.getElementById("rgS").innerHTML = "❌"
						document.getElementById("rgS").style.borderColor = "red";
					}else{
						document.getElementById("rgS").innerHTML = "✔️"
						document.getElementById("rgS").style.borderColor = "green";
					}
					if (data == 0){
						
						document.getElementById("dataS").innerHTML = "❌"
						document.getElementById("dataS").style.borderColor = "red";
					}else{
						document.getElementById("dataS").innerHTML = "✔️"
						document.getElementById("dataS").style.borderColor = "green";
					}
					if (tel1 == 0){
						
						document.getElementById("tel1S").innerHTML = "❌"
						document.getElementById("tel1S").style.borderColor = "red";
					}else{
						document.getElementById("tel1S").innerHTML = "✔️"
						document.getElementById("tel1S").style.borderColor = "green";
					}
					if (senha == 0){
						
						document.getElementById("senhaS").innerHTML = "❌"
						document.getElementById("senhaS").style.borderColor = "red";
					}else{
						document.getElementById("senhaS").innerHTML = "*";
					}
					if (csenha == 0){
						
						document.getElementById("csenhaS").innerHTML = "❌"
						document.getElementById("csenhaS").style.borderColor = "red";
					}else{
						document.getElementById("csenhaS").innerHTML = "*";
					}
					if(senha==csenha){

					}
					if(senha == 0 || csenha == 0){
						document.getElementById("senhaS").innerHTML = "❌"
						document.getElementById("senhaS").style.borderColor = "red";
						document.getElementById("csenhaS").innerHTML = "❌"
						document.getElementById("csenhaS").style.borderColor = "red";
					}
					else if(senha!=csenha){
						document.getElementById("senhaS").innerHTML = "Senhas Diferentes"
						document.getElementById("csenhaS").innerHTML = "Senhas Diferentes"
						document.getElementById("csenhaS").style.borderColor = "red";
						document.getElementById("senhaS").style.borderColor = "red";
						document.getElementById("senhaS").style.Color = "red";
						document.getElementById("csenhaS").style.Color = "red";
					}else{
						document.getElementById("senhaS").innerHTML = "✔️"
						document.getElementById("csenhaS").innerHTML = "✔️"
						document.getElementById("csenhaS").style.borderColor = "";
						document.getElementById("senhaS").style.borderColor = "";
						document.getElementById("senhaS").style.Color = "";
						document.getElementById("csenhaS").style.Color = "";
					}
					if(nome!=0 && sobre!=0 && email!=0 && endereco!=0 && cep!=0 && idade>=18 && cpf!=0 && sexo!=0 && rg!=0 && data!=0 && tel1!=0 && senha!=0 && csenha!=0 && senha==csenha){
					swal({
					title: "Cadastro Realizado!",
					text: "Seu Cadastro foi efetuado com sucesso!",
					icon: "success",
					button: "Continuar"
					});

					
				}

				}

				function Limpar(){


				document.getElementById("nome").innerHTML = "";
				document.getElementById("sobre").innerHTML = "";
				document.getElementById("email").innerHTML = "";
				document.getElementById("endereco").innerHTML = "";
				document.getElementById("cep").innerHTML = "";
				document.getElementById("idade").innerHTML = "";
				document.getElementById("cpf").innerHTML = "";	
				document.getElementById("sexo").innerHTML = "";
				document.getElementById("rg").innerHTML = "";
				document.getElementById("data").innerHTML = "";
				document.getElementById("tel1").innerHTML = "";
				document.getElementById("tel2").innerHTML = "";
				document.getElementById("senha").innerHTML = "";
				document.getElementById("csenha").innerHTML = "";

				document.getElementById("nomeS").innerHTML = "*";
				document.getElementById("sobreS").innerHTML = "*";
				document.getElementById("emailS").innerHTML = "*";
				document.getElementById("enderecoS").innerHTML = "*";
				document.getElementById("cepS").innerHTML = "*";
				document.getElementById("idadeS").innerHTML = "*";
				document.getElementById("cpfS").innerHTML = "*";	
				document.getElementById("rgS").innerHTML = "*";
				document.getElementById("sexoS").innerHTML = "*";
				document.getElementById("dataS").innerHTML = "*";
				document.getElementById("tel1S").innerHTML = "*";
				document.getElementById("senhaS").innerHTML = "*";
				document.getElementById("csenhaS").innerHTML = "*";

				document.getElementById("nomeS").style.borderColor = "";
				document.getElementById("sobreS").style.borderColor = "";
				document.getElementById("emailS").style.borderColor = "";
				document.getElementById("enderecoS").style.borderColor = "";
				document.getElementById("cepS").style.borderColor = "";
				document.getElementById("idadeS").style.borderColor = "";
				document.getElementById("cpfS").style.borderColor = "";
				document.getElementById("rgS").style.borderColor = "";
				document.getElementById("sexoS").style.borderColor = "";
				document.getElementById("dataS").style.borderColor = "";
				document.getElementById("tel1S").style.borderColor = "";
				document.getElementById("senhaS").style.borderColor = "";
				document.getElementById("csenhaS").style.borderColor = "";

				}
				
		</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</html>


<?php

	define('TAMANHO_MAXIMO', (2 * 1024 * 1024));

	if($_SERVER["REQUEST_METHOD"] === 'POST'){

		

		try{
			include("conexaoBD.php");

			//usuario
			$email = $_POST["email"];
			$senha = $_POST['senha'];
			$sexo = $_POST['sexo'];
			$nome = $_POST['nome'];
			$rg = $_POST['rg'];
			$data = $_POST['data'];
			$tel1 = $_POST['tel1'];

				//foto
			$foto = $_FILES['foto'];
			$nomeFoto = $foto['name'];
			$tipoFoto = $foto['type'];
			$tamanhoFoto = $foto['size'];


			

			if ((trim($email) == "")) {
				echo "<span id='error'>Informe um email válido!</span>";
			}

			else if ((trim($senha) == "")){
				echo "<span id='error'>Senha é obrigatório!</span>";
			}

			else if ((trim($sexo) == "")){
				echo "<span id='error'>Sexo é obrigatório!</span>";
			}

			else if ((trim($nome) == "")){
				echo "<span id='error'>Nome é obrigatório!</span>";
			}

			else if ((trim($rg) == "")){
				echo "<span id='error'>RG é obrigatório!</span>";
			}

			else if ((trim($data) == "")){
				echo "<span id='error'>Insira uma Data de Nascimento válida!</span>";
			}

			else if ((trim($tel1) == "")){
				echo "<span id='error'>Infomre um número de telefone válido!</span>";
			}








			


			


			

			else{
				//verificando se o RA informando já existe no BD para não dar exception
				$stmt = $pdo->prepare("select * from usuarioFshop where email = :email");
				$stmt->bindParam(':email',$email);
				$stmt->execute();

				$rows = $stmt->rowCount();

				if($rows <= 0){

					if($nomeFoto == "")
					{

						$fotoBinario == null;

					}

					else
					{

						//Lendo o conteudo do arquivo para uma var
						$fotoBinario = file_get_contents($foto['tmp_name']);
					}

					$stmt = $pdo->prepare("insert into usuarioFshop(email,senha,sexo,foto,nome,rg,data,telefone) values(:email, :senha, :sexo, :foto, :nome, :rg, :data, :tel1)");
					$stmt->bindParam(':email',$email);
					$stmt->bindParam(':senha',$senha);
					$stmt->bindParam(':sexo',$sexo);
					$stmt->bindParam(':foto',$fotoBinario);
					$stmt->bindParam(':nome',$nome);
					$stmt->bindParam(':rg',$rg);
					$stmt->bindParam(':data',$data);
					$stmt->bindParam(':tel1',$tel1);
					$stmt->execute();

					echo "<span id='sucess'>Conta criada com sucesso!</span>";
				} else{
					echo"<span id='error'> Email já cadastrado!</span>";
				}
			}
		}

		catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

        $pdo = null;
    	}
	

?>