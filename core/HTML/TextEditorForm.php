<?php 

namespace Core\HTML;

class TextEditorForm extends Form{

    public function button($dataCommand, $name){

        return $button = "<button type='button' class='button_text_editor' data-command='". $dataCommand ."' class='tool--btn'><div id=". $name ." class='text_editor_icon' title=". $name ."></div></button>";

    }

}