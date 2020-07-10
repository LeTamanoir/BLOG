<?php 

namespace Core\HTML;

class BootstrapForm extends Form{

    /**
     * @param $html Code HTML à entourer
    * @return string
    */
    public function surround($html){
        return $html;
    }
    /**
     * @param $name
    * @param $label
    * @param array options
    * @return string
    */
    public function input($name,$label,$options = []){
        $type = isset($options['type']) ? $options['type']: 'text';
        $id = isset($options['id']) ? $options['id']: '';
        if(isset($options['placeholder'])){
            $placeholder = $options['placeholder'];
        }
        $label = '<label class="text_big center_vertical">'. $label . '</label>';
        if($type === 'textarea'){
            $input = '<textarea name="' . $name .'" class="form-control">'. $this->getValue($name) .'</textarea>';
        }elseif($name === 'password'){
            $input = '<div><input type="'. $type .'" name="' . $name .'" id="'.$id.'" placeholder= "'. $placeholder . '" value="'. $this->getValue($name) .'" class="text_big padding_x_small border_grey radius">';
        }else{
            $input = '<input type="'. $type .'" name="' . $name .'" id="'.$id.'" placeholder= "'. $placeholder . '" value="'. $this->getValue($name) .'" class="text_big padding_x_small border_grey radius">';
        }
        return $this->surround($label . $input);
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