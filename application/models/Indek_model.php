<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Indek_model extends CI_Model {

        public function get_data()
        {
            $cars = array(
                array('volvo',22,18),
                array('BMW',15,13),
                array('Saab',2,2),
                array('penting yakin :V',17,15)
            );

            return $cars;
        }
    }
