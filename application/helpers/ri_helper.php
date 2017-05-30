<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    if (!function_exists('get_supervisor')) {

        function get_supervisor($id) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $supervisor_q = $CI->Common_m->select_option_supervisor($id);
            $supervisor = $supervisor_q['0']['SuperCode'];
            return $supervisor;
        }

    }
    
    if (!function_exists('get_user_name')) {

        function get_user_name($id) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $Name_q = $CI->Common_m->select_option_user($id);
            $Name = $Name_q['0']['Name'];
            return $Name;
        }

    }
    
    if (!function_exists('get_role_name')) {

        function get_role_name($id) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $RoleName_q = $CI->Common_m->select_option_role($id);
            $RoleName = $RoleName_q['0']['RoleName'];
            return $RoleName;
        }

    }

    if (!function_exists('total_service_data')) {

        function total_service_data($userid) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $total_q = $CI->Common_m->sumSericeData($userid);
            //$Levelname = $Levelname_q['0']['Levelname'];
            return $total_q;
        }
    }
    
    if (!function_exists('get_receive_by_incharge')) {

        function get_receive_by_incharge($Iso) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $receive_q = $CI->Common_m->receiveTicketByIncharge($Iso);
            $receive = $receive_q['0']['TotalReceive'];
            return $receive;
        }
    }
    
    if (!function_exists('get_receive_by_engineer')) {

        function get_receive_by_engineer($Iso) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $receive_q = $CI->Common_m->receiveTicketByEngineer($Iso);
            $receive = $receive_q['0']['TotalReceive'];
            return $receive;
        }
    }
    
    if (!function_exists('get_receive_by_logistics')) {

        function get_receive_by_logistics($Iso) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $receive_q = $CI->Common_m->receiveTicketByLogistics($Iso);
            $receive = $receive_q['0']['TotalReceive'];
            return $receive;
        }
    }
    if (!function_exists('get_assign_by_incharge')) {

        function get_assign_by_incharge($Iso) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $assign_q = $CI->Common_m->assignTicketByIncharge($Iso);
            $assign = $assign_q['0']['TotalAssign'];
            return $assign;
        }
    } 
    
    if (!function_exists('work_start_by_engineer')) {

        function work_start_by_engineer($Iso) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $workstart_q = $CI->Common_m->workStartByEngineer($Iso);
            $workstart = $workstart_q['0']['StartWork'];
            return $workstart;
        }
    }
    
    if (!function_exists('finish_start_by_engineer')) {

        function finish_start_by_engineer($Iso) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $finishwork_q = $CI->Common_m->workFinishByEngineer($Iso);
            $finishwork = $finishwork_q['0']['FinishWork'];
            return $finishwork;
        }
    }
    
    if (!function_exists('approve_markforpo_by_logistics')) {

        function approve_markforpo_by_logistics($Iso,$PartsId) {
            $CI = & get_instance();
            $CI->load->model('Product_data');
            $approve_markforpo_q = $CI->Product_data->approve_markforpo_by_logistics($Iso,$PartsId);
            $approve_markforpo = $approve_markforpo_q['0']['act'];
            return $approve_markforpo;
        }
    }
    
    if (!function_exists('getUserRoleId')) {

        function getUserRoleId($userid) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $role_q = $CI->Common_m->select_option_roleId($userid);
            $RoleId = $role_q['0']['RoleId'];
            return $RoleId;
        }
    }
    
    if (!function_exists('get_date_format')) {
        function get_date_format($date) {
            $time = strtotime($date);
            $dateF = date('M d Y', $time);
            return $dateF;
        }
    }
    
    if (!function_exists('get_date_format_2')) {
        function get_date_format_2($date) {
            $time = strtotime($date);
            $dateF = date('Y-m-d', $time);
            return $dateF;
        }
    }


    if (!function_exists('bd_nice_number')) {

        function bd_nice_number($n) {
            $n = (0 + str_replace(",", "", $n));

            // is this a number?
            if (!is_numeric($n))
                return false;

            // now filter it;
            // if($n>1000000000000) return round(($n/1000000000000),1).' trillion';
            // else if($n>1000000000) return round(($n/1000000),1).'';
            // else if($n>1000000) return round(($n/1000000),2).'';
            if ($n > 1000)
                return round(($n / 1000000), 2) . '';

            return number_format($n);
        }

    }

    if (!function_exists('bd_nice_number_hs')) {

        function bd_nice_number_hs($n) {
            $n = (0 + str_replace(",", "", $n));

            // is this a number?
            if (!is_numeric($n))
                return false;

            // now filter it;
            if ($n > 1000000000000)
                return round(($n / 1000000000000), 1) . ' trillion';
            else if ($n > 1000000000)
                return round(($n / 1000000000), 1) . ' billion';
            else if ($n > 1000000)
                return round(($n / 1000), 2) . '';
            else if ($n > 1000)
                return round(($n / 1000), 2) . '';

            return number_format($n);
        }

}