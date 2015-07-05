<?php
/**
 * @file AllopassApiConfAccountNotFoundException.php
 * File of the class AllopassApiConfAccountNotFoundException
 */

namespace Sinenco\AllopassAPIBundle\Exception ;

use Sinenco\AllopassAPIBundle\Exception\AllopassApiException ;

/**
 * Class of an exception if an account cannot be found into configuration file
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> \n *  Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
class AllopassApiConfAccountNotFoundException extends AllopassApiException
{
    /**
     * Exception code
     */
    const CODE = 11;
    /**
     * Exception definition
     */
    const MESSAGE = 'You provided an account (its email) which doesn\'t exist in configuration file';

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(self::MESSAGE, self::CODE);
    }
}