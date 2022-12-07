<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model(array(
            // 'product_model' => 'product',
            // 'review_model' => 'review'
        ));
    }

    public function index()
    {
        $params['title'] = 'Halaman Utama | Humas PN Langsa';

        // $products['products'] = $this->product->get_all_products();
        // $products['best_deal'] = $this->product->best_deal_product();
        // $products['reviews'] = $this->review->get_all_reviews();

        // get_header($params);
        // get_template_part('home', $products);
        // get_footer();

		$this->load->view('index', $params);
		// $this->load->view('header');
    }

}
