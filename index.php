<?php

	// Start engine
	require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
	
	$users_max = get_plugin_setting("maxIcons","avatar_wall");
	if(!$users_max) $users_max = 300;
	
	$onlyWithAvatar = get_plugin_setting("onlyWithAvatar","avatar_wall");
	if(empty($onlyWithAvatar) || $onlyWithAvatar == "no"){
		$users = get_entities('user','',null,null,$users_max,0);
	} else {
		$users = get_entities_from_metadata('icontime', '', 'user', '', 0, $users_max);
	}
	
	$wallIconSize = get_plugin_setting("wallIconSize","avatar_wall");
	if(!$wallIconSize) $wallIconSize = "small";
	shuffle($users);
	$title = elgg_view_title(elgg_echo('avatar_wall:title'));
	
	// Format page
	$body = elgg_view_layout('one_column', $title . elgg_view('avatar_wall/wall', array('users'=>$users, 'wallIconSize'=>$wallIconSize)));
		
	// Draw it
	echo page_draw(elgg_echo('avatar_wall:title'),$body);

?>