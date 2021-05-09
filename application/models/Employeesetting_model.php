<?php
class Employeesetting_model extends CI_Model
{
    function get_profile_data($employee_id)
    {
        $this->db->select('emp_media_data.emp_id, emp_media_data.emp_photo, emp_login.emp_id,emp_login.email,emp_login.password');
        $this->db->from('emp_login');
        $this->db->join('emp_media_data','emp_login.emp_id=emp_media_data.emp_id');
        $this->db->where('emp_login.emp_id', $employee_id);
        $query = $this->db->get();
        return $query;
    }

    function profile_update($Empid,$EmployeeEmail,$EmployeePassword)
    {
        $data = array('email'=>$EmployeeEmail,'password'=>$EmployeePassword);
        $this->db->where('emp_id',$Empid);
        $query = $this->db->update('emp_login',$data);
        return $query;

    }

    function profile_pic_update($Empid,$profilePicName)
    {
        $data = array('emp_photo'=>$profilePicName);
        $this->db->where('emp_id',$Empid);
        $query = $this->db->update('emp_media_data',$data);
        return $query;
    }
}