<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	private $link = 'http://localhost:3100';
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function get_all_products($limit = 1000){
		$data = json_decode(file_get_contents($this->link."/get_products/".$limit),true);
		print_r($data['products']);
	}



	public function get_products_discount($discount, $limit=10){
		$url = $this->link."/get_products_discount/".$discount."/".$limit;
		$data = json_decode(file_get_contents($url),true);
		$data['favorites'] = json_decode(file_get_contents($this->link."/get_products_favorite"),true);
		$data['items'] = json_decode(file_get_contents($url),true);

		$data['head_product'] = '';
		if($discount==='free_sale'){
			$data['head_product'] = 'Free Sale!';
		}

		if($discount==='event'){
			$data['head_product'] = 'Discount event!';
		}

		if($discount==='get_one'){
			$data['head_product'] = 'Buy One Get One Free!';
		}

		if($discount==='end_year'){
			$data['head_product'] = 'End Year!';
		}
		$data['title'] = 'Produk Diskon Di BalanjaOnline - '.$data['head_product'];
		$this->load->view('index', $data);


	}

	public function get_product_detail($id){

		$url = $this->link."/get_product_detail/".$id;
		$data = json_decode(file_get_contents($url),true);
		print_r($data['products']);	
	} 

		public function search_product_by_name($key){
		$url = $this->link."/search_product_by_name/".$key;
		$data = json_decode(file_get_contents($url),true);
		print_r($data['products']);	
	} 

	public function test(){
		// echo base_url();
		$data['title'] = 'Produk Di BalanjaOnline';
		$data['favorites'] = json_decode(file_get_contents($this->link."/get_products_favorite"),true);
		$data['items'] = json_decode(file_get_contents($this->link."/get_products/20"),true);


		$data['head_product'] = '';
		$this->load->view('index', $data);
	}
}
