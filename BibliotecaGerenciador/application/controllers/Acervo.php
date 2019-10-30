<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Acervo extends CI_Controller {

    public function __construct() {
        parent::__construct();/*
        $this->load->model('BackEndModels/LoginAdministradorModel');
        $this->LoginAdministradorModel->verificaLogin();

        $this->load->model('BackEndModels/PromocaoModel');*/
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $this->load->view('menu');
        $this->load->view('acervo');
        //$this->load->view('footer');
    }
    
}