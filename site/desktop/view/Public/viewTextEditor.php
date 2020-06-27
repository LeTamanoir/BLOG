<!DOCTYPE html>
<html>
  <head>
    <title>Editor</title>
    <meta charset="utf-8">
  </head>


  <body>
    <div class="toolbar">
    	<ul class="tool-list">

    		<li class="tool">
    			<button type="button" data-command='justifyLeft' class="tool--btn"><i>justifyLeft</i></button>
    		</li>

    		<li class="tool">
    			<button type="button" data-command='justifyCenter' class="tool--btn"><i>justifyCenter</i></button>
    		</li>

    		<li class="tool">
    			<button type="button"	data-command="bold"	class="tool--btn"><i>bold</i></button>
    		</li>

    		<li class="tool">
    			<button	type="button"	data-command="italic"	class="tool--btn"><i>italic</i></button>
    		</li>

    		<li class="tool">
    			<button type="button"	data-command="underline" class="tool--btn"><i>underline</i></button>
    		</li>

    		<li class="tool">
    			<button	type="button" data-command="insertOrderedList" class="tool--btn"><i>ol</i></button>
    		</li>

    		<li class="tool">
    			<button type="button" data-command="insertUnorderedList" class="tool--btn"><i>ul</i></button>
    		</li>

    		<li class="tool">
    			<button type="button" data-command="createlink"	class="tool--btn"><i>link</i></button>
    		</li>

        <li class="tool">
          <ul>
            <?php $i = 0;

            while ($i<7){
              $i = $i +1;
              ?> <li><button type="button" data-command="FontSize" class="tool--btn" onclick="size(<?=$i?>)"><?=$i?></button></li>

            <?php;} ?>
          </ul>
        </li>

        <li class="tool">
          <button type="button" data-command="FontSizeD"	class="tool--btn"><i>highlighting</i></button>
        </li>

    	</ul>
    </div>

    <div id="output" contenteditable="true"></div>

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
          console.log(size_text);
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


<!-- A dégager -->
<style>*,
*:before,
*:after {
	box-sizing: border-box;
}

.toolbar {}
.tool-list {
	display: flex;
	flex-flow: row nowrap;
	list-style: none;
	padding: 0;
	margin: 1rem;
	overflow: hidden;
	border-raduis: 10px;
}
.tool {}
.tool--btn {
	display: block;
	border: none;
	padding: .5rem;
	font-size: 20px;
}

#output {
	height: 400px;
	box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
	margin: 1rem;
	padding: 1rem;
}</style>
