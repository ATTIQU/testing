<?php
function custom_url($url){
	return base_url($_SESSION['lang_prefix'].'/'.$url);
}
?>