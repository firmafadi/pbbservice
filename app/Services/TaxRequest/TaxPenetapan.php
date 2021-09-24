<?php 

namespace App\Services\TaxRequest;

class TaxPenetapan extends TaxCommon{
    protected $PAN;
    protected $TAHUN;
    protected $KELURAHAN;
    protected $TIPE;
    protected $NOP;
    protected $SUSULAN;
    protected $TANGGAL;
    protected $USER;

    public function __construct($param){
        $this->PAN  = 'TP';
        $this->TAHUN = $param['tahun'];
        $this->KELURAHAN  = $param['kel'];
        $this->TIPE = $param['tipe'];
        $this->NOP  = $param['nop'];
        $this->SUSULAN = $param['susulan'];
        $this->TANGGAL = $param['tanggal'];
        $this->USER = $param['uname'];
    }

    public function getParam(){
        return json_encode(get_object_vars($this));
    }

}
?>