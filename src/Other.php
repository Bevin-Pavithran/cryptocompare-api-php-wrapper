<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/30/18
 * Time: 10:52 PM
 */


namespace Cryptocompare;

class Other extends CryptocompareApi {
    /**
     * @return mixed
     */
    public function getRateLimitEndpoint() {

        $limits = $this->getRequest("public", "/stats/rate/limit");
        return $limits;
    }


    /**
     * @param bool $sign
     * @return mixed
     */
    public function getAllExchangesV2Endpoint($sign = false ) {

        $params = array(
            "sign" => $sign,
        );
        $exchanges = $this->getRequest("public", "/data/v2/all/exchanges", $params);
        return $exchanges;
    }

    /**
     * @param bool $sign
     * @return mixed
     */
    public function getIncludedexchanges($sign = false ) {

        $params = array(
            "sign" => $sign,
        );
        $exchanges = $this->getRequest("public", "/data/all/includedexchanges", $params);
        return $exchanges;
    }

    /**
     * @param string $sign
     * @return mixed
     */
    public function getAllCoinsWithContentEndpoint($sign = "false") {
        $extraParams = $this->appplicationName;
        $params = array(
            "extraParams" => $extraParams,
            "sign" => $sign
        );
        $r = $this->getRequest("public", "/data/all/coinlist", $params);
        return $r;
    }

    /**
     * @param string $sign
     * @return mixed
     */
    public function getAllExchangesStaticInfoEndpoint($sign = "false") {
        $extraParams = $this->appplicationName;
        $params = array(
            "extraParams" => $extraParams,
            "sign" => $sign
        );
        $r = $this->getRequest("public", "/data/exchanges/general", $params);
        return $r;
    }

    /**
     * @param string $sign
     * @return mixed
     */
    public function getAllWalletsStaticInfoEndpoint($sign = "false") {
        $extraParams = $this->appplicationName;
        $params = array(
            "extraParams" => $extraParams,
            "sign" => $sign
        );
        $r = $this->getRequest("public", "/data/exchanges/general", $params);
        return $r;
    }

    /**
     * @param string $sign
     * @return mixed
     */
    public function getAllCardsStaticInfoEndpoint($sign = "false") {
        $extraParams = $this->appplicationName;
        $params = array(
            "extraParams" => $extraParams,
            "sign" => $sign
        );
        $r = $this->getRequest("public", "/data/cards/general", $params);
        return $r;
    }

    /**
     * @param string $sign
     * @return mixed
     */
    public function getAllMiningContractsStaticInfoEndpoint($sign = "false") {
        $extraParams = $this->appplicationName;
        $params = array(
            "extraParams" => $extraParams,
            "sign" => $sign
        );
        $r = $this->getRequest("public", "/data/mining/contracts/general", $params);
        return $r;
    }

    /**
     * @param string $sign
     * @return mixed
     */
    public function getAllMiningEquipmentStaticInfoEndpoint($sign = "false") {
        $extraParams = $this->appplicationName;
        $params = array(
            "extraParams" => $extraParams,
            "sign" => $sign
        );
        $r = $this->getRequest("public", "/data/mining/equipment/general", $params);
        return $r;
    }

    /**
     * @param string $sign
     * @return mixed
     */
    public function getAllMiningPoolsStaticInfoEndpoint($sign = "false") {
        $extraParams = $this->appplicationName;
        $params = array(
            "extraParams" => $extraParams,
            "sign" => $sign
        );
        $r = $this->getRequest("public", "/data/mining/pools/general", $params);
        return $r;
    }
}