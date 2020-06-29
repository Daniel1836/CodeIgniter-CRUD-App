<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->model('queries');
		$posts = $this->queries->getPosts();
		$this->load->view('welcome_message', ['posts'=>$posts]);
	}
	public function create()
	{
		$this->load->view('create');
	}

	public function save()
  {
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			$this->queries->addPost($data);
			return redirect('http://localhost:8001/welcome');

	}
	public function update($id)
  {
		$this->load->model('queries');
		$post = $this->queries->getSinglePosts($id);
		$this->load->view('update', ['post'=>$post]);
	
	}

	public function change($id)
  {
		$data = $this->input->post();
		unset($data['submit']);
		$this->load->model('queries');
		$this->queries->UpdatePost($data, $id);
		return redirect('http://localhost:8001/welcome');
	}

	public function view($id)
  {
		$this->load->model('queries');
		$post = $this->queries->getSinglePosts($id);
		$this->load->view('view', ['post'=>$post]);
	}

	public function delete($id)
  {
		$this->load->model('queries');
		 $this->queries->deletePosts($id);
		 return redirect('http://localhost:8001/welcome');
	}
}
