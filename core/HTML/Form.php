<?php

namespace Core\HTML;

class Form{

  /**
  * @var array Données utilisées par le formulaire
  */
  protected $data;

  /**
  *@var array string Tag utilisé pour entourer les champs
  */
  public $surround = 'div';


  /**
  * @param array $data Données utilisées par le formulaire
  */
  public function __construct($data = array()){
    $this->data = $data;
  }


  /**
  * @param $html Code HTML à entourer
  * @return string
  */
  protected function surround($html){
    return "<{$this->surround}>{$html}</{$this->surround}>";
  }

  /**
  * @param $name
  * @param $label
  * @param array options
  * @return string
  */
  public function input($name,$label,$options = []){
    $type = isset($options['type']) ? $options['type']: 'text';
    return $this->surround(
      '<input type="' . $type  .'" name="' . $name .'" value="'. $this->getValue($name) .'">'
    );
  }

  public function submit(){
    return $this->surround('<button type="submit">Envoyer</button>');
  }


  // GETTERS
  public function getData(){
    return $this->data;
  }


  /**
  * @param $index string Code HTML à entourer
  * @return string
  */
  protected function getValue($index){
    if(is_object($this->data)){
      return $this->data->$index;
    }
    return isset($this->data[$index]) ? $this->data[$index] : null;

  }

  //SETTERS


}

?>
