<?php 

namespace Core\HTML;

class TextEditorForm extends Form{

    public function button($dataCommand, $name){

        return $button = "<button type='button' data-command='". $dataCommand ."' class='tool--btn'>". $name ."</button><br>";

    }

}