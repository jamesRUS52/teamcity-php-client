<?php
/**
 * BuildTriggeringOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  TeamCityClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TeamCity REST API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2018.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TeamCityClient\Model;

use \ArrayAccess;
use \TeamCityClient\ObjectSerializer;

/**
 * BuildTriggeringOptions Class Doc Comment
 *
 * @category Class
 * @package  TeamCityClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildTriggeringOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'buildTriggeringOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clean_sources' => 'bool',
        'clean_sources_in_all_dependencies' => 'bool',
        'rebuild_all_dependencies' => 'bool',
        'rebuild_failed_or_incomplete_dependencies' => 'bool',
        'queue_at_top' => 'bool',
        'freeze_settings' => 'bool',
        'tag_dependencies' => 'bool',
        'rebuild_dependencies' => '\TeamCityClient\Model\BuildTypes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clean_sources' => null,
        'clean_sources_in_all_dependencies' => null,
        'rebuild_all_dependencies' => null,
        'rebuild_failed_or_incomplete_dependencies' => null,
        'queue_at_top' => null,
        'freeze_settings' => null,
        'tag_dependencies' => null,
        'rebuild_dependencies' => null
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
        'clean_sources' => 'cleanSources',
        'clean_sources_in_all_dependencies' => 'cleanSourcesInAllDependencies',
        'rebuild_all_dependencies' => 'rebuildAllDependencies',
        'rebuild_failed_or_incomplete_dependencies' => 'rebuildFailedOrIncompleteDependencies',
        'queue_at_top' => 'queueAtTop',
        'freeze_settings' => 'freezeSettings',
        'tag_dependencies' => 'tagDependencies',
        'rebuild_dependencies' => 'rebuildDependencies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clean_sources' => 'setCleanSources',
        'clean_sources_in_all_dependencies' => 'setCleanSourcesInAllDependencies',
        'rebuild_all_dependencies' => 'setRebuildAllDependencies',
        'rebuild_failed_or_incomplete_dependencies' => 'setRebuildFailedOrIncompleteDependencies',
        'queue_at_top' => 'setQueueAtTop',
        'freeze_settings' => 'setFreezeSettings',
        'tag_dependencies' => 'setTagDependencies',
        'rebuild_dependencies' => 'setRebuildDependencies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clean_sources' => 'getCleanSources',
        'clean_sources_in_all_dependencies' => 'getCleanSourcesInAllDependencies',
        'rebuild_all_dependencies' => 'getRebuildAllDependencies',
        'rebuild_failed_or_incomplete_dependencies' => 'getRebuildFailedOrIncompleteDependencies',
        'queue_at_top' => 'getQueueAtTop',
        'freeze_settings' => 'getFreezeSettings',
        'tag_dependencies' => 'getTagDependencies',
        'rebuild_dependencies' => 'getRebuildDependencies'
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
        $this->container['clean_sources'] = isset($data['clean_sources']) ? $data['clean_sources'] : false;
        $this->container['clean_sources_in_all_dependencies'] = isset($data['clean_sources_in_all_dependencies']) ? $data['clean_sources_in_all_dependencies'] : false;
        $this->container['rebuild_all_dependencies'] = isset($data['rebuild_all_dependencies']) ? $data['rebuild_all_dependencies'] : false;
        $this->container['rebuild_failed_or_incomplete_dependencies'] = isset($data['rebuild_failed_or_incomplete_dependencies']) ? $data['rebuild_failed_or_incomplete_dependencies'] : false;
        $this->container['queue_at_top'] = isset($data['queue_at_top']) ? $data['queue_at_top'] : false;
        $this->container['freeze_settings'] = isset($data['freeze_settings']) ? $data['freeze_settings'] : false;
        $this->container['tag_dependencies'] = isset($data['tag_dependencies']) ? $data['tag_dependencies'] : false;
        $this->container['rebuild_dependencies'] = isset($data['rebuild_dependencies']) ? $data['rebuild_dependencies'] : null;
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
     * Gets clean_sources
     *
     * @return bool
     */
    public function getCleanSources()
    {
        return $this->container['clean_sources'];
    }

    /**
     * Sets clean_sources
     *
     * @param bool $clean_sources clean_sources
     *
     * @return $this
     */
    public function setCleanSources($clean_sources)
    {
        $this->container['clean_sources'] = $clean_sources;

        return $this;
    }

    /**
     * Gets clean_sources_in_all_dependencies
     *
     * @return bool
     */
    public function getCleanSourcesInAllDependencies()
    {
        return $this->container['clean_sources_in_all_dependencies'];
    }

    /**
     * Sets clean_sources_in_all_dependencies
     *
     * @param bool $clean_sources_in_all_dependencies clean_sources_in_all_dependencies
     *
     * @return $this
     */
    public function setCleanSourcesInAllDependencies($clean_sources_in_all_dependencies)
    {
        $this->container['clean_sources_in_all_dependencies'] = $clean_sources_in_all_dependencies;

        return $this;
    }

    /**
     * Gets rebuild_all_dependencies
     *
     * @return bool
     */
    public function getRebuildAllDependencies()
    {
        return $this->container['rebuild_all_dependencies'];
    }

    /**
     * Sets rebuild_all_dependencies
     *
     * @param bool $rebuild_all_dependencies rebuild_all_dependencies
     *
     * @return $this
     */
    public function setRebuildAllDependencies($rebuild_all_dependencies)
    {
        $this->container['rebuild_all_dependencies'] = $rebuild_all_dependencies;

        return $this;
    }

    /**
     * Gets rebuild_failed_or_incomplete_dependencies
     *
     * @return bool
     */
    public function getRebuildFailedOrIncompleteDependencies()
    {
        return $this->container['rebuild_failed_or_incomplete_dependencies'];
    }

    /**
     * Sets rebuild_failed_or_incomplete_dependencies
     *
     * @param bool $rebuild_failed_or_incomplete_dependencies rebuild_failed_or_incomplete_dependencies
     *
     * @return $this
     */
    public function setRebuildFailedOrIncompleteDependencies($rebuild_failed_or_incomplete_dependencies)
    {
        $this->container['rebuild_failed_or_incomplete_dependencies'] = $rebuild_failed_or_incomplete_dependencies;

        return $this;
    }

    /**
     * Gets queue_at_top
     *
     * @return bool
     */
    public function getQueueAtTop()
    {
        return $this->container['queue_at_top'];
    }

    /**
     * Sets queue_at_top
     *
     * @param bool $queue_at_top queue_at_top
     *
     * @return $this
     */
    public function setQueueAtTop($queue_at_top)
    {
        $this->container['queue_at_top'] = $queue_at_top;

        return $this;
    }

    /**
     * Gets freeze_settings
     *
     * @return bool
     */
    public function getFreezeSettings()
    {
        return $this->container['freeze_settings'];
    }

    /**
     * Sets freeze_settings
     *
     * @param bool $freeze_settings freeze_settings
     *
     * @return $this
     */
    public function setFreezeSettings($freeze_settings)
    {
        $this->container['freeze_settings'] = $freeze_settings;

        return $this;
    }

    /**
     * Gets tag_dependencies
     *
     * @return bool
     */
    public function getTagDependencies()
    {
        return $this->container['tag_dependencies'];
    }

    /**
     * Sets tag_dependencies
     *
     * @param bool $tag_dependencies tag_dependencies
     *
     * @return $this
     */
    public function setTagDependencies($tag_dependencies)
    {
        $this->container['tag_dependencies'] = $tag_dependencies;

        return $this;
    }

    /**
     * Gets rebuild_dependencies
     *
     * @return \TeamCityClient\Model\BuildTypes
     */
    public function getRebuildDependencies()
    {
        return $this->container['rebuild_dependencies'];
    }

    /**
     * Sets rebuild_dependencies
     *
     * @param \TeamCityClient\Model\BuildTypes $rebuild_dependencies rebuild_dependencies
     *
     * @return $this
     */
    public function setRebuildDependencies($rebuild_dependencies)
    {
        $this->container['rebuild_dependencies'] = $rebuild_dependencies;

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


