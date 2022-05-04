<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Type that defines the fields of the individual record of the report.
 */
class Record extends AbstractModel
{
    /**
     * A list where each element contains either the string <code>DAY</code> (if the
     * <b>dimension</b> is <code>DAY</code>), or the listing ID for which the record's
     * metric data is computed. A second array member, <b>applicable</b>, is always
     * <code>true</code> for dimension values.
     *
     * @var \Ebay\Sell\Analytics\Model\Value[]
     */
    public $dimensionValues = null;

    /**
     * A list where each element contains a <b>value</b> field that indicates the
     * record's value for the metric. Each element also contains an <b>applicable</b>
     * field that indicates the veracity of the computed <b>value</b>.   <br><br>Note
     * that there are no metric names or IDs associated with the values returned in
     * this array. The metadata to which these values relate can be found in the
     * <b>key</b> values <metadataKeys</b>. The order of the metric values in this
     * array equals the order of the key values in <b>metadataHeader</b>.
     *
     * @var \Ebay\Sell\Analytics\Model\Value[]
     */
    public $metricValues = null;
}
