<?php
/**
 * GetIndustrySystemsCostIndice
 *
 * PHP version 5
 *
 * @category Class
 * @package  EveClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 1.11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EveClient\Model;

use \ArrayAccess;
use \EveClient\ObjectSerializer;

/**
 * GetIndustrySystemsCostIndice Class Doc Comment
 *
 * @category Class
 * @description cost_indice object
 * @package  EveClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetIndustrySystemsCostIndice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_industry_systems_cost_indice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activity' => 'string',
        'cost_index' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activity' => null,
        'cost_index' => 'float'
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
        'activity' => 'activity',
        'cost_index' => 'cost_index'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity' => 'setActivity',
        'cost_index' => 'setCostIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity' => 'getActivity',
        'cost_index' => 'getCostIndex'
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

    const ACTIVITY_COPYING = 'copying';
    const ACTIVITY_DUPLICATING = 'duplicating';
    const ACTIVITY_INVENTION = 'invention';
    const ACTIVITY_MANUFACTURING = 'manufacturing';
    const ACTIVITY_NONE = 'none';
    const ACTIVITY_REACTION = 'reaction';
    const ACTIVITY_RESEARCHING_MATERIAL_EFFICIENCY = 'researching_material_efficiency';
    const ACTIVITY_RESEARCHING_TECHNOLOGY = 'researching_technology';
    const ACTIVITY_RESEARCHING_TIME_EFFICIENCY = 'researching_time_efficiency';
    const ACTIVITY_REVERSE_ENGINEERING = 'reverse_engineering';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActivityAllowableValues()
    {
        return [
            self::ACTIVITY_COPYING,
            self::ACTIVITY_DUPLICATING,
            self::ACTIVITY_INVENTION,
            self::ACTIVITY_MANUFACTURING,
            self::ACTIVITY_NONE,
            self::ACTIVITY_REACTION,
            self::ACTIVITY_RESEARCHING_MATERIAL_EFFICIENCY,
            self::ACTIVITY_RESEARCHING_TECHNOLOGY,
            self::ACTIVITY_RESEARCHING_TIME_EFFICIENCY,
            self::ACTIVITY_REVERSE_ENGINEERING,
        ];
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
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['cost_index'] = isset($data['cost_index']) ? $data['cost_index'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
        $allowedValues = $this->getActivityAllowableValues();
        if (!is_null($this->container['activity']) && !in_array($this->container['activity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'activity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['cost_index'] === null) {
            $invalidProperties[] = "'cost_index' can't be null";
        }
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
     * Gets activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param string $activity activity string
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $allowedValues = $this->getActivityAllowableValues();
        if (!in_array($activity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'activity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets cost_index
     *
     * @return float
     */
    public function getCostIndex()
    {
        return $this->container['cost_index'];
    }

    /**
     * Sets cost_index
     *
     * @param float $cost_index cost_index number
     *
     * @return $this
     */
    public function setCostIndex($cost_index)
    {
        $this->container['cost_index'] = $cost_index;

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


