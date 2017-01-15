<?php
class Risks extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('FMEA_model');
                $this->load->helper('url_helper');
        }

        public function index($page = 1)
        {
                $data['risks'] = $this->FMEA_model->get_risks($slug = FALSE, $page);
		$data['title'] = 'Risks list';
                $data['page'] = $page;
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
                
                $data['programs'] = $this->FMEA_model->get_programs();
                $data['risk'] = '######';
                
                $this->form_validation->set_rules('where_where', 'Program / Application', 'required');
                $this->form_validation->set_rules('what_what', 'Process / Feature', 'required');
                $this->form_validation->set_rules('potential_failure_mode', 'Potential failure', 'required');
                $this->form_validation->set_rules('effect', 'Effect', 'required');
                $this->form_validation->set_rules('severity', 'Severity', 'required');
                $this->form_validation->set_rules('why', 'Potential Causes', 'required');
                $this->form_validation->set_rules('occurrence', 'Occurrence', 'required');
                $this->form_validation->set_rules('current_control', 'Current Control', 'required');
                $this->form_validation->set_rules('detection', 'Detection', 'required');
                $this->form_validation->set_rules('actions_recommended', 'Actions Recommended to reduce risk', 'required');
                $this->form_validation->set_rules('action_owner', 'Actions Owner', 'required');
                $this->form_validation->set_rules('task_id', 'Reference link to task manager – CAPA number', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                    $this->load->view('templates/header', $data);
                    $this->load->view('risks/create');
                    $this->load->view('templates/footer');

                }
                else
                {
                    $this->FMEA_model->set_risks(FALSE);
                    $this->load->view('risks/success');
                }
        }
        
        public function autogenerate()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['risk'] = '######';
                $this->form_validation->set_rules('number_of_records', 'Number of records to be generated', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                    $this->load->view('templates/header', $data);
                    $this->load->view('risks/autogenerate');
                    $this->load->view('templates/footer');

                }
                else
                {
                    for($i=1; $i<=$this->input->post('number_of_records'); $i++)
                    {
                        $this->FMEA_model->set_risks(TRUE);
                        $data['record'] = $i;
                    }
                    $this->load->view('risks/success_autogenerate',$data);
                }
        }
}