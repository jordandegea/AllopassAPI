<?php
/**
 * @file AllopassApiConfFileMissingException.php
 * File of the class AllopassApiConfFileMissingException
 */
namespace Sinenco\AllopassAPIBundle\Exception ; 
use Sinenco\AllopassAPIBundle\Exception\AllopassApiException;


/**
 * Class of an exception for a missing configuration file
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> 
 * @author Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
class AllopassApiConfFileMissingException extends AllopassApiException
{
    /**
     * Exception code
     */
    const CODE = 5;
    /**
     * Exception definition
     */
    const MESSAGE = 'Configuration file is missing';

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(self::MESSAGE, self::CODE);
    }
}