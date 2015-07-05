<?php
/**
 * @file AllopassApiException.php
 * File of the abstract class AllopassApiException
 */

namespace Sinenco\AllopassAPIBundle\Exception ; 
use Exception ;

/**
 * Class defining the basis of an API Exception
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> 
 * @author Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
abstract class AllopassApiException extends Exception
{
    /**
     * Constructor
     *
     * @param message (string) Exception description
     * @param code (integer) Exception code
     */
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }
}