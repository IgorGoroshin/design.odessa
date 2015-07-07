<?php
foreach($data as $projNum => $proj){
    if(!empty($proj['Project']['images'])){
        echo '<div id="left"></div><div id="right">';
        echo '<div id="pre"><ul class="bxslider">';
        foreach($proj['Project']['images'] as $imgNum => $img){
            echo '<li>';
            echo '<div id="left-text">'.$proj['Project']['name'].'</div>';
            echo '<div id="right-text"><a href="/examples/detailed/'.$proj['Project']['id'].'">Просмотреть проект полностью</a></div>';
            echo '<img id="gmg" src="http://'.$data['domain'].'/img/'.$img['Images']['link'].'"></img>';
            echo '</li>';
        }
        echo '</ul></div></div>';
    }
    
}
