<p>Arthur est un gros chauve de mort qui met des br dans son html miskine <p>
<div class="flex_column">
  <div id=tool_list_text_editor>
    <?= $form->button('bold','Bold'); ?>
    <?= $form->button('italic','Italic'); ?>
    <?= $form->button('underline','Underline'); ?>
    <?= $form->button('justifyLeft','Justify-Left'); ?>
    <?= $form->button('justifyCenter','Center'); ?>
    <?= $form->button('justifyRight','Justify-Right'); ?>
    <?= $form->button('insertOrderedList','Ordered-List'); ?>
    <?= $form->button('insertUnorderedList','Unordered-List'); ?>
    <?= $form->button('createlink','Clip-Link'); ?>
    
  </div>
  <div id="output" contenteditable="true"></div>
  <div class=flex_row><input type="submit" class="color_black underline_hover padding_x_small text_medium background_color_white cursor" name="submit" value="Envoyer"/></div>
</div>


<script>
    /*let size_text = '';
    function size(x)
    {
      size_text = x;

    }*/

    let output = document.getElementById('output');
    let buttons = document.getElementsByClassName('button_text_editor');


    for (let btn of buttons) {
      btn.addEventListener('click', () => {
        let cmd = btn.dataset['command'];
        if(cmd === 'createlink')
        {
          let url = prompt("Enter the link here: ", "http:\/\/");
          document.execCommand(cmd, false, url);

        }
        else if (cmd === "FontSize")
        {
          document.execCommand(cmd, false, size_text);
        }
        else
        {
          document.execCommand(cmd, false, null);
        }
        
      })
    }</script>
