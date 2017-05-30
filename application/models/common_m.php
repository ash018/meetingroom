<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common_m extends CI_Model {
    //SELECT SCOPE_IDENTITY() AS RowId
    
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		
    }
    
  
    
    function bookRoom($submit){
        
        echo 'Room Booked';
        echo $submit;
        
        $sql = "Select * FROM booking";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            echo $query->result_array();
        } else {
            echo 'false';
        }
    }
    
    function checkAppraisalSubmitted($data) {
        $EmpCode = $data['userid'];
        $date=date("M y");
        $sql = "SELECT * FROM AppraisalMaster WHERE EmpCode= '$EmpCode' AND Period='$date'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    
    function select_kpi_cat_data($data){
        $EmpCode = $data['userid'];
        $sql = "SELECT DISTINCT a.KpiCatId,b.KpiCatName FROM AssignKpi a
            INNER JOIN KpiCategory b ON a.KpiCatId = b.KpiCatId
            WHERE a.EmpCode = '$EmpCode'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        } 
    }

    function selectcat() {
        $sql = "SELECT DISTINCT a.KpiCatId,b.KpiCatName FROM AssignKpi a
INNER JOIN KpiCategory b ON a.KpiCatId = b.KpiCatId";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    function selectkpicat() {
        $sql = "SELECT * FROM KpiCategory";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    function editkpicat($catId,$catName) {
        $sql = "update KpiCategory set KpiCatName='$catName' where KpiCatId='$catId'";
        $query = $this->db->query($sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    //For Insert
    
     public function submitAppraisal($data) {
        $CI =& get_instance();       
        $CI->db = $this->load->database('default',true);
  
        //$newdb = $this->load->database('KPIDashboard',TRUE);
        //echo '<pre/>';print_r($data);exit();
        $DeptName = $data['DeptName'];
        $WorkLocation = $data['WorkLocation'];
        $EmpCode = $data['EmpCode'];
        $Designation = $data['Designation'];
        $SuperCode = $data['SuperCode'];
        $Period = $data['Period'];
        $Score = $data['Score'];
        $Comment = $data['Comment'];
        $PresentDesk =  $SuperCode;

        $sql = "exec usp_AppMasterInsert '$DeptName','$WorkLocation','$EmpCode','$Designation','$SuperCode','$Period','$PresentDesk','$Score','$Comment' ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    
    public function getLastSortOrder() {
        $sql = "SELECT TOP 1 SortOrder FROM KpiCategory ORDER BY KpiCatId DESC";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    //For Helper 

    function select_option_supervisor($id) {
        $sql = "SELECT TOP 1 SuperCode FROM Supervisor WHERE EmpCode = '$id'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function select_option_user($id) {
        $CI = & get_instance();
        $CI->db = $this->load->database('emp', true);
        $sql = "SELECT Name FROM Personal WHERE EmpCode = '$id'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function select_option_roleId($id) {
        $sql = "SELECT * FROM UserRole WHERE UserName = '$id'";
        $query = $this->db->query($sql);
        $query = $query->result_array();
        return $query;
    }

    function select_advance_option($id, $field, $table) {
        $sql = "SELECT * FROM " . $table . " WHERE " . $field . " = '$id'";
        $query = $this->db->query($sql);
        $query = $query->result();
        return $query;
    }
    
    public function select_ModelId($Iso){
        $sql = "SELECT ModelId FROM Service WHERE Iso = $Iso";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function select_customer($table) {
        $sql = "SELECT * FROM  $table";
        $query = $this->db->query($sql);
        $query = $query->result_array();
        return $query;
    }

    function auto_suggest($q, $table, $field) {
        $this->db->select();
        $this->db->from($table);
        $this->db->like($field, $q);
        $this->db->order_by($field, 'ASC');
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;
    }

    function option_select($table, $field) {
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by($field, 'ASC');
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;
    }

    function option_select_order_id($table, $field) {
        $sql = "SELECT * FROM $table ORDER BY $field";
        $query = $this->db->query($sql);
        $query = $query->result_array();
        return $query;
    }

    function problemTagTitle() {
        $sql = "SELECT * FROM ProblemTag WHERE ParentId IS NULL";
        $data = array();
        $query = $this->db->query($sql);
        if ($query) {
            $data['problem_tag_title'] = $query->result_array();
        }
        return $data;
    }

    function selectProblemTagDetails() {
        $sql = "SELECT * FROM ProblemTag";
        $data = array();
        $query = $this->db->query($sql);
        if ($query) {
            $data['ProblemTag'] = $query->result_array();
        }
        return $data;
    }

    public function select_total($table) {
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query;
    }

    function select_my_info($table) {
        $this->db->select();
        $this->db->from($table);
        $this->db->where('user_id', $this->session->userdata('id'));
        $this->db->limit(1);
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;
    }

    function edit_option($action, $id, $table) {
        $this->db->where('id', $id);
        $this->db->update($table, $action);
        return;
    }

    function edit_option_field($action, $id, $field, $table) {
        $this->db->where($field, $id);
        $this->db->update($table, $action);
        return;
    }

    function delet_option($id, $table) {

        $this->db->where('id', $id);
        $this->db->delete($table);
        return;
    }

    function delete($id, $table) {

        $this->db->delete($table, array('id' => $id));
        return;
    }

    function update_info($user_id, $data_info, $table) {

        $this->db->where('id', $user_id);
        $this->db->update($table, $data_info);
        return;
    }



    
    public function commercialDept($data){
        $userid = $data['userid'];
        $RoleId = $data['RoleId'];
        $sql = "SELECT t.*,r.RoleId FROM UserTbl t
INNER JOIN UserRole r ON r.UserName = t.UserName WHERE t.UserName <> '$userid' AND r.RoleId = '8'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function checkReceiveTicketByIncharge($data){
        $Iso = $data['Iso'];
        $sql = "SELECT * FROM InchargeAct WHERE Iso = '$Iso'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    
     public function checkReceiveTicketByengineer($data){
        $Iso = $data['Iso'];
        $sql = "SELECT COUNT(*) as TotalReceive FROM EngineerAct WHERE Iso = '$Iso'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function updateAssignTicketByIncharge($data) {
        $AssignBy = $data['userid'];
        $Iso = $data['Iso'];
        $AssignPerson = $data['engineer'];
        echo $sql = "UPDATE InchargeAct SET AssignBy = '$AssignBy',AssignDate = GETDATE(),AssignPerson = '$AssignPerson'"
                . " WHERE Iso = '$Iso'";
        $query = $this->db->query($sql);
        if ($query) {
            $sql = "UPDATE Service SET L4DispatchNo = '$AssignPerson'"
                    . " WHERE Iso = '$Iso'";
            $query = $this->db->query($sql);
            if ($query) {
                return TRUE;
            }
        } else {
            return FALSE;
        }
    }
    
    public function updateStartWorkByEngineer($data) {
        $Iso = $data['Iso'];
        $EngineerBy = $data['EngineerBy'];
        $sql = "UPDATE EngineerAct SET EngineerBy = '$EngineerBy',StartDate = GETDATE()"
                . " WHERE Iso = '$Iso'";
        
        $query = $this->db->query($sql);
        if ($query) {
            
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function insert($data,$table) {
        
       
        $mroom =  $data['MeetingRoomName'];
        $booking_time = $data['booking_time'];
        $end_time = $data['end_time'];
        $booking_date = $data['booking_date'];
        echo $mroom;
        echo $booking_time;
        
        $pieces = explode(":",$booking_time);
        echo "<br>";
        $booking_time1=$pieces[0].":00";
        
        
        $pieces2 = explode(":",$end_time);
        $int = (int)$pieces2[0]+1;
        $string =(string)$int;
        echo "<br>";
        $end_time1=$string.":00";
        
        
       
        //var_dump($data);
        
        $qs = "Select * from booking where (booking_time between '$booking_time1' and '$end_time1' or end_time between '$booking_time1' and '$end_time1') and MeetingRoomName = '$mroom' and booking_date='$booking_date'"  ;
        
        
       
     
       $query = $this->db->query($qs);
       //var_dump( ($query->result()));
      // var_dump($query);
       //exit();
      
       
       
       if(sizeof($query->result()) > 0){
         //  echo 'Not Booked';
           //exit();
           redirect('home/not_booked');
       }
 
      // var_dump($query);
       // exit();
        if (sizeof($query->result()) == 0) {
            //return TRUE;
            echo 'Booked';
            $record = 'Response';
            $this->db->insert($table,$data);
            redirect('home/has_booked');
        } else {
            return FALSE;
        }
    }
    
    public function insertSparePartsByEngineer($table,$data2) {
       $query = $this->db->insert($table,$data2);
        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function checkRoom($data,$table) {
        
        $dateM =  $data['booking_date'];
        //echo $dateM;
        //var_dump($dateM);
        //exit();
        //$booking_data = $data['booking_data'];
        $sql = "Select * from booking where booking_date='$dateM'";
        $query = $this->db->query($sql);
        
        $dataCheck = $query->result();
        
        
        // var_dump($dataCheck);
        // exit();
        return $dataCheck;
        
        //redirect('home/getCheckRoom');
    }
    
     
}
