<?php
class Adminaddemployees_model extends CI_Model
{
    function saveAddemployeeDetails($AddemployeeData)
    {
        $this->db->insert('add_employee', $AddemployeeData);
        return $this->db->insert_id();
    }
    function saveempLoginDetails($emplogindata)
    {
        $this->db->insert('emp_login', $emplogindata);
        return $this->db->insert_id();
    }
    function saveempdesigDetails($empdesignationdata)
    {
        $this->db->insert('emp_designation', $empdesignationdata);
        return $this->db->insert_id();
    }
    function saveempmediaDetails($empmediadata)
    {
        $this->db->insert('emp_media_data', $empmediadata);
        return $this->db->insert_id();
    }

    function fetchaddEmployeedetails()
    {
        $query = $this->db->get('add_employee');
        return $query->result();
    }
    function deleteAddEmployee($id)
    {
        $this->db->where(array('id'=>$id));
        $query = $this->db->delete('add_employee');
        return $query;
    }


    public function fetchaddEmployeetoEdit($id)
    {
        $this->db->select('add_employee.*, emp_designation.*, emp_media_data.*');
        $this->db->from('add_employee');
        $this->db->join('emp_designation','add_employee.emp_id=emp_designation.emp_id');
        $this->db->join('emp_media_data','add_employee.emp_id=emp_media_data.emp_id');
        $this->db->where('add_employee.id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function updateAddEmployeeData($rowid,$updateaddEmployeeData)
    {
        $this->db->where('id', $rowid);
        $this->db->update('add_employee', $updateaddEmployeeData);

        return $this->db->insert_id();
    }
    public function updateempLoginDetail($empId,$updateemplogindata){
        $this->db->where('emp_id', $empId);
        $this->db->update('emp_login', $updateemplogindata);

        return $this->db->insert_id();
    }
    public function updateempDesignationDetail($empId,$updateempdesignationdata){
        $this->db->where('emp_id', $empId);
        $this->db->update('emp_designation', $updateempdesignationdata);

        return $this->db->insert_id();
    }
    public function updateempMediaDetail($empId,$updateempmediadata){
        $this->db->where('emp_id', $empId);
        $this->db->update('emp_media_data', $updateempmediadata);

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