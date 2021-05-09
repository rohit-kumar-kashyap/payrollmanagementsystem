<?php
class Employeesalary_model extends CI_Model
{
    public function fetchempsalary($empidSalary)
    {
        $this->db->select('*');
        $this->db->from('emp_salary');
        $this->db->where('emp_id', $empidSalary);
        $query = $this->db->get();
        return $query->result();
    }
}