<?php 

use chriskacerguis\RestServer\RestController;
class Label extends RestController{


    protected $table;

    function __construct() {

        parent::__construct();
    }



    public function index_get() {

        $query = $this->db->get('user');
        $data = array();

        foreach ( $query->result_array() AS $isi ) {

            if ( $isi['name'] != "admin" ) {

                array_push( $data, $isi['name'] );

            }
        }

        echo json_encode( ['output' => $data] );
        
    }

}