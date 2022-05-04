<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex type describes the start and end dates of the of the time period
 * over which the associated benchmark is computed.  <br><br>All timestamps are
 * based on Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an
 * <a href="https://www.iso.org/iso-8601-date-and-time-format.html"
 * title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based
 * on the 24-hour Coordinated Universal Time (UTC) clock.
 */
class EvaluationCycle extends AbstractModel
{
    /**
     * End date and time of the transaction lookback range. All timestamps are based on
     * Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an <a
     * href="https://www.iso.org/iso-8601-date-and-time-format.html"
     * title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based
     * on the 24-hour Coordinated Universal Time (UTC) clock.
     *
     * @var string
     */
    public $endDate = null;

    /**
     * The ISO-8601 date and time at which the seller was evaluated for this customer
     * service metric rating.
     *
     * @var string
     */
    public $evaluationDate = null;

    /**
     * This field specifies the transaction <i>lookback period</i> used for the
     * evaluation. <br><br>The <b>evaluation_type</b> value specified in the request is
     * returned in this field. There are two possible values:
     * <ul><li><code>CURRENT</code> &ndash; A monthly evaluation that occurs on the
     * 20th of every month.</li> <li><code>PROJECTED</code> &ndash; A daily evaluation
     * that provides a projection of how the seller is currently performing with
     * regards to the upcoming evaluation period.</li></ul> For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/api:EvaluationTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $evaluationType = null;

    /**
     * The start date and time of the transaction lookback range. All timestamps are
     * based on Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an
     * <a href="https://www.iso.org/iso-8601-date-and-time-format.html"
     * title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based
     * on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b>
     * <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b>
     * <code>2018-08-04T07:09:00.000Z</code>.
     *
     * @var string
     */
    public $startDate = null;
}
