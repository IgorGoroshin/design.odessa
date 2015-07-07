<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php 
        echo $this->Html->charset(); 
        ?>
	<title>
		<?php
//                echo $cakeDescription 
                ?>:
		<?php 
                echo $this->fetch('title'); 
                ?>
	</title>
	<?php
//		echo $this->Html->meta('icon');
//		echo $this->fetch('meta');
//		echo $this->fetch('css');
                echo $this->Html->css('screen.css');
//                echo $this->Html->css('flexslider.css');
//                echo $this->Html->css('jquery.bxslider.css');
//		echo $this->fetch('script');
//                echo $this->Html->script('jquery.min.js');
//                echo $this->Html->script('jquery.flexslider.js');
//                echo $this->Html->script('jquery.adipoli.js');
//                echo $this->Html->script('scripts.js');
//                echo $this->Html->script('jquery.bxslider.js');
	?>
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>-->
</head>
<body>
	<div id="container">
		<div id="header" style="text-align:center">
                        <?php echo $this->Html->image;?>
                        <div id="menu"><div>
                        <ul id="navlist">
                        <?php
                            
                        ?>
                        </ul>
                        </div>
                        </div>
		</div>
		<div id="content">
			<?php 
                        echo $this->fetch('content'); 
                        ?>
		</div>
		<div id="footer">
			<p>
			</p>
		</div>
	</div>
</body>
</html>
