<div id="engine">
    <div id="left">
            <?php
                foreach($projects as $projectNumber => $projectData){
                    if(isset($projects[$projectNumber]['Project']['is_root_directory'])){
                        echo '<ul id="leftmenu"><h2 id="project_name">' . $projectData['Project']['name'] . '</h2>';
                        if(!empty($projectData['Project']['data'])){
                            foreach($projectData['Project']['data'] as $subDirectoryNumber => $subDirectory){
                                $link = 'view/'.$subDirectory['Project']['id'];
                                echo "<li>" . $this->Html->link($subDirectory['Project']['name'],$link) . "</li>";
                            }
                        }
                        echo "</ul>";
                    }
                }
            ?>
    </div>
    <div id="right">
        <div>
            <ul class="bxslider">
            <?php
            foreach($data['Images'] as $KartinkaId => $KartinkaPath){
                $link = 'http://' . $data['domain']. "/img/" . $data['Images'][$KartinkaId]['Images']['link'];
                echo '<li><img id="ymg" src='.$link.' /></li>';
            }
            ?>
            </ul>
        </div>
    </div>
</div>
</div>



