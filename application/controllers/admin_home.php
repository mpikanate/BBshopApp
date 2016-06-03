<?php
class Admin_home extends CI_Controller {

    /**
    * name of the folder responsible for the views 
    * which are manipulated by this controller
    * @constant string
    */
    const VIEW_FOLDER = 'admin/home';
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/home');
        }
    }

    public function test(){
        echo "Test (:";
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {
        //load the view
        $data['main_content'] = 'admin/home/index';
        $this->load->view('includes/template', $data);  

    }//index


}