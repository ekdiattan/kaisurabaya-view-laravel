<?php

namespace App\Helpers;

use Exception;


class GeneratorHelper
{
    public function generateDocument($Id)
    {
        try{
            $year = date('Y');
            $total = "KE.".$Id."/"."VII"."/"."KA-".$year;
            dd($total);
        }catch (Exception $e){
            throw new \Exception($e->getMessage());
        }
        return $total;
    }
}