<?php 

namespace App\Services\TaxRequest;

class TaxPenilaianBangunan extends TaxCommon{
    
    protected $PAN;
    protected $NOP;
    protected $TAHUN;

    public function __construct($param){
        $this->PAN  = 'TPB';
        $this->NOP  = $param['nop'];
        $this->TAHUN = $param['tahun'];
    }

    public function getParam(){
        return json_encode(get_object_vars($this));
    }
}
?>