<?php 

namespace Core\HTML;

class BootstrapForm extends Form{

    public $surround = 'div class="flex_row" ';

    /**
     * @param $html Code HTML à entourer
    * @return string
    */
    public function surround($html){
        return "<{$this->surround}>{$html}";
    }
    /**
     * @param $name
    * @param $label
    * @param array options
    * @return string
    */
    public function input($name,$label,$options = [], $Surround = true){
        
        $type = isset($options['type']) ? $options['type']: 'text';
        $id = isset($options['id']) ? $options['id']: '';
        $placeholder = isset($options['placeholder']) ? $options['placeholder'] : '';
        $label = '<label class="text_big center_vertical label_form">'. $label . '</label>';
        $input = '<input type="'. $type .'" name="' . $name .'" id="'.$id.'" placeholder= "'. $placeholder . '" value="'. $this->getValue($name) .'" class="text_big padding_x_small input_form">';
        if($Surround === true){
            return $label. $this->surround($input);
        }
        return $label.$input;

    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }

    public function select($name, $label, $options){
        $label = '<label>'. $label . '</label>';
        $input = '<select class"form-control" name="' .$name. '">';
        foreach($options as $k => $v){
            $attributes = '';
            if($k == $this->getValue($name)){
                $attributes = ' selected';
            }
            $input .= "<option value='$k'$attributes>$v</option>";
        }
        $input .= '</select>';
        return $this->surround($label . $input);

    }

}