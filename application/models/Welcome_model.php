<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model{

    public function getPodcast($page){
		$perPage = 3;
        $offset = $perPage*$page;
        $sql = "select * from podcasts limit $offset ,$perPage";
        $result = $this->db->query($sql)->result();
        return $result;
    }
	public function getOpportunities($page){
		$perPage = 3;
        $offset = $perPage*$page;
        $sql = "select * from jobs ";
        $result = $this->db->query($sql)->result();
        return $result;
		
	}
	public function getBlog($page){
		$perPage = 3;
        $offset = $perPage*$page;
        $sql = " SELECT * from blog 
   WHERE status = 1 
   limit $offset ,$perPage";
        $result = $this->db->query($sql)->result();
        return $result;
	}
	public function getNetworking($page){
		$perPage=3;
		$offset=$perPage*$page;
		$sql="SELECT* from upcomming_event limit $offset ,$perPage";
		 $result = $this->db->query($sql)->result();
         return $result;
	}
}