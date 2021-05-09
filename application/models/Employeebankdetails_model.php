<?php
class Employeebankdetails_model extends CI_Model
{
    public function fetchempbankdetailstoEdit($empBankDetailsId)
    {
        $this->db->select('*');
        $this->db->from('emp_bank_details');
        $this->db->where('emp_id', $empBankDetailsId);
        $query = $this->db->get();
        return $query->result();
    }

    public function updatebankData($empid,$updateempbankdetailsData)
    {
        $this->db->where('emp_id', $empid);
        $this->db->update('emp_bank_details', $updateempbankdetailsData);

        return $this->db->insert_id();
    }
}