<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A complex type that defines a seller profile.
 */
class StandardsProfile extends AbstractModel
{
    /**
     * A complex type that specifies the profile's evaluation cycle
     * (<code>CURRENT</code> or <code>PROJECTED</code>), the date the evaluation was
     * calculated, and  the month to which the evaluation pertains.  <br><br>Each
     * program has at least one cycle, but a program can include both cycle types.
     *
     * @var \Ebay\Sell\Analytics\Model\Cycle
     */
    public $cycle = null;

    /**
     * If set to <code>true</code>, this flag indicates this is the default program for
     * the seller.  <br><br>Except for sellers in China, a seller's default program is
     * the marketplace where they registered with eBay. Seller's in China select their
     * default program when they register.
     *
     * @var bool
     */
    public $defaultProgram = null;

    /**
     * Specifies how the overall seller level was calculated.  <br><br>In the event of
     * special circumstances (as determined by eBay), eBay may override the calculated
     * seller level. In general, such overrides protect a seller's level. The usual
     * value for both cycle types is "Seller level generated by standards monthly
     * evaluation cycle.".
     *
     * @var string
     */
    public $evaluationReason = null;

    /**
     * A list of the metrics upon which a seller's profile is evaluated.  <br><br>Each
     * program's applicable metrics and requirements are listed at <a
     * href="http://www.sps.ebay.com/sd/sdrequirements" target="_blank">eBay Top Rated
     * seller program standards</a>.
     *
     * @var \Ebay\Sell\Analytics\Model\Metric[]
     */
    public $metrics = null;

    /**
     * Indicates the program used to generate the profile data. Values can be
     * <code>PROGRAM_DE</code>, <code>PROGRAM_UK</code>, <code>PROGRAM_US</code>, or
     * <code>PROGRAM_GLOBAL</code>. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:ProgramEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $program = null;

    /**
     * The overall standards level of the seller, one of <code>TOP_RATED</code>,
     * <code>ABOVE_STANDARD</code>, or <code>BELOW_STANDARD</code>. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:StandardsLevelEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $standardsLevel = null;
}