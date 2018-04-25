<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Faq extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('faq_model');
		$this->isLoggedIn(); 
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'Lendexsys : Faq';
        $data['faqRecords']=$this->faq_model->getFaqs();

        $this->loadViews("dashboard/faq", $this->global, $data , NULL);
    }
    
   

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
            $data['roles'] = $this->user_model->getUserRoles();
            
            $this->global['pageTitle'] = 'Lendexsys : Add New User';

            $this->loadViews("addNew", $this->global, $data, NULL);
        }
    }
	
	   /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($Id)
    {
        
            $data['faqInfo'] = $this->faq_model->getFaqInfo($Id);
            
            $this->global['pageTitle'] = 'Lendexsys : Edit Faq';
            
            $this->loadViews("dashboard/editOldFaq", $this->global, $data, NULL);
        
    }
	
	/**
     * This function is used to edit the user information
     */
    function editUser()
    {
        
            $this->load->library('form_validation');
            
            $Id = $this->input->post('Id');
            
            $this->form_validation->set_rules('title','Full Name','trim|required');
            $this->form_validation->set_rules('description','Description','trim|required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($Id);
            }
            else
            {
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('title'))));
                $email = $this->security->xss_clean($this->input->post('description'));
                
                $userInfo = array();
                
               
                    $userInfo = array('title'=>$name, 'description'=>$email);
               
                
                
                $result = $this->faq_model->ediFaq($userInfo, $Id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Faq updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Faq updation failed');
                }
                
                redirect('index.php/faq');
            
        }
    }
}

?>