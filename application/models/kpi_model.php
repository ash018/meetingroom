<?php

class Kpi_model extends CI_Model {

    //SELECT SCOPE_IDENTITY() AS RowId

    function selectkpicat() {
        $sql = "SELECT * FROM KpiCategory";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function editkpicat($catId, $catName) {
        $sql = "update KpiCategory set KpiCatName='$catName' where KpiCatId='$catId'";
        $query = $this->db->query($sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    //For Insert


    public function submitKpiCategory($data, $table) {
        $this->db->insert($table, $data);
        return true;
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

    public function getLastSortOrderFromDetails() {
        $sql = "SELECT TOP 1 SortOrder FROM KpiDetails ORDER BY KpiId DESC";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function submitKpiDetails($data, $table) {
        $this->db->insert($table, $data);
        return true;
    }

    function selectkpidetails() {
        $sql = "SELECT tab2.KpiId,tab1.KpiCatId,tab1.KpiCatName,tab2.kpiName
        FROM KpiCategory tab1
            INNER JOIN KpiDetails tab2
                ON tab1.KpiCatId = tab2.KpiCatId";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function editkpidetails($catId, $catName) {
        $sql = "update Kpidetails set KpiName='$catName' where KpiId='$catId'";
        $query = $this->db->query($sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    function deletekpidetails($catId) {
        $sql = "DELETE FROM KpiDetails WHERE KpiId='$catId'";
        $query = $this->db->query($sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    function editkpiajax($data) {
        $target = $data['target'];
        $weight = $data['weight'];
        $assignId = $data['assignId'];
        echo $sql = "UPDATE AssignKpi SET Target='$target',Weight='$weight' where AssignId='$assignId'";
        $query = $this->db->query($sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    function deletekpiajax($data) {
        $assignId = $data['assignId'];
        $sql = "DELETE FROM AssignKpi WHERE AssignId='$assignId'";
        $query = $this->db->query($sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    function selectkpi($id) {
        $sql = "SELECT * FROM Kpidetails WHERE KpiCatId = $id";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function selecteditkpidetails($EmpCode) {
        $sql = "SELECT a.*,b.KpiCatName,c.KpiName FROM AssignKpi a 
        INNER JOIN KpiCategory b on b.KpiCatId = a.KpiCatId
        INNER JOIN KpiDetails c on c.KpiId = a.KpiId 
		WHERE a.EmpCode = '$EmpCode' 
		ORDER BY a.AssignId";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function selectSupervisor() {
        $sql = "SELECT a.*,b.name,c.name AS SuperName FROM Supervisor a 
                INNER JOIN Personal b ON a.EmpCode = b.EmpCode
                INNER JOIN Personal c ON a.SuperCode = c.EmpCode";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function editSupervisor($id, $superCode) {
        $sql = "update Supervisor set SuperCode='$superCode' where Id='$id'";
        $query = $this->db->query($sql);
        echo $sql;
        return true;
    }

    public function selectappraisalmaster($appraisalId) {
        $sql = "SELECT a.*,b.name FROM AppraisalMaster a
                INNER JOIN Personal b ON a.EmpCode = b.EmpCode WHERE a.AppraisalId = '$appraisalId'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getApproveSignature($appraisalId) {
        $sql = "SELECT a.*,b.name FROM Approve a 
            INNER JOIN Personal b ON a.ApproveEmpCode = b.EmpCode
            WHERE a.AppraisalId='$appraisalId'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function selectMyTeamMembers($userid) {
        $sql = "SELECT a.*,b.name,c.DesgCode,d.DesgName FROM Supervisor a 
                INNER JOIN Personal b ON a.EmpCode = b.EmpCode
                LEFT JOIN [192.168.100.2].PIMSNEW.dbo.Employer c ON a.EmpCode = c.EmpCode
                LEFT JOIN [192.168.100.2].PIMSNEW.dbo.Designation d ON c.DesgCode = d.DesgCode
                WHERE a.SuperCode='$userid'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function selectMyTeamMembersKpi($userid) {
        $sql = "SELECT a.*,b.name,d.DesgName FROM AppraisalMaster a
                INNER JOIN Personal b ON a.EmpCode = b.EmpCode
                LEFT JOIN [192.168.100.2].PIMSNEW.dbo.Employer c ON a.EmpCode = c.EmpCode
                LEFT JOIN [192.168.100.2].PIMSNEW.dbo.Designation d ON c.DesgCode = d.DesgCode
                WHERE a.EmpCode='$userid'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

}
