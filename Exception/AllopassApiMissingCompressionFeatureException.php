<?php
/**
 * @file AllopassApiMissingCompressionFeatureException.php
 * File of the class AllopassApiMissingCompressionFeatureException
 */

namespace Sinenco\AllopassAPIBundle\Exception ; 
use Sinenco\AllopassAPIBundle\Exception\AllopassApiException;

/**
 * Class of an exception if local system doesn't support zip/gzip features
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> 
 * @author Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
class AllopassApiMissingCompressionFeatureException extends AllopassApiException
{
    /**
     * Exception code
     */
    const CODE = 10;
    /**
     * Exception definition
     */
    const MESSAGE = 'Your local PHP system doesn\'t support required compression library';

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(self::MESSAGE, self::CODE);
    }
}