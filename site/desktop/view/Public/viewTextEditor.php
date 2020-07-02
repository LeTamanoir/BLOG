<!DOCTYPE html>
<html>
  <head>
    <title>Editor</title>
    <meta charset="utf-8" content="width=device-width" name="viewport">
    <link rel="stylesheet" href="/site/desktop/config/stylesheet_desktop/stylesheet.css">
    <script src="/site/desktop/functions/mainFunctions.js"></script>

  </head>


  <body id=text_editor>
    <div class=tool-bar>
    	<ul class="tool-list">

        <li class="tool">
    			<button type="button" data-command='justifyCenter' class="tool--btn"><img class=image_text_editor src='/icons/text_editor/100px/center.png'></button>
    		</li>

    		<li class="tool">
    			<button type="button" data-command='justifyLeft' class="tool--btn"><img class=image_text_editor src='/icons/text_editor/100px/left.png'></button>
    		</li>

        <li class="tool">
          <button type="button" data-command='justifyRight' class="tool--btn"><img class=image_text_editor src='/icons/text_editor/100px/right.png'></button>
        </li>

    		<li class="tool">
    			<button type="button"	data-command="bold"	class="tool--btn"><img class=image_text_editor src='/icons/text_editor/100px/bold.png'></button>
    		</li>

    		<li class="tool">
    			<button	type="button"	data-command="italic"	class="tool--btn"><img class=image_text_editor src='/icons/text_editor/100px/italic.png'></button>
    		</li>

    		<li class="tool">
    			<button type="button"	data-command="underline" class="tool--btn"><img class=image_text_editor src='/icons/text_editor/100px/underline.png'></button>
    		</li>

    		<li class="tool">
    			<button	type="button" data-command="insertOrderedList" class="tool--btn"><img class=image_text_editor src='/icons/text_editor/100px/number.png'></button>
    		</li>

    		<li class="tool">
    			<button type="button" data-command="insertUnorderedList" class="tool--btn"><img class=image_text_editor src='/icons/text_editor/100px/bullet.png'></button>
    		</li>

    		<li class="tool">
    			<button type="button" data-command="createlink"	class="tool--btn"><img class=image_text_editor src='/icons/text_editor/100px/link.png'></button>
    		</li>

        <div class="tool">
          <button type="button" class="tool--btn" onclick="show_navbar_font_size()"><img id=image_text_editor_2 src='../../../../icons/text_editor/100px/size.png'></button>
          <nav id=container_navbar_font_size>
            <?php $i = 0;
            while ($i<7){
              $i = $i +1;
              ?> <button type="button" data-command="FontSize" class="tool--btn navbar_font_size" onclick="size(<?=$i?>)"><?=$i?></button>
            <?php;} ?>
          </nav>
        </div>
    	</ul>
    </div>

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

  </body>


</html>
