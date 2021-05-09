<?php
class Employeedashboard_model extends CI_Model
{
    public function employeeMediaData($employeeId)
    {
        $this->db->select('*');
        $this->db->from('emp_media_data');
        $this->db->where('emp_id', $employeeId);
        $query = $this->db->get();
        return $query->result();
    }

    public function employeeAttendanceData($employeeId)
    {
        $this->db->select('emp_id, month, year, absent_no, present_no, working_days, paid_leave');
        $this->db->from('emp_salary');
        $this->db->where('emp_id', $employeeId);
        $query = $this->db->get();
        return $query->result();
    }
}