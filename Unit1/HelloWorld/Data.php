<?php
/**
 * Created by PhpStorm.
 * User: adrian
 * Date: 2/2/18
 * Time: 4:47 PM
 */

namespace Unit1\HelloWorld;


use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

    const XML_PATH_HELLOWORLD = 'helloworld/';

    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    public function getGeneralConfig($code, $storeId = null)
    {

        return $this->getConfigValue(self::XML_PATH_HELLOWORLD .'general/'. $code, $storeId);
    }


}