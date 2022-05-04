<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The response container for a list of seller profiles.
 */
class FindSellerStandardsProfilesResponse extends AbstractModel
{
    /**
     * A list of the seller's standards profiles.  <br><br>A "standards profile" is a
     * set of eBay seller standards categories and the values related to the associated
     * seller.  <br><br>Profiles are distinguished by a combination of cycle and
     * program values. The "program" value specifies the region to which the data is
     * from. The "cycle" value specifies whether the values were determined just now,
     * or if the values are from the last official eBay seller standards evaluation.
     *
     * @var \Ebay\Sell\Analytics\Model\StandardsProfile[]
     */
    public $standardsProfiles = null;
}
