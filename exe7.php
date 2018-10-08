<?php

/**
 * mot-clé class suivi du nom de la classe
 */
class character {

    /**
     * déclaration des attributs
     */
    private $health = 0;
    private $mana = 0;
    private $stuff;

    /**
     * déclaration des méthodes
     */
    public function __construct() {
        ;
    }

    public function __destruct() {
        ;
    }

    public function chat($charac) {
        ;
    }

}

/**
 * déclaration de la class orc enfants de character
 */
class orc extends character {

    private $health = 1000;

    public function useHammer() {
        ;
    }

    public function useSword() {
        ;
    }

}

/**
 * déclaration de la class stuff
 */
class stuff {

    private $head;
    private $body;
    private $weapon;

    public function construct() {
        ;
    }

    public function view() {
        ;
    }

    public function destruct() {
        ;
    }

}
