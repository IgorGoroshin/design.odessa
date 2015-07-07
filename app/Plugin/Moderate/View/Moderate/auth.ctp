<?php
echo '<div id="text-right">';
echo $this->Form->create();
echo $this->Form->input('login', ['type' => 'text']);
echo $this->Form->input('password', ['type' => 'password']);
echo $this->Form->input('lets go', ['type' => 'submit']);
echo '<div>';