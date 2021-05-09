<?php
class Adminaddempbankdetails_model extends CI_Model
{
    function saveEmpBankDetails($AddempbankData)
    {
        $this->db->insert('emp_bank_details', $AddempbankData);
        return $this->db->insert_id();
    }
    function fetchempbankdetails()
    {
        $query = $this->db->get('emp_bank_details');
        return $query->result();
    }
    function deleteempbankdetails($id)
    {
        $this->db->where(array('id'=>$id));
        $query = $this->db->delete('emp_bank_details');
        return $query;
    }
    public function fetchempbankdetailstoEdit($id)
    {
        $this->db->select('*');
        $this->db->from('emp_bank_details');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function updatebankData($rowid,$updateaddEmployeeData)
    {
        $this->db->where('id', $rowid);
        $this->db->update('emp_bank_details', $updateaddEmployeeData);

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