<?php
foreach($data as $projNum => $proj){
    if(!empty($proj['Project']['images'])){
        echo '<div id="left"></div><div id="right">';
        echo '<div id="pre"><ul class="bxslider">';
        foreach($proj['Project']['images'] as $imgNum => $img){
            echo '<li>';
            echo '<div id="left-text">'.$proj['Project']['name'].'</div>';
            echo '<div id="right-text">'.$proj['Project']['name'].'</div>';
            echo '<div><img id="ymg" src="http://'.$data['domain'].'/img/'.$img['Images']['link'].'"></img></div>';
            echo '</li>';
        }
        echo '</ul></div></div>';
    }
}
echo '<div id="detailed"><ul class="bxslider">';
foreach($data as $imgNum => $img){
    if(isset($img['Images']['link'])){
    echo '<li>';
    echo '<div><img id="gmg" src="http://'.$data['domain'].'/img/'.$img['Images']['link'].'"></div>';
    echo '</li>';
    }
}
echo '</ul></div>';
?>
