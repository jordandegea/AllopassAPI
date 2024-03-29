<?php

/**
 * @file AllopassSubscriptionDetailResponse.php
 * File of the class AllopassSubscriptionDetailResponse
 */
namespace Sinenco\AllopassAPIBundle\Model ;

use Sinenco\AllopassAPIBundle\Model\AllopassApiMappingResponse ;
use Sinenco\AllopassAPIBundle\Model\AllopassDate ;
use Sinenco\AllopassAPIBundle\Model\AllopassWebsite ;
use Sinenco\AllopassAPIBundle\Model\AllopassPrice ;
use Sinenco\AllopassAPIBundle\Model\AllopassProduct ;
use Sinenco\AllopassAPIBundle\Model\AllopassOffer ;
use Sinenco\AllopassAPIBundle\Model\AllopassPeriodicity ;
use Sinenco\AllopassAPIBundle\Model\AllopassPricepoint ;


/**
 * Class defining a subscription detail request's response
 *
 * @author Jordan DE GEA for Sinenco <webmaster@sinenco.com> 
 * @author Mathieu Robert <mrobert@hi-media.com>
 *
 * @date 2011 (c) Hi-media
 */
class AllopassSubscriptionDetailResponse extends AllopassApiMappingResponse
{
    /**
     * The subscription is active
     */
    const SUBSCRIPTION_ACTIVE = 0;

    /**
     * The subscription is not active
     */
    const SUBSCRIPTION_NOT_ACTIVE = 1;

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

    /**
     * Method retrieving the subscription status
     *
     * @return (integer) The subscription status
     */
    public function getStatus()
    {
        return (integer)$this->_xml->status;
    }

    /**
     * Method retrieving the subscription status description
     *
     * @return (string) The subscription status description
     */
    public function getStatusDescription()
    {
        return (string)$this->_xml->status_description;
    }

    /**
     * Method retrieving the subscription access-type
     *
     * @return (string) The subscription access-type
     */
    public function getAccessType()
    {
        return (string)$this->_xml->access_type;
    }

    /**
     * Method retrieving the subscriber reference
     *
     * @return (string) The subscriber reference
     */
    public function getSubscriberReference()
    {
        return (string)$this->_xml->subscriber_reference;
    }

    /**
     * Method retrieving the merchant subscriber reference
     *
     * @return (string) merchant The subscriber reference
     */
    public function getMerchantSubscriberReference()
    {
        return (string)$this->_xml->merchant_subscriber_reference;
    }

    /**
     * Method retrieving the merchant transaction id
     *
     * @return (string) The merchant transaction id
     */
    public function getMerchantTransactionId()
    {
        return (string)$this->_xml->merchant_transaction_id;
    }

    /**
     * Method retrieving the transaction's website
     *
     * @return (AllopassWebsite) The transaction's website
     */
    public function getWebsite()
    {
        return new AllopassWebsite($this->_xml->website);
    }

    /**
     * Method retrieving the subscription's product
     *
     * @return (AllopassProduct) The subscription's product
     */
    public function getProduct()
    {
        return new AllopassProduct($this->_xml->product);
    }

    /**
     * Method retrieving the subscription's offer
     *
     * @return (AllopassOffer) The subscription's offer
     */
    public function getOffer()
    {
        return new AllopassOffer($this->_xml->offer);
    }

    /**
     * Method retrieving the subscription customer country
     *
     * @return (string) The subscription customer country
     */
    public function getCustomerCountry()
    {
        return (string)$this->_xml->customer_country;
    }

    /**
     * Method retrieving the subscription customer locale
     *
     * @return (string) The subscription customer locale
     */
    public function getCustomerLocale()
    {
        return (string)$this->_xml->customer_locale;
    }

    /**
     * Method retrieving the subscription creation date
     *
     * @return (AllopassDate) The subscription creation date
     */
    public function getSubscriptionDate()
    {
        return new AllopassDate($this->_xml->subscription_date);
    }

    /**
     * Method retrieving the subscription renewal date
     *
     * @return (AllopassDate) The subscription renewal date
     */
    public function getRenewalDate()
    {
        return new AllopassDate($this->_xml->renewal_date);
    }

    /**
     * Method retrieving the subscription cancellation date
     *
     * @return (AllopassDate) The subscription cancellation date
     */
    public function getCancellationDate()
    {
        return new AllopassDate($this->_xml->cancellation_date);
    }

    /**
     * Method retrieving the subscription periodicity
     *
     * @return (AllopassPeriodicity) The subscription periodicity
     */
    public function getPeriodicity()
    {
        return new AllopassPeriodicity($this->_xml->frequency);
    }

    /**
     * Method retrieving the subscription pricepoint
     *
     * @return (AllopassPricepoint) The subscription pricepoint
     */
    public function getPricepoint()
    {
        return new AllopassPricepoint($this->_xml->pricepoint);
    }

    /**
     * Method retrieving the subscription's price
     *
     * @return (AllopassPrice) The subscription's price
     */
    public function getPrice()
    {
        return new AllopassPrice($this->_xml->price);
    }

    /**
     * Method retrieving the subscription's payout price
     *
     * @return (AllopassPrice) The subscription's payout price
     */
    public function getPayout()
    {
        return new AllopassPrice($this->_xml->payout);
    }
}