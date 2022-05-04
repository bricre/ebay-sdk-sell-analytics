<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Type the defines the metadata information of the report. This includes the
 * headers and the individual metadata records.
 */
class Metadata extends AbstractModel
{
    /**
     * The container that returns the <b>dimensionKeys</b> and <b>metrics</b> headers
     * for the report.
     *
     * @var \Ebay\Sell\Analytics\Model\MetadataHeader
     */
    public $metadataHeader = null;

    /**
     * A list of the individual report records.
     *
     * @var \Ebay\Sell\Analytics\Model\MetadataRecord[]
     */
    public $metadataRecords = null;
}
