<?php
class welcome_model extends CI_MODEL
{ 
    public function verifyuser($data)
    {
        $query = $this->db->get_where('user', array('username' =>$data['username'], 'password' => $data['password']));
        return $query->result_array();
    }
    public function user_registration($data)
    {

        $dataset = array(
            "username" => $data["regEmail"],
            "fname" => $data["fname"],
            "lname" => $data["lname"],
            "password" => $data["regPassword"],
            "department" => $data['regDivision']
           
        );
        $r = $this->db->insert('user', $dataset);
        echo $r;
    }
    

}