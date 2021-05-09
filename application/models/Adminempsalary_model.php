<?php
class Adminempsalary_model extends CI_Model
{
    function saveEmpSalaryDetails($SalaryData)
    {
        $this->db->insert('emp_salary', $SalaryData);
        return $this->db->insert_id();
    }
    function fetchempsalarydetails()
    {
        $query = $this->db->get('emp_salary');
        return $query->result();
    }
    function deleteempsalarydetails($id)
    {
        $this->db->where(array('id'=>$id));
        $query = $this->db->delete('emp_salary');
        return $query;
    }
    public function fetchempsalarytoEdit($id)
    {
        $this->db->select('*');
        $this->db->from('emp_salary');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function updatesalaryData($rowid,$updateSalaryData)
    {
        $this->db->where('id', $rowid);
        $this->db->update('emp_salary', $updateSalaryData);

        return $this->db->insert_id();
    }
    public function fetchDatatoFill($Employeeid){
        $this->db->select('add_employee.emp_id,add_employee.fullname,emp_attendance.month,emp_attendance.year,emp_attendance.absent,emp_attendance.present_no,emp_attendance.month_working_days,emp_attendance.emp_id,emp_designation.basic_salary,emp_designation.increment_amount,emp_designation.emp_id,emp_salary_deduction.advance_money,emp_salary_deduction.emp_id');
        $this->db->from('add_employee');
        $this->db->join('emp_attendance', 'emp_attendance.emp_id=add_employee.emp_id');
        $this->db->join('emp_designation', 'emp_designation.emp_id=add_employee.emp_id');
        $this->db->join('emp_salary_deduction', 'emp_salary_deduction.emp_id=add_employee.emp_id');
        $this->db->where('add_employee.emp_id', $Employeeid);
        $query = $this->db->get();
        return $query;
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