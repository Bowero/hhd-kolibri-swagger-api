<?php
/**
 * HttpRequestHeaders
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Web API Swagger specification Kolibri24 API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 4.1.778.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * HttpRequestHeaders Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HttpRequestHeaders implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HttpRequestHeaders';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accept' => '\Swagger\Client\Model\MediaTypeWithQualityHeaderValue[]',
        'accept_charset' => '\Swagger\Client\Model\StringWithQualityHeaderValue[]',
        'accept_encoding' => '\Swagger\Client\Model\StringWithQualityHeaderValue[]',
        'accept_language' => '\Swagger\Client\Model\StringWithQualityHeaderValue[]',
        'authorization' => '\Swagger\Client\Model\AuthenticationHeaderValue',
        'expect' => '\Swagger\Client\Model\NameValueWithParametersHeaderValue[]',
        'expect_continue' => 'bool',
        'from' => 'string',
        'host' => 'string',
        'if_match' => '\Swagger\Client\Model\EntityTagHeaderValue[]',
        'if_modified_since' => '\DateTime',
        'if_none_match' => '\Swagger\Client\Model\EntityTagHeaderValue[]',
        'if_range' => '\Swagger\Client\Model\RangeConditionHeaderValue',
        'if_unmodified_since' => '\DateTime',
        'max_forwards' => 'int',
        'proxy_authorization' => '\Swagger\Client\Model\AuthenticationHeaderValue',
        'range' => '\Swagger\Client\Model\RangeHeaderValue',
        'referrer' => 'string',
        'te' => '\Swagger\Client\Model\TransferCodingWithQualityHeaderValue[]',
        'user_agent' => '\Swagger\Client\Model\ProductInfoHeaderValue[]',
        'cache_control' => '\Swagger\Client\Model\CacheControlHeaderValue',
        'connection' => 'string[]',
        'connection_close' => 'bool',
        'date' => '\DateTime',
        'pragma' => '\Swagger\Client\Model\NameValueHeaderValue[]',
        'trailer' => 'string[]',
        'transfer_encoding' => '\Swagger\Client\Model\TransferCodingHeaderValue[]',
        'transfer_encoding_chunked' => 'bool',
        'upgrade' => '\Swagger\Client\Model\ProductHeaderValue[]',
        'via' => '\Swagger\Client\Model\ViaHeaderValue[]',
        'warning' => '\Swagger\Client\Model\WarningHeaderValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accept' => null,
        'accept_charset' => null,
        'accept_encoding' => null,
        'accept_language' => null,
        'authorization' => null,
        'expect' => null,
        'expect_continue' => null,
        'from' => null,
        'host' => null,
        'if_match' => null,
        'if_modified_since' => 'date-time',
        'if_none_match' => null,
        'if_range' => null,
        'if_unmodified_since' => 'date-time',
        'max_forwards' => 'int32',
        'proxy_authorization' => null,
        'range' => null,
        'referrer' => 'uri',
        'te' => null,
        'user_agent' => null,
        'cache_control' => null,
        'connection' => null,
        'connection_close' => null,
        'date' => 'date-time',
        'pragma' => null,
        'trailer' => null,
        'transfer_encoding' => null,
        'transfer_encoding_chunked' => null,
        'upgrade' => null,
        'via' => null,
        'warning' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accept' => 'accept',
        'accept_charset' => 'acceptCharset',
        'accept_encoding' => 'acceptEncoding',
        'accept_language' => 'acceptLanguage',
        'authorization' => 'authorization',
        'expect' => 'expect',
        'expect_continue' => 'expectContinue',
        'from' => 'from',
        'host' => 'host',
        'if_match' => 'ifMatch',
        'if_modified_since' => 'ifModifiedSince',
        'if_none_match' => 'ifNoneMatch',
        'if_range' => 'ifRange',
        'if_unmodified_since' => 'ifUnmodifiedSince',
        'max_forwards' => 'maxForwards',
        'proxy_authorization' => 'proxyAuthorization',
        'range' => 'range',
        'referrer' => 'referrer',
        'te' => 'te',
        'user_agent' => 'userAgent',
        'cache_control' => 'cacheControl',
        'connection' => 'connection',
        'connection_close' => 'connectionClose',
        'date' => 'date',
        'pragma' => 'pragma',
        'trailer' => 'trailer',
        'transfer_encoding' => 'transferEncoding',
        'transfer_encoding_chunked' => 'transferEncodingChunked',
        'upgrade' => 'upgrade',
        'via' => 'via',
        'warning' => 'warning'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept' => 'setAccept',
        'accept_charset' => 'setAcceptCharset',
        'accept_encoding' => 'setAcceptEncoding',
        'accept_language' => 'setAcceptLanguage',
        'authorization' => 'setAuthorization',
        'expect' => 'setExpect',
        'expect_continue' => 'setExpectContinue',
        'from' => 'setFrom',
        'host' => 'setHost',
        'if_match' => 'setIfMatch',
        'if_modified_since' => 'setIfModifiedSince',
        'if_none_match' => 'setIfNoneMatch',
        'if_range' => 'setIfRange',
        'if_unmodified_since' => 'setIfUnmodifiedSince',
        'max_forwards' => 'setMaxForwards',
        'proxy_authorization' => 'setProxyAuthorization',
        'range' => 'setRange',
        'referrer' => 'setReferrer',
        'te' => 'setTe',
        'user_agent' => 'setUserAgent',
        'cache_control' => 'setCacheControl',
        'connection' => 'setConnection',
        'connection_close' => 'setConnectionClose',
        'date' => 'setDate',
        'pragma' => 'setPragma',
        'trailer' => 'setTrailer',
        'transfer_encoding' => 'setTransferEncoding',
        'transfer_encoding_chunked' => 'setTransferEncodingChunked',
        'upgrade' => 'setUpgrade',
        'via' => 'setVia',
        'warning' => 'setWarning'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept' => 'getAccept',
        'accept_charset' => 'getAcceptCharset',
        'accept_encoding' => 'getAcceptEncoding',
        'accept_language' => 'getAcceptLanguage',
        'authorization' => 'getAuthorization',
        'expect' => 'getExpect',
        'expect_continue' => 'getExpectContinue',
        'from' => 'getFrom',
        'host' => 'getHost',
        'if_match' => 'getIfMatch',
        'if_modified_since' => 'getIfModifiedSince',
        'if_none_match' => 'getIfNoneMatch',
        'if_range' => 'getIfRange',
        'if_unmodified_since' => 'getIfUnmodifiedSince',
        'max_forwards' => 'getMaxForwards',
        'proxy_authorization' => 'getProxyAuthorization',
        'range' => 'getRange',
        'referrer' => 'getReferrer',
        'te' => 'getTe',
        'user_agent' => 'getUserAgent',
        'cache_control' => 'getCacheControl',
        'connection' => 'getConnection',
        'connection_close' => 'getConnectionClose',
        'date' => 'getDate',
        'pragma' => 'getPragma',
        'trailer' => 'getTrailer',
        'transfer_encoding' => 'getTransferEncoding',
        'transfer_encoding_chunked' => 'getTransferEncodingChunked',
        'upgrade' => 'getUpgrade',
        'via' => 'getVia',
        'warning' => 'getWarning'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['accept'] = isset($data['accept']) ? $data['accept'] : null;
        $this->container['accept_charset'] = isset($data['accept_charset']) ? $data['accept_charset'] : null;
        $this->container['accept_encoding'] = isset($data['accept_encoding']) ? $data['accept_encoding'] : null;
        $this->container['accept_language'] = isset($data['accept_language']) ? $data['accept_language'] : null;
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['expect'] = isset($data['expect']) ? $data['expect'] : null;
        $this->container['expect_continue'] = isset($data['expect_continue']) ? $data['expect_continue'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['if_match'] = isset($data['if_match']) ? $data['if_match'] : null;
        $this->container['if_modified_since'] = isset($data['if_modified_since']) ? $data['if_modified_since'] : null;
        $this->container['if_none_match'] = isset($data['if_none_match']) ? $data['if_none_match'] : null;
        $this->container['if_range'] = isset($data['if_range']) ? $data['if_range'] : null;
        $this->container['if_unmodified_since'] = isset($data['if_unmodified_since']) ? $data['if_unmodified_since'] : null;
        $this->container['max_forwards'] = isset($data['max_forwards']) ? $data['max_forwards'] : null;
        $this->container['proxy_authorization'] = isset($data['proxy_authorization']) ? $data['proxy_authorization'] : null;
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['referrer'] = isset($data['referrer']) ? $data['referrer'] : null;
        $this->container['te'] = isset($data['te']) ? $data['te'] : null;
        $this->container['user_agent'] = isset($data['user_agent']) ? $data['user_agent'] : null;
        $this->container['cache_control'] = isset($data['cache_control']) ? $data['cache_control'] : null;
        $this->container['connection'] = isset($data['connection']) ? $data['connection'] : null;
        $this->container['connection_close'] = isset($data['connection_close']) ? $data['connection_close'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['pragma'] = isset($data['pragma']) ? $data['pragma'] : null;
        $this->container['trailer'] = isset($data['trailer']) ? $data['trailer'] : null;
        $this->container['transfer_encoding'] = isset($data['transfer_encoding']) ? $data['transfer_encoding'] : null;
        $this->container['transfer_encoding_chunked'] = isset($data['transfer_encoding_chunked']) ? $data['transfer_encoding_chunked'] : null;
        $this->container['upgrade'] = isset($data['upgrade']) ? $data['upgrade'] : null;
        $this->container['via'] = isset($data['via']) ? $data['via'] : null;
        $this->container['warning'] = isset($data['warning']) ? $data['warning'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets accept
     *
     * @return \Swagger\Client\Model\MediaTypeWithQualityHeaderValue[]
     */
    public function getAccept()
    {
        return $this->container['accept'];
    }

    /**
     * Sets accept
     *
     * @param \Swagger\Client\Model\MediaTypeWithQualityHeaderValue[] $accept accept
     *
     * @return $this
     */
    public function setAccept($accept)
    {
        $this->container['accept'] = $accept;

        return $this;
    }

    /**
     * Gets accept_charset
     *
     * @return \Swagger\Client\Model\StringWithQualityHeaderValue[]
     */
    public function getAcceptCharset()
    {
        return $this->container['accept_charset'];
    }

    /**
     * Sets accept_charset
     *
     * @param \Swagger\Client\Model\StringWithQualityHeaderValue[] $accept_charset accept_charset
     *
     * @return $this
     */
    public function setAcceptCharset($accept_charset)
    {
        $this->container['accept_charset'] = $accept_charset;

        return $this;
    }

    /**
     * Gets accept_encoding
     *
     * @return \Swagger\Client\Model\StringWithQualityHeaderValue[]
     */
    public function getAcceptEncoding()
    {
        return $this->container['accept_encoding'];
    }

    /**
     * Sets accept_encoding
     *
     * @param \Swagger\Client\Model\StringWithQualityHeaderValue[] $accept_encoding accept_encoding
     *
     * @return $this
     */
    public function setAcceptEncoding($accept_encoding)
    {
        $this->container['accept_encoding'] = $accept_encoding;

        return $this;
    }

    /**
     * Gets accept_language
     *
     * @return \Swagger\Client\Model\StringWithQualityHeaderValue[]
     */
    public function getAcceptLanguage()
    {
        return $this->container['accept_language'];
    }

    /**
     * Sets accept_language
     *
     * @param \Swagger\Client\Model\StringWithQualityHeaderValue[] $accept_language accept_language
     *
     * @return $this
     */
    public function setAcceptLanguage($accept_language)
    {
        $this->container['accept_language'] = $accept_language;

        return $this;
    }

    /**
     * Gets authorization
     *
     * @return \Swagger\Client\Model\AuthenticationHeaderValue
     */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
     * Sets authorization
     *
     * @param \Swagger\Client\Model\AuthenticationHeaderValue $authorization authorization
     *
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;

        return $this;
    }

    /**
     * Gets expect
     *
     * @return \Swagger\Client\Model\NameValueWithParametersHeaderValue[]
     */
    public function getExpect()
    {
        return $this->container['expect'];
    }

    /**
     * Sets expect
     *
     * @param \Swagger\Client\Model\NameValueWithParametersHeaderValue[] $expect expect
     *
     * @return $this
     */
    public function setExpect($expect)
    {
        $this->container['expect'] = $expect;

        return $this;
    }

    /**
     * Gets expect_continue
     *
     * @return bool
     */
    public function getExpectContinue()
    {
        return $this->container['expect_continue'];
    }

    /**
     * Sets expect_continue
     *
     * @param bool $expect_continue expect_continue
     *
     * @return $this
     */
    public function setExpectContinue($expect_continue)
    {
        $this->container['expect_continue'] = $expect_continue;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets if_match
     *
     * @return \Swagger\Client\Model\EntityTagHeaderValue[]
     */
    public function getIfMatch()
    {
        return $this->container['if_match'];
    }

    /**
     * Sets if_match
     *
     * @param \Swagger\Client\Model\EntityTagHeaderValue[] $if_match if_match
     *
     * @return $this
     */
    public function setIfMatch($if_match)
    {
        $this->container['if_match'] = $if_match;

        return $this;
    }

    /**
     * Gets if_modified_since
     *
     * @return \DateTime
     */
    public function getIfModifiedSince()
    {
        return $this->container['if_modified_since'];
    }

    /**
     * Sets if_modified_since
     *
     * @param \DateTime $if_modified_since if_modified_since
     *
     * @return $this
     */
    public function setIfModifiedSince($if_modified_since)
    {
        $this->container['if_modified_since'] = $if_modified_since;

        return $this;
    }

    /**
     * Gets if_none_match
     *
     * @return \Swagger\Client\Model\EntityTagHeaderValue[]
     */
    public function getIfNoneMatch()
    {
        return $this->container['if_none_match'];
    }

    /**
     * Sets if_none_match
     *
     * @param \Swagger\Client\Model\EntityTagHeaderValue[] $if_none_match if_none_match
     *
     * @return $this
     */
    public function setIfNoneMatch($if_none_match)
    {
        $this->container['if_none_match'] = $if_none_match;

        return $this;
    }

    /**
     * Gets if_range
     *
     * @return \Swagger\Client\Model\RangeConditionHeaderValue
     */
    public function getIfRange()
    {
        return $this->container['if_range'];
    }

    /**
     * Sets if_range
     *
     * @param \Swagger\Client\Model\RangeConditionHeaderValue $if_range if_range
     *
     * @return $this
     */
    public function setIfRange($if_range)
    {
        $this->container['if_range'] = $if_range;

        return $this;
    }

    /**
     * Gets if_unmodified_since
     *
     * @return \DateTime
     */
    public function getIfUnmodifiedSince()
    {
        return $this->container['if_unmodified_since'];
    }

    /**
     * Sets if_unmodified_since
     *
     * @param \DateTime $if_unmodified_since if_unmodified_since
     *
     * @return $this
     */
    public function setIfUnmodifiedSince($if_unmodified_since)
    {
        $this->container['if_unmodified_since'] = $if_unmodified_since;

        return $this;
    }

    /**
     * Gets max_forwards
     *
     * @return int
     */
    public function getMaxForwards()
    {
        return $this->container['max_forwards'];
    }

    /**
     * Sets max_forwards
     *
     * @param int $max_forwards max_forwards
     *
     * @return $this
     */
    public function setMaxForwards($max_forwards)
    {
        $this->container['max_forwards'] = $max_forwards;

        return $this;
    }

    /**
     * Gets proxy_authorization
     *
     * @return \Swagger\Client\Model\AuthenticationHeaderValue
     */
    public function getProxyAuthorization()
    {
        return $this->container['proxy_authorization'];
    }

    /**
     * Sets proxy_authorization
     *
     * @param \Swagger\Client\Model\AuthenticationHeaderValue $proxy_authorization proxy_authorization
     *
     * @return $this
     */
    public function setProxyAuthorization($proxy_authorization)
    {
        $this->container['proxy_authorization'] = $proxy_authorization;

        return $this;
    }

    /**
     * Gets range
     *
     * @return \Swagger\Client\Model\RangeHeaderValue
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     * @param \Swagger\Client\Model\RangeHeaderValue $range range
     *
     * @return $this
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets referrer
     *
     * @return string
     */
    public function getReferrer()
    {
        return $this->container['referrer'];
    }

    /**
     * Sets referrer
     *
     * @param string $referrer referrer
     *
     * @return $this
     */
    public function setReferrer($referrer)
    {
        $this->container['referrer'] = $referrer;

        return $this;
    }

    /**
     * Gets te
     *
     * @return \Swagger\Client\Model\TransferCodingWithQualityHeaderValue[]
     */
    public function getTe()
    {
        return $this->container['te'];
    }

    /**
     * Sets te
     *
     * @param \Swagger\Client\Model\TransferCodingWithQualityHeaderValue[] $te te
     *
     * @return $this
     */
    public function setTe($te)
    {
        $this->container['te'] = $te;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return \Swagger\Client\Model\ProductInfoHeaderValue[]
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param \Swagger\Client\Model\ProductInfoHeaderValue[] $user_agent user_agent
     *
     * @return $this
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

        return $this;
    }

    /**
     * Gets cache_control
     *
     * @return \Swagger\Client\Model\CacheControlHeaderValue
     */
    public function getCacheControl()
    {
        return $this->container['cache_control'];
    }

    /**
     * Sets cache_control
     *
     * @param \Swagger\Client\Model\CacheControlHeaderValue $cache_control cache_control
     *
     * @return $this
     */
    public function setCacheControl($cache_control)
    {
        $this->container['cache_control'] = $cache_control;

        return $this;
    }

    /**
     * Gets connection
     *
     * @return string[]
     */
    public function getConnection()
    {
        return $this->container['connection'];
    }

    /**
     * Sets connection
     *
     * @param string[] $connection connection
     *
     * @return $this
     */
    public function setConnection($connection)
    {
        $this->container['connection'] = $connection;

        return $this;
    }

    /**
     * Gets connection_close
     *
     * @return bool
     */
    public function getConnectionClose()
    {
        return $this->container['connection_close'];
    }

    /**
     * Sets connection_close
     *
     * @param bool $connection_close connection_close
     *
     * @return $this
     */
    public function setConnectionClose($connection_close)
    {
        $this->container['connection_close'] = $connection_close;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets pragma
     *
     * @return \Swagger\Client\Model\NameValueHeaderValue[]
     */
    public function getPragma()
    {
        return $this->container['pragma'];
    }

    /**
     * Sets pragma
     *
     * @param \Swagger\Client\Model\NameValueHeaderValue[] $pragma pragma
     *
     * @return $this
     */
    public function setPragma($pragma)
    {
        $this->container['pragma'] = $pragma;

        return $this;
    }

    /**
     * Gets trailer
     *
     * @return string[]
     */
    public function getTrailer()
    {
        return $this->container['trailer'];
    }

    /**
     * Sets trailer
     *
     * @param string[] $trailer trailer
     *
     * @return $this
     */
    public function setTrailer($trailer)
    {
        $this->container['trailer'] = $trailer;

        return $this;
    }

    /**
     * Gets transfer_encoding
     *
     * @return \Swagger\Client\Model\TransferCodingHeaderValue[]
     */
    public function getTransferEncoding()
    {
        return $this->container['transfer_encoding'];
    }

    /**
     * Sets transfer_encoding
     *
     * @param \Swagger\Client\Model\TransferCodingHeaderValue[] $transfer_encoding transfer_encoding
     *
     * @return $this
     */
    public function setTransferEncoding($transfer_encoding)
    {
        $this->container['transfer_encoding'] = $transfer_encoding;

        return $this;
    }

    /**
     * Gets transfer_encoding_chunked
     *
     * @return bool
     */
    public function getTransferEncodingChunked()
    {
        return $this->container['transfer_encoding_chunked'];
    }

    /**
     * Sets transfer_encoding_chunked
     *
     * @param bool $transfer_encoding_chunked transfer_encoding_chunked
     *
     * @return $this
     */
    public function setTransferEncodingChunked($transfer_encoding_chunked)
    {
        $this->container['transfer_encoding_chunked'] = $transfer_encoding_chunked;

        return $this;
    }

    /**
     * Gets upgrade
     *
     * @return \Swagger\Client\Model\ProductHeaderValue[]
     */
    public function getUpgrade()
    {
        return $this->container['upgrade'];
    }

    /**
     * Sets upgrade
     *
     * @param \Swagger\Client\Model\ProductHeaderValue[] $upgrade upgrade
     *
     * @return $this
     */
    public function setUpgrade($upgrade)
    {
        $this->container['upgrade'] = $upgrade;

        return $this;
    }

    /**
     * Gets via
     *
     * @return \Swagger\Client\Model\ViaHeaderValue[]
     */
    public function getVia()
    {
        return $this->container['via'];
    }

    /**
     * Sets via
     *
     * @param \Swagger\Client\Model\ViaHeaderValue[] $via via
     *
     * @return $this
     */
    public function setVia($via)
    {
        $this->container['via'] = $via;

        return $this;
    }

    /**
     * Gets warning
     *
     * @return \Swagger\Client\Model\WarningHeaderValue[]
     */
    public function getWarning()
    {
        return $this->container['warning'];
    }

    /**
     * Sets warning
     *
     * @param \Swagger\Client\Model\WarningHeaderValue[] $warning warning
     *
     * @return $this
     */
    public function setWarning($warning)
    {
        $this->container['warning'] = $warning;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


