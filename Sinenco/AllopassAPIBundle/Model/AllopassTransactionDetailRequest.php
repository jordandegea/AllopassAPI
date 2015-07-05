<?php
/**
 * @file AllopassTransactionDetailRequest.php
 * File of the class AllopassTransactionDetailRequest
 */
namespace Sinenco\AllopassAPIBundle\Model ; 


use Sinenco\AllopassAPIBundle\Model\AllopassApiRequest ;
use Sinenco\AllopassAPIBundle\Model\AllopassTransactionDetailResponse ;

/**
 * Class providing a transaction detail API request
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> 
 * @author Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
class AllopassTransactionDetailRequest extends AllopassApiRequest
{
    /**
     * Route path of the API
     */
    const PATH = 'transaction';

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
     * Provide a way to get the wired response of the request
     *
     * @param signature (string) Expected response signature
     * @param headers (string) HTTP headers of the response
     * @param body (string) Raw data of the response
     *
     * @return (AllopassTransactionDetailResponse) A new response
     */
    protected function _newResponse($signature, $headers, $body)
    {
        return new AllopassTransactionDetailResponse($signature, $headers, $body);
    }
}