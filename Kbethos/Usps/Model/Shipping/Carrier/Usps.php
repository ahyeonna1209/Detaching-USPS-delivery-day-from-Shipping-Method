<?php
class Kbethos_Usps_Model_Usa_Shipping_Carrier_Usps extends Mage_Usa_Model_Shipping_Carrier_Usps {
    function _filterServiceName($name) {
        $name = parent::_filterServiceName($name);


        if( !Mage::getStoreConfig('carriers/usps/show_number_of_days') )
            $name = preg_replace('/\s+?\d+-day/i', '', $name); // Trim out the number of days, and an optional leading space.

        return $name;
    }
}
