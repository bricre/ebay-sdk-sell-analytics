<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex data type defines the details of the customer service metric and
 * benchmark data related to the associated <b>dimension</b>.
 */
class Metric extends AbstractModel
{
    /**
     * This complex type defines a set of benchmark data, which includes the
     * <b>average</b> rating for the group included in the benchmark evaluation and the
     * seller's calculated customer service metric rating for the benchmark.
     * <br><br>This container is returned only if the associated <b>metricKey</b> value
     * is <code>RATE</code>.
     *
     * @var \Ebay\Sell\Analytics\Model\MetricBenchmark
     */
    public $benchmark = null;

    /**
     * Returned when <b>metricKey</b> equals <code>COUNT</code>, this field returns an
     * array of  seller data where each set of data is grouped according by an
     * overarching <b>basis</b>.  <br><br>When the seller distribution is returned, the
     * numeric value of the associated <b>value</b> container equals the sum of the
     * transactions where the seller meets the criteria of the customer service metric
     * type for the given <b>dimension</b> during the <b>evaluationCycle</b>.
     *
     * @var \Ebay\Sell\Analytics\Model\MetricDistribution[]
     */
    public $distributions = null;

    /**
     * This field indicates the customer service metric being returned in the
     * associated <b>metrics</b> container. The field is set as follows:
     * <ul><li><code>TRANSACTION_COUNT</code> &ndash; When set to this value, the
     * associated <b>value</b> field returns the number of transactions completed in
     * the peer group for the metric being evaluated in the associated <b>dimension</b>
     * and <b>evaluationCycle</b>.</li> <li><code>COUNT</code> &ndash; When set to this
     * value, the associated <b>value</b> field is set to the number of transactions
     * completed by the seller for the metric being evaluated in the associated
     * <b>dimension</b> and <b>evaluationCycle</b>.</li> <li><code>RATE</code> &ndash;
     * When set to this value, the fields in the associated container return the
     * seller's calculated <b>value</b> for the associated customer service metric
     * along with the benchmark data against which the seller is evaluated.
     * <br><br>Specifically, when <b>metricKey</b> is set to <code>RATE</code>, the
     * associated <b>value</b> field is set to the value of <b>metricKey</b>
     * <code>TRANSACTION_COUNT</code> divided by the value of <b>metricKey</b>
     * <code>COUNT</code>.  <br><br>The <b>benchmark.rating</b> value is the seller's
     * rating for the metric in the associated <b>dimension</b> and
     * <b>evaluationCycle</b>.</li></ul>.
     *
     * @var string
     */
    public $metricKey = null;

    /**
     * This field is set to the seller's numeric rating for the associated
     * <b>metricKey</b> for the given <b>dimension</b> during the
     * <b>evaluationCycle</b>.  <br><br>To determine the seller's rating for this
     * metric, the value of this field is compared to the average metric value of the
     * group.
     *
     * @var string
     */
    public $value = null;
}
