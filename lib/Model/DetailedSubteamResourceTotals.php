<?php
/**
 * DetailedSubteamResourceTotals
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  WhatPulse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * WhatPulse API
 *
 * Public API for WhatPulse user data access. This API allows authenticated users to access their own data and public data from other users, depending on privacy settings.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace WhatPulse\Model;

use \ArrayAccess;
use \WhatPulse\ObjectSerializer;

/**
 * DetailedSubteamResourceTotals Class Doc Comment
 *
 * @category Class
 * @package  WhatPulse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DetailedSubteamResourceTotals implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DetailedSubteamResource_totals';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'members_count' => 'int',
        'keys' => 'int',
        'clicks' => 'int',
        'scrolls' => 'int',
        'distance_miles' => 'float',
        'download_mb' => 'float',
        'upload_mb' => 'float',
        'uptime_seconds' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'members_count' => null,
        'keys' => null,
        'clicks' => null,
        'scrolls' => null,
        'distance_miles' => null,
        'download_mb' => null,
        'upload_mb' => null,
        'uptime_seconds' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'members_count' => false,
        'keys' => false,
        'clicks' => false,
        'scrolls' => false,
        'distance_miles' => false,
        'download_mb' => false,
        'upload_mb' => false,
        'uptime_seconds' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'members_count' => 'members_count',
        'keys' => 'keys',
        'clicks' => 'clicks',
        'scrolls' => 'scrolls',
        'distance_miles' => 'distance_miles',
        'download_mb' => 'download_mb',
        'upload_mb' => 'upload_mb',
        'uptime_seconds' => 'uptime_seconds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'members_count' => 'setMembersCount',
        'keys' => 'setKeys',
        'clicks' => 'setClicks',
        'scrolls' => 'setScrolls',
        'distance_miles' => 'setDistanceMiles',
        'download_mb' => 'setDownloadMb',
        'upload_mb' => 'setUploadMb',
        'uptime_seconds' => 'setUptimeSeconds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'members_count' => 'getMembersCount',
        'keys' => 'getKeys',
        'clicks' => 'getClicks',
        'scrolls' => 'getScrolls',
        'distance_miles' => 'getDistanceMiles',
        'download_mb' => 'getDownloadMb',
        'upload_mb' => 'getUploadMb',
        'uptime_seconds' => 'getUptimeSeconds'
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
        return self::$openAPIModelName;
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('members_count', $data ?? [], null);
        $this->setIfExists('keys', $data ?? [], null);
        $this->setIfExists('clicks', $data ?? [], null);
        $this->setIfExists('scrolls', $data ?? [], null);
        $this->setIfExists('distance_miles', $data ?? [], null);
        $this->setIfExists('download_mb', $data ?? [], null);
        $this->setIfExists('upload_mb', $data ?? [], null);
        $this->setIfExists('uptime_seconds', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['members_count'] === null) {
            $invalidProperties[] = "'members_count' can't be null";
        }
        if ($this->container['keys'] === null) {
            $invalidProperties[] = "'keys' can't be null";
        }
        if ($this->container['clicks'] === null) {
            $invalidProperties[] = "'clicks' can't be null";
        }
        if ($this->container['scrolls'] === null) {
            $invalidProperties[] = "'scrolls' can't be null";
        }
        if ($this->container['distance_miles'] === null) {
            $invalidProperties[] = "'distance_miles' can't be null";
        }
        if ($this->container['download_mb'] === null) {
            $invalidProperties[] = "'download_mb' can't be null";
        }
        if ($this->container['upload_mb'] === null) {
            $invalidProperties[] = "'upload_mb' can't be null";
        }
        if ($this->container['uptime_seconds'] === null) {
            $invalidProperties[] = "'uptime_seconds' can't be null";
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
     * Gets members_count
     *
     * @return int
     */
    public function getMembersCount()
    {
        return $this->container['members_count'];
    }

    /**
     * Sets members_count
     *
     * @param int $members_count The total number of members in the subteam.
     *
     * @return self
     */
    public function setMembersCount($members_count)
    {
        if (is_null($members_count)) {
            throw new \InvalidArgumentException('non-nullable members_count cannot be null');
        }
        $this->container['members_count'] = $members_count;

        return $this;
    }

    /**
     * Gets keys
     *
     * @return int
     */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
     * Sets keys
     *
     * @param int $keys The total number of keys pressed by the subteam.
     *
     * @return self
     */
    public function setKeys($keys)
    {
        if (is_null($keys)) {
            throw new \InvalidArgumentException('non-nullable keys cannot be null');
        }
        $this->container['keys'] = $keys;

        return $this;
    }

    /**
     * Gets clicks
     *
     * @return int
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     *
     * @param int $clicks The total number of mouse clicks made by the subteam.
     *
     * @return self
     */
    public function setClicks($clicks)
    {
        if (is_null($clicks)) {
            throw new \InvalidArgumentException('non-nullable clicks cannot be null');
        }
        $this->container['clicks'] = $clicks;

        return $this;
    }

    /**
     * Gets scrolls
     *
     * @return int
     */
    public function getScrolls()
    {
        return $this->container['scrolls'];
    }

    /**
     * Sets scrolls
     *
     * @param int $scrolls The total number of mouse scrolls made by the subteam.
     *
     * @return self
     */
    public function setScrolls($scrolls)
    {
        if (is_null($scrolls)) {
            throw new \InvalidArgumentException('non-nullable scrolls cannot be null');
        }
        $this->container['scrolls'] = $scrolls;

        return $this;
    }

    /**
     * Gets distance_miles
     *
     * @return float
     */
    public function getDistanceMiles()
    {
        return $this->container['distance_miles'];
    }

    /**
     * Sets distance_miles
     *
     * @param float $distance_miles The total distance moved by the mouse in miles.
     *
     * @return self
     */
    public function setDistanceMiles($distance_miles)
    {
        if (is_null($distance_miles)) {
            throw new \InvalidArgumentException('non-nullable distance_miles cannot be null');
        }
        $this->container['distance_miles'] = $distance_miles;

        return $this;
    }

    /**
     * Gets download_mb
     *
     * @return float
     */
    public function getDownloadMb()
    {
        return $this->container['download_mb'];
    }

    /**
     * Sets download_mb
     *
     * @param float $download_mb The total amount of data downloaded by the subteam, in megabytes.
     *
     * @return self
     */
    public function setDownloadMb($download_mb)
    {
        if (is_null($download_mb)) {
            throw new \InvalidArgumentException('non-nullable download_mb cannot be null');
        }
        $this->container['download_mb'] = $download_mb;

        return $this;
    }

    /**
     * Gets upload_mb
     *
     * @return float
     */
    public function getUploadMb()
    {
        return $this->container['upload_mb'];
    }

    /**
     * Sets upload_mb
     *
     * @param float $upload_mb The total amount of data uploaded by the subteam, in megabytes.
     *
     * @return self
     */
    public function setUploadMb($upload_mb)
    {
        if (is_null($upload_mb)) {
            throw new \InvalidArgumentException('non-nullable upload_mb cannot be null');
        }
        $this->container['upload_mb'] = $upload_mb;

        return $this;
    }

    /**
     * Gets uptime_seconds
     *
     * @return int
     */
    public function getUptimeSeconds()
    {
        return $this->container['uptime_seconds'];
    }

    /**
     * Sets uptime_seconds
     *
     * @param int $uptime_seconds The total uptime of the subteam, in seconds.
     *
     * @return self
     */
    public function setUptimeSeconds($uptime_seconds)
    {
        if (is_null($uptime_seconds)) {
            throw new \InvalidArgumentException('non-nullable uptime_seconds cannot be null');
        }
        $this->container['uptime_seconds'] = $uptime_seconds;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


