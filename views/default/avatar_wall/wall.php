<?php
?>
<div class='contentWrapper' align='center'>
<?php
	foreach($vars['users'] as $user){
		echo "<a href='" . $user->getURL() . "'><img class='wall_icons' alt='" . $user->name . "' src='". $user->getIcon($vars['wallIconSize']) . "'><a/>";
	}
?>
</div>

