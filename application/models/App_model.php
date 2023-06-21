<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class App_model extends CI_Model {

	/* get data */
    public function getUser($email){
        return $this->db->where('email',$email)->get('users')->row();
    }
    public function createUser($data){
        $this->db->insert('users',$data);
    }
    function getSorted($table, $field) {
        return $this->db->order_by($field, 'DESC')->get($table); 
    }

    function getNoSort($table) {
        return $this->db->get($table); 
    }
    
    function getWhere($table, $column, $value) {
        $data = $this->db->where($column, $value)->get($table);
        return $data;
    }
    
    function getWhereOrder($table, $column, $value, $order) {
        $data = $this->db->where($column, $value)->order_by($order, 'DESC')->get($table);
        return $data;
    }
    
    function getWhereOrderAsc($table, $column, $value, $order) {
        $data = $this->db->where($column, $value)->order_by($order, 'ASC')->get($table);
        return $data;
    }
    
    function getGroup($table, $group) {
        $data = $this->db->group_by($group)->get($table);
        return $data;
    }
    
    function getWhereGroup($table, $column, $value, $group) {
        $data = $this->db->where($column, $value)->group_by($group)->get($table);
        return $data;
    }
    
    /* add data */
    function addData($table ,$data) {
        return $this->db->insert($table, $data);
    }
    
    /* get levels from db */
    function getAllRoles(){
        $query = " SHOW COLUMNS FROM `users` LIKE 'role' ";
        $row = $this->db->query(" SHOW COLUMNS FROM `users` LIKE 'role' ")->row()->Type;
        $regex = "/'(.*?)'/";
        preg_match_all($regex , $row, $enum_array);
        $enum_fields = $enum_array[1];
        return($enum_fields);
    }
    
    /* update data */
    function updateData($table, $column, $column_id, $data) {
        $this->db->where($column, $column_id);
        $this->db->update($table ,$data);
        if($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    /* check if data exists */
    function check_exists($table, $field, $key) {
        $this->db->where($field ,$key);
        $query = $this->db->get($table);
        
        return $query->num_rows();
    }
    public function save_pdf_perencanaan($pdf_data) {
        $this->db->insert('perencanaan', $pdf_data);
      }
      public function save_pdf_pemanfaatan($pdf_data) {
        $this->db->insert('pemanfaatan', $pdf_data);
      }
      public function save_pdf_pengaduan($pdf_data) {
        $this->db->insert('pengaduan', $pdf_data);
      }
      public function save_pdf_pengendalian($pdf_data) {
        $this->db->insert('pengendalian', $pdf_data);
      }

    
	
}