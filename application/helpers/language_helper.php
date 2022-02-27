<?php
function current_lang(){
	return $_SESSION['lang'];
}

function lang_code(){
	return (current_lang() == 'ar')? 'ar':'en-US';
}
function lang_dir(){
	return (current_lang() == 'ar')? 'rtl':'ltr';
}
function lang_align(){
	return (current_lang() == 'ar')? 'right-align':'left-align';
}
function lang_word($en_word,$ar_word=false){
	return (isset($ar_word) && $ar_word != false)? ((current_lang() == 'ar')? $ar_word:$en_word) : $en_word;
}

function lang_class(){
	return (current_lang() == 'ar')? 'rtl_ar':'';
}

function db_word($id){
	$ci =& get_instance();
	return $ci->db->get_where('db_words',['id' => $id])->row()->{current_lang()};
	
}

?>