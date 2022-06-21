<?php

namespace Ebay\Sell\Analytics\Api;

use Ebay\Sell\Analytics\Model\FindSellerStandardsProfilesResponse;
use Ebay\Sell\Analytics\Model\StandardsProfile;
use OpenAPI\Runtime\UnexpectedResponse;

class Profile extends AbstractAPI
{
    /**
     * This call retrieves all the standards profiles for the associated seller.
     * <br><br>A <i>standards profile </i> is a set of eBay seller metrics and the
     * seller's associated compliance values (either <code>TOP_RATED</code>,
     * <code>ABOVE_STANDARD</code>, or <code>BELOW_STANDARD</code>).  <br><br>A
     * seller's multiple profiles are distinguished by two criteria, a "program" and a
     * "cycle." A profile's <i>program </i> is one of three regions where the seller
     * may have done business, or <code>PROGRAM_GLOBAL</code> to indicate all
     * marketplaces where the seller has done business. The <i>cycle</i> value
     * specifies whether the standards compliance values were determined at the last
     * official eBay evaluation or at the time of the request.
     *
     * @return FindSellerStandardsProfilesResponse|UnexpectedResponse
     */
    public function finds()
    {
        return $this->request(
        'findSellerStandardsProfiles',
        'GET',
        'seller_standards_profile',
        null,
        [],
        []
        );
    }

    /**
     * This call retrieves a single standards profile for the associated seller.
     * <br><br>A <i>standards profile </i> is a set of eBay seller metrics and the
     * seller's associated compliance values (either <code>TOP_RATED</code>,
     * <code>ABOVE_STANDARD</code>, or <code>BELOW_STANDARD</code>).  <br><br>A seller
     * can have multiple profiles distinguished by two criteria, a "program" and a
     * "cycle." A profile's <i>program </i> is one of three regions where the seller
     * may have done business, or <code>PROGRAM_GLOBAL</code> to indicate all
     * marketplaces where the seller has done business. The <i>cycle</i> value
     * specifies whether the standards compliance values were determined at the last
     * official eBay evaluation (<code>CURRENT</code>) or at the time of the request
     * (<code>PROJECTED</code>). Both cycle and a program values are required URI
     * parameters for this method.
     *
     * @param string $cycle   The period covered by the returned standards profile
     *                        evaluation.  <br><br>Supply one of two values, <code>CURRENT</code> means the
     *                        response reflects eBay's most recent monthly standards evaluation and
     *                        <code>PROJECTED</code> means the response reflect the seller's projected monthly
     *                        evaluation, as calculated at the time of the request.
     * @param string $program This input value specifies the region used to determine
     *                        the seller's standards profile.  <br><br>Supply one of the four following
     *                        values, <code>PROGRAM_DE</code>, <code>PROGRAM_UK</code>,
     *                        <code>PROGRAM_US</code>, or <code>PROGRAM_GLOBAL</code>.
     *
     * @return StandardsProfile|UnexpectedResponse
     */
    public function get(string $cycle, string $program)
    {
        return $this->request(
        'getSellerStandardsProfile',
        'GET',
        "seller_standards_profile/$program/$cycle",
        null,
        [],
        []
        );
    }
}
