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
			show_404();
		}

		$data['title'] = $data['risk_item']['title'];

		$this->load->view('templates/header', $data);
                $this->load->view('risks/view', $data);
		$this->load->view('templates/footer');
        }
        
        public function create()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Create a news item';

                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('text', 'Text', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                    $this->load->view('templates/header', $data);
                    $this->load->view('risks/create');
                    $this->load->view('templates/footer');

                }
                else
                {
                    $this->FMEA_model->set_risks();
                    $this->load->view('risks/success');
                }
        }
}