<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Risksdatatables extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('FMEADatatables_model','fmeadatatables');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('risks/risks');
	}

	public function ajax_list()
	{
		$list = $this->fmeadatatables->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $risk) {
			$no++;
			$row = array();
			$row[] = $risk->id;
                        $row[] = $risk->what_what;
                        $row[] = $risk->RPN;
                        $row[] = $risk->action_owner;
                        $row[] = $risk->where_where;
                        $row[] = $risk->task_id;
                        
                        
//                        $row[] = $risk->potential_failure_mode;
//                        $row[] = $risk->effect;
//                        $row[] = $risk->severity;
//                        $row[] = $risk->why;
//                        $row[] = $risk->occurrence;
//                        $row[] = $risk->current_control;
//                        $row[] = $risk->detection;
//                        
//                        $row[] = $risk->actions_recommended;
//                        
//                        $row[] = $risk->date_created;
//                        $row[] = $risk->created_by;
//                        $row[] = $risk->date_mod;
//                        $row[] = $risk->mod_by;
//                        $row[] = $risk->obsolete;

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->fmeadatatables->count_all(),
						"recordsFiltered" => $this->fmeadatatables->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

}
