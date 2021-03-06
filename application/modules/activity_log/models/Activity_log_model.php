<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* Log_activitas Model Class
 *
 * @package     GROOT
 * @subpackage  Models
 * @category    Models
 * @author      Sistiandy Syahbana nugraha <sistiandy.web.id>
 */

class Activity_log_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    var $table = 'activity_log';
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('log_id, log_date, log_action, log_module, log_info, activity_log.user_id, user.user_name'); 
        
        if(isset($params['id']))
        {
            $this->db->where('activity_log.log_id', $params['id']);
        }
        if(isset($params['user_id']))
        {
            $this->db->where('activity_log.user_id', $params['user_id']);
        }
        
        if(isset($params['limit']))
        {
            if(!isset($params['offset']))
            {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }

        if(isset($params['order_by']))
        {
            $this->db->order_by($params['order_by'], 'desc');
        }
        else
        {
            $this->db->order_by('log_date', 'desc');
        }

        $this->db->join('user', 'user.user_id = activity_log.user_id', 'left');
        $res = $this->db->get('activity_log');

        if(isset($params['id']))
        {
            return $res->row_array();
        }
        else
        {
            return $res->result_array();
        }
    }

    function add($data = array()) {
        $param = array(
            'log_date' => $data['log_date'],
            'log_action' => $data['log_action'],
            'log_module' => $data['log_module'],
            'log_info' => $data['log_info'],
            'user_id' => $data['user_id'],
        );
        $this->db->insert('activity_log', $param);
        $id = $this->db->insert_id();

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }

}
