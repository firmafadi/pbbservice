<?php
    namespace App\Services;
    use App\Services\TaxRequest\TaxPenetapan;
    use App\Services\TaxRequest\TaxPenilaianMassal;
    use App\Services\TaxRequest\TaxPenilaianTanah;
    use App\Services\TaxRequest\TaxPenilaianBangunan;

    class PBBService{

        public function penetapan($param){
            return (new TaxPenetapan($param))->getRemoteResponse();
        }
        
        public function penilaianMassal($param){
            return (new TaxPenilaianMassal($param))->getRemoteResponse();
        }
        
        public function penilaianTanah($param){
            return (new TaxPenilaianTanah($param))->getRemoteResponse();
        }

        public function penilaianBangunan($param){
            return (new TaxPenilaianBangunan($param))->getRemoteResponse();
        }

    }
?>