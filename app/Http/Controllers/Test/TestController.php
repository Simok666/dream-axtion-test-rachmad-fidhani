<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TestController extends Controller
{
    /**
     * 
     * Test Soal 1
     */
    public function firstTest() 
    {
        $data = ['a','a','a','b','b','c','c','c','d','d','e','d','d','b','z','a','a'];
        $outputA = [];
        $outputB = [];
        $outputC = [];
        $outputD = [];
    
        foreach ($data as $key => $value) {
            if( $value == 'a' ) {
                array_push($outputA, $value);
            } else if($value == 'b') {
                array_push($outputB, $value);
            } else if($value == 'c') {
                array_push($outputC, $value);
            } else if($value == 'd') {
                array_push($outputD, $value);
            } 
            
        }

        $result = 'a'.count($outputA).'b'.count($outputB).'c'.count($outputC).'d'.count($outputD).'ez';
        
        return $result;
    }

    /**
     * 
     * Test Soal 2
     */
    public function secondTest()
    {
        $data = [9,3,7,8,2,6,1,4,10,2,2,3];

    }

    /**
     * 
     * Test Soal 3 
     */
    public function thridTest()
    {
        $typeA = 99900;
        $typeB = 49900;
        $totalBuyA = 55;
        $totalBuyB = 110;

        if ($totalBuyA > 50) {
            $discount = 5 / 100 * 99900;
            $discountPerBarang = $typeA - $discount;           
        } elseif (Carbon::now()->format('D') == 'Mon' || Carbon::now()->format('D') == 'Tue') {
            $discount = 10 / 100 * 99900;
            $discountPerBarang = $typeA - $discount;     
        } elseif ($totalBuyA > 50 && Carbon::now()->format('D') == 'Mon' || Carbon::now()->format('D') == 'Tue') {
            $discount = 15 / 100 * 99900;
            $discountPerBarang = $typeA - $discount; 
        }

        if($totalBuyB > 100) {
            $discount = 10 / 100 * 49900;
            $discountPerBarangB = $typeB - $discount; 
        } else if(Carbon::now()->format('D') == 'Fri') {
            $discount = 5 / 100 * 49900;
            $discountPerBarangB = $typeB - $discount; 
        } else if ($totalBuyB > 100 && Carbon::now()->format('D') == 'Fri'){
            $discount = 5 / 100 * 49900;
            $discountPerBarangB = $typeB - $discount; 
        }

        $result = 'BarangA = '. $discountPerBarang . ' Barang B = '.$discountPerBarangB;
        
        return $result;
    }
}
