<?php
	/**
	* Avatar Wall
	* 
	* @package avatar_wall
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
	
	
	function avatar_wall_init() {
		global $CONFIG;

		// Register a page handler, so we can have nice URLs
		register_page_handler('avatar_wall','avatar_wall_page_handler');
			
		// Extend system CSS with our own styles
		extend_view('css','avatar_wall/css');	
			
		add_menu(elgg_echo('avatar_wall:shorttitle') , $CONFIG->wwwroot . "pg/avatar_wall");
			
	}
	
	function avatar_wall_page_handler($page){
		global $CONFIG;
		include($CONFIG->pluginspath . "avatar_wall/index.php"); 
		
	}
	
	register_elgg_event_handler('init','system','avatar_wall_init');
	
?>