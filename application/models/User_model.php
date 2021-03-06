<?php
/**
 * Written by Ntonsite Mwamlima.
May 2019
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    /**
     * @param $user_data
     */
    function createData($user_data){
        $this->db->insert('user', $user_data);
    }

    /**
     * @return mixed
     */

    function getUsers(){
        $query = $this->db->query('SELECT * FROM user');
        return $query->result();
    }

    /**
     * @param $id
     * @return mixed
     */
    function getData($id){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_id', $id);
        $query = $this->db->get();

        return $query->row();
    }

    /**
     * @return mixed
     */

    function getCountUser(){

        $this->db->from('user');
        return $num_rows = $this->db->count_all_results();
    }

    /**
     * @param $id
     * @param $user_data
     */

    function updateData($id, $user_data) {

        $this->db->where('user_id', $id);
        $this->db->update('user', $user_data);
    }

    /**
     * @param $id
     */

    function deleteData($id) {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }

    /**
     * @param $username
     * @param $pass
     * @return bool
     */

    public function login_user($username,$pass){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_name',$username);
        $this->db->where('user_password',$pass);

        if($query=$this->db->get())
        {
            return $query->row_array();
        }
        else{
            return false;
        }
    }

    /**
     * @param $username
     * @return bool
     */
    public function check_local_user($username){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_name',$username);

        if($query=$this->db->get())
        {
            return $query->row_array();
        }
        else{
            return false;
        }
    }

}
