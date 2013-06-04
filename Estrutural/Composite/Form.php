<?php

namespace Estrutural\Composite;

/**
 * 
 * Um formulário HTML não é uma olha, pois ele pode conter filhos, como: label, input, span e etc.
 * 
 * @author Caricati <thales@caricati.com.br>
 */
class Form extends ViewComponent {

	/**
	 * Ação do formulário
	 * @var string
	 */
	private $action;
	
	/**
	 * Método do formulário
	 * @var string
	 */
	private $method;
	
	/**
	 * Método contrutor
	 * @param string $action Ação da tag do formulário
	 * @param string $method Tipo de método do formulário. POST, GET
	 */
	public function __construct($action = '', $method = 'post') {
		$this->action = $action;
		$this->method = $method;
	}
	
	/**
	 * Desenha um formulário HTML
	 * @return void
	 */
	public function draw() {
		echo '<form action="'.$this->action.'" method="'.$this->method.'">';
		$this->drawChildren();
		echo '</form>';
	}
}