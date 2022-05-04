<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The fields in this complex type define the dimension, or attributes, by which
 * the associated customer service metric and benchmark data is measured.
 * <br><br>The value of <b>dimensionKey</b> gets set according to the configuration
 * of the input request. The <b>name</b> and <b>value</b> pair further define
 * dimension under the key.
 */
class Dimension extends AbstractModel
{
    /**
     * <b>dimensionKey</b> defines the basis against which the seller's customer
     * service metric is measured.  <br><br>The value of this field gets set according
     * to the value of the <b>customer_service_metric_type</b> input parameter. The
     * following input configurations return the responses shown:
     * <ul><li><code>ITEM_NOT_AS_DESCRIBED</code> &ndash; Returns benchmark ratings
     * based on L1 listing categories, so the result shows metrics where the
     * <b>dimensionKey</b> is set to <code>LISTING_CATEGORY</code>.</li>
     * <li><code>ITEM_NOT_RECEIVED</code> &ndash; Returns benchmark ratings based on
     * world shipping regions, so the result shows metrics where the
     * <b>dimensionKey</b> is set to <code>SHIPPING_REGION</code>.  <br><br>The
     * shipping region is indicated by the associated <b>value</b> field. For specifics
     * on world shipping regions, see the FAQ section on the following page: <a
     * href="https://www.ebay.com/help/selling/selling/monitor-service-metrics?id=4785"
     * title="eBay Help page" target="_blank">Monitor your service
     * metrics</a></li></ul> For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/api:DimensionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $dimensionKey = null;

    /**
     * The dimension name returned in this field depends on the <b>dimensionKey</b>:
     * <ul><li>If  <b>dimensionKey</b> is set to <code>SHIPPING_REGION</code>, this
     * field is set to one of following values, which represent established shipping
     * corridors: <ul><li><code>Domestic</code></li> <li><code>International: Mature
     * region</code></li> <li><code>International: Emerging
     * region</code></li></ul></li>  <li>If  <b>dimensionKey</b> is set to
     * <code>LISTING_CATEGORY</code>, this field is set to the name of the primary (L1)
     * category in which the items being rated were listed.</li></ul>.
     *
     * @var string
     */
    public $name = null;

    /**
     * The value returned in this field depends on the <b>dimensionKey</b>.  <br><br>If
     * <b>dimensionKey</b> equals <code>LISTING_CATEGORY</code>, the value returned in
     * this field is the category ID of the primary (L1) category in which the items
     * being rated were listed.  <br><br>If <b>dimensionKey</b> equals
     * <code>SHIPPING_REGION</code>, one of the following values is returned:
     * <ul><li><code>DOMESTIC</code></li>
     * <li><code>INTERNATIONAL_MATURED_REGION</code></li>
     * <li><code>INTERNATIONAL_EMERGING_REGION</code></li></ul>.
     *
     * @var string
     */
    public $value = null;
}
