<?php require_once dirname(dirname(dirname(__FILE__))).'/bootstrap.php';

use Criacao\Singleton\Singleton;
use Criacao\Singleton\Foo;

// Recupera a instancia da classe singleton
$obj = Singleton::getInstance();

// Regista valores na classe singleton
Singleton::register('usuario', 'Caricati');
Singleton::register('Foo', new Foo());

// Imprime a mensagem retornada pelo método getMessage em Foo
echo $obj->Foo->getMessage() . "\n";

// Recupera o nome do usuário registrado no singleton
echo $obj->usuario;

/* == Saída ==

Olá! Esta é a classe Foo.
Caricati

*/