<?php

namespace Ebay\Sell\Analytics\Api;

use Ebay\Sell\Analytics\Model\GetCustomerServiceMetricResponse;

class Metric extends AbstractAPI
{
    /**
     * Use this method to retrieve a seller's performance and rating for the customer
     * service metric.  <br><br>Control the response from the
     * <b>getCustomerServiceMetric</b> method using the following path and query
     * parameters: <ul><li><b>customer_service_metric_type</b> controls the type of
     * customer service transactions evaluated for the metric rating.</li>
     * <li><b>evaluation_type</b> controls the period you want to review.</li>
     * <li><b>evaluation_marketplace_id</b> specifies the target marketplace for the
     * evaluation.</li></ul> Currently, metric data is returned for only peer
     * benchmarking. For details on the workings of peer benchmarking, see <a
     * href="https://www.ebay.com/help/policies/selling-policies/seller-performance-policy/service-metrics-policy?id=4769"
     * title="eBay Help pages" target="_blank">Service metrics policy</a>.  <br><br>For
     * details on using and understanding the response from this method, see <a
     * href="/api-docs/sell/static/performance/customer-service-metric.html"
     * title="Selling Integration Guide">Interpreting customer service metric
     * ratings</a>.
     *
     * @param string $customer_service_metric_type Use this path parameter to specify
     *                                             the type of customer service metrics and benchmark data you want returned for
     *                                             the seller. Supported types are:
     *                                             <ul><li><code>ITEM_NOT_AS_DESCRIBED</code></li><li><code>ITEM_NOT_RECEIVED</code></li></ul>
     * @param string $evaluation_type              Use this path parameter to specify the type of
     *                                             the seller evaluation you want returned, either: <ul><li><code>CURRENT</code>
     *                                             &ndash; A monthly evaluation that occurs on the 20th of every month.</li>
     *                                             <li><code>PROJECTED</code> &ndash; A daily evaluation that provides a projection
     *                                             of how the seller is currently performing with regards to the upcoming
     *                                             evaluation period.</li></ul>
     * @param array  $queries                      options:
     *                                             'evaluation_marketplace_id'	string	Use this query parameter to specify the
     *                                             Marketplace ID to evaluate for the customer service metrics and benchmark data.
     *                                             <br><br>For the list of supported marketplaces, see <a
     *                                             href="/api-docs/sell/analytics/static/overview.html#requirements"
     *                                             title="Analytics API Overview" target="_blank">Analytics API requirements and
     *                                             restrictions</a>. For implementation help, refer to eBay API documentation at
     *                                             https://developer.ebay.com/api-docs/sell/analytics/types/bas:MarketplaceIdEnum
     *
     * @return GetCustomerServiceMetricResponse
     */
    public function get(string $customer_service_metric_type, string $evaluation_type, array $queries = []): GetCustomerServiceMetricResponse
    {
        return $this->request(
        'getCustomerServiceMetric',
        'GET',
        "customer_service_metric/$customer_service_metric_type/$evaluation_type",
        null,
        $queries,
        []
        );
    }
}
