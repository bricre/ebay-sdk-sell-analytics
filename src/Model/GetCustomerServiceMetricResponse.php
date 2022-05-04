<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex data type defines the response data that is returned from a request
 * to <b>getCustomerServiceMetric</b>.  <br><br>The <b>dimensionMetrics</b> object
 * contains the details of the dimension being measured and the calculated customer
 * service metric values. <br><br>The <b>evaluationCycle</b> defines the period
 * used to calculate the metric values.  <br><br>The <b>marketplaceId</b> is the
 * eBay marketplace for which the metrics are being considered.
 */
class GetCustomerServiceMetricResponse extends AbstractModel
{
    /**
     * This container provides a seller's customer service <b>metric</b> performance
     * for a given <b>dimension</b>.  <br><br>In the <b>getCustomerServiceMetric</b>
     * request, specify values for the following request parameters to control the
     * returned dimension and the associated metric values: <ul><li>
     * <b>customer_service_metric_type</b></li> <li><b>evaluation_type</b></li>
     * <li><b>evaluation_marketplace_id</b></li></ul>.
     *
     * @var \Ebay\Sell\Analytics\Model\DimensionMetric[]
     */
    public $dimensionMetrics = null;

    /**
     * This complex type defines the evaluation type (<code>CURRENT</code> or
     * <code>PROJECTED</code>) and the transaction lookback period used to calculate
     * the seller's customer service metric.
     *
     * @var \Ebay\Sell\Analytics\Model\EvaluationCycle
     */
    public $evaluationCycle = null;

    /**
     * The eBay marketplace ID of the marketplace upon which the customer service
     * metric evaluation is based.  <br><br>The <b>customer_service_metric</b> resource
     * supports a limited set of marketplaces. For a complete list of the supported
     * marketplaces, please see the <a
     * href="https://www.ebay.com/help/policies/selling-policies/seller-performance-policy/service-metrics-policy?id=4769#section2"
     * title"eBay Help pages">Service metrics policy</a> page. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/bas:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;
}
