<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Type that defines the headers for the dimension keys and metrics returned in the
 * report.
 */
class Header extends AbstractModel
{
    /**
     * A list of the dimension or metric keys returned in the report. The values for
     * each are is returned in the associated <b>key</b> fields.
     *
     * @var \Ebay\Sell\Analytics\Model\Definition[]
     */
    public $dimensionKeys = null;

    /**
     * The list of metrics returned in the report. The values for each are is returned
     * in the associated <b>key</b> fields.
     *
     * @var \Ebay\Sell\Analytics\Model\Definition[]
     */
    public $metrics = null;
}
