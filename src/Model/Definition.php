<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A complex type that defines a dimension key and metrics in a traffic report.
 */
class Definition extends AbstractModel
{
    /**
     * Indicates the data type of the returned dimension. For example, if the
     * <b>dimension</b> is <code>day</code>, the data type is <code>DATE</code>. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:DataTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $dataType = null;

    /**
     * The value the <b>dimension</b> or <b>metric</b> parameter as submitted in the
     * request.
     *
     * @var string
     */
    public $key = null;

    /**
     * The localized name of the metric or dimension (translated into the language
     * specified in the <b>Accept-Language</b> HTTP request header). For example, if
     * <b>Accept-Language</b> is set to <code>de-DE</code>, the value "day" in the
     * <b>dimension</b> container is returned as "tag", and a metric of TRANSACTION is
     * returned as "Transaktionsanzahl".
     *
     * @var string
     */
    public $localizedName = null;
}
