<?php
/**
 * @file AllopassApiResponse.php
 * File of the abstract class AllopassApiResponse
 */

namespace Sinenco\AllopassAPIBundle\Model ; 

use Sinenco\AllopassAPIBundle\Exception\AllopassApiFalseResponseSignatureException ;

/**
 * Class defining the basis of an API response and providing convenient tools
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> \n *  Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
abstract class AllopassApiResponse
{
    /**
     * (string) Expected response signature
     */
    protected $_signature;

    /**
     * (string) HTTP headers of the response
     */
    protected $_headers;

    /**
     * (string) Raw data of the response
     */
    protected $_body;

    /**
     * Constructor
     *
     * @param signature (string) Expected response signature
     * @param headers (string) HTTP headers of the response
     * @param body (string) Raw data of the response
     */
    public function __construct($signature, $headers, $body)
    {
        $this->_signature = $signature;
        $this->_headers   = $headers;
        $this->_body      = $body;
    }

    /**
     * Internal method providing signature verification
     *
     * @throws AllopassApiFalseResponseSignatureException If the expected signature is not found among response headers
     */
    protected function _verify()
    {
        if (!strpos($this->_headers, "X-Allopass-Response-Signature: {$this->_signature}")) {
            throw new AllopassApiFalseResponseSignatureException();
        }
    }

    /**
     * Overload of parent __toString magic method
     *
     * @return (string) String representation of an API response (its body)
     */
    public function __toString()
    {
        return $this->_body;
    }
}