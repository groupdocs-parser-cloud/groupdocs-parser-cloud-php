<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="FieldPosition.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Parser\Model;

use \ArrayAccess;
use \GroupDocs\Parser\ObjectSerializer;

/*
 * FieldPosition
 *
 * @description Field position class.
 */
class FieldPosition implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "FieldPosition";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fieldPositionType' => 'string',
        'rectangle' => '\GroupDocs\Parser\Model\Rectangle',
        'regex' => 'string',
        'matchCase' => 'bool',
        'linkedFieldName' => 'string',
        'isLeftLinked' => 'bool',
        'isRightLinked' => 'bool',
        'isTopLinked' => 'bool',
        'isBottomLinked' => 'bool',
        'searchArea' => '\GroupDocs\Parser\Model\Size',
        'autoScale' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fieldPositionType' => null,
        'rectangle' => null,
        'regex' => null,
        'matchCase' => null,
        'linkedFieldName' => null,
        'isLeftLinked' => null,
        'isRightLinked' => null,
        'isTopLinked' => null,
        'isBottomLinked' => null,
        'searchArea' => null,
        'autoScale' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fieldPositionType' => 'FieldPositionType',
        'rectangle' => 'Rectangle',
        'regex' => 'Regex',
        'matchCase' => 'MatchCase',
        'linkedFieldName' => 'LinkedFieldName',
        'isLeftLinked' => 'IsLeftLinked',
        'isRightLinked' => 'IsRightLinked',
        'isTopLinked' => 'IsTopLinked',
        'isBottomLinked' => 'IsBottomLinked',
        'searchArea' => 'SearchArea',
        'autoScale' => 'AutoScale'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fieldPositionType' => 'setFieldPositionType',
        'rectangle' => 'setRectangle',
        'regex' => 'setRegex',
        'matchCase' => 'setMatchCase',
        'linkedFieldName' => 'setLinkedFieldName',
        'isLeftLinked' => 'setIsLeftLinked',
        'isRightLinked' => 'setIsRightLinked',
        'isTopLinked' => 'setIsTopLinked',
        'isBottomLinked' => 'setIsBottomLinked',
        'searchArea' => 'setSearchArea',
        'autoScale' => 'setAutoScale'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fieldPositionType' => 'getFieldPositionType',
        'rectangle' => 'getRectangle',
        'regex' => 'getRegex',
        'matchCase' => 'getMatchCase',
        'linkedFieldName' => 'getLinkedFieldName',
        'isLeftLinked' => 'getIsLeftLinked',
        'isRightLinked' => 'getIsRightLinked',
        'isTopLinked' => 'getIsTopLinked',
        'isBottomLinked' => 'getIsBottomLinked',
        'searchArea' => 'getSearchArea',
        'autoScale' => 'getAutoScale'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fieldPositionType'] = isset($data['fieldPositionType']) ? $data['fieldPositionType'] : null;
        $this->container['rectangle'] = isset($data['rectangle']) ? $data['rectangle'] : null;
        $this->container['regex'] = isset($data['regex']) ? $data['regex'] : null;
        $this->container['matchCase'] = isset($data['matchCase']) ? $data['matchCase'] : null;
        $this->container['linkedFieldName'] = isset($data['linkedFieldName']) ? $data['linkedFieldName'] : null;
        $this->container['isLeftLinked'] = isset($data['isLeftLinked']) ? $data['isLeftLinked'] : null;
        $this->container['isRightLinked'] = isset($data['isRightLinked']) ? $data['isRightLinked'] : null;
        $this->container['isTopLinked'] = isset($data['isTopLinked']) ? $data['isTopLinked'] : null;
        $this->container['isBottomLinked'] = isset($data['isBottomLinked']) ? $data['isBottomLinked'] : null;
        $this->container['searchArea'] = isset($data['searchArea']) ? $data['searchArea'] : null;
        $this->container['autoScale'] = isset($data['autoScale']) ? $data['autoScale'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['matchCase'] === null) {
            $invalidProperties[] = "'matchCase' can't be null";
        }
        if ($this->container['isLeftLinked'] === null) {
            $invalidProperties[] = "'isLeftLinked' can't be null";
        }
        if ($this->container['isRightLinked'] === null) {
            $invalidProperties[] = "'isRightLinked' can't be null";
        }
        if ($this->container['isTopLinked'] === null) {
            $invalidProperties[] = "'isTopLinked' can't be null";
        }
        if ($this->container['isBottomLinked'] === null) {
            $invalidProperties[] = "'isBottomLinked' can't be null";
        }
        if ($this->container['autoScale'] === null) {
            $invalidProperties[] = "'autoScale' can't be null";
        }
        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['matchCase'] === null) {
            return false;
        }
        if ($this->container['isLeftLinked'] === null) {
            return false;
        }
        if ($this->container['isRightLinked'] === null) {
            return false;
        }
        if ($this->container['isTopLinked'] === null) {
            return false;
        }
        if ($this->container['isBottomLinked'] === null) {
            return false;
        }
        if ($this->container['autoScale'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets fieldPositionType
     *
     * @return string
     */
    public function getFieldPositionType()
    {
        return $this->container['fieldPositionType'];
    }

    /*
     * Sets fieldPositionType
     *
     * @param string $fieldPositionType Provides a template field position.
     *
     * @return $this
     */
    public function setFieldPositionType($fieldPositionType)
    {
        $this->container['fieldPositionType'] = $fieldPositionType;

        return $this;
    }

    /*
     * Gets rectangle
     *
     * @return \GroupDocs\Parser\Model\Rectangle
     */
    public function getRectangle()
    {
        return $this->container['rectangle'];
    }

    /*
     * Sets rectangle
     *
     * @param \GroupDocs\Parser\Model\Rectangle $rectangle Rectangular area on the page that bounds the field value.
     *
     * @return $this
     */
    public function setRectangle($rectangle)
    {
        $this->container['rectangle'] = $rectangle;

        return $this;
    }

    /*
     * Gets regex
     *
     * @return string
     */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /*
     * Sets regex
     *
     * @param string $regex Gets or sets the regular expression.
     *
     * @return $this
     */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;

        return $this;
    }

    /*
     * Gets matchCase
     *
     * @return bool
     */
    public function getMatchCase()
    {
        return $this->container['matchCase'];
    }

    /*
     * Sets matchCase
     *
     * @param bool $matchCase Gets or sets the value that indicates whether a text case isn't ignored.
     *
     * @return $this
     */
    public function setMatchCase($matchCase)
    {
        $this->container['matchCase'] = $matchCase;

        return $this;
    }

    /*
     * Gets linkedFieldName
     *
     * @return string
     */
    public function getLinkedFieldName()
    {
        return $this->container['linkedFieldName'];
    }

    /*
     * Sets linkedFieldName
     *
     * @param string $linkedFieldName Gets or sets the name of the linked field.
     *
     * @return $this
     */
    public function setLinkedFieldName($linkedFieldName)
    {
        $this->container['linkedFieldName'] = $linkedFieldName;

        return $this;
    }

    /*
     * Gets isLeftLinked
     *
     * @return bool
     */
    public function getIsLeftLinked()
    {
        return $this->container['isLeftLinked'];
    }

    /*
     * Sets isLeftLinked
     *
     * @param bool $isLeftLinked Gets or sets the value that indicates whether a field is searched by the left from the linked field.
     *
     * @return $this
     */
    public function setIsLeftLinked($isLeftLinked)
    {
        $this->container['isLeftLinked'] = $isLeftLinked;

        return $this;
    }

    /*
     * Gets isRightLinked
     *
     * @return bool
     */
    public function getIsRightLinked()
    {
        return $this->container['isRightLinked'];
    }

    /*
     * Sets isRightLinked
     *
     * @param bool $isRightLinked Gets or sets a value indicating whether this instance is right linked.
     *
     * @return $this
     */
    public function setIsRightLinked($isRightLinked)
    {
        $this->container['isRightLinked'] = $isRightLinked;

        return $this;
    }

    /*
     * Gets isTopLinked
     *
     * @return bool
     */
    public function getIsTopLinked()
    {
        return $this->container['isTopLinked'];
    }

    /*
     * Sets isTopLinked
     *
     * @param bool $isTopLinked Gets or sets a value indicating whether this instance is top linked.
     *
     * @return $this
     */
    public function setIsTopLinked($isTopLinked)
    {
        $this->container['isTopLinked'] = $isTopLinked;

        return $this;
    }

    /*
     * Gets isBottomLinked
     *
     * @return bool
     */
    public function getIsBottomLinked()
    {
        return $this->container['isBottomLinked'];
    }

    /*
     * Sets isBottomLinked
     *
     * @param bool $isBottomLinked Gets or sets a value indicating whether this instance is bottom linked.
     *
     * @return $this
     */
    public function setIsBottomLinked($isBottomLinked)
    {
        $this->container['isBottomLinked'] = $isBottomLinked;

        return $this;
    }

    /*
     * Gets searchArea
     *
     * @return \GroupDocs\Parser\Model\Size
     */
    public function getSearchArea()
    {
        return $this->container['searchArea'];
    }

    /*
     * Sets searchArea
     *
     * @param \GroupDocs\Parser\Model\Size $searchArea Gets or sets the size of the area where a field is searched.
     *
     * @return $this
     */
    public function setSearchArea($searchArea)
    {
        $this->container['searchArea'] = $searchArea;

        return $this;
    }

    /*
     * Gets autoScale
     *
     * @return bool
     */
    public function getAutoScale()
    {
        return $this->container['autoScale'];
    }

    /*
     * Sets autoScale
     *
     * @param bool $autoScale Gets or sets Gets the value that indicates whether SearchArea is scaled by the linked field size.
     *
     * @return $this
     */
    public function setAutoScale($autoScale)
    {
        $this->container['autoScale'] = $autoScale;

        return $this;
    }
    /*
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

    /*
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

    /*
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

    /*
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

    /*
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


