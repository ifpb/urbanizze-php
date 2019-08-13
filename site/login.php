<?php /* Template Name: */ ?>
<?php include("header.php"); ?>

<!-- pageforms -->
<section class="pageforms">
	<div class="container-wrap">
		<div class="col-12 col-sm-9 col-xl-8 mx-auto p-0 p-sm-3">
			<!-- login -->
			<div id="login" class="boxs text-center">
				<h2 class="titulos-grande">Faça seu login</h2>
				<a href="" class="btn btn-face" title="Login with Facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Login with Facebook</a>
				<a href="" class="btn btn-twitter" title="Login with Twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
				<div class="row">
					<div class="col-12 col-sm-7 mx-sm-auto btns">
						<form action="consulta.php" method="post" class="needs-validation" novalidate>
							<div class="form-group">
								<label for="nome" class="sr-only">Nome</label>
								<input type="nome" class="form-control" placeholder="Nome do usuário" required>
								<div class="invalid-feedback">
								Informe nome de usuário
								</div>
							</div>
							<div class="form-group">
								<label for="senha" class="sr-only">Senha</label>
								<input type="password" class="form-control" placeholder="Sua senha" required>
								<div class="invalid-feedback">
								Informe sua senha
								</div>
							</div>
							<div class="py-0 py-sm-3">
							<a href="#" class="d-block links lnk-cadastro" title="">Não sou cadastrado</a>
							<a href="#" class="d-block my-3 links lnk-esqueci" title=""><em>Esqueci minha senha</em></a>
							</div>
							<!-- <a href="consulta.php" class="btn btn-primary" title="">Entrar</a> -->
							<button type="submit" class="btn btn-primary" title="Entrar">Entrar</button>
						</form>
						<!-- <a href="" class="btn btn-vazado btn-block" title="Nome do usuário">Nome do usuário</a>
						<a href="" class="btn btn-vazado btn-block" title="Sua senha">Sua senha</a> -->
					</div>
				</div>
				
			</div>

			<!-- cadastro -->
			<div id="cadastro" class="boxs text-center">
				<h2 class="titulos-grande">Cadastro</h2>
				<div class="col-12 col-sm-8 mx-auto">
					<form class="text-center needs-validation" novalidate>
						<div class="form-group">
							<label for="nome">Seu Nome</label>
							<input type="text" class="form-control" required>
							<div class="invalid-feedback">
							Informe nome de usuário
							</div>
						</div>
						<div class="form-group">
							<label for="email">Seu E-mail</label>
							<input type="email" class="form-control" required>
							<div class="invalid-feedback">
							Informe seu e-mail
							</div>
						</div>
						<div class="form-group">
							<label for="senha">Sua senha</label>
							<input type="password" class="form-control" required>
							<div class="invalid-feedback">
							Informe sua senha
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</form>
				</div>
			</div>
			
			<!-- esqueci -->
			<div id="esqueci" class="boxs text-center">
				<h2 class="titulos-grande mb-5">Esqueceu sua senha?</h2>
				<div class="col-12 col-sm-8 mx-auto">
					<form class="text-center needs-validation" novalidate>
						<div class="form-group">
							<label for="email">Digite o e-mail cadastrado</label>
							<input type="email" class="form-control" required>
							<div class="invalid-feedback">
							Informe o e-mail cadastrado
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>		
<!-- //pageforms -->

<?php include("footer.php"); ?>
