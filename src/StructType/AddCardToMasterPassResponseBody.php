<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddCardToMasterPassResponseBody StructType
 * @subpackage Structs
 */
class AddCardToMasterPassResponseBody extends ResponseBody
{
    /**
     * The masterpass_card
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MasterPassResponseCustomField
     */
    public $masterpass_card;
    /**
     * Constructor method for AddCardToMasterPassResponseBody
     * @uses AddCardToMasterPassResponseBody::setMasterpass_card()
     * @param \StructType\MasterPassResponseCustomField $masterpass_card
     */
    public function __construct(\StructType\MasterPassResponseCustomField $masterpass_card = null)
    {
        $this
            ->setMasterpass_card($masterpass_card);
    }
    /**
     * Get masterpass_card value
     * @return \StructType\MasterPassResponseCustomField|null
     */
    public function getMasterpass_card()
    {
        return $this->masterpass_card;
    }
    /**
     * Set masterpass_card value
     * @param \StructType\MasterPassResponseCustomField $masterpass_card
     * @return \StructType\AddCardToMasterPassResponseBody
     */
    public function setMasterpass_card(\StructType\MasterPassResponseCustomField $masterpass_card = null)
    {
        $this->masterpass_card = $masterpass_card;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AddCardToMasterPassResponseBody
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
