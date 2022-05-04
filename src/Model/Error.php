<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Type that defines the fields that can be returned in an error.
 */
class Error extends AbstractModel
{
    /**
     * Identifies whether the error was in the REQUEST or happened when running the
     * APPLICATION.
     *
     * @var string
     */
    public $category = null;

    /**
     * The primary system where the error occurred. This is relevant for application
     * errors. For Analytics errors, it always has the value
     * <code>API_ANALYTICS</code>.
     *
     * @var string
     */
    public $domain = null;

    /**
     * A positive integer that uniquely identifies the specific error condition that
     * occurred. Your application can use error codes as identifiers in your customized
     * error-handling algorithms. Traffic report error IDs range from 50001 to 50500.
     *
     * @var int
     */
    public $errorId = null;

    /**
     * Identifies specific request elements associated with the error, if any.
     * inputRefId's response is format specific. For JSON, use <i>JSONPath</i>
     * notation.
     *
     * @var string[]
     */
    public $inputRefIds = null;

    /**
     * A more detailed explanation of the error than given in the <code>message</code>
     * error field.
     *
     * @var string
     */
    public $longMessage = null;

    /**
     * Information on how to correct the problem, in the end user's terms and language
     * where applicable. Its value is at most 50 characters long. If applicable, the
     * value is localized in the end user's requested locale.
     *
     * @var string
     */
    public $message = null;

    /**
     * Identifies specific response elements associated with the error, if any. Path
     * format is the same as <code>inputRefId</code>.
     *
     * @var string[]
     */
    public $outputRefIds = null;

    /**
     * This optional list of name/value pairs that contain context-specific
     * <code>ErrorParameter</code> objects, with each item in the list being a
     * parameter (or input field name) that caused an error condition. Each
     * <code>ErrorParameter</code> object consists of two fields, a <code>name</code>
     * and a <code>value</code>.
     *
     * @var \Ebay\Sell\Analytics\Model\ErrorParameter[]
     */
    public $parameters = null;

    /**
     * If present, indicates which subsystem in which the error occurred.
     *
     * @var string
     */
    public $subdomain = null;
}
