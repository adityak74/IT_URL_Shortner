<?php 

class Site_model extends CI_Model {

	function get_link()
	{
		$this->db->where('short_code' , $this->uri->segment(2));
		$query = $this->db->get('short_urls');
		return $query->result();
	}	

	function set_link($full_link)
	{
		$this->db->where('long_url' , $full_link);
		$query = $this->db->get('short_urls');
		$link_count = $query->num_rows();
		if($link_count<=0){
			$short_code = bin2hex(openssl_random_pseudo_bytes(3));
			$data = array(
		       'long_url' => $full_link,
		       'short_code' => $short_code
		    );
		    $op = $this->db->insert('short_urls',$data);
			return $short_code;
		}else{
			$res = $query->result();
			return $res[0]->short_code;
		}
	}



}

?>