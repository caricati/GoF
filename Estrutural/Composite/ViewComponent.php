<?php

namespace Estrutural\Composite;

use \LogicException;
use \ArrayObject;

/**
 * Componentes 
 * @author caricati
 *
 */
abstract class ViewComponent {

	/**
	 * O componente é uma folha? Ou seja, não possui filhos.
	 * @var boolean
	 */
	protected $leaf = false;
	
	/**
	 * Filhos
	 * @var array
	 */
	protected $children = array();
	
	/**
	 * Adiciona um novo filho ao componente.
	 * Somente um composite deve conter filhos.
	 * @throws LogicException
	 * @return void
	 */
	public function add( ViewComponent $component ) {
		if( $this->leaf ) {
			throw new LogicException("Uma folha não contém filhos.");
		}
		$this->children[] = $component;
	}
	
	/**
	 * Desenha seus filhos
	 * @return void
	 */
	protected function drawChildren() {
		// É um composite?
		if( !$this->leaf ) {
			foreach( $this->children as $component ) {
				$component->draw();
			}
		}
	}
	
	/**
	 * Todo componente deve desenhar seu elemento
	 * @return void
	 */
	abstract public function draw();
}