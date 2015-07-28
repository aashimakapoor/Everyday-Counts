<?php

class firstpage extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index()
	{
		$this->load->view('first');
	}

	function login()
	{
		$this->load->view('login');
	}
	function home()
	{
		$this->load->view('first');
	}
   
    function sign_up()
    {
    	$this->load->view('sign_up');
    }
 	function pricing()
 	{
 		$this->load->view('pricing');
 	}
 	function contact()
 	{
 		$this->load->view('contact');

 	}

	function privacy()
	{
		$this->load->view('privacy');
	} 
	function terms()
	{
		$this->load->view('terms');
	}
 
	function signup()
	{
		$this->load->model("project");
		$this->project->submission();

	}
	function log_in()
	{
		$this->load->model('project');
		$this->project->verify();

	}
	function contact_us()
	{
		$this->load->model('project');
		$this->project->admit();
	}

function disp()
{
	$this->load->view('display');
}


function tutorial()
{
	$this->load->view('tutorial');
}

function users()
{
	$this->load->model('project');
	$data['result']=$this->project->user();
	$this->load->view('users',$data);
}
function aptitude()
{
	$this->load->view('apti');
}
function verbal()
{
	$this->load->view('verbal');
}
function logical()
{
	$this->load->view('logical');
}
function code()
{
	$this->load->view('code');
}
function viewcou()
{
    $this->load->view('viewcourse1');
}
function viewco()
{
    $this->load->view('viewcourse2');
}

function test1()
{
	$c= $this->input->get("id");
	
	$this->load->model('project');
	$data['ques'] = $this->project->question($c);
	$this->load->view('test1', $data);
}

function question()
{
	$this->load->model('project');
	$this->project->question();
}
function test2()
{
	$this->load->model('project');
	$data['ques1']=$this->project->question1();
	$this->load->view('test2',$data);
}
function report()
{
   $this->load->view('report');
}
function view1()
{
	$this->load->view('view1');
}
function view2()
{
	$this->load->view('view2');
}

function view3()
{
	$this->load->view('view3');

}
function view4()
{
	$this->load->view('view4');
}

function tests()
{
	$this->load->view('tests');
}
function submit()
{
	$this->load->model('project');
	$data['match']=$this->project->submit();
	$this->load->view('report',$data);
}
}
?>