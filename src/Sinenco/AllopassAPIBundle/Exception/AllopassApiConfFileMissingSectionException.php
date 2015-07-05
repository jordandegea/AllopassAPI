<?php
/**
 * @file AllopassApiConfFileMissingSectionException.php
 * File of the class AllopassApiConfFileMissingSectionException
 */

namespace Sinenco\AllopassAPIBundle\Exception ; 
use Sinenco\AllopassAPIBundle\Exception\AllopassApiException;

/**
 * Class of an exception if a section is not found into configuration file
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> \n *  Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
class AllopassApiConfFileMissingSectionException extends AllopassApiException
{
    /**
     * Exception code
     */
    const CODE = 12;
    /**
     * Exception definition
     */
    const MESSAGE = 'A required section cannot be found in the configuration file';

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(self::MESSAGE, self::CODE);
    }
}