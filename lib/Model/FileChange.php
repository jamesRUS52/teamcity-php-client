<?php
/**
 * FileChange
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
 * FileChange Class Doc Comment
 *
 * @category Class
 * @package  TeamCityClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileChange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FileChange';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'before_revision' => 'string',
        'after_revision' => 'string',
        'change_type' => 'string',
        'change_type_comment' => 'string',
        'file' => 'string',
        'relative_file' => 'string',
        'directory' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'before_revision' => null,
        'after_revision' => null,
        'change_type' => null,
        'change_type_comment' => null,
        'file' => null,
        'relative_file' => null,
        'directory' => null
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
        'before_revision' => 'before-revision',
        'after_revision' => 'after-revision',
        'change_type' => 'changeType',
        'change_type_comment' => 'changeTypeComment',
        'file' => 'file',
        'relative_file' => 'relative-file',
        'directory' => 'directory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'before_revision' => 'setBeforeRevision',
        'after_revision' => 'setAfterRevision',
        'change_type' => 'setChangeType',
        'change_type_comment' => 'setChangeTypeComment',
        'file' => 'setFile',
        'relative_file' => 'setRelativeFile',
        'directory' => 'setDirectory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'before_revision' => 'getBeforeRevision',
        'after_revision' => 'getAfterRevision',
        'change_type' => 'getChangeType',
        'change_type_comment' => 'getChangeTypeComment',
        'file' => 'getFile',
        'relative_file' => 'getRelativeFile',
        'directory' => 'getDirectory'
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
        $this->container['before_revision'] = isset($data['before_revision']) ? $data['before_revision'] : null;
        $this->container['after_revision'] = isset($data['after_revision']) ? $data['after_revision'] : null;
        $this->container['change_type'] = isset($data['change_type']) ? $data['change_type'] : null;
        $this->container['change_type_comment'] = isset($data['change_type_comment']) ? $data['change_type_comment'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['relative_file'] = isset($data['relative_file']) ? $data['relative_file'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : false;
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
     * Gets before_revision
     *
     * @return string
     */
    public function getBeforeRevision()
    {
        return $this->container['before_revision'];
    }

    /**
     * Sets before_revision
     *
     * @param string $before_revision before_revision
     *
     * @return $this
     */
    public function setBeforeRevision($before_revision)
    {
        $this->container['before_revision'] = $before_revision;

        return $this;
    }

    /**
     * Gets after_revision
     *
     * @return string
     */
    public function getAfterRevision()
    {
        return $this->container['after_revision'];
    }

    /**
     * Sets after_revision
     *
     * @param string $after_revision after_revision
     *
     * @return $this
     */
    public function setAfterRevision($after_revision)
    {
        $this->container['after_revision'] = $after_revision;

        return $this;
    }

    /**
     * Gets change_type
     *
     * @return string
     */
    public function getChangeType()
    {
        return $this->container['change_type'];
    }

    /**
     * Sets change_type
     *
     * @param string $change_type change_type
     *
     * @return $this
     */
    public function setChangeType($change_type)
    {
        $this->container['change_type'] = $change_type;

        return $this;
    }

    /**
     * Gets change_type_comment
     *
     * @return string
     */
    public function getChangeTypeComment()
    {
        return $this->container['change_type_comment'];
    }

    /**
     * Sets change_type_comment
     *
     * @param string $change_type_comment change_type_comment
     *
     * @return $this
     */
    public function setChangeTypeComment($change_type_comment)
    {
        $this->container['change_type_comment'] = $change_type_comment;

        return $this;
    }

    /**
     * Gets file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string $file file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets relative_file
     *
     * @return string
     */
    public function getRelativeFile()
    {
        return $this->container['relative_file'];
    }

    /**
     * Sets relative_file
     *
     * @param string $relative_file relative_file
     *
     * @return $this
     */
    public function setRelativeFile($relative_file)
    {
        $this->container['relative_file'] = $relative_file;

        return $this;
    }

    /**
     * Gets directory
     *
     * @return bool
     */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
     * Sets directory
     *
     * @param bool $directory directory
     *
     * @return $this
     */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;

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


