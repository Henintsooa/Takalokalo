<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class MLogin extends CI_Model 
    {

        public function checkLogin($mail,$password)
        {
            $valiny = false;
            $sql = "select * from user";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            for($i=0;$i<count($result);$i++)
            {
                if($mail == $result[$i]['mail'] && $password == $result[$i]['password'])
                {
                    $valiny = true;
                }
            }

            echo $valiny;
            return $valiny;
        }

       
    }
?>