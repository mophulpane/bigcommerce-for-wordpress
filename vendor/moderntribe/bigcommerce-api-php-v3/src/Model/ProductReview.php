<?php
/**
 * ProductReview
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 API.
 *
 * OpenAPI spec version: 3.0.0b
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

/**
 * ProductReview Class Doc Comment
 *
 * @category    Class */
 // @description A product review model.
/**
 * @package     BigCommerce\Api\v3
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductReview implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductReview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'text' => 'string',
        'status' => 'string',
        'rating' => 'int',
        'email' => 'string',
        'name' => 'string',
        'date_reviewed' => '\DateTime',
        'id' => 'int',
        'product_id' => 'int',
        'date_created' => '\DateTime',
        'date_modified' => '\DateTime'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'title' => 'title',
        'text' => 'text',
        'status' => 'status',
        'rating' => 'rating',
        'email' => 'email',
        'name' => 'name',
        'date_reviewed' => 'date_reviewed',
        'id' => 'id',
        'product_id' => 'product_id',
        'date_created' => 'date_created',
        'date_modified' => 'date_modified'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'text' => 'setText',
        'status' => 'setStatus',
        'rating' => 'setRating',
        'email' => 'setEmail',
        'name' => 'setName',
        'date_reviewed' => 'setDateReviewed',
        'id' => 'setId',
        'product_id' => 'setProductId',
        'date_created' => 'setDateCreated',
        'date_modified' => 'setDateModified'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'text' => 'getText',
        'status' => 'getStatus',
        'rating' => 'getRating',
        'email' => 'getEmail',
        'name' => 'getName',
        'date_reviewed' => 'getDateReviewed',
        'id' => 'getId',
        'product_id' => 'getProductId',
        'date_created' => 'getDateCreated',
        'date_modified' => 'getDateModified'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['date_reviewed'] = isset($data['date_reviewed']) ? $data['date_reviewed'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['date_modified'] = isset($data['date_modified']) ? $data['date_modified'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (!is_null($this->container['title']) && (strlen($this->container['title']) > 255)) {
            $invalid_properties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['title']) && (strlen($this->container['title']) < 0)) {
            $invalid_properties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 255)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) < 0)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if (strlen($this->container['title']) > 255) {
            return false;
        }
        if (strlen($this->container['title']) < 0) {
            return false;
        }
        if (strlen($this->container['name']) > 255) {
            return false;
        }
        if (strlen($this->container['name']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title The title for the product review.
     * @return $this
     */
    public function setTitle($title)
    {
        if (!is_null($title) && (strlen($title) > 255)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ProductReview., must be smaller than or equal to 255.');
        }
        if (!is_null($title) && (strlen($title) < 0)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ProductReview., must be bigger than or equal to 0.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     * @param string $text The text for the product review.
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of the product review. Must be one of `approved`, `disapproved` or `pending`.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets rating
     * @return int
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     * @param int $rating The rating of the product review. Must be one of 0, 1, 2, 3, 4, 5.
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email The email of the reviewer. Must be a valid email, or an empty string.
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name of the reviewer.
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ProductReview., must be smaller than or equal to 255.');
        }
        if (!is_null($name) && (strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ProductReview., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets date_reviewed
     * @return \DateTime
     */
    public function getDateReviewed()
    {
        return $this->container['date_reviewed'];
    }

    /**
     * Sets date_reviewed
     * @param \DateTime $date_reviewed Date the product was reviewed.
     * @return $this
     */
    public function setDateReviewed($date_reviewed)
    {
        $this->container['date_reviewed'] = $date_reviewed;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The unique numeric ID of the product review; increments sequentially.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id The unique numeric identifier for the product with which the review is associated.
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets date_created
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param \DateTime $date_created Date the product review was created.
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_modified
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     * @param \DateTime $date_modified Date the product review was modified.
     * @return $this
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}


