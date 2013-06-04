<?php

// Auto carregamento das classes PHP
function __autoload($class) {
	// Caminho do arquivo/classe
	$classPath  = dirname(__FILE__) . DIRECTORY_SEPARATOR;
	$classPath .= str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
	
	// Adiciona o arquivo
	require_once( $classPath );
}