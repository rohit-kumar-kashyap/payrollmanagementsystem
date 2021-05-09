<?php
class Adminjoiningletter_model extends CI_Model
{
    function saveJoiningLetterDetails($joiningletterData)
    {
        $this->db->insert('emp_joining_letter', $joiningletterData);
        return $this->db->insert_id();
    }

    function fetchJoiningLetterdetails()
    {
        $query = $this->db->get('emp_joining_letter');
        return $query->result();
    }
    function deleteJoiningLetter($id)
    {
        $this->db->where(array('id'=>$id));
        $query = $this->db->delete('emp_joining_letter');
        return $query;
    }
    public function fetchjoininglettertoEdit($id)
    {
        $this->db->select('*');
        $this->db->from('emp_joining_letter');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function updateJoiningLetterData($rowid,$updatejoiningletterData)
    {
        $this->db->where('id', $rowid);
        $this->db->update('emp_joining_letter', $updatejoiningletterData);

        return $this->db->insert_id();
    }
    public function fetchDataJoinletterPrint($id)
    {
        $this->db->select('*');
        $this->db->from('emp_joining_letter');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
}