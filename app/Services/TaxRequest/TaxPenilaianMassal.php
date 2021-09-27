<?php 

namespace App\Services\TaxRequest;

class TaxPenilaianMassal extends TaxCommon{
    protected $PAN;
    protected $TAHUN;
    protected $KELURAHAN;
    protected $TIPE;
    protected $NOP;
    protected $SUSULAN;
    protected $NOPELAYANAN;

    public function __construct($param){
        $this->PAN  = 'TPM';
        $this->TAHUN = $param['tahun'];
        $this->KELURAHAN  = $param['kel'];
        $this->TIPE = $param['tipe'];
        $this->NOP  = $param['nop'];
        $this->SUSULAN = $param['susulan'];
        $this->NOPELAYANAN = $param['nopel'];
    }

    public function getParam(){
        return json_encode(get_object_vars($this));
    }
}
?>