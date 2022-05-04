<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A complex type that describes a program cycle.
 */
class Cycle extends AbstractModel
{
    /**
     * The cycle type, either <code>CURRENT</code> or <code>PROJECTED</code>.
     * <br><br><code>CURRENT</code> means the profile's metrics values are from the
     * most recent official eBay  monthly standards evaluation. <code>PROJECTED</code>
     * means the profile values were determined when the profile was requested. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:CycleTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $cycleType = null;

    /**
     * The date and time at which the standard compliance values were determined for
     * the profile.  <br><br>The time stamp is formatted as an <a
     * href="https://www.iso.org/iso-8601-date-and-time-format.html"
     * target="_blank">ISO 8601</a> string, which is based on the 24-hour Universal
     * Coordinated Time (UTC) clock. <br><br><b>Format:</b>
     * <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b>
     * <code>2018-08-04T07:09:00.000Z</code>.
     *
     * @var string
     */
    public $evaluationDate = null;

    /**
     * The month in which the currently effective seller level was computed.
     * <br><br>The value is always formatted as <code>YYYY-MM</code>. If the cycle is
     * <code>CURRENT</code>, this value is the month and year the of the last eBay
     * compliance evaluation. If this is for a <code>PROJECTED</code> cycle, the value
     * is the month and year of the next scheduled evaluation. Because eBay does
     * official evaluations around the 20th of each month, a <code>PROJECTED</code>
     * value may indicate either the current or the next month.
     *
     * @var string
     */
    public $evaluationMonth = null;
}
