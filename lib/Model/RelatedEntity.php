<?php
/**
 * RelatedEntity
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
 * RelatedEntity Class Doc Comment
 *
 * @category Class
 * @package  TeamCityClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RelatedEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'relatedEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'unknown' => 'bool',
        'internal_id' => 'string',
        'text' => 'string',
        'build' => '\TeamCityClient\Model\Build',
        'build_type' => '\TeamCityClient\Model\BuildType',
        'project' => '\TeamCityClient\Model\Project',
        'user' => '\TeamCityClient\Model\User',
        'group' => '\TeamCityClient\Model\Group',
        'test' => '\TeamCityClient\Model\Test',
        'problem' => '\TeamCityClient\Model\Problem',
        'agent' => '\TeamCityClient\Model\Agent',
        'vcs_root' => '\TeamCityClient\Model\VcsRoot',
        'change' => '\TeamCityClient\Model\Change',
        'agent_pool' => '\TeamCityClient\Model\AgentPool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'unknown' => null,
        'internal_id' => null,
        'text' => null,
        'build' => null,
        'build_type' => null,
        'project' => null,
        'user' => null,
        'group' => null,
        'test' => null,
        'problem' => null,
        'agent' => null,
        'vcs_root' => null,
        'change' => null,
        'agent_pool' => null
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
        'type' => 'type',
        'unknown' => 'unknown',
        'internal_id' => 'internalId',
        'text' => 'text',
        'build' => 'build',
        'build_type' => 'buildType',
        'project' => 'project',
        'user' => 'user',
        'group' => 'group',
        'test' => 'test',
        'problem' => 'problem',
        'agent' => 'agent',
        'vcs_root' => 'vcsRoot',
        'change' => 'change',
        'agent_pool' => 'agentPool'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'unknown' => 'setUnknown',
        'internal_id' => 'setInternalId',
        'text' => 'setText',
        'build' => 'setBuild',
        'build_type' => 'setBuildType',
        'project' => 'setProject',
        'user' => 'setUser',
        'group' => 'setGroup',
        'test' => 'setTest',
        'problem' => 'setProblem',
        'agent' => 'setAgent',
        'vcs_root' => 'setVcsRoot',
        'change' => 'setChange',
        'agent_pool' => 'setAgentPool'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'unknown' => 'getUnknown',
        'internal_id' => 'getInternalId',
        'text' => 'getText',
        'build' => 'getBuild',
        'build_type' => 'getBuildType',
        'project' => 'getProject',
        'user' => 'getUser',
        'group' => 'getGroup',
        'test' => 'getTest',
        'problem' => 'getProblem',
        'agent' => 'getAgent',
        'vcs_root' => 'getVcsRoot',
        'change' => 'getChange',
        'agent_pool' => 'getAgentPool'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unknown'] = isset($data['unknown']) ? $data['unknown'] : false;
        $this->container['internal_id'] = isset($data['internal_id']) ? $data['internal_id'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['build'] = isset($data['build']) ? $data['build'] : null;
        $this->container['build_type'] = isset($data['build_type']) ? $data['build_type'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['test'] = isset($data['test']) ? $data['test'] : null;
        $this->container['problem'] = isset($data['problem']) ? $data['problem'] : null;
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['vcs_root'] = isset($data['vcs_root']) ? $data['vcs_root'] : null;
        $this->container['change'] = isset($data['change']) ? $data['change'] : null;
        $this->container['agent_pool'] = isset($data['agent_pool']) ? $data['agent_pool'] : null;
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
     * Gets unknown
     *
     * @return bool
     */
    public function getUnknown()
    {
        return $this->container['unknown'];
    }

    /**
     * Sets unknown
     *
     * @param bool $unknown unknown
     *
     * @return $this
     */
    public function setUnknown($unknown)
    {
        $this->container['unknown'] = $unknown;

        return $this;
    }

    /**
     * Gets internal_id
     *
     * @return string
     */
    public function getInternalId()
    {
        return $this->container['internal_id'];
    }

    /**
     * Sets internal_id
     *
     * @param string $internal_id internal_id
     *
     * @return $this
     */
    public function setInternalId($internal_id)
    {
        $this->container['internal_id'] = $internal_id;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets build
     *
     * @return \TeamCityClient\Model\Build
     */
    public function getBuild()
    {
        return $this->container['build'];
    }

    /**
     * Sets build
     *
     * @param \TeamCityClient\Model\Build $build build
     *
     * @return $this
     */
    public function setBuild($build)
    {
        $this->container['build'] = $build;

        return $this;
    }

    /**
     * Gets build_type
     *
     * @return \TeamCityClient\Model\BuildType
     */
    public function getBuildType()
    {
        return $this->container['build_type'];
    }

    /**
     * Sets build_type
     *
     * @param \TeamCityClient\Model\BuildType $build_type build_type
     *
     * @return $this
     */
    public function setBuildType($build_type)
    {
        $this->container['build_type'] = $build_type;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \TeamCityClient\Model\Project
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \TeamCityClient\Model\Project $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \TeamCityClient\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \TeamCityClient\Model\User $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \TeamCityClient\Model\Group
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \TeamCityClient\Model\Group $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets test
     *
     * @return \TeamCityClient\Model\Test
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     *
     * @param \TeamCityClient\Model\Test $test test
     *
     * @return $this
     */
    public function setTest($test)
    {
        $this->container['test'] = $test;

        return $this;
    }

    /**
     * Gets problem
     *
     * @return \TeamCityClient\Model\Problem
     */
    public function getProblem()
    {
        return $this->container['problem'];
    }

    /**
     * Sets problem
     *
     * @param \TeamCityClient\Model\Problem $problem problem
     *
     * @return $this
     */
    public function setProblem($problem)
    {
        $this->container['problem'] = $problem;

        return $this;
    }

    /**
     * Gets agent
     *
     * @return \TeamCityClient\Model\Agent
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param \TeamCityClient\Model\Agent $agent agent
     *
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets vcs_root
     *
     * @return \TeamCityClient\Model\VcsRoot
     */
    public function getVcsRoot()
    {
        return $this->container['vcs_root'];
    }

    /**
     * Sets vcs_root
     *
     * @param \TeamCityClient\Model\VcsRoot $vcs_root vcs_root
     *
     * @return $this
     */
    public function setVcsRoot($vcs_root)
    {
        $this->container['vcs_root'] = $vcs_root;

        return $this;
    }

    /**
     * Gets change
     *
     * @return \TeamCityClient\Model\Change
     */
    public function getChange()
    {
        return $this->container['change'];
    }

    /**
     * Sets change
     *
     * @param \TeamCityClient\Model\Change $change change
     *
     * @return $this
     */
    public function setChange($change)
    {
        $this->container['change'] = $change;

        return $this;
    }

    /**
     * Gets agent_pool
     *
     * @return \TeamCityClient\Model\AgentPool
     */
    public function getAgentPool()
    {
        return $this->container['agent_pool'];
    }

    /**
     * Sets agent_pool
     *
     * @param \TeamCityClient\Model\AgentPool $agent_pool agent_pool
     *
     * @return $this
     */
    public function setAgentPool($agent_pool)
    {
        $this->container['agent_pool'] = $agent_pool;

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

