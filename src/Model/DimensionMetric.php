<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex type defines a the customer service metrics and seller benchmark
 * performance related to  a given dimension.
 */
class DimensionMetric extends AbstractModel
{
    /**
     * This type defines the "dimension," or attributes, against which the associated
     * customer service metric values and benchmark ratings are based.  <br><br>The
     * <b>dimensionKey</b> value is set according to the
     * <b>customer_service_metric_type</b> request parameter and the values in the
     * associated <b>name</b>/<b>value</b> pairs relate to the <b>dimensionKey</b>
     * that's being used to calculate the benchmark rating.
     *
     * @var \Ebay\Sell\Analytics\Model\Dimension
     */
    public $dimension = null;

    /**
     * This is a list of <b>Metric</b> elements where each element contains data and
     * information related to the transactions grouped by the associated
     * <b>dimension</b>.
     *
     * @var \Ebay\Sell\Analytics\Model\Metric[]
     */
    public $metrics = null;
}
