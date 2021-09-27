<?php 

namespace App\Services\TaxRequest;

class TaxHitungDenda extends TaxCommon{
    protected $PAN;
    protected $TANGGAL;

    public function __construct($param){
        $this->PAN  = 'THD';
        $this->TANGGAL = $param['tanggal'];
    }

    public function getParam(){
        return json_encode(get_object_vars($this));
    }

}
?>