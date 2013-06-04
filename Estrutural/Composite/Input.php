<?php

namespace Estrutural\Composite;

class Input extends ViewComponent {

	/**
	 * Valor do atributo name
	 * @var string
	 */
	private $name;
	
	/**
	 * Valor do atributo type
	 * @var string
	 */
	private $type;
	
	/**
	 * Valor do atributo value
	 * @var string
	 */
	private $value;
	
	/**
	 * Método construtor
	 * @param string $name Valor do atributo name
	 * @param string $type Valor do atributo type
	 * @param string $value Valor do atributo value
	 */
	public function __construct($name, $type = 'text', $value = '') {
		$this->name = $name;
		$this->value = $value;
		$this->type = $type;
	}
	
	/**
	 * Desenha o elemento input
	 * @return void
	 */
	public function draw() {
		echo '<input type="'.$this->type.'" name="'.$this->name.'" value="'.$this->value.'">';
	}
}