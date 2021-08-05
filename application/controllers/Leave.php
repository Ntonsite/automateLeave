<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Leave extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('leaves_model');
        $data['title'] = 'Leave-HR';
        $this->load->view('includes/header', $data);
        $this->load->view('includes/nav-bar', $data);
    }

    public function index()
    {
        $data['result'] = $this->leaves_model->retrieveAll();
        $this->load->view('home', $data);
        $this->load->view('includes/footer');
    }

    public function all_balance()
    {
        $data['result'] = $this->leaves_model->retrieveAllocatedBalance();
        $this->load->view('allocated', $data);
        $this->load->view('includes/footer');
    }

    public function av_balance()
    {
        $data['result'] = $this->leaves_model->retrieveBalances();
        $this->load->view('available', $data);
        $this->load->view('includes/footer');
    }

    public function history($id)
    {
        $data['result'] = $this->leaves_model->requestHistory($id);
        $this->load->view('leaves-history', $data);
        $this->load->view('includes/footer');
    }

    public function annual()
    {
        $data['result'] = $this->leaves_model->getAnnual();
        $this->load->view('annual', $data);
        $this->load->view('includes/footer');
    }

    public function sick()
    {
        $data['result'] = $this->leaves_model->getSick();
        $this->load->view('sick', $data);
        $this->load->view('includes/footer');
    }

    public function maternity()
    {
        $data['result'] = $this->leaves_model->getMaternity();
        $this->load->view('maternity', $data);
        $this->load->view('includes/footer');
    }

    public function compassionate()
    {
        $data['result'] = $this->leaves_model->getCompassionate();
        $this->load->view('compassionate', $data);
        $this->load->view('includes/footer');
    }

    public function email()
    {
        return (new email_helper)->get();
    }

}
