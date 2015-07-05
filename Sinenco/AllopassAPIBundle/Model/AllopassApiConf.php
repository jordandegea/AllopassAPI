<?php

/**
 * @file AllopassApiConf.php
 * File of the class AllopassApiConf
 */

namespace Sinenco\AllopassAPIBundle\Model;

use Sinenco\AllopassAPIBundle\Tools\AllopassApiTools,
    Sinenco\AllopassAPIBundle\Exception\AllopassApiConfFileMissingException,
    Sinenco\AllopassAPIBundle\Exception\AllopassApiConfFileCorruptedException,
    Sinenco\AllopassAPIBundle\Exception\AllopassApiConfAccountNotFoundException,
    Sinenco\AllopassAPIBundle\Exception\AllopassApiConfFileMissingSectionException;

/**
 * Class providing convenient tools to access configuration data
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> 
 * @author Jérémy Langlais <jlanglais@hi-media.com>
 *
 * @date 2009 (c) Hi-media
 */
class AllopassApiConf {

    /**
     * Relative path of the configuration file
     */
    const FILE_PATH = '../conf/conf.xml';

    /**
     * (ApiConf) Static instance of the class
     */
    private static $_instance = NULL;
    private $host ;
    private $network_port ;
    private $network_protocol ;
    private $network_timeout ;
    private $default_format  ;
    private $default_hash ;
    private $api_key;
    private $secret_key;

    /**
     * Constructor
     */
    public function __construct(
            $api_key,
            $secret_key,
            $default_hash, 
            $default_format, 
            $network_timeout, 
            $network_protocol,
            $network_port, 
            $host) {
        
        self::$_instance = $this;
        $this->api_key = $api_key;
        $this->secret_key = $secret_key;
        $this->default_hash = $default_hash;
        $this->default_format = $default_format;
        $this->network_timeout = $network_timeout;
        $this->network_protocol = $network_protocol;
        $this->network_port = $network_port;
        $this->host = $host;
    }


    /**
     * Method retrieving the API key
     *
     * @param email (string) The mail account from which retrieve the API key
     * If email isn't provided or null, the first account is considered
     *
     * @return (string) The public API key
     */
    public function getApiKey() {
        return (string) $this->api_key;
    }

    /**
     * Method retrieving the private key
     *
     * @param email (string) The mail account from which retrieve the private key
     * If email isn't provided or null, the first account is considered
     *
     * @return (string) The private API key
     */
    public function getPrivateKey($email = NULL) {
        return (string) $this->secret_key;
    }

   
    /**
     * Method retrieving the default response format
     *
     * @return (string) The response format
     */
    public function getDefaultFormat() {
        return (string) $this->default_format;
    }

    /**
     * Method retrieving the API hostname
     *
     * @return (string) The API hostname
     */
    public function getHost() {
        return (string) $this->host;
    }

    /**
     * Method retrieving the default hash function name
     *
     * @return (string) The default hash function name
     */
    public function getDefaultHash() {
        return (string) $this->default_hash;
    }

    /**
     * Method retrieving the network timeout delay
     *
     * @return (integer) The network timeout delay
     */
    public function getNetworkTimeout() {
        return (integer) $this->network_timeout;
    }

    /**
     * Method retrieving the network protocol
     *
     * @return (string) The network protocol
     */
    public function getNetworkProtocol() {
        return (string) $this->network_protocol;
    }

    /**
     * Method retrieving the network port
     *
     * @return (integer) The network port
     */
    public function getNetworkPort() {
        return (integer) $this->network_port;
    }

    /**
     * Static method providing a single access-point to the class
     *
     * @return (AllopassApiConf) The class instance
     */
    public static function getInstance() {
        return self::$_instance;
    }

}
