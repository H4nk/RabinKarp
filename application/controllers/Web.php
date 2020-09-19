<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('footer');
	}
		public function upload1()
	{
	$this->db->truncate('pertama');
	$this->db->truncate('source');
	$this->db->truncate('kedua');
	$this->db->truncate('file');
		$this->load->view('header');
		$this->load->view('upload1');
		$this->load->view('footer');
	}
	public function uploadx()
{
	$in['source'] = $this->input->post('source');
	$in['pertama'] = $this->input->post('pertama');
	$in['kedua'] = $this->input->post('kedua');
	$in['k-gram'] = $this->input->post('gram');
	$in['basis'] = $this->input->post('basis');
	$gram = $this->input->post('gram');
	$h4nk = $this->input->post('gram');
	$basis = $this->input->post('basis');
	$key = md5(rand());
	$in['key'] = $key;
	$id['key'] = $key;
	$this->db->insert('file',$in);
	
	$d = hapus_simbol($this->input->post('source'));
	$length=strlen($d);
$teksSplit=null;
if(strlen($d) < $h4nk){
	$teksSplit[]=$d;
}else{
	for($i=0;$i<=$length-$h4nk;$i++){
		$teksSplit[]=substr($d,$i,$h4nk);
		
$ddd['source'] = $teksSplit[$i]; 
$ddd['key'] = $key; 
$this->db->insert('source', $ddd);
	}
}
$dx = hapus_simbol($this->input->post('pertama'));
	$lengthf=strlen($dx);
$teksSplift=null;
if(strlen($dx) < $h4nk){
	$teksSplitf[]=$dx;
}else{
	for($i=0;$i<=$lengthf-$h4nk;$i++){
		$teksSplitf[]=substr($dx,$i,$h4nk);
		
$dddd['source'] = $teksSplitf[$i]; 
$dddd['key'] = $key; 

$this->db->insert('pertama', $dddd, $id);
	}
}
$df = hapus_simbol($this->input->post('kedua'));
	$lengthd=strlen($dx);
$teksSplitg=null;
if(strlen($df) < $h4nk){
	$teksSplitg[]=$df;
}else{
	for($i=0;$i<=$lengthd-$h4nk;$i++){
		$teksSplitg[]=substr($df,$i,$h4nk);
$dddx['source'] = $teksSplitg[$i]; 
$dddx['key'] = $key; 

$this->db->insert('kedua', $dddx);
	}
}

	header('location:'.base_url().'Web/hasil/'.$key.'/'.$gram.'/'.$basis.'');
}
	public function hasil($key)
	{
	$in['key'] = $key;
	$d['file'] = $this->db->get_where('file', $in);
	$this->load->view('header');
	$this->load->view('hasil', $d);
	$this->load->view('footer');

	}
		
}
