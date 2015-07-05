<?php
/**
 * @file AllopassApiMissingHashFeatureException.php
 * File of the class AllopassApiMissingHashFeatureException
 */

namespace Sinenco\AllopassAPIBundle\Exception ; 
use Sinenco\AllopassAPIBundle\Exception\AllopassApiException;

/**
 * Class of an exception if local system doesn't support configured hash cipher
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> 
 * @author Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
class AllopassApiMissingHashFeatureException extends AllopassApiException
{
    /**
     * Exception code
     */
    const CODE = 8;
    /**
     * Exception definition
     */
    const MESSAGE = 'Your local PHP system doesn\'t support the configurated hash cipher (SHA1)';

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(self::MESSAGE, self::CODE);
    }
}