<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ViewMPListResponseBody StructType
 * @subpackage Structs
 */
class ViewMPListResponseBody extends ResponseBody
{
    /**
     * The list_items
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfMPListItem
     */
    public $list_items;
    /**
     * Constructor method for ViewMPListResponseBody
     * @uses ViewMPListResponseBody::setList_items()
     * @param \ArrayType\ArrayOfMPListItem $list_items
     */
    public function __construct(\ArrayType\ArrayOfMPListItem $list_items = null)
    {
        $this
            ->setList_items($list_items);
    }
    /**
     * Get list_items value
     * @return \ArrayType\ArrayOfMPListItem|null
     */
    public function getList_items()
    {
        return $this->list_items;
    }
    /**
     * Set list_items value
     * @param \ArrayType\ArrayOfMPListItem $list_items
     * @return \StructType\ViewMPListResponseBody
     */
    public function setList_items(\ArrayType\ArrayOfMPListItem $list_items = null)
    {
        $this->list_items = $list_items;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ViewMPListResponseBody
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
