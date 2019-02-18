<?php  
   class select extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('tb_siswa');  
         return $query;
          
      } 
      public function select2()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('tb_kunjungan');  
         return $query;
          
      } 
      public function select3()  
      {  
         //data is retrive from this query  
         $query3 = $this->db->get('tb_admin');  
         return $query3;  
      }

      public function select5()  
      {  
         //data is retrive from this query  
         $query4 = $this->db->get('tb_keluhan');  
         return $query4;  
      } 
      public function select6()  
      {  
         //data is retrive from this query  
         $query4 = $this->db->get('tb_kunjungan');  
         return $query4;  
      } 
      public function getAll() {
         $this->db->select('*');
         $this->db->from('tb_siswa');
         $query = $this->db->get();
         return $query->result();
    }
    public function jumlah(){
      $result = $this->db->get('tb_siswa')->num_rows();
      return $result;
    }    
   }  
?>