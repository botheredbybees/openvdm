<?php
/*
 * api/shipToShoreTransfers - RESTful api interface to ship-to-shore
 * transfers.
 *
 * @license   https://opensource.org/licenses/MIT
 * @author Webb Pinner - webbpinner@gmail.com
 * @version 2.6
 * @date 2021-02-13
 */

namespace Controllers\Api;
use Core\Controller;

class ShipToShoreTransfers extends Controller {

    private $_model;

    public function __construct(){
        $this->_model = new \Models\Config\ShipToShoreTransfers();
    }

    public function getShipToShoreTransfers(){

        echo json_encode($this->_model->getShipToShoreTransfers());
    }
    
    public function getRequiredShipToShoreTransfers(){

        echo json_encode($this->_model->getRequiredShipToShoreTransfers());
    }
}