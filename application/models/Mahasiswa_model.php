<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Mahasiswa_model extends CI_Model {

        public function get_data()
        {
            $list_1 = 
            [
                ['nama_depan' => 'Abdillah', 'nama_belakang' => 'faqih'],
                ['nama_depan' => 'Ahmad', 'nama_belakang' => 'Syarif'],
                ['nama_depan' => 'Ummi', 'nama_belakang' => 'Qulsum'],
                ['nama_depan' => 'Abduh', 'nama_belakang' => 'Somat'],
                ['nama_depan' => 'Soleh', 'nama_belakang' => 'Mukarom'],
                ['nama_depan' => 'Siti', 'nama_belakang' => 'Qomariah'],
            ];

            $all = array(
                array(1,'17124000987', $list_1[0]['nama_depan'] . ' ' . $list_1[0]['nama_belakang'],'Laki-laki', '2017'),
                array(2,'17124000988', $list_1[1]['nama_depan'] . ' ' . $list_1[1]['nama_belakang'],'Laki-laki', '2017'),
                array(3,'17124000989', $list_1[2]['nama_depan'] . ' ' . $list_1[2]['nama_belakang'],'Perempuan', '2017'),
                array(4,'18124000987', $list_1[3]['nama_depan'] . ' ' . $list_1[3]['nama_belakang'],'Laki-laki', '2018'),
                array(5,'18124000988', $list_1[4]['nama_depan'] . ' ' . $list_1[4]['nama_belakang'],'Laki-laki', '2018'),
                array(6,'18124000989', $list_1[5]['nama_depan'] . ' ' . $list_1[5]['nama_belakang'],'Perempuan', '2018'),
            );

            return $all;
        }
    }
