<?php
/**
 * NewBuildTypeDescription
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
 * NewBuildTypeDescription Class Doc Comment
 *
 * @category Class
 * @package  TeamCityClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NewBuildTypeDescription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'newBuildTypeDescription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'copy_all_associated_settings' => 'bool',
        'projects_ids_map' => '\TeamCityClient\Model\Properties',
        'build_types_ids_map' => '\TeamCityClient\Model\Properties',
        'vcs_roots_ids_map' => '\TeamCityClient\Model\Properties',
        'name' => 'string',
        'id' => 'string',
        'source_build_type_locator' => 'string',
        'source_build_type' => '\TeamCityClient\Model\BuildType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'copy_all_associated_settings' => null,
        'projects_ids_map' => null,
        'build_types_ids_map' => null,
        'vcs_roots_ids_map' => null,
        'name' => null,
        'id' => null,
        'source_build_type_locator' => null,
        'source_build_type' => null
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
        'copy_all_associated_settings' => 'copyAllAssociatedSettings',
        'projects_ids_map' => 'projectsIdsMap',
        'build_types_ids_map' => 'buildTypesIdsMap',
        'vcs_roots_ids_map' => 'vcsRootsIdsMap',
        'name' => 'name',
        'id' => 'id',
        'source_build_type_locator' => 'sourceBuildTypeLocator',
        'source_build_type' => 'sourceBuildType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'copy_all_associated_settings' => 'setCopyAllAssociatedSettings',
        'projects_ids_map' => 'setProjectsIdsMap',
        'build_types_ids_map' => 'setBuildTypesIdsMap',
        'vcs_roots_ids_map' => 'setVcsRootsIdsMap',
        'name' => 'setName',
        'id' => 'setId',
        'source_build_type_locator' => 'setSourceBuildTypeLocator',
        'source_build_type' => 'setSourceBuildType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'copy_all_associated_settings' => 'getCopyAllAssociatedSettings',
        'projects_ids_map' => 'getProjectsIdsMap',
        'build_types_ids_map' => 'getBuildTypesIdsMap',
        'vcs_roots_ids_map' => 'getVcsRootsIdsMap',
        'name' => 'getName',
        'id' => 'getId',
        'source_build_type_locator' => 'getSourceBuildTypeLocator',
        'source_build_type' => 'getSourceBuildType'
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
        $this->container['copy_all_associated_settings'] = isset($data['copy_all_associated_settings']) ? $data['copy_all_associated_settings'] : false;
        $this->container['projects_ids_map'] = isset($data['projects_ids_map']) ? $data['projects_ids_map'] : null;
        $this->container['build_types_ids_map'] = isset($data['build_types_ids_map']) ? $data['build_types_ids_map'] : null;
        $this->container['vcs_roots_ids_map'] = isset($data['vcs_roots_ids_map']) ? $data['vcs_roots_ids_map'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['source_build_type_locator'] = isset($data['source_build_type_locator']) ? $data['source_build_type_locator'] : null;
        $this->container['source_build_type'] = isset($data['source_build_type']) ? $data['source_build_type'] : null;
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
     * Gets copy_all_associated_settings
     *
     * @return bool
     */
    public function getCopyAllAssociatedSettings()
    {
        return $this->container['copy_all_associated_settings'];
    }

    /**
     * Sets copy_all_associated_settings
     *
     * @param bool $copy_all_associated_settings copy_all_associated_settings
     *
     * @return $this
     */
    public function setCopyAllAssociatedSettings($copy_all_associated_settings)
    {
        $this->container['copy_all_associated_settings'] = $copy_all_associated_settings;

        return $this;
    }

    /**
     * Gets projects_ids_map
     *
     * @return \TeamCityClient\Model\Properties
     */
    public function getProjectsIdsMap()
    {
        return $this->container['projects_ids_map'];
    }

    /**
     * Sets projects_ids_map
     *
     * @param \TeamCityClient\Model\Properties $projects_ids_map projects_ids_map
     *
     * @return $this
     */
    public function setProjectsIdsMap($projects_ids_map)
    {
        $this->container['projects_ids_map'] = $projects_ids_map;

        return $this;
    }

    /**
     * Gets build_types_ids_map
     *
     * @return \TeamCityClient\Model\Properties
     */
    public function getBuildTypesIdsMap()
    {
        return $this->container['build_types_ids_map'];
    }

    /**
     * Sets build_types_ids_map
     *
     * @param \TeamCityClient\Model\Properties $build_types_ids_map build_types_ids_map
     *
     * @return $this
     */
    public function setBuildTypesIdsMap($build_types_ids_map)
    {
        $this->container['build_types_ids_map'] = $build_types_ids_map;

        return $this;
    }

    /**
     * Gets vcs_roots_ids_map
     *
     * @return \TeamCityClient\Model\Properties
     */
    public function getVcsRootsIdsMap()
    {
        return $this->container['vcs_roots_ids_map'];
    }

    /**
     * Sets vcs_roots_ids_map
     *
     * @param \TeamCityClient\Model\Properties $vcs_roots_ids_map vcs_roots_ids_map
     *
     * @return $this
     */
    public function setVcsRootsIdsMap($vcs_roots_ids_map)
    {
        $this->container['vcs_roots_ids_map'] = $vcs_roots_ids_map;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
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
     * Gets source_build_type_locator
     *
     * @return string
     */
    public function getSourceBuildTypeLocator()
    {
        return $this->container['source_build_type_locator'];
    }

    /**
     * Sets source_build_type_locator
     *
     * @param string $source_build_type_locator source_build_type_locator
     *
     * @return $this
     */
    public function setSourceBuildTypeLocator($source_build_type_locator)
    {
        $this->container['source_build_type_locator'] = $source_build_type_locator;

        return $this;
    }

    /**
     * Gets source_build_type
     *
     * @return \TeamCityClient\Model\BuildType
     */
    public function getSourceBuildType()
    {
        return $this->container['source_build_type'];
    }

    /**
     * Sets source_build_type
     *
     * @param \TeamCityClient\Model\BuildType $source_build_type source_build_type
     *
     * @return $this
     */
    public function setSourceBuildType($source_build_type)
    {
        $this->container['source_build_type'] = $source_build_type;

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


