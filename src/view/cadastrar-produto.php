<?php 
session_start();
	require_once($_SERVER['DOCUMENT_ROOT'] . '\\autoload.php');


?>
<div>
	<div class="alert alert-info"><h3>Cadastre um novo produto</h3></div>

	<?php if(isset($_SESSION['info']) || isset($_SESSION['info']) ): ?>
		<div class="text-info"> <?= $_SESSION['info'] ?> </div>
	<?php endif; ?>

	<?php $_SESSION['info'] = '' ?>
	
	<form action="/salvar-produto" method="POST">
		<div class="form-group mb-3">
			<label class="form-label" for="">Nome</label>
			<input type="text" name="name" class="form-control" id="name" />
		</div>

		<div class="form-group mb-3">
			<label class="form-label" for="">Descrição</label>
			<input type="text" name="description" class="form-control" id="description" />
		</div>
		<div class="form-group mb-3">
			<label class="form-label" for="">Preço</label>
			<input type="number" name="price" class="form-control" id="price" />
		</div>

        <div class="form-group mb-3">
            <button class="btn btn-success w-100" type="submit">Cadastrar</button>
        </div>
	</form>
</div>
