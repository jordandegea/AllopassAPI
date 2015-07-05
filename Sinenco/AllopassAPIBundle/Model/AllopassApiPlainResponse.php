<?php
/**
 * @file AllopassApiPlainResponse.php
 * File of the class AllopassApiPlainResponse
 */
namespace Sinenco\AllopassAPIBundle\Model ; 


use Sinenco\AllopassAPIBundle\Model\AllopassApiResponse ;

/**
 * Class defining a plain API response
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> 
 * @author Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
class AllopassApiPlainResponse extends AllopassApiResponse
{
    /**
     * Constructor
     *
     * @param signature (string) Expected response signature
     * @param headers (string) HTTP headers of the response
     * @param body (string) Raw data of the response
     */
    public function __construct($signature, $headers, $body)
    {
        parent::__construct($signature, $headers, $body);
    }
}