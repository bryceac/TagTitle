<?php

class TagTitle extends Plugin
{
	public function action_atom_get_collection($xml, $params, $handler_vars)
	{
		if ( Controller::get_action() == 'tag_collection' ) 
		{ 
			$xml->title =  ucwords(htmlentities(Tags::get_by_slug(Controller::get_var('tag'))->term_display)) . ' - ' . Utils::htmlspecialchars( Options::get( 'title' ) );
			$xml->subtitle = ' posts on ' . htmlentities(Tags::get_by_slug(Controller::get_var('tag'))->term_display) . ' from ' . Utils::htmlspecialchars( Options::get( 'title' ) );
		}
	}
}
?>