<?php
class Adminempattendence_model extends CI_Model
{
    function saveEmpAttendenceDetails($AttendenceData)
    {
        $this->db->insert('emp_attendance', $AttendenceData);
        return $this->db->insert_id();
    }
    function fetchempattendencedetails()
    {
        $query = $this->db->get('emp_attendance');
        return $query->result();
    }
    function deleteempattendencedetails($id)
    {
        $this->db->where(array('id'=>$id));
        $query = $this->db->delete('emp_attendance');
        return $query;
    }
    public function fetchempattendencetoEdit($id)
    {
        $this->db->select('*');
        $this->db->from('emp_attendance');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function updateattendenceData($rowid,$updateaddEmployeeData)
    {
        $this->db->where('id', $rowid);
        $this->db->update('emp_attendance', $updateaddEmployeeData);

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