<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Type that defines the metadata header fields.
 */
class MetadataHeader extends AbstractModel
{
    /**
     * The key value used for the report. <br><br>For example: <code>"key":
     * "LISTING_ID"</code>.
     *
     * @var string
     */
    public $key = null;

    /**
     * The list of dimension key values used for the report header. Each list element
     * contains the key name, its data type, and its localized name.  <br><br>For
     * example: <p><code>"metadataKeys": [<br>&nbsp;&nbsp;"key":
     * "LISTING_TITLE",<br>&nbsp;&nbsp;"localizedName": "Listing
     * title",<br>&nbsp;&nbsp;"dataType": "STRING"</code></p>.
     *
     * @var \Ebay\Sell\Analytics\Model\Definition[]
     */
    public $metadataKeys = null;
}
