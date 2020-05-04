<?php
/**
 * GetCorporationsCorporationIdIndustryJobs200Ok
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
 * OpenAPI spec version: 1.3.8
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
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
 * GetCorporationsCorporationIdIndustryJobs200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  EveClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdIndustryJobs200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_industry_jobs_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activity_id' => 'int',
        'blueprint_id' => 'int',
        'blueprint_location_id' => 'int',
        'blueprint_type_id' => 'int',
        'completed_character_id' => 'int',
        'completed_date' => '\DateTime',
        'cost' => 'double',
        'duration' => 'int',
        'end_date' => '\DateTime',
        'facility_id' => 'int',
        'installer_id' => 'int',
        'job_id' => 'int',
        'licensed_runs' => 'int',
        'location_id' => 'int',
        'output_location_id' => 'int',
        'pause_date' => '\DateTime',
        'probability' => 'float',
        'product_type_id' => 'int',
        'runs' => 'int',
        'start_date' => '\DateTime',
        'status' => 'string',
        'successful_runs' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activity_id' => 'int32',
        'blueprint_id' => 'int64',
        'blueprint_location_id' => 'int64',
        'blueprint_type_id' => 'int32',
        'completed_character_id' => 'int32',
        'completed_date' => 'date-time',
        'cost' => 'double',
        'duration' => 'int32',
        'end_date' => 'date-time',
        'facility_id' => 'int64',
        'installer_id' => 'int32',
        'job_id' => 'int32',
        'licensed_runs' => 'int32',
        'location_id' => 'int64',
        'output_location_id' => 'int64',
        'pause_date' => 'date-time',
        'probability' => 'float',
        'product_type_id' => 'int32',
        'runs' => 'int32',
        'start_date' => 'date-time',
        'status' => null,
        'successful_runs' => 'int32'
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
        'activity_id' => 'activity_id',
        'blueprint_id' => 'blueprint_id',
        'blueprint_location_id' => 'blueprint_location_id',
        'blueprint_type_id' => 'blueprint_type_id',
        'completed_character_id' => 'completed_character_id',
        'completed_date' => 'completed_date',
        'cost' => 'cost',
        'duration' => 'duration',
        'end_date' => 'end_date',
        'facility_id' => 'facility_id',
        'installer_id' => 'installer_id',
        'job_id' => 'job_id',
        'licensed_runs' => 'licensed_runs',
        'location_id' => 'location_id',
        'output_location_id' => 'output_location_id',
        'pause_date' => 'pause_date',
        'probability' => 'probability',
        'product_type_id' => 'product_type_id',
        'runs' => 'runs',
        'start_date' => 'start_date',
        'status' => 'status',
        'successful_runs' => 'successful_runs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity_id' => 'setActivityId',
        'blueprint_id' => 'setBlueprintId',
        'blueprint_location_id' => 'setBlueprintLocationId',
        'blueprint_type_id' => 'setBlueprintTypeId',
        'completed_character_id' => 'setCompletedCharacterId',
        'completed_date' => 'setCompletedDate',
        'cost' => 'setCost',
        'duration' => 'setDuration',
        'end_date' => 'setEndDate',
        'facility_id' => 'setFacilityId',
        'installer_id' => 'setInstallerId',
        'job_id' => 'setJobId',
        'licensed_runs' => 'setLicensedRuns',
        'location_id' => 'setLocationId',
        'output_location_id' => 'setOutputLocationId',
        'pause_date' => 'setPauseDate',
        'probability' => 'setProbability',
        'product_type_id' => 'setProductTypeId',
        'runs' => 'setRuns',
        'start_date' => 'setStartDate',
        'status' => 'setStatus',
        'successful_runs' => 'setSuccessfulRuns'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity_id' => 'getActivityId',
        'blueprint_id' => 'getBlueprintId',
        'blueprint_location_id' => 'getBlueprintLocationId',
        'blueprint_type_id' => 'getBlueprintTypeId',
        'completed_character_id' => 'getCompletedCharacterId',
        'completed_date' => 'getCompletedDate',
        'cost' => 'getCost',
        'duration' => 'getDuration',
        'end_date' => 'getEndDate',
        'facility_id' => 'getFacilityId',
        'installer_id' => 'getInstallerId',
        'job_id' => 'getJobId',
        'licensed_runs' => 'getLicensedRuns',
        'location_id' => 'getLocationId',
        'output_location_id' => 'getOutputLocationId',
        'pause_date' => 'getPauseDate',
        'probability' => 'getProbability',
        'product_type_id' => 'getProductTypeId',
        'runs' => 'getRuns',
        'start_date' => 'getStartDate',
        'status' => 'getStatus',
        'successful_runs' => 'getSuccessfulRuns'
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

    const STATUS_ACTIVE = 'active';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_DELIVERED = 'delivered';
    const STATUS_PAUSED = 'paused';
    const STATUS_READY = 'ready';
    const STATUS_REVERTED = 'reverted';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_CANCELLED,
            self::STATUS_DELIVERED,
            self::STATUS_PAUSED,
            self::STATUS_READY,
            self::STATUS_REVERTED,
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
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['blueprint_id'] = isset($data['blueprint_id']) ? $data['blueprint_id'] : null;
        $this->container['blueprint_location_id'] = isset($data['blueprint_location_id']) ? $data['blueprint_location_id'] : null;
        $this->container['blueprint_type_id'] = isset($data['blueprint_type_id']) ? $data['blueprint_type_id'] : null;
        $this->container['completed_character_id'] = isset($data['completed_character_id']) ? $data['completed_character_id'] : null;
        $this->container['completed_date'] = isset($data['completed_date']) ? $data['completed_date'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['facility_id'] = isset($data['facility_id']) ? $data['facility_id'] : null;
        $this->container['installer_id'] = isset($data['installer_id']) ? $data['installer_id'] : null;
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['licensed_runs'] = isset($data['licensed_runs']) ? $data['licensed_runs'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['output_location_id'] = isset($data['output_location_id']) ? $data['output_location_id'] : null;
        $this->container['pause_date'] = isset($data['pause_date']) ? $data['pause_date'] : null;
        $this->container['probability'] = isset($data['probability']) ? $data['probability'] : null;
        $this->container['product_type_id'] = isset($data['product_type_id']) ? $data['product_type_id'] : null;
        $this->container['runs'] = isset($data['runs']) ? $data['runs'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['successful_runs'] = isset($data['successful_runs']) ? $data['successful_runs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['activity_id'] === null) {
            $invalidProperties[] = "'activity_id' can't be null";
        }
        if ($this->container['blueprint_id'] === null) {
            $invalidProperties[] = "'blueprint_id' can't be null";
        }
        if ($this->container['blueprint_location_id'] === null) {
            $invalidProperties[] = "'blueprint_location_id' can't be null";
        }
        if ($this->container['blueprint_type_id'] === null) {
            $invalidProperties[] = "'blueprint_type_id' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['facility_id'] === null) {
            $invalidProperties[] = "'facility_id' can't be null";
        }
        if ($this->container['installer_id'] === null) {
            $invalidProperties[] = "'installer_id' can't be null";
        }
        if ($this->container['job_id'] === null) {
            $invalidProperties[] = "'job_id' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['output_location_id'] === null) {
            $invalidProperties[] = "'output_location_id' can't be null";
        }
        if ($this->container['runs'] === null) {
            $invalidProperties[] = "'runs' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets activity_id
     *
     * @return int
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     *
     * @param int $activity_id Job activity ID
     *
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets blueprint_id
     *
     * @return int
     */
    public function getBlueprintId()
    {
        return $this->container['blueprint_id'];
    }

    /**
     * Sets blueprint_id
     *
     * @param int $blueprint_id blueprint_id integer
     *
     * @return $this
     */
    public function setBlueprintId($blueprint_id)
    {
        $this->container['blueprint_id'] = $blueprint_id;

        return $this;
    }

    /**
     * Gets blueprint_location_id
     *
     * @return int
     */
    public function getBlueprintLocationId()
    {
        return $this->container['blueprint_location_id'];
    }

    /**
     * Sets blueprint_location_id
     *
     * @param int $blueprint_location_id Location ID of the location from which the blueprint was installed. Normally a station ID, but can also be an asset (e.g. container) or corporation facility
     *
     * @return $this
     */
    public function setBlueprintLocationId($blueprint_location_id)
    {
        $this->container['blueprint_location_id'] = $blueprint_location_id;

        return $this;
    }

    /**
     * Gets blueprint_type_id
     *
     * @return int
     */
    public function getBlueprintTypeId()
    {
        return $this->container['blueprint_type_id'];
    }

    /**
     * Sets blueprint_type_id
     *
     * @param int $blueprint_type_id blueprint_type_id integer
     *
     * @return $this
     */
    public function setBlueprintTypeId($blueprint_type_id)
    {
        $this->container['blueprint_type_id'] = $blueprint_type_id;

        return $this;
    }

    /**
     * Gets completed_character_id
     *
     * @return int
     */
    public function getCompletedCharacterId()
    {
        return $this->container['completed_character_id'];
    }

    /**
     * Sets completed_character_id
     *
     * @param int $completed_character_id ID of the character which completed this job
     *
     * @return $this
     */
    public function setCompletedCharacterId($completed_character_id)
    {
        $this->container['completed_character_id'] = $completed_character_id;

        return $this;
    }

    /**
     * Gets completed_date
     *
     * @return \DateTime
     */
    public function getCompletedDate()
    {
        return $this->container['completed_date'];
    }

    /**
     * Sets completed_date
     *
     * @param \DateTime $completed_date Date and time when this job was completed
     *
     * @return $this
     */
    public function setCompletedDate($completed_date)
    {
        $this->container['completed_date'] = $completed_date;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return double
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param double $cost The sume of job installation fee and industry facility tax
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Job duration in seconds
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date Date and time when this job finished
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets facility_id
     *
     * @return int
     */
    public function getFacilityId()
    {
        return $this->container['facility_id'];
    }

    /**
     * Sets facility_id
     *
     * @param int $facility_id ID of the facility where this job is running
     *
     * @return $this
     */
    public function setFacilityId($facility_id)
    {
        $this->container['facility_id'] = $facility_id;

        return $this;
    }

    /**
     * Gets installer_id
     *
     * @return int
     */
    public function getInstallerId()
    {
        return $this->container['installer_id'];
    }

    /**
     * Sets installer_id
     *
     * @param int $installer_id ID of the character which installed this job
     *
     * @return $this
     */
    public function setInstallerId($installer_id)
    {
        $this->container['installer_id'] = $installer_id;

        return $this;
    }

    /**
     * Gets job_id
     *
     * @return int
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     *
     * @param int $job_id Unique job ID
     *
     * @return $this
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets licensed_runs
     *
     * @return int
     */
    public function getLicensedRuns()
    {
        return $this->container['licensed_runs'];
    }

    /**
     * Sets licensed_runs
     *
     * @param int $licensed_runs Number of runs blueprint is licensed for
     *
     * @return $this
     */
    public function setLicensedRuns($licensed_runs)
    {
        $this->container['licensed_runs'] = $licensed_runs;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id ID of the location for the industry facility
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets output_location_id
     *
     * @return int
     */
    public function getOutputLocationId()
    {
        return $this->container['output_location_id'];
    }

    /**
     * Sets output_location_id
     *
     * @param int $output_location_id Location ID of the location to which the output of the job will be delivered. Normally a station ID, but can also be a corporation facility
     *
     * @return $this
     */
    public function setOutputLocationId($output_location_id)
    {
        $this->container['output_location_id'] = $output_location_id;

        return $this;
    }

    /**
     * Gets pause_date
     *
     * @return \DateTime
     */
    public function getPauseDate()
    {
        return $this->container['pause_date'];
    }

    /**
     * Sets pause_date
     *
     * @param \DateTime $pause_date Date and time when this job was paused (i.e. time when the facility where this job was installed went offline)
     *
     * @return $this
     */
    public function setPauseDate($pause_date)
    {
        $this->container['pause_date'] = $pause_date;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return float
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param float $probability Chance of success for invention
     *
     * @return $this
     */
    public function setProbability($probability)
    {
        $this->container['probability'] = $probability;

        return $this;
    }

    /**
     * Gets product_type_id
     *
     * @return int
     */
    public function getProductTypeId()
    {
        return $this->container['product_type_id'];
    }

    /**
     * Sets product_type_id
     *
     * @param int $product_type_id Type ID of product (manufactured, copied or invented)
     *
     * @return $this
     */
    public function setProductTypeId($product_type_id)
    {
        $this->container['product_type_id'] = $product_type_id;

        return $this;
    }

    /**
     * Gets runs
     *
     * @return int
     */
    public function getRuns()
    {
        return $this->container['runs'];
    }

    /**
     * Sets runs
     *
     * @param int $runs Number of runs for a manufacturing job, or number of copies to make for a blueprint copy
     *
     * @return $this
     */
    public function setRuns($runs)
    {
        $this->container['runs'] = $runs;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Date and time when this job started
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status string
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets successful_runs
     *
     * @return int
     */
    public function getSuccessfulRuns()
    {
        return $this->container['successful_runs'];
    }

    /**
     * Sets successful_runs
     *
     * @param int $successful_runs Number of successful runs for this job. Equal to runs unless this is an invention job
     *
     * @return $this
     */
    public function setSuccessfulRuns($successful_runs)
    {
        $this->container['successful_runs'] = $successful_runs;

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


