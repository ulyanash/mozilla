<?php

/**
 * return html of template instead of echo it
 */
function md_return_get_template_part($slug, $name=null, $params = []) {

	ob_start();
	get_template_part($slug, $name, $params);    
	$content = ob_get_contents();
	ob_end_clean();
 
	return $content;
}