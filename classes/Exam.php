<?php
   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../lib/Database.php');
   include_once ($filepath.'/../helpers/Format.php');

  
  class Exam {
  	private $db;
  	private $fm;
  	
  	function __construct(){
  		$this->db = new Database();
  		$this->fm = new Format();
  		
  }

  public function addQuestion($data){
    $questionid = mysqli_real_escape_string($this->db->link, $data['questionid']);
     $ques = mysqli_real_escape_string($this->db->link, $data['ques']);
     $ans = array();
     $ans[1]= $data['ans1'];
     $ans[2]= $data['ans2'];
     $ans[3]= $data['ans3'];
     $ans[4]= $data['ans4'];
     $rightans = $data['rightans'];
     $query = "INSERT INTO tbl_question(questionid, ques) VALUES('$questionid ', '$ques')";
     $insert_row = $this->db->insert($query );
     if($insert_row){
      foreach ($ans as $key => $ansName) {
        if($ansName != ''){
          if($rightans == $key){
            $rquery = "INSERT INTO tbl_answer(questionid, rightans, ans) VALUES('$questionid', '1', '$ansName')";
          }else{
            $rquery = "INSERT INTO tbl_answer(questionid, rightans, ans) VALUES('$questionid', '0', '$ansName')";
          }
          $inserquery = $this->db->insert($rquery);
          if($inserquery){
            continue;
          }else{
            die('Error...');
          }
        }
      }
      $msg = "<span class='success'>Question Add Successfully</span>";
      return $msg;
     }
  }
  public function delQuestion($question){
    $tables = array("tbl_question","tbl_answer");
    foreach ($tables as $table) {
       $delquery = "DELETE FROM $table WHERE questionid ='$question'";
       $delData = $this->db->delete($delquery);
      
    }
    if($delData){
      $msg = "<span class='success'>Data Deleted !...</span>";
       return $msg;
    }else{
      $msg = "<span class='error'>Data not Deleted !...</span>";
       return $msg;
    }
  }


   public function getQueByOrder(){
      $query =  "SELECT * FROM tbl_question ORDER BY questionid ASC";
      $result = $this->db->select($query);
      return $result;
   }
   public function getTotalRows(){
       $query = "SELECT * FROM tbl_question";
       $getResult = $this->db->select($query);
       $total = $getResult->num_rows;
          return $total;
       }
       public function getQuestion(){
           $query = "SELECT * FROM tbl_question";
           $getdata = $this->db->select($query);
           $result = $getdata->fetch_assoc();
           return $result;
       }
       public function getQuesByNumber($number){
           $query = "SELECT * FROM tbl_question WHERE questionid = '$number'";
           $getdata = $this->db->select($query);
           $result = $getdata->fetch_assoc();
           return $result; 
       }
       public function getAnswer($number){
           $query = "SELECT * FROM tbl_answer WHERE questionid = '$number'";
           $getdata = $this->db->select($query);
           return $getdata;
       }
}
?>