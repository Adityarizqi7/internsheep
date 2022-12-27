<?php

class Templates
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    function student($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
            $data['_header'] = $this->ci->load->view('components/Navbar', $data, TRUE);
            $data['_footer'] = $this->ci->load->view('components/Footer', $data, TRUE);
            $data['_template'] = $this->ci->load->view('layouts/Internsheep_layout', $data);
    }

    function admin($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
            $data['_header'] = $this->ci->load->view('components/Navbar', $data, TRUE);
            $data['_footer'] = $this->ci->load->view('components/Footer', $data, TRUE);
            $data['_template'] = $this->ci->load->view('layouts/Internsheep_layout', $data);
    }
}
