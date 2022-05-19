<?php

namespace SeniorProgramming\Fancourier\Requests;

use SeniorProgramming\FanCourier\Core\Endpoint;

class LocalitatiSedii extends Endpoint {
    
    /**
     * 
     * @return string
     */
    protected function getCallMethod()
    {
        return 'get_localitati.php';
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
            'id', 
            'tip', 
            'request_type', 
        ];
    }
}

