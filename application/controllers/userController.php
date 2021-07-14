<?php
class userController extends CI_Controller {

        public function index()
        {
            $this->LandingPage();
        }
        

        public function LandingPage(){
            $this->load->view('template/navBar');    
            $this->load->view('landingPage');
        }
}