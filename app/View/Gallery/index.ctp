<?php
foreach($data as $projId => $proj){
    if(isset($proj['Project'])){
        echo '<h2>'.$proj['Project']['name'].'</h2>';

        if($proj['Project']['parent_id'] == null){
            foreach($proj['Project']['data'] as $childProjId => $childProj){
                echo '<div id="block-inline"><ul class="bxslider">';
    //            echo '<h3>'.$childProj['Project']['name'].'</h3>';
                foreach($childProj['Project']['links'] as $linkId => $link){
//                    echo '<div>'.$childProj['Project']['name'].'</div>';
                    echo '<div><li id="block2"><img id="image"src="http://'.$data['domain'].'/img/'.$link['Images']['link'].'"></li></div>';
                }
            echo '</ul><a style="text-align:center;"href="projects/view/'.$childProj['Project']['id'].'">Просмотреть проект полностью -> <strong>'.$childProj['Project']['name'].'</strong></a></div>';
            }
        }
    }
    echo '<br>';
}