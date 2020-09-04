<?php
/**
 * Investigation
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
 * Investigation Class Doc Comment
 *
 * @category Class
 * @package  TeamCityClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Investigation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'investigation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'state' => 'string',
        'href' => 'string',
        'assignee' => '\TeamCityClient\Model\User',
        'assignment' => '\TeamCityClient\Model\Comment',
        'scope' => '\TeamCityClient\Model\ProblemScope',
        'target' => '\TeamCityClient\Model\ProblemTarget',
        'resolution' => '\TeamCityClient\Model\Resolution',
        'responsible' => '\TeamCityClient\Model\User'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'state' => null,
        'href' => null,
        'assignee' => null,
        'assignment' => null,
        'scope' => null,
        'target' => null,
        'resolution' => null,
        'responsible' => null
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
        'state' => 'state',
        'href' => 'href',
        'assignee' => 'assignee',
        'assignment' => 'assignment',
        'scope' => 'scope',
        'target' => 'target',
        'resolution' => 'resolution',
        'responsible' => 'responsible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'state' => 'setState',
        'href' => 'setHref',
        'assignee' => 'setAssignee',
        'assignment' => 'setAssignment',
        'scope' => 'setScope',
        'target' => 'setTarget',
        'resolution' => 'setResolution',
        'responsible' => 'setResponsible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'state' => 'getState',
        'href' => 'getHref',
        'assignee' => 'getAssignee',
        'assignment' => 'getAssignment',
        'scope' => 'getScope',
        'target' => 'getTarget',
        'resolution' => 'getResolution',
        'responsible' => 'getResponsible'
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['assignment'] = isset($data['assignment']) ? $data['assignment'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['responsible'] = isset($data['responsible']) ? $data['responsible'] : null;
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
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * Gets assignee
     *
     * @return \TeamCityClient\Model\User
     */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
     * Sets assignee
     *
     * @param \TeamCityClient\Model\User $assignee assignee
     *
     * @return $this
     */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;

        return $this;
    }

    /**
     * Gets assignment
     *
     * @return \TeamCityClient\Model\Comment
     */
    public function getAssignment()
    {
        return $this->container['assignment'];
    }

    /**
     * Sets assignment
     *
     * @param \TeamCityClient\Model\Comment $assignment assignment
     *
     * @return $this
     */
    public function setAssignment($assignment)
    {
        $this->container['assignment'] = $assignment;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return \TeamCityClient\Model\ProblemScope
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param \TeamCityClient\Model\ProblemScope $scope scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets target
     *
     * @return \TeamCityClient\Model\ProblemTarget
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param \TeamCityClient\Model\ProblemTarget $target target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return \TeamCityClient\Model\Resolution
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param \TeamCityClient\Model\Resolution $resolution resolution
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets responsible
     *
     * @return \TeamCityClient\Model\User
     */
    public function getResponsible()
    {
        return $this->container['responsible'];
    }

    /**
     * Sets responsible
     *
     * @param \TeamCityClient\Model\User $responsible responsible
     *
     * @return $this
     */
    public function setResponsible($responsible)
    {
        $this->container['responsible'] = $responsible;

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

