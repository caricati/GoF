<?php

namespace Estrutural\Composite;

class Div extends ViewComponent {
	
	/**
	 * Valor do atributo HTML class
	 * @var string
	 */
	private $class;
	
	/**
	 * Método construtor
	 * @param string $class Define o valor do atributo class HTML
	 * @param unknown_type $id Define o valor do atributo id HTML
	 */
	public function __construct($class = '') {
		$this->class = $class;
	}
	
	/**
	 * Desenha o elemento <div> e seus filhos.
	 * @return void
	 */
	public function draw() {
		echo '<div class="'.$this->class.'">';
		$this->drawChildren();
		echo '</div>';
	}
}