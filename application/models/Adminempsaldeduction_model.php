<?php
class Adminempsaldeduction_model extends CI_Model
{
    function saveEmpDeductionDetails($DeductionData)
    {
        $this->db->insert('emp_salary_deduction', $DeductionData);
        return $this->db->insert_id();
    }
    function fetchempdeductiondetails()
    {
        $query = $this->db->get('emp_salary_deduction');
        return $query->result();
    }
    function deleteempdeductiondetails($id)
    {
        $this->db->where(array('id'=>$id));
        $query = $this->db->delete('emp_salary_deduction');
        return $query;
    }
    public function fetchempdeductiontoEdit($id)
    {
        $this->db->select('*');
        $this->db->from('emp_salary_deduction');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function updatedeductionData($rowid,$updatedeductionData)
    {
        $this->db->where('id', $rowid);
        $this->db->update('emp_salary_deduction', $updatedeductionData);

        return $this->db->insert_id();
    }

    /*public function fetchDataJoinletterPrint($id)
    {
        $this->db->select('*');
        $this->db->from('emp_joining_letter');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }*/
}