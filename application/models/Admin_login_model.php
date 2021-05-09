<?php
class Admin_login_model extends CI_Model
{
    function can_login($email, $password)
    {
        $query = $this->db->get_where('admin_login',array('email'=>$email, 'password'=>$password));
        return $query;
    }

    function fetchlogindetails($email)
    {
        $this->db->select('fullname, email');
        $this->db->from('admin_login');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query;
    }
}