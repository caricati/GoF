<?php require_once dirname(dirname(dirname(__FILE__))).'/bootstrap.php';

use Estrutural\Composite\Form;
use Estrutural\Composite\Label;
use Estrutural\Composite\Div;
use Estrutural\Composite\Input;

// Neste exeplo a div representa a linha do formulário
// Linha que representa o campo de e-mail
$emailRow = new Div('form_row');

// São adicionados na linha do formulário, uma label e um input.
$emailRow->add( new Label('E-mail:') );
$emailRow->add( new Input('email') );

// Linha que representa o campo de senha
$senhaRow = new Div('form_row');

// Adiciona o label senha e o campo senha na linha
$senhaRow->add( new Label('Senha:') );
$senhaRow->add( new Input('senha', 'password') );

// Linha que representa o campo do botão submit
$botaoRow = new Div('form_row');

// Adiciona o botão na sua linha
$botaoRow->add( new Input('submit', 'submit', 'Enviar') );

// Criamos o elemento HTML form
$form = new Form();

// Adicionamos seus filhos, cada linha representada do formulário
$form->add( $emailRow );
$form->add( $senhaRow );
$form->add( $botaoRow );

// Por fim, desenha o formulário com seus filhos.
$form->draw();


/* == SAÍDA:

<form action="" method="post">
	<div class="form_row">
		<label for="">E-mail:</label>
		<input type="text" name="email" value="">
	</div>
	<div class="form_row">
		<label for="">Senha:</label>
		<input type="password" name="senha" value="">
	</div>
	<div class="form_row">
		<input type="submit" name="submit" value="Enviar">
	</div>
</form>

*/