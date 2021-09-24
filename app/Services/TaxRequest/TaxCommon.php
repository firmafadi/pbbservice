<?php

namespace App\Services\TaxRequest;

class TaxCommon{    
    
    public function getRemoteResponse(){
        $host = env('PBB_SVC_PENILAIAN_HOST');
        $port = env('PBB_SVC_PENILAIAN_PORT');
        $timeout = env('PBB_SVC_PENILAIAN_TIMEOUT');
    
        $sResp = '';
        $bTimeout = 0;
        $param = $this->getParam();
        $fp = fsockopen($host, $port, $errno, $errstr, $timeout);
        if (!$fp){
            return "errStr :".$errno;
        }else{
            $n = fwrite($fp, $param, strlen($param));
            $n = fwrite($fp, chr(-1));
            @stream_set_timeout($fp, $timeout);

            $c = '';
            $bDone = false;
            $bHead = false;
            $lenCount = 0;
            $i = 0;
            while ((!feof($fp)) && ($bTimeout==0) && (!$bDone)){
                $info = @stream_get_meta_data($fp);
                if ($info['timed_out']){
                    $bTimeout = 1;
                }
                if ($bTimeout==0){
                    $c = fread($fp, 1);
                    if($c != chr(-1))
                    {
                        $sResp .= $c;
                    }
                    else
                        $bDone = true;
                } // end of !$bTimeout
            }             
        }
        fclose($fp);
        return json_decode($sResp);
    }

}

?>