<?php

namespace Criacao\Singleton;

/**
 * Singleton:
 * Uma classe com o pattern singleton, nunca poderá ser instanciada
 * fora do objeto, para evitar que o singleton nunca seja instanciado,
 * seu construtor deve ser protegido e seu método Singleton::getInstance() deve fazer
 * o controle de sua instância.
 * 
 * @author Thales Caricati <thales@caricati.com.br>
 */
class Singleton {

    /**
     * Instância da classe Singleton
     * @var Singleton
     */
    private static $instance = null;
    
    /**
     * Retorna a instância do objeto
     * @return Singleton
     */
    public static function getInstance() {
        if( is_null(self::$instance) ) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
    
    /**
     * Regista um objeto na classe singleton.
     * @param string $object Chave de registro
     * @param mixed $val Valor que será atribuido a chave de registro
     * @return void
     */
    public static function register( $key, $val ) {
        self::$instance->$key = $val;
    }
    
    /**
     * Método construtor.
     * @access private Evita com que a classe singleton seja instanciada.
     */
    private function __construct() {}
}