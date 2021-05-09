<?php
class Employee_login_model extends CI_Model
{
    function can_login($emp_id, $password)
    {
        $query = $this->db->get_where('emp_login',array('emp_id'=>$emp_id, 'password'=>$password));
        return $query;
    }

    function fetchlogindetails($emp_id)
    {
        $this->db->select('fullname');
        $this->db->from('add_employee');
        $this->db->where('emp_id', $emp_id);
        $query = $this->db->get();
        return $query;
    }

}