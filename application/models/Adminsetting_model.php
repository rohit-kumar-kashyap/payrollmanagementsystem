<?php
class Adminsetting_model extends CI_Model
{
    function get_profile_data($adminemail)
    {
        $query = $this->db->get_where('admin_login',array('email'=>$adminemail));
        return $query;
    }

    function profile_update($id,$adminName,$AdminEmail,$AdminPassword,$profilePicName)
    {
        $data = array('fullname'=>$adminName,'email'=>$AdminEmail, 'password'=>$AdminPassword,'photo'=>$profilePicName);
        $this->db->where('id',$id);
        $query = $this->db->update('admin_login',$data);
        return $query;

    }
}