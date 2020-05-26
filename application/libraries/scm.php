<?php

class Scm
{
    function tgl($tgl)
    {
        //ambil tahun, bulan, tanggal
        $tahun = substr($tgl, 0, 4);
        $bulani = substr($tgl, 5, 2);
        $tanggal = substr($tgl, 8, 2);
        //buat kondisi
        if ($bulani == '01') {
            $bulan = 'Jan';
        } else if ($bulani == '02') {
            $bulan = 'Feb';
        } else if ($bulani == '03') {
            $bulan = 'Mar';
        } else if ($bulani == '04') {
            $bulan = 'Apr';
        } else if ($bulani == '05') {
            $bulan = 'May';
        } else if ($bulani == '06') {
            $bulan = 'Jun';
        } else if ($bulani == '07') {
            $bulan = 'JUL';
        } else if ($bulani == '08') {
            $bulan = 'Aug';
        } else if ($bulani == '09') {
            $bulan = 'Sep';
        } else if ($bulani == '10') {
            $bulan = 'Oct';
        } else if ($bulani == '11') {
            $bulan = 'Nov';
        } else if ($bulani == '12') {
            $bulan = 'Dec';
        }

        return $tgl = $tanggal . '-' . $bulan . '-' . $tahun;
    }

    function tglDetil($tgl)
    {
        //ambil tahun, bulan, tanggal
        $tahun = substr($tgl, 0, 4);
        $bulani = substr($tgl, 5, 2);
        $tanggal = substr($tgl, 8, 2);
        $detil = substr($tgl, 11, 8);
        //buat kondisi
        if ($bulani == '01') {
            $bulan = 'Jan';
        } else if ($bulani == '02') {
            $bulan = 'Feb';
        } else if ($bulani == '03') {
            $bulan = 'Mar';
        } else if ($bulani == '04') {
            $bulan = 'Apr';
        } else if ($bulani == '05') {
            $bulan = 'May';
        } else if ($bulani == '06') {
            $bulan = 'Jun';
        } else if ($bulani == '07') {
            $bulan = 'JUL';
        } else if ($bulani == '08') {
            $bulan = 'Aug';
        } else if ($bulani == '09') {
            $bulan = 'Sep';
        } else if ($bulani == '10') {
            $bulan = 'Oct';
        } else if ($bulani == '11') {
            $bulan = 'Nov';
        } else if ($bulani == '12') {
            $bulan = 'Dec';
        }

        return $tgl = $tanggal . '-' . $bulan . '-' . $tahun . ' ' . $detil;
    }

    function ambilTime($time)
    {
        return $time = substr($time, 11, 8);
    }
}
