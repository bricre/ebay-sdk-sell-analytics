<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A complex type that contains a value, plus the veracity of that value.
 */
class Value extends AbstractModel
{
    /**
     * If set to <code>true</code>, this flag indicates the value in the <b>value</b>
     * field is valid as computed.  <br><br>A value of <code>false</code> indicates one
     * or more of the values used to calculate the value was invalid. The occurrence of
     * this is a rare, however consider this case: suppose a buyer navigates to a View
     * Item page at 11:59 pm (the end of the day) and purchases the item at 12:05am the
     * next day. In this case, the item would have been purchased with <code>0</code>
     * views for the day.
     *
     * @var bool
     */
    public $applicable = null;

    /**
     * The value of the report data.
     *
     * @var object
     */
    public $value = null;
}
