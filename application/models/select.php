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
         $query1 = $this->db->get('tb_guru');  
         return $query1;  
      }   
      public function select3()  
      {  
         //data is retrive from this query  
         $query3 = $this->db->get('tb_admin');  
         return $query3;  
      }
      public function select4()  
      {  
         //data is retrive from this query  
         $query4 = $this->db->get('tb_pengumuman');  
         return $query4;  
      }     
   }  
?>