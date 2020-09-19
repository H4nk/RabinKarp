<?php
class Config_model extends CI_Model {


 function count_a()
 {
			$q = $this->db->query("SELECT count(source) as source FROM  source ");
			$d = array();
			foreach($q->result() as $dt)
			{
$data= $dt->source;
			}
	   return $data;
 }
 function count_b()
 {
			$q = $this->db->query("SELECT count(source) as source FROM v_pertama ");
			$d = array();
			foreach($q->result() as $dt)
			{
$data= $dt->source;
			}
	   return $data;
 } 
 function count_c()
 {
			$q = $this->db->query("SELECT count(source) as source FROM v_kedua ");
			$d = array();
			foreach($q->result() as $dt)
			{
$data= $dt->source;
			}
	   return $data;
 }
 function count_ab()
 {
			$q = $this->db->query("SELECT count(v_pertama.source) as source FROM v_source INNER JOIN v_pertama ON v_pertama.source = v_source.source");
			$d = array();
			foreach($q->result() as $dt)
			{
$data= $dt->source;
			}
	   return $data;
 }
 function count_ac()
 {
			$q = $this->db->query("SELECT count(v_kedua.source) as source FROM v_source INNER JOIN v_kedua ON v_kedua.source = v_source.source");
			$d = array();
			foreach($q->result() as $dt)
			{
$data= $dt->source;
			}
	   return $data;
 }
  }
?>
