<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A complex type that defines the data records returned in the report.
 */
class MetadataRecord extends AbstractModel
{
    /**
     * A list of data in a row returned in the traffic report. The data in each of the
     * cells match the labels in headers of the report.
     *
     * @var \Ebay\Sell\Analytics\Model\Value[]
     */
    public $metadataValues = null;

    /**
     * The value of the key on which the report is based. <br><br>For example, if the
     * key is the listing ID, the value of this container could be:
     * <br><br><code>"value": {<br>&nbsp;&nbsp;"value":
     * "142133954229",<br>&nbsp;&nbsp;"applicable": true<br>}</code>.
     *
     * @var \Ebay\Sell\Analytics\Model\Value
     */
    public $value = null;
}
