<?php

namespace Ebay\Sell\Analytics\Api;

use Ebay\Sell\Analytics\Model\Report as ReportModel;

class Report extends AbstractAPI
{
    /**
     * This method returns a report that details the user traffic received by a
     * seller's listings. <br><br>A traffic report gives sellers the ability to review
     * how often their listings appeared on eBay, how many times their listings are
     * viewed, and how many purchases were made. The report also returns the report's
     * start and end dates, and the date the information was last updated.
     * <br><br>When using this call: <ul><li>Be sure to URL-encode the values you pass
     * in query parameters, as described in <a
     * href="/api-docs/static/rest-request-components.html#parameters">URI
     * parameters</a>. See the request samples below for details.</li> <li>You can only
     * specify a single metric in the <b>sort</b> parameter and the specified metric
     * must be listed in the <b>metric</b> parameter of your request.</li>
     * <li>Parameter names are case sensitive, but metric names are not. <p>For
     * example, the following are <i>correct</i>:</p>
     * <ul><li><code>sort=LISTING_IMPRESSION_TOTAL</code></li>
     * <li><code>sort=listing_impression_total</code></li>
     * <li><code>metric=listing_impression_total</code></li></ul> However, these are
     * <i>incorrect</i>: <ul><li><code>SORT=LISTING_IMPRESSION_TOTAL</code></li>
     * <li><code>SORT=listing_impression_total</code></li>
     * <li><code>Metric=listing_impression_total</code></li></ul></ul> For more
     * information, see <a
     * href="/api-docs/sell/static/performance/traffic-report.html">Traffic report
     * details</a><br /><br /><span class="tablenote"><b>Note:</b> Beginning on October
     * 4, 2021, the options for the following <b>metric</b> inputs will
     * change:<ul><li>Sorting on the <b>SALES_CONVERSION_RATE</b> metric will no longer
     * be supported</li><li>Sorting on the <b>TRANSACTION</b> metric will no longer
     * support ascending order; only descending order will be
     * supported</li><li><b>LISTING_VIEWS_SOURCE_DIRECT</b> will only support a 90-day
     * query range from October 4, 2021 until early January 2022, at which time it will
     * again support a two year query range.</li></ul></span>.
     *
     * @param array $queries options:
     *                       'dimension'	string	This query parameter specifies the <i>dimension</i>, or
     *                       "attribute," that is applied to the report <b>metric</b>.  <br><br><b>Valid
     *                       values:</b> <code>DAY</code> or <code>LISTING</code>  <br><br><b>Examples</b>
     *                       <ul><li>If you specify <code>dimension=DAY</code> and
     *                       <code>metric=CLICK_THROUGH_RATE</code>, the traffic report contains the number
     *                       of times an item displayed on a search results page and the buyer clicked
     *                       through to the View Item page for each day in the date range, as in:
     *                       <br><code>12-06-17: 32, 12-07-17: 54, ...</code></li> <li>If you specify
     *                       <code>dimension=LISTING</code> and <code>metric=LISTING_IMPRESSION_STORE</code>,
     *                       the traffic report contains the number of times that listing appeared on the
     *                       seller's store during the specified date range. <br><br>For example,
     *                       <code>LISTING_IMPRESSION_STORE: 157</code> means the item appeared 157 times in
     *                       the store during the date range.</li></ul> <!-- Dimension - Enables user to
     *                       specify input to slice the data that the user is interested in - For example
     *                       specify listing and days as dimensions to get traffic report for all the sellers
     *                       listings grouped by listing and days. Refer to DimensionEnum) -->
     *                       'filter'	string	This query parameter refines the information returned in the
     *                       traffic report.  <br><br>Configure the following properties of the <b>filter</b>
     *                       parameter to tune the traffic report to your needs: <ul> <li><b>date_range</b>
     *                       <br>Limits the report to the specified range of dates.  <br><br>Format the date
     *                       range by enclosing the earliest date and end date for the report in brackets
     *                       ("<code>[ ]</code>"), as follows: <br><code>[YYYYMMDD..YYYYMMDD]</code>
     *                       <br><br>The maximum range between the start and end dates is 90 days, and the
     *                       earliest start date you can specify is two years prior to the current date,
     *                       which is defined as 730 days (365 &#42; 2), not accounting for Leap Year.
     *                       <br><br><a name="lastUDate"></a>The last date for which traffic data exists is a
     *                       value called <b>lastUpdatedDate</b>. eBay returns an error if you specify a date
     *                       range greater than 90 days, or the start date is after the lastUpdatedDate. If
     *                       the specified end date is beyond the lastUpdatedDate, eBay returns data up to
     *                       the lastUpdatedDate.  <br><br><b>Required:</b> Always</li>
     *                       <li><b>listing_ids</b> <br>This filter limits the results to only the supplied
     *                       list of <b>listingId</b> values. <br><br>You can specify to 200 different
     *                       <b>listingId</b> values. Enclose the list of IDs with curly braces ("<code>{
     *                       }</code>"), and separate multiple values with a pipe character
     *                       ("<code>|</code>").  <br><br>This filter only returns data for listings that
     *                       have been either active or sold in last 90 days, and any unsold listings in the
     *                       last 30 days. All listings must be the seller's and they  must be listed on the
     *                       marketplace specified by the <b>marketplace_ids</b> filter argument.</li>
     *                       <li><b>marketplace_ids</b> <br>This filter limits the report to seller data
     *                       related to only the specified marketplace ID (currently the filter allows only a
     *                       single marketplace ID). Enclose the marketplace ID in curly braces ("<code>{
     *                       }</code>").  <br><br><b>Valid values:</b> <ul
     *                       class="compact"><li><code>EBAY_AU</code></li> <li><code>EBAY_DE</code></li>
     *                       <li><code>EBAY_GB</code></li> <li><code>EBAY_US</code></li>
     *                       <li><code>EBAY_MOTORS</code></li></ul> <br><b>Required if</b> you set the
     *                       <b>dimension</b> parameter to <code>DAY</code>.</li></ul> <br><b>Example filter
     *                       parameter</b> <br>The following example shows how to configure the <b>filter</b>
     *                       parameter with the <b>marketplace_ids</b> and <b>date_range</b> filters:
     *                       <p><code>filter=marketplace_ids:{EBAY_US},date_range:[20170601..20170828]</code>
     *                       <p><span class="tablenote"><b>Note: </b> You must URL encode all the values you
     *                       supply in the <b>filter</b> parameter, as described in <a
     *                       href="/api-docs/static/rest-request-components.html#parameters">URL
     *                       parameters</a>.</span></p> <!-- **Filter results based on the specified filter
     *                       parameters- window_days (WindowDaysEnum), date_range, marketplace_id
     *                       (MarketplaceIdEnum - Only EBAY_US, EBAY_MOTORS_US, EBAY_GB, EBAY_AU, EBAY_DE are
     *                       supported), listing_ids, traffic_source (Takes a list. Supported values:
     *                       ORGANIC, PROMOTED_LISTINGS). Valid filters come from QueryParamEnum --> For
     *                       implementation help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/sell/analytics/types/csb:FilterField
     *                       'metric'	string	<a name="metrics"></a>This query parameter specifies the metrics
     *                       you want covered in the report.  <br><br>Specify a comma-separated list of the
     *                       metrics you want included in the report.  <br><br><b>Valid values:</b><ul>
     *                       <li><b>CLICK_THROUGH_RATE</b>  <br>The number of times an item displays on the
     *                       search results page divided by the number of times buyers clicked through to its
     *                       View Item page. <br><b>Localized name: </b> Click through rate</li>
     *                       <li><b>LISTING_IMPRESSION_SEARCH_RESULTS_PAGE </b> <br>The number of times the
     *                       seller's listings displayed on the search results page. Note, the listing might
     *                       not have been visible to the buyer due to its position on the page.
     *                       <br><b>Localized name: </b> Listing impressions from the search results
     *                       page</li> <li><b>LISTING_IMPRESSION_STORE </b> <br> The number of times the
     *                       seller's listings displayed on the seller's store. Note, the listing might not
     *                       have been visible to the buyer due to its position on the page. <br><b>Localized
     *                       name: </b> Listing impressions from your Store</li>
     *                       <li><b>LISTING_IMPRESSION_TOTAL</b>  <br> The total number of times the seller's
     *                       listings displayed on the search results page OR in the seller's store. The item
     *                       is counted each time it displays on either page. However, the listing might not
     *                       have been visible to the buyer due to its position on the page. <br>This is a
     *                       combination of:  LISTING_IMPRESSION_SEARCH_RESULTS_PAGE <b>+</b>
     *                       LISTING_IMPRESSION_STORE. <br><b>Localized name: </b> Total listing
     *                       impressions</li> <li><b>LISTING_VIEWS_SOURCE_DIRECT</b> <br> The number of times
     *                       a View Item page was directly accessed, such as when a buyer navigates to the
     *                       page using a bookmark.<br><b>Localized name: </b> Direct views</li> <li><b>
     *                       LISTING_VIEWS_SOURCE_OFF_EBAY</b>  <br>The number of times a View Item page was
     *                       accessed via a site other than eBay, such as when a buyer clicks on a link to
     *                       the listing from a search engine page. <br><b>Localized name: </b> Off eBay
     *                       views</li> <li><b>LISTING_VIEWS_SOURCE_OTHER_EBAY</b>  <br> The number of times
     *                       a View Item page was accessed from an eBay page that is not either the search
     *                       results page or the seller's store. <br><b>Localized name: </b>Views from
     *                       non-search and non-store pages within eBay</li>
     *                       <li><b>LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE</b>  <br> The number of times
     *                       the item displayed on the search results page. <br><b>Localized name: </b> Views
     *                       on the search results page</li> <li><b>LISTING_VIEWS_SOURCE_STORE</b>  <br> The
     *                       number of times a View Item page was accessed via the seller's store.
     *                       <br><b>Localized name: </b> Views from your Store</li>
     *                       <li><b>LISTING_VIEWS_TOTAL </b> <br> Total number of listings viewed. <br>This
     *                       number sums: <br>LISTING_VIEWS_SOURCE_DIRECT <br> LISTING_VIEWS_SOURCE_OFF_EBAY
     *                       <br>LISTING_VIEWS_SOURCE_OTHER_EBAY <br>LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE
     *                       <br>LISTING_VIEWS_SOURCE_STORE. <br><b>Localized name: </b> Total views</li>
     *                       <li><b>SALES_CONVERSION_RATE</b> <br>The number of completed transactions
     *                       divided by the number of View Item page views. Equals: <br>TRANSACTION <b>/</b>
     *                       LISTING_VIEWS_TOTAL <br><b>Localized name: </b> Sales conversion rate</li>
     *                       <li><b>TRANSACTION</b>  <br>The total number of completed transactions.
     *                       <br><b>Localized name: </b> Transaction count</li></ul> <!-- Metric - Lets the
     *                       user specify the list of fields that they would like to see in the report.
     *                       Allowed values: LISTING_IMPRESSION_SEARCH_RESULTS_PAGE,
     *                       LISTING_IMPRESSION_STORE, LISTING_IMPRESSION_TOTAL,
     *                       LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE, LISTING_VIEWS_SOURCE_STORE,
     *                       LISTING_VIEWS_SOURCE_DIRECT, LISTING_VIEWS_SOURCE_OTHER_EBAY,
     *                       LISTING_VIEWS_SOURCE_OFF_EBAY, LISTING_VIEWS_TOTAL, TRANSACTION_TOTAL,
     *                       CLICK_THROUGH_RATE, SALES_CONVERSION_RATE (DataMetricEnum) -->
     *                       'sort'	string	This query parameter sorts the report on the specified metric.
     *                       <br><br>The metric you specify must be included in the configuration of the
     *                       report's <a href="#metrics">metric</a> parameter.  <br><br>Sorting is helpful
     *                       when you want to review how a specific metric is performing, such as the
     *                       CLICK_THROUGH_RATE.  <br><br>Reports can be sorted in ascending or descending
     *                       order. Precede the value of a descending-order request with a minus sign
     *                       ("<code>-</code>"), for example: <code>sort=-CLICK_THROUGH_RATE</code>.<br /><br
     *                       /><span class="tablenote"><b>Note:</b> Beginning on October 4, 2021, the options
     *                       for the following <b>metric</b> inputs will change:<ul><li>Sorting on the
     *                       <b>SALES_CONVERSION_RATE</b> metric will no longer be supported</li><li>Sorting
     *                       on the <b>TRANSACTION</b> metric will no longer support ascending order; only
     *                       descending order will be supported</li><li><b>LISTING_VIEWS_SOURCE_DIRECT</b>
     *                       will only support a 90-day query range from October 4, 2021 until early January
     *                       2022, at which time it will again support a two year query
     *                       range.</li></ul></span><!-- Sort order for a collection of resources: Specify
     *                       the metric value to be sorted. Allowed values are from DataMetricEnum --> For
     *                       implementation help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/sell/analytics/types/csb:SortField
     *
     * @return ReportModel
     */
    public function get(array $queries = []): ReportModel
    {
        return $this->request(
        'getTrafficReport',
        'GET',
        'traffic_report',
        null,
        $queries,
        []
        );
    }
}
