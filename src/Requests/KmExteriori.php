<?php

namespace SeniorProgramming\Fancourier\Requests;

use SeniorProgramming\FanCourier\Core\Endpoint;

class KmExteriori extends Endpoint {
    
    /**
     * 
     * @return string
     */
    protected function getCallMethod()
    {
        return 'get_km_loc_manual.php';
    }
    
    /**
     * 
     * @return string
     */
    public function fetchResults() {
        return 'plain';
    }
    
    /**
     * 
     * @param string $result
     * @return int|string
     */
    public function parseResult($result) 
    {
        return $result;
    }
    
    /**
     * 
     * @param array $params
     * @return boolean
     */
    public function validate($params = array())
    {
        parent::requiredParams(array_keys($params), $this->methodRequirements());
        return true;
        
    }
    
    /**
     * 
     * @return array
     */
    private function methodRequirements() 
    {
        return [
            'localitate_id', 
            'request_type', 
        ];
    }
}

