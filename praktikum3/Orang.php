<?php

class Orang{
    protected $nama;

    //construcor
    public function _construct ($nama)
    {
        $this->nama = $nama;
    }

    //method
    public function ucapSalam(){
        echo "Halo nama saya "  $this->nama;
    }
}