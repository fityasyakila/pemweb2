<?php

function luas_lingkaran($jariJari)
{
    define('PHI', 3.14);
    echo PHI * $jariJari * $jariJari;
}

function luas_persegi($sisi)
{
    echo $sisi * $sisi;
}

function luasSegitiga($alas, $tinggi)
{
    echo 1/2 * $alas * $tinggi;
}