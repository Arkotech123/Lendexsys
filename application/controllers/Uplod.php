<?php



class Uplod extends CI_Controller {



        public function __construct()

        {

                parent::__construct();

                $this->load->helper(array('form', 'url'));

                $this->load->model('user_model');

        }



        public function index()

        {

                $this->load->view('upload_form', array('error' => ' ' ));

        }



        public function do_upload()

        {

                $config['upload_path']          = './uploads/profile';

                $config["allowed_types"]        = "*";

                $this->load->library('upload', $config);



                if ( ! $this->upload->do_upload('userfile'))

                {

                        $error = array('error' => $this->upload->display_errors());

                        redirect('success');

                      

                }

                else

                {

                        $data = array('upload_data' => $this->upload->data());

                        $imageName=$data['upload_data']['file_name'];

                        $userId=$this->session->userdata['profile'];

                        $this->user_model->uplod_user_image($userId,$imageName);

                        redirect('borower');

                }

        }

}

?>

