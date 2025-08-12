<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Autoload dari dompdf (versi composer)
require_once APPPATH . 'third_party/dompdf/vendor/autoload.php';

use Dompdf\Dompdf;

class Dompdf_gen extends Dompdf {
    public function __construct() {
        parent::__construct();
    }
}