<?php

class TagTitle extends Plugin
{
	public function action_atom_get_collection($xml, $params, $handler_vars)
	{
		if ( Controller::get_action() == 'tag_collection' ) 
		{ 
			$xml->title = array(htmlentities(Controller::get_var('tag'))) . ' posts'; 
		}
	}
}
?>