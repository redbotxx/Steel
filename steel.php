<?php

if (!defined('txpinterface')) die('txpinterface is undefined.');

theme::based_on('classic');

class steel_theme extends classic_theme
{

	function manifest()
	{
		return array(
			'title'	 		=> 'Steel',
			'author' 		=> 'redbot',
			'author_uri' 	=> '',
			'version' 		=> '1.0',
			'description' 	=> '',
			'help' 			=> '',
		);
	}
}
?>