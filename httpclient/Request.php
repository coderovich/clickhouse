<?php
namespace coderovich\clickhouse\httpclient;

/**
 * Class Request
 * @package coderovich\clickhouse\httpclient
 * tmp FIX
 */
class Request extends \yii\httpclient\Request
{

    public function prepare()
    {
        parent::prepare();
        $this->afterPrepareUrl();

    }

    /**
     * Normalizes [[url]] value, filling it with actual string URL value.
     */
    private function afterPrepareUrl()
    {
        $url = $this->getUrl();
        if (strpos($url,'?') !== false) {
            $url = trim($url,'/');
            $this->setUrl($url);
        }
    }

}
