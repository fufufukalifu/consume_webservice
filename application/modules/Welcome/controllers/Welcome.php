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
private $key_api = '38bbe5b097bf93c6a63656f53c136afa';

function __construct(){
	// $this->load->model('rajaongkir/rajaongkir');
	$this->load->library('RajaOngkir');
	$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-@\=';
	$this->load->helper('form');
	$this->load->helper('url');

}
public function index()
{
			// echo base_url();
	$data['title'] = 'Produk Di BalanjaOnline';
	$data['favorites'] = json_decode(file_get_contents($this->link."/get_products_favorite"),true);
	$data['items'] = json_decode(file_get_contents($this->link."/get_products/20"),true);


	$data['chart'] = json_decode(file_get_contents($this->link."/get_charts"),true);
	$data['chart_number'] = count($data['chart']['products']);
	$data['cost_all_chart'] = $this->get_cost_total()['total_chart'][0]['total_charted'];
	
	$data['head_product'] = '';
	$this->load->view('index', $data);
}

public function get_all_products($limit = 1000){
	$data = json_decode(file_get_contents($this->link."/get_products/".$limit),true);
	print_r($data['products']);
}

public function get_cost_total(){
	$data = json_decode(file_get_contents($this->link."/get_total_chart/"),true);
	return $data;

}
public function get_products_discount($discount, $limit=10){
	$url = $this->link."/get_products_discount/".$discount."/".$limit;
	$data = json_decode(file_get_contents($url),true);
	$data['favorites'] = json_decode(file_get_contents($this->link."/get_products_favorite"),true);
	$data['items'] = json_decode(file_get_contents($url),true);

	$data['chart'] = json_decode(file_get_contents($this->link."/get_charts"),true);
	$data['chart_number'] = count($data['chart']['products']);
	$data['cost_all_chart'] = $this->get_cost_total()['total_chart'][0]['total_charted'];

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
	$data['item'] = json_decode(file_get_contents($url),true);
	// print_r($data['item']);	
	$data['itm'] = $data['item']['products'];
	$datas['item'] = $data['itm'][0];	
	$this->load->view('detail', $datas);
	$data['chart'] = json_decode(file_get_contents($this->link."/get_charts"),true);
	$data['chart_number'] = count($data['chart']['products']);

} 

public function search_product_by_name($key){
	$url = $this->link."/search_product_by_name/".$key;
	$data['items'] = json_decode(file_get_contents($url),true);
	$data['chart'] = json_decode(file_get_contents($this->link."/get_charts"),true);
	$data['chart_number'] = count($data['chart']['products']);

	$data['favorites'] = json_decode(file_get_contents($this->link."/get_products_favorite"),true);

	$data['head_product'] = 'Hasil Pencarian <b><i>'.$key.'</i></b>';
	$data['title'] = 'Produk Diskon Di BalanjaOnline - '.$data['head_product'];
	$this->load->view('index', $data);
} 

public function test(){
	// echo base_url();
	$data['title'] = 'Produk Di BalanjaOnline';
	$data['favorites'] = json_decode(file_get_contents($this->link."/get_products_favorite"),true);
	$data['items'] = json_decode(file_get_contents($this->link."/get_products/20"),true);


	$data['head_product'] = '';
	$this->load->view('index', $data);
}

# show charts
public function mychart(){
	$data['title'] = 'Chart Anda Di BalanjaOnline';
	$data['items'] = json_decode(file_get_contents($this->link."/get_charts"),true);
	
	$data['chart_number'] = count($data['items']['products']);
	$data['couriers'] = $this->rajaongkir->getCouriersList();
	
	$provinces = json_decode($this->get_provinces());
	$cities = json_decode($this->get_cities());

	$data['provinces'] = $provinces->rajaongkir->results;
	$data['cities'] = $cities->rajaongkir->results;
	
	$data['head_product'] = '';
	$data['cost_all_chart'] = $this->get_cost_total()['total_chart'][0]['total_charted'];
	$this->load->view('chart', $data);
}

#get provinces from rajaongkir
public function get_provinces(){
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"key: 38bbe5b097bf93c6a63656f53c136afa"
		),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		return "cURL Error #:" . $err;
	} else {
		return $response;
	}
}

# get cities from rajaongkir
public function get_cities($province_id="null"){
	$curl = curl_init();
	if ($province_id == "null"){
		$link = "https://api.rajaongkir.com/starter/city";
	}else{		
		$link = "https://api.rajaongkir.com/starter/city?province=".$province_id;
	}
	curl_setopt_array($curl, array(
		CURLOPT_URL => $link	,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"key: 38bbe5b097bf93c6a63656f53c136afa"
		),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		return "cURL Error #:" . $err;
	} else {
		return $response;
	}
}

# get cost with passing origin, destination, weigth and courier that used
function get_cost($origin=23, $destination, $weight, $courier){

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "origin=".$origin."&destination=".$destination."&weight=".$weight."&courier=".$courier."",
		CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: 38bbe5b097bf93c6a63656f53c136afa"
		),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		return "cURL Error #:" . $err;
	} else {
		return $response;
	}
}

# get cost with passing origin, destination, weigth and courier that used
function get_bank_list($id = 0){
	if ($id==0) {
		$url = "http://localhost:3100/get_bank_list";
	}else{
		$url = "http://localhost:3100/get_bank_detail/".$id;
	}
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: 38bbe5b097bf93c6a63656f53c136afa"
		),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		return "cURL Error #:" . $err;
	} else {
		return $response;
	}
}

function ajax_get_city($province_id){
	$data = json_decode($this->get_cities($province_id));
	$cities = $data->rajaongkir->results;
	echo json_encode($cities);
}

function ajax_get_cost($origin=23, $destination, $weight, $courier){
	$data = json_decode(($this->get_cost($origin=23, $destination, $weight, $courier)));
	$costs = $data->rajaongkir->results;
	$shipping_cost = [];
	// echo json_encode($const[0]);
	
	foreach ($costs as $cost) {
		for ($i=0; $i < count($cost->costs); $i++) { 
			$temp = [
				'service' => $cost->costs[$i]->service,
				'description' => $cost->costs[$i]->description,
				'cost' => $cost->costs[$i]->cost[0]->value,
				'etd' => $cost->costs[$i]->cost[0]->etd,
				'note' =>$cost->costs[$i]->cost[0]->note 
			];
			$shipping_cost[] = $temp;
		}
	}
	echo json_encode($shipping_cost);
}


function pay($value,$berat, $alamat, $province, $city, $courier){
	$banks = $this->get_bank_list();
	$data['bank'] = json_decode($banks);

	$random = time() . rand(10*45, 100*98);
	$resi = time() . rand(10*45, 100*98);;
	$transaksi = time()."ID";
	

	$data['info'] = ['value'=>$value, 'berat'=>$berat, 'alamat'=>$alamat, 'province'=>$province, 'city'=>$city, 'courier'=>$courier];

	$data['chart'] = json_decode(file_get_contents($this->link."/get_charts"),true);
	$data['chart_number'] = count($data['chart']['products']);
	$data['cost_all_chart'] = $this->get_cost_total()['total_chart'][0]['total_charted'];

	$data['favorites'] = json_decode(file_get_contents($this->link."/get_products_favorite"),true);

	$data['title'] = 'Payment';
	$this->load->view('payment', $data);
	$data = json_decode(file_get_contents($this->link."/payment/".$value."/".$berat."/".$province."/".$city."/".$courier."/".$alamat."/".$resi."/".$transaksi),true);

}

function insert_chart($id, $stock){
	$data = json_decode(file_get_contents($this->link."/insert_to_chart/".$id."/".$stock),true);
	return $data;
}

function add_chart($id, $stock){
	$message = $this->insert_chart($id, $stock);
}

function do_payment(){
	

	$post = $this->input->post();
	$bank = $this->get_bank_list((int)$post['bank']);
	$uniq = mt_rand(100, 999);
	json_decode(file_get_contents($this->link."/update_chart/"),true);
	$data['ship'] = json_decode(file_get_contents($this->link."/get_ship_by_value/".$post['total']),true);

	$total = $post['total'] + $uniq;

	$data['title'] = 'Pembayaran';
	$data['total'] = $total;
	$data['post'] = $post;
	$data['bank'] = json_decode($bank)[0];

	$this->load->view('checkout', $data);

}


function track($value = "123"){
	$data['title'] = 'Track pesanan anda disini';

	$data['chart'] = json_decode(file_get_contents($this->link."/get_charts"),true);
	$data['result'] = json_decode(file_get_contents($this->link."/get_ship_by_transaksi/".$value),true);
	$data['chart_number'] = count($data['chart']['products']);
	$data['cost_all_chart'] = $this->get_cost_total()['total_chart'][0]['total_charted'];
	$data['head_product'] = '';
	$this->load->view('track', $data);
}
}
