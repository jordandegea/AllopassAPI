<?php
/**
 * @file AllopassApiConfFileCorruptedException.php
 * File of the class AllopassApiConfFileCorruptedException
 */
namespace Sinenco\AllopassAPIBundle\Exception;

use Sinenco\AllopassAPIBundle\Exception\AllopassApiException ;

/**
 * Class of an exception for a bad formatted or corrupted configuration file
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> \n *  Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
class AllopassApiConfFileCorruptedException extends AllopassApiException
{
    /**
     * Exception code
     */
    const CODE = 6;
    /**
     * Exception definition
     */
    const MESSAGE = 'Configuration file is corrupted or bad formatted';

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(self::MESSAGE, self::CODE);
    }
}