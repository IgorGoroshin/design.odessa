<?php
echo '<div id="text"><h2 id="text-center">'.$data[0]['About']['title'].'</h3>';
echo "<br>";
echo "<h3>".$data[0]['About']['text']."</h3></div>";
echo '<div id="preview-main"><div id="block-main"><img src="'.$data['links'][0].'"></div>'
. '<div id="block-main"><img src="'.$data['links'][1].'"></div>'
. '<div id="block-main"><img src="'.$data['links'][2].'"></div></div>';

