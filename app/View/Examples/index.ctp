<?php
//var_dump($data);
echo '<div id="text"><h2 id="text-center">'.$data['description'].'</h3>';
echo '<br>';
echo '</div><div id="adipoli">';
echo '<div id="preview-main"><div id="block-main">'.$data[0]['Project']['name'].'<a href="examples/view/'.$data[0]['Project']['id'].'"><img src="http://'.$data['domain'].'/img/'.$data[0]['Project']['thumb']['Images']['link'].'"></a></div>'
. '<div id="block-main">'.$data[1]['Project']['name'].'<a href="examples/view/'.$data[1]['Project']['id'].'"><img src="http://'.$data['domain'].'/img/'.$data[1]['Project']['thumb']['Images']['link'].'"></a></div>'
. '<div id="block-main">'.$data[2]['Project']['name'].'<a href="examples/view/'.$data[2]['Project']['id'].'"><img src="http://'.$data['domain'].'/img/'.$data[2]['Project']['thumb']['Images']['link'].'"></a></div></div></div>';