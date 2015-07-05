<?php
/**
 * @file AllopassApiWrongFormatResponseException.php
 * File of the class AllopassApiWrongFormatResponseException
 */

namespace Sinenco\AllopassAPIBundle\Exception ; 
use Sinenco\AllopassAPIBundle\Exception\AllopassApiException;

/**
 * Class of an exception for a response containing bad formatted data
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> \n *  Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
class AllopassApiWrongFormatResponseException extends AllopassApiException
{
    /**
     * Exception code
     */
    const CODE = 3;
    /**
     * Exception definition
     */
    const MESSAGE = 'The response contains invalid data';

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(self::MESSAGE, self::CODE);
    }
}