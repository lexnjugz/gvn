<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function e404Hundler($filepath) {
        if (!file_exists("application/views/" . $filepath . ".php")) {
            $filename = "application/views/" . $filepath . ".php";
            /* echo "Error : File ('$filename') does not exist"; */ return false;
        } else {
            return true;
        }
    }

    function page($pageName = "", $pageData = array()) {
        $filename = ucwords($pageName);

        if ($this->e404Hundler($filename)) {
            //redirect("index.php/Home");
        }
        $data['data'] = $pageData;
        $this->load->view("Includes/HeadView", $data);
        $this->load->view("Includes/MainNavView", $data);
        if ($this->e404Hundler($filename)) {
            $this->load->view($filename, $data);
        } else {
            echo "Error : ('$filename') File does not exit";
        }
        $this->load->view("Includes/FooterView");
    }

    function form($formName = "", $data = array(), $scripts = array(), $stylesheets = array()) {
        $filename = "Audit/Forms/" . ucwords($formName);
        if ($this->e404Hundler($filename)) {
            //redirect("index.php/Home");
        }
        $data['data'] = $data;
        $this->load->view("Includes/HeadView", $data);
        $this->load->view("Includes/MainNavView", $data);
        if ($this->e404Hundler($filename)) {
            $this->load->view($filename, $data);
        } else {
            echo "Error : ('$filename') File does not exit";
        }
        $this->load->view("Includes/FooterView");
    }

    public function update() {
        $path = $_SERVER['PHP_SELF'];
        Object($path);
    }

    function modal($modalName = "", $pageData = array()) {
//        if ($this->input->post("requestView") != "modal") {
//            redirect("Home/index/");
//        }
        $filename = ucwords($modalName);
        if ($this->e404Hundler($filename)) {
            //redirect("index.php/Home");
        }
        $data['data'] = $pageData;
        if ($this->e404Hundler($filename)) {
            $this->load->view($filename, $data);
        } else {
            echo "Error : ('$filename') File does not exit";
        }
    }

    function ajax($fileName = "", $data = array(), $scripts = array(), $stylesheets = array()) {
        $filename = ucwords($fileName);
        if ($this->e404Hundler($filename)) {
            //redirect("index.php/Home");
        }
//        $data['repository_sources'] = $this->sources;
        $data['data'] = $data;
        if ($this->e404Hundler($filename)) {
            $this->load->view($filename, $data);
        } else {
            echo "Error : ('$filename') File does not exit";
        }
    }

    function notificationPopup($fileName = "", $data = array(), $scripts = array(), $stylesheets = array()) {
        $filename = $pageName;
        if ($this->e404Hundler($filename)) {
            //redirect("index.php/Home");
        }
        if ($this->e404Hundler($filename)) {
            $this->load->view($filename, $data);
        } else {
            echo "Error : ('$filename') File does not exit";
        }
    }

    public function index() {
        $this->page('HomeView');
    }

    public function about() {
        $this->page('AboutView');
    }

    public function why_elect_me() {
        $this->page('WhyElectMeView');
    }

    public function donate() {
        $this->page('DonateView');
    }

    public function contact() {
        $this->page('ContactView');
    }

    public function single() {
        $this->page('SingleView');
    }

}
