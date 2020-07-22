<p>beta Text Editor</p>
<?= $form->button('justifyCenter','Center'); ?>
<?= $form->button('justifyLeft','Justify Left'); ?>
<?= $form->button('justifyRight','Justify Right'); ?>
<?= $form->button('bold','Bold'); ?>
<?= $form->button('italic','Italic'); ?>
<?= $form->button('underline','Underline'); ?>
<?= $form->button('insertOrderedList','List'); ?>
<?= $form->button('insertUnorderedList','List #2'); ?>
<?= $form->button('createlink','Create Link'); ?>

<div id="output" contenteditable="true"></div>

<input type="submit" class=login_button_text_editor name="submit" value="Envoyer"/>



<script>
    let size_text = '';
    function size(x)
    {
      size_text = x;

    }

    let output = document.getElementById('output');
    let buttons = document.getElementsByClassName('tool--btn');


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
