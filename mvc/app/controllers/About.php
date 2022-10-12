<?php

class About {
    public function index($nama = 'Paiz', $pekerjaan = 'Mahasiswa')
    {
        echo "Halo, saya $nama, saya adalahs seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}