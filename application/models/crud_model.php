<?php
if (!defined('BASEPATH'))
      exit('No direct script access allowed');

/*	
 *	Developed by: Active IT zone
 *	Date	: 10 december, 2014
 *	Active Classified CMS
 *	http://codecanyon.net/user/activeitezone
 */

class Crud_model extends CI_Model
{
      
      function __construct()
      {
            parent::__construct();
      }
      
      function clear_cache()
      {
            $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            $this->output->set_header('Pragma: no-cache');
      }

      
      function get_type_name_by_id($type, $type_id = '', $field = 'name')
      {
            return $this->db->get_where($type, array(
                  $type . '_id' => $type_id
            ))->row()->$field;
      }
      
      
      function get_types_by_thing($type, $thing = '', $thing_value = '')
      {
            return $this->db->get_where($type, array(
                  $thing => $thing_value
            ))->result_array();
      }


      function find_unique_value($table,$field,$value)
      {
            $all = $this->db->get($table)->result_array();
            $set = 0;
            foreach($all as $row){
                  if($row[$field] == $value){
                        $set = $row[$table.'_id'];
                  }
            }
            return $set;
      }


      function check_if_exists($tables_array,$field,$value){
            $res = array();
            foreach($tables_array as $row){
                  $cur = $this->find_unique_value($row,$field,$value);
                  if($cur != 0){
                        $res['type'] = $row;
                        $res['id'] = $cur;
                  }
            }
            return $res;
      }
      
      
}
