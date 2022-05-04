<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A complex type that defines an error and error message.
 */
class ErrorParameter extends AbstractModel
{
    /**
     * Name of the entity that threw the error.
     *
     * @var string
     */
    public $name = null;

    /**
     * A description of the error.
     *
     * @var string
     */
    public $value = null;
}
