<?php 

namespace Core\HTML;

class TextEditorForm extends Form{

    public function button($dataCommand, $name){

        $button = "<button type='button' data-command='". $dataCommand ."'>". $name ."</button>";

    }

}