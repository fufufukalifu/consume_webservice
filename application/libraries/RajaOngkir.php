<?php

/**
 * RajaOngkir CodeIgniter Library
 * Digunakan untuk mengkonsumsi API RajaOngkir dengan mudah
 * 
 * @author Damar Riyadi <damar@tahutek.net>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'endpoints.php';

class RajaOngkir extends Endpoints {

    private $api_key;
    private $account_type;
    protected $couriersList = [
        'jne'       => 'Jalur Nugraha Ekakurir (JNE)',
        'pos'       => 'POS Indonesia (POS)',
        'tiki'      => 'Citra Van Titipan Kilat (TIKI)',
        // 'pcp'       => 'Priority Cargo and Package (PCP)',
        // 'esl'       => 'Eka Sari Lorena (ESL)',
        // 'rpx'       => 'RPX Holding (RPX)',
        // 'pandu'     => 'Pandu Logistics (PANDU)',
        // 'wahana'    => 'Wahana Prestasi Logistik (WAHANA)',
        // 'sicepat'   => 'SiCepat Express (SICEPAT)',
        // 'j&t'       => 'J&T Express (J&T)',
        // 'pahala'    => 'Pahala Kencana Express (PAHALA)',
        // 'cahaya'    => 'Cahaya Logistik (CAHAYA)',
        // 'sap'       => 'SAP Express (SAP)',
        // 'jet'       => 'JET Express (JET)',
        // 'indah'     => 'Indah Logistic (INDAH)',
        // 'slis'      => 'Solusi Express (SLIS)',
        // 'expedito*' => 'Expedito*',
        // 'dse'       => '21 Express (DSE)',
        // 'first'     => 'First Logistics (FIRST)',
        // 'ncs'       => 'Nusantara Card Semesta (NCS)',
        // 'star'      => 'Star Cargo (STAR)',
    ];


    public function getCouriersList(){
        return $this->couriersList;
    }

    public function __construct() {
        // Pastikan bahwa PHP mendukung cURL
        if (!function_exists('curl_init')) {
            log_message('error', 'cURL Class - PHP was not built with cURL enabled. Rebuild PHP with --with-curl to use cURL.');
        }
        $this->_ci = & get_instance();
        $this->_ci->load->config('rajaongkir', TRUE);
        // Pastikan Anda sudah memasukkan API Key di application/config/rajaongkir.php
        if ($this->_ci->config->item('rajaongkir_api_key', 'rajaongkir') == "") {
            log_message("error", "Harap masukkan API KEY Anda di config.");
        } else {
            $this->api_key = $this->_ci->config->item('rajaongkir_api_key', 'rajaongkir');
            $this->account_type = $this->_ci->config->item('rajaongkir_account_type', 'rajaongkir');
        }
        parent::__construct($this->api_key, $this->account_type);
    }
}
