<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex type defines of a piece of data that is grouped by the associated
 * <b>basis</b>. It contains the <b>name</b> for the data set and its associated
 * <b>value</b>.
 */
class Distribution extends AbstractModel
{
    /**
     * The name of a distribution in which the seller is active.
     *
     * @var string
     */
    public $name = null;

    /**
     * This field contains the number of transactions the seller had in the
     * distribution (identified by the associated <b>name</b> field) during the metric
     * <b>evaluationCycle</b>.
     *
     * @var string
     */
    public $value = null;
}
