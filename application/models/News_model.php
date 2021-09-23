<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model  {
    public function __construct(){
        parent::__construct();
    }

    public function get_news(){
        //$this->db->select('*');
       // $this->db->where('active',0);
       // $this->db->where(array('active'=>1 ));
        //$this->db->order_by('active','desc');
        //$this->db->limit(1);
        $query = $this->db->get('news');
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    public function insert_news($newsdata){
        $this->db->insert('news', $newsdata);
        return $this->db->insert_id();
    }
}
    