<div id="engine">
    <div id="left">
            <?php
                foreach($projects as $projectNumber => $projectData){
                    if(isset($projects[$projectNumber]['Project']['is_root_directory'])){
                        echo '<ul id="leftmenu"><h2 id="project_name">' . $projectData['Project']['name'] . '</h2>';
                        if(!empty($projectData['Project']['data'])){
                            foreach($projectData['Project']['data'] as $subDirectoryNumber => $subDirectory){
                                $link = 'view/'.$subDirectory['Project']['id'];
                                echo '<li>' . $this->Html->link($subDirectory['Project']['name'],$link) . '</li>';
                            }
                        }
                        echo "</ul>";
                    }
                }
            ?>
    </div>
    <div id="right">
        <div class="projects-parent">
            <?php
                foreach($projects as $projectNumber => $projectData){
                    if(isset($projectData['Project']['data'])){
                        echo '<h2>'.$projectData['Project']['name']. '</h2>';
                        foreach($projectData['Project']['data'] as $childProjNumber => $childProj){
                            $imageLink = $childProj['Project']['preview']['Images']['link'];
                            $link = 'http://'.$data['domain'].'/projects/view/'.$childProj['Project']['id'];
                            echo '<div id="preview"><div id="block"><a href='.$link.'><img src="http://'.$data['domain']."/img/".$imageLink.'"><p>'.$childProj['Project']['name'].'</p></a></div></div>';
                        }
                    }
                }
            ?>
        </div>
    </div>
</div>