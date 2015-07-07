<?php
echo '<div id="text"><h2 id="text-center">'.$data['address']['About']['title']."</h2></div>";
//echo "<br>";
//echo "<h3>".$data[0]['About']['text']."</div></h3>";

echo '<div id="main"><div id="latex"><div id="contayner">Адрес<br>'.$data['address']['About']['text'].'</div></div>'
. '<div id="latex"><div id="contayner">Обратная связь<br>'.
        $this->Form->create(null, array('url' => '/contacts','type' => 'post'))
        ."".
        $this->Form->input('username',array('label' => 'Ваше имя'))
        ."".
        $this->Form->input('phone',array('label' => 'Номер телефона'))
        ."".
        $this->Form->input('message',array('label' => 'Текст сообщения'))
        ."".
        $this->Form->end('Finish')
        .'</div></div>'
. '<div id="contayner"><div id="latex">Тел.<br>'.$data['phone']['About']['text'].'</div></div></div>';
