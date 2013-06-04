<?php

namespace Estrutural\Composite;

/**
 * Leaf: Representa o elemento HTML Label
 * 
 * @author Thales Caricati <thales@caricati.com.br>
 */
class Label extends ViewComponent{

    /**
     * Neste caso um label não contém filhos.
     * @var true
     */
    protected $leaf = true;
    
    /**
     * Representa o atributo for da tag label
     * @var string
     */
    private $for;
    
    /**
     * Valor da tag label
     * @var string
     */
    private $value;
    
    /**
     * Método construtor
     * @param string $for Atributo for da tag label
     */
    public function __construct( $value, $for = '' ) {
        $this->value = $value;
        $this->for = $for;
    }
    
    /**
     * Desenha o elemento label HTML
     * @return void
     */
    public function draw() {
        echo '<label for="'.$this->for.'">'.$this->value.'</label>';
    }
}