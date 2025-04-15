<?php

class About
{

    public function index($nama = "bahtiar", $pekerjaan = "programmer")
    {
        echo "Halo nama saya $nama, saya seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}