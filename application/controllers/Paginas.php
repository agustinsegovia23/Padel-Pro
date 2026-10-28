<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('paginas/home');
        $this->load->view('templates/footer');
    }

    public function historia()
    {
        $this->load->view('templates/header');
        $this->load->view('paginas/historia');
        $this->load->view('templates/footer');
    }

    public function gameplay()
    {
        $this->load->view('templates/header');
        $this->load->view('paginas/gameplay');
        $this->load->view('templates/footer');
    }

    public function personajes()
    {
        $this->load->view('templates/header');
        $this->load->view('paginas/personajes');
        $this->load->view('templates/footer');
    }

    public function contacto()
    {
        $this->load->view('templates/header');
        $this->load->view('paginas/contacto');
        $this->load->view('templates/footer');
    }

    public function usuario()
    {
        $this->load->view('templates/header');
        $this->load->view('paginas/usuario');
        $this->load->view('templates/footer');
    }
}