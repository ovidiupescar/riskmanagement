<?php
class Risks extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('FMEA_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['risks'] = $this->FMEA_model->get_risks();
				$data['title'] = 'Risks list';

				$this->load->view('templates/header', $data);
				$this->load->view('risks/index', $data);
				$this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $data['risk_item'] = $this->FMEA_model->get_risks($slug);
				
				if (empty($data['risk_item']))
				{
					//	show_404();
				}

				$data['title'] = $data['risk_item']['title'];

				$this->load->view('templates/header', $data);
				$this->load->view('risks/view', $data);
				$this->load->view('templates/footer');
        }
}