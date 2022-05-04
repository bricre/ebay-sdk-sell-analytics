<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex type defines the fields that comprise the benchmark against which
 * the seller's performance is compared. The comparison determines the seller's
 * rating for the metric.
 */
class BenchmarkMetadata extends AbstractModel
{
    /**
     * This field returns the average value for the group, as defined by the specified
     * <b>basis</b>.  <br><br>When the benchmark <b>basis</b> is set to
     * <code>PEER_BENCHMARK</CODE>, the value returned in this field is the benchmark
     * value to which the seller's metric <b>value</b> is compared to determine the
     * seller's rating for the customer service metric.
     *
     * @var string
     */
    public $average = null;
}
