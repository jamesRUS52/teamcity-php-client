<?php
/**
 * Problem
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
 * Problem Class Doc Comment
 *
 * @category Class
 * @package  TeamCityClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Problem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'problem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'type' => 'string',
        'identity' => 'string',
        'href' => 'string',
        'description' => 'string',
        'mutes' => '\TeamCityClient\Model\Mutes',
        'investigations' => '\TeamCityClient\Model\Investigations',
        'problem_occurrences' => '\TeamCityClient\Model\ProblemOccurrences',
        'locator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'type' => null,
        'identity' => null,
        'href' => null,
        'description' => null,
        'mutes' => null,
        'investigations' => null,
        'problem_occurrences' => null,
        'locator' => null
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
        'id' => 'id',
        'type' => 'type',
        'identity' => 'identity',
        'href' => 'href',
        'description' => 'description',
        'mutes' => 'mutes',
        'investigations' => 'investigations',
        'problem_occurrences' => 'problemOccurrences',
        'locator' => 'locator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'identity' => 'setIdentity',
        'href' => 'setHref',
        'description' => 'setDescription',
        'mutes' => 'setMutes',
        'investigations' => 'setInvestigations',
        'problem_occurrences' => 'setProblemOccurrences',
        'locator' => 'setLocator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'identity' => 'getIdentity',
        'href' => 'getHref',
        'description' => 'getDescription',
        'mutes' => 'getMutes',
        'investigations' => 'getInvestigations',
        'problem_occurrences' => 'getProblemOccurrences',
        'locator' => 'getLocator'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['mutes'] = isset($data['mutes']) ? $data['mutes'] : null;
        $this->container['investigations'] = isset($data['investigations']) ? $data['investigations'] : null;
        $this->container['problem_occurrences'] = isset($data['problem_occurrences']) ? $data['problem_occurrences'] : null;
        $this->container['locator'] = isset($data['locator']) ? $data['locator'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return string
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param string $identity identity
     *
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string $href href
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets mutes
     *
     * @return \TeamCityClient\Model\Mutes
     */
    public function getMutes()
    {
        return $this->container['mutes'];
    }

    /**
     * Sets mutes
     *
     * @param \TeamCityClient\Model\Mutes $mutes mutes
     *
     * @return $this
     */
    public function setMutes($mutes)
    {
        $this->container['mutes'] = $mutes;

        return $this;
    }

    /**
     * Gets investigations
     *
     * @return \TeamCityClient\Model\Investigations
     */
    public function getInvestigations()
    {
        return $this->container['investigations'];
    }

    /**
     * Sets investigations
     *
     * @param \TeamCityClient\Model\Investigations $investigations investigations
     *
     * @return $this
     */
    public function setInvestigations($investigations)
    {
        $this->container['investigations'] = $investigations;

        return $this;
    }

    /**
     * Gets problem_occurrences
     *
     * @return \TeamCityClient\Model\ProblemOccurrences
     */
    public function getProblemOccurrences()
    {
        return $this->container['problem_occurrences'];
    }

    /**
     * Sets problem_occurrences
     *
     * @param \TeamCityClient\Model\ProblemOccurrences $problem_occurrences problem_occurrences
     *
     * @return $this
     */
    public function setProblemOccurrences($problem_occurrences)
    {
        $this->container['problem_occurrences'] = $problem_occurrences;

        return $this;
    }

    /**
     * Gets locator
     *
     * @return string
     */
    public function getLocator()
    {
        return $this->container['locator'];
    }

    /**
     * Sets locator
     *
     * @param string $locator locator
     *
     * @return $this
     */
    public function setLocator($locator)
    {
        $this->container['locator'] = $locator;

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


