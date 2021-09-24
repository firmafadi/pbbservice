<?php 

namespace App\Services\TaxRequest;

class TaxPenilaianTanah extends TaxCommon{
    
    protected $PAN;
    protected $ZNT;
    protected $TIPE;
    protected $NOP;
    protected $TAHUN;

    public function __construct($param){
        $this->PAN  = 'TPT';
        $this->ZNT  = $param['znt'];
        $this->TIPE = $param['tipe'];
        $this->NOP  = $param['nop'];
        $this->TAHUN = $param['tahun'];
    }

    public function getParam(){
        return json_encode(get_object_vars($this));
    }
}
?>