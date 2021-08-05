<?php
/**
 * author Ntonsite Mwamlima.
May 2019
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    /**
     * @param $role_data
     */
    function createData($role_data){
        $this->db->insert('role', $role_data);
    }

    /**
     * @return mixed
     */

    function getRoles(){
        $query = $this->db->query('SELECT * FROM role');
        return $query->result();
    }

    /**
     * @param $id
     * @return mixed
     */
    function getRole($id){

        $this->db->select('*');
        $this->db->from('role');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->row();
    }

    /**
     * @return mixed
     */
    function getCountRoles(){

        $this->db->from('role');
        return $num_rows = $this->db->count_all_results();
    }

    /**
     * @param $id
     * @param $role_data
     */
    function updateData($id, $role_data) {

        $this->db->where('id', $id);
        $this->db->update('role', $role_data);
    }

    /**
     * @param $id
     */
    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('role');
    }

}
