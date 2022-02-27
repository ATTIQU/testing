<?php

function shorten_str($str,$start,$length){

	$x = substr($str,$start,$length);

	if(strlen($str) > $length){

		$x .= ' ...';

	}

	return $x;

}



function getMonthDropDown($years = [2019],$delimiter = '/'){

	$final_str = [];

	$months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

	foreach($years as $y){

		foreach($months as $k=>$m){

			$sk = $k+1;

			$sk = ($sk < 10)?'0'.$sk:$sk;

			$final_str[$y.$delimiter.$sk] = $m.'-'.$y;

		}

	}

	return $final_str;

}



function get_file_type($name){

	$b = explode('.',$name);

	$img_ext = ['jpg','png','gif','tiff','jpeg'];

	$vid_ext = ['mp4','mp4a','avi','wmv'];

	

	$cExt = end($b);

	if(in_array($cExt,$img_ext)){

		return 'image';

	}elseif(in_array($cExt,$vid_ext)){

		return 'video';

	}else{

		return 'other';

	}

}



function get_fileDetailsLink($link){

	$res = [];

	$ex = explode('/',$link);

	$a = end($ex);

	$b = explode('.',$a);

	$res['extension'] = end($b);

	array_pop($b);

	$res['icon'] = base_url().'/filemanager/img/ico/default.jpg';

	$fl = $_SERVER['DOCUMENT_ROOT'].'/filemanager/img/ico/'.$res['extension'].'.jpg';

	if(file_exists($fl)){

		$res['icon'] = base_url('/filemanager/img/ico/'.$res['extension'].'.jpg');

	}

	

	$res['name'] = implode('.',$b);

	$res['path'] = base_url('source/').$link;

	return $res;

}



function url_for_pagination()

{

    $CI =& get_instance();



    return $url = $CI->config->site_url($CI->uri->uri_string());

	

	/*parse_str($_SERVER['QUERY_STRING'],$queryStr);

	if(isset($queryStr['page'])){

		unset($queryStr['page']);

	}

	//print_r($queryStr);

	$f_qS = implode('&',$queryStr);

	

    return $url.'?'.(empty($f_qS)?'page=':$f_qS.'&page=');*/

}



function rem_common_words($x){

	$a = [

		'is','am','for','of','was','were','with','in','the','and','to','into','by'

	];

	foreach($x as $k=>$word){

		if(strlen($word) <= 1 or in_array($word,$a)){

			unset($x[$k]);

		}

	}

	return($x);

}



function newsImage($x){

	$w = (!empty($x))?$x:'news/default-article.jpg';

	return base_url('source/'.$w);

}





function getAdImage($type_id){

	$CI =& get_instance();

	$row = $CI->db->query("SELECT * FROM adver_manage WHERE (type = '$type_id' and status = 'Approved' and check_status = 'Enable') ORDER BY RAND() LIMIT 1")->row();

	if($row){

		$size = $CI->db->select('size')->get_where('ad_size',['id' => $row->type])->row()->size;

		return '<a href="'.$row->link.'" class="adBanner_'.$size.'" title="'.$row->title.'" target="_blank"><img src="'.base_url('upload/').$row->image.'" alt="'.$row->title.'"></a>';

	}

	return '';

}





function encode_token($user_id){

	return urlencode(base64_encode(md5($user_id).'~'.base64_encode($user_id)));

}
function user_profile($image){
	return base_url('upload/'.((isset($image) && !empty($image) && $image!='undefined')?$image:'007.jpg')); 
}


function decode_token($token,$t_user_id){

	$a = base64_decode(urldecode($token));

	if($a){

		$b = explode('~',$a);

		if(is_array($b) && count($b) > 1){

			$user_id = base64_decode($b[1]);

			if($user_id){

				if(md5($user_id) == $b[0] && $user_id == $t_user_id){

					return true;

				}

			}

		}

	}

	return false;

}





?>