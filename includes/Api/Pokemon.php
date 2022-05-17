<?php
/*
 * The Pokemon Class
 */

namespace FlickerLeap\Api;
use \Httpful\Request;
class Pokemon {

    public $url;
    public $results;
    public function __construct() {
        $this->url = "https://pokeapi.co/api/v2/pokemon/mewtwo";
        $this->connectToPokeApi($this->url);
    }
    public function connectToPokeApi($url)
    {
        $response = Request::get($url)
                    ->expectsJson()
                    ->send();
        $this->results = $response->body;
    }
    public function getAbilities()
    {
        echo '<h2>Abilities</h2>';
        foreach($this->results->abilities as $k => $v) {
            echo ucfirst($v->ability->name).'<br>';
        }
    }
    public function getPictures()
    {
        echo '<h2>Pictures </h2>';
        echo '<img src="'.$this->results->sprites->back_default.'" width="200">';
        echo '<img src="'.$this->results->sprites->front_shiny.'" width="200">';
    }
    public function getTypes()
    {
        echo '<h2>Types</h2>';
        echo $this->results->types[0]->type->name;
    }
    public function getSpecies()
    {
        echo '<h2>Species</h2>';
        echo ucfirst($this->results->species->name) . ' , view more '.'<a href="'.$this->results->species->url.'">here</a>';
    }
}
