<?php
class Adminemppayroll_model extends CI_Model
{
    function fetchemppayrolldetails()
    {
        $this->db->select('emp_salary.id,emp_salary.emp_id,emp_salary.fullname,emp_salary.netpay,emp_salary.salary_generation_date,emp_designation.department,emp_designation.designation');
        $this->db->from('emp_salary');
        $this->db->join('emp_designation','emp_salary.emp_id=emp_designation.emp_id');
        //$this->db->where('emp_salary.emp_id',$employee);
        $query = $this->db->get();
        return $query->result();
    }
    public function fetchDataPayrollPrint($empid)
    {
        $this->db->select('add_employee.id,add_employee.emp_id,add_employee.fullname,add_employee.email,add_employee.contact,add_employee.address,add_employee.pincode,add_employee.aadhar_number,emp_designation.department,emp_designation.designation,emp_designation.basic_salary,emp_designation.increment_amount,emp_bank_details.bank_name,emp_bank_details.bank_branch_name,emp_bank_details.account_number,emp_bank_details.ifsc_code,emp_salary.*');
        $this->db->from('add_employee');
        $this->db->join('emp_designation','add_employee.emp_id=emp_designation.emp_id');
        $this->db->join('emp_bank_details','add_employee.emp_id=emp_bank_details.emp_id');
        $this->db->join('emp_salary','add_employee.emp_id=emp_salary.emp_id');
        $this->db->where('add_employee.emp_id', $empid);
        $query = $this->db->get();
        return $query->result();
    }

    /*function saveEmpAttendenceDetails($AttendenceData)
    {
        $this->db->insert('emp_attendance', $AttendenceData);
        return $this->db->insert_id();
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
    }*/
}