<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leaves_model extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    /**
     * @return mixed
     */
    public function retrieveAll(){
        $query = $this->db->query('SELECT MIN(id) AS id, abt_code, name, startDate,endDate, leaveType, days_total, status FROM request GROUP BY abt_code');
        return $query->result();
    }

    /**
     * @return mixed
     */
    public function retrieveBalances(){
        $query = $this->db->query('SELECT * FROM balance');
        return $query->result();
    }

    /**
     * @return mixed
     */
    
    public function retrieveAllocatedBalance(){
        $query = $this->db->query('SELECT * FROM staff');
        return $query->result();
    }

    /**
     * @param $id
     * @return mixed
     */

    public function requestHistory($id){
        $this->db->select('*');
        $this->db->from('request');
        $this->db->where('abt_code', $id);
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * @param $allocate_balance
     */
    public function createData($allocate_balance){
        $this->db->insert_batch('staff_auto', $allocate_balance);
    }

    /**
     * Empty table
     */
    public function revert(){
        $this->db->query('DELETE FROM staff_auto');
    }

    /**
     * @return mixed
     */
    public function getAnnual(){

        $this->db->select('*');
        $this->db->from('request');
        $this->db->where('leaveType', 'Annual Leave');
        $this->db->where('status', 'approved');
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * @return mixed
     */
    public function getSick(){

        $this->db->select('*');
        $this->db->from('request');
        $this->db->where('leaveType', 'Sick Leave');
        $this->db->where('status', 'approved');
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * @return mixed
     */
    public function getMaternity(){

        $this->db->select('*');
        $this->db->from('request');
        $this->db->where('leaveType', 'Maternity Leave');
        $this->db->where('status', 'approved');
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * @return mixed
     */
    public function getCompassionate(){

        $this->db->select('*');
        $this->db->from('request');
        $this->db->where('leaveType', 'Compassionate Leave');
        $this->db->where('status', 'approved');
        $query = $this->db->get();

        return $query->result();
    }
}
