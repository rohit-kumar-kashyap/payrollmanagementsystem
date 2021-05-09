<?php
class Employeeprofile_model extends CI_Model
{
    public function fetchEmployeeProfiletoEdit($loggin_emp_id)
    {
        $this->db->select('add_employee.*, emp_designation.*, emp_media_data.*');
        $this->db->from('add_employee');
        $this->db->join('emp_designation','add_employee.emp_id=emp_designation.emp_id');
        $this->db->join('emp_media_data','add_employee.emp_id=emp_media_data.emp_id');
        $this->db->where('add_employee.emp_id', $loggin_emp_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function updateEmployeeprofData($empid,$updateEmployeeProfileData)
    {
        $this->db->where('emp_id', $empid);
        $this->db->update('add_employee', $updateEmployeeProfileData);

        return $this->db->insert_id();
    }
}