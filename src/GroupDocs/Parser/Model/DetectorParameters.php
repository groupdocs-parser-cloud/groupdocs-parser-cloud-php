<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="DetectorParameters.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
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
 * DetectorParameters
 *
 * @description Provides parameters for the table detection algorithms.
 */
class DetectorParameters implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DetectorParameters";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'minRowCount' => 'int',
        'minColumnCount' => 'int',
        'minVerticalSpace' => 'int',
        'hasMergedCells' => 'bool',
        'rectangle' => '\GroupDocs\Parser\Model\Rectangle',
        'verticalSeparators' => 'double[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'minRowCount' => 'int32',
        'minColumnCount' => 'int32',
        'minVerticalSpace' => 'int32',
        'hasMergedCells' => null,
        'rectangle' => null,
        'verticalSeparators' => 'double'
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
        'minRowCount' => 'MinRowCount',
        'minColumnCount' => 'MinColumnCount',
        'minVerticalSpace' => 'MinVerticalSpace',
        'hasMergedCells' => 'HasMergedCells',
        'rectangle' => 'Rectangle',
        'verticalSeparators' => 'VerticalSeparators'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minRowCount' => 'setMinRowCount',
        'minColumnCount' => 'setMinColumnCount',
        'minVerticalSpace' => 'setMinVerticalSpace',
        'hasMergedCells' => 'setHasMergedCells',
        'rectangle' => 'setRectangle',
        'verticalSeparators' => 'setVerticalSeparators'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minRowCount' => 'getMinRowCount',
        'minColumnCount' => 'getMinColumnCount',
        'minVerticalSpace' => 'getMinVerticalSpace',
        'hasMergedCells' => 'getHasMergedCells',
        'rectangle' => 'getRectangle',
        'verticalSeparators' => 'getVerticalSeparators'
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
        $this->container['minRowCount'] = isset($data['minRowCount']) ? $data['minRowCount'] : null;
        $this->container['minColumnCount'] = isset($data['minColumnCount']) ? $data['minColumnCount'] : null;
        $this->container['minVerticalSpace'] = isset($data['minVerticalSpace']) ? $data['minVerticalSpace'] : null;
        $this->container['hasMergedCells'] = isset($data['hasMergedCells']) ? $data['hasMergedCells'] : null;
        $this->container['rectangle'] = isset($data['rectangle']) ? $data['rectangle'] : null;
        $this->container['verticalSeparators'] = isset($data['verticalSeparators']) ? $data['verticalSeparators'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /*
     * Gets minRowCount
     *
     * @return int
     */
    public function getMinRowCount()
    {
        return $this->container['minRowCount'];
    }

    /*
     * Sets minRowCount
     *
     * @param int $minRowCount Gets or sets the minimum number of the table rows.
     *
     * @return $this
     */
    public function setMinRowCount($minRowCount)
    {
        $this->container['minRowCount'] = $minRowCount;

        return $this;
    }

    /*
     * Gets minColumnCount
     *
     * @return int
     */
    public function getMinColumnCount()
    {
        return $this->container['minColumnCount'];
    }

    /*
     * Sets minColumnCount
     *
     * @param int $minColumnCount Gets or sets the minimum number of the table columns.
     *
     * @return $this
     */
    public function setMinColumnCount($minColumnCount)
    {
        $this->container['minColumnCount'] = $minColumnCount;

        return $this;
    }

    /*
     * Gets minVerticalSpace
     *
     * @return int
     */
    public function getMinVerticalSpace()
    {
        return $this->container['minVerticalSpace'];
    }

    /*
     * Sets minVerticalSpace
     *
     * @param int $minVerticalSpace Gets or sets the minimum space between the table columns.
     *
     * @return $this
     */
    public function setMinVerticalSpace($minVerticalSpace)
    {
        $this->container['minVerticalSpace'] = $minVerticalSpace;

        return $this;
    }

    /*
     * Gets hasMergedCells
     *
     * @return bool
     */
    public function getHasMergedCells()
    {
        return $this->container['hasMergedCells'];
    }

    /*
     * Sets hasMergedCells
     *
     * @param bool $hasMergedCells Gets or sets the value that indicates whether the table has merged cells.
     *
     * @return $this
     */
    public function setHasMergedCells($hasMergedCells)
    {
        $this->container['hasMergedCells'] = $hasMergedCells;

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
     * @param \GroupDocs\Parser\Model\Rectangle $rectangle Gets or sets the rectangular area that contains the table.
     *
     * @return $this
     */
    public function setRectangle($rectangle)
    {
        $this->container['rectangle'] = $rectangle;

        return $this;
    }

    /*
     * Gets verticalSeparators
     *
     * @return double[]
     */
    public function getVerticalSeparators()
    {
        return $this->container['verticalSeparators'];
    }

    /*
     * Sets verticalSeparators
     *
     * @param double[] $verticalSeparators Gets or sets the table columns separators.
     *
     * @return $this
     */
    public function setVerticalSeparators($verticalSeparators)
    {
        $this->container['verticalSeparators'] = $verticalSeparators;

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


