<?php
/**
 * @file AllopassTransactionPrepareRequest.php
 * File of the class AllopassTransactionPrepareRequest
 */

namespace Sinenco\AllopassAPIBundle\Model ; 

use Sinenco\AllopassAPIBundle\Model\AllopassApiRequest ;
use Sinenco\AllopassAPIBundle\Model\AllopassTransactionPrepareResponse ;

/**
 * Class providing a transaction prepare API request
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> 
 * @author Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
class AllopassTransactionPrepareRequest extends AllopassApiRequest
{
    /**
     * Route path of the API
     */
    const PATH = 'transaction/prepare';

    /**
     * Constructor
     *
     * @param parameters (array) Query string parameters of the API call
     * @param mapping (boolean) Should the response be an object mapping or a plain response
     * @param emailAccount (string) Email of the configurated account
     */
    public function __construct(array $parameters, $mapping = TRUE, $emailAccount = NULL)
    {
        parent::__construct($parameters, $mapping, $emailAccount);
    }

    /**
     * Provide a way to get the route of the request
     *
     * @return (string) The route of the request
     */
    protected function _getPath()
    {
        return self::PATH;
    }

    /**
     * Overload of internal method which determinates that request has to be done using POST
     *
     * @return (boolean) The request has to be done using POST
     */
    protected function _isHttpPost()
    {
        return TRUE;
    }

    /**
     * Provide a way to get the wired response of the request
     *
     * @param signature (string) Expected response signature
     * @param headers (string) HTTP headers of the response
     * @param body (string) Raw data of the response
     *
     * @return (AllopassTransactionPrepareResponse) A new response
     */
    protected function _newResponse($signature, $headers, $body)
    {
        return new AllopassTransactionPrepareResponse($signature, $headers, $body);
    }
}