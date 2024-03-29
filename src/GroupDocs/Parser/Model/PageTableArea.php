<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PageTableArea.php">
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
 * PageTableArea
 *
 * @description Represents a table page area which is used to represent a table in the parsing by template functionality.
 */
class PageTableArea implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PageTableArea";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'rowCount' => 'int',
        'columnCount' => 'int',
        'pageTableAreaCells' => '\GroupDocs\Parser\Model\PageTableAreaCell[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'rowCount' => 'int32',
        'columnCount' => 'int32',
        'pageTableAreaCells' => null
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
        'rowCount' => 'RowCount',
        'columnCount' => 'ColumnCount',
        'pageTableAreaCells' => 'PageTableAreaCells'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rowCount' => 'setRowCount',
        'columnCount' => 'setColumnCount',
        'pageTableAreaCells' => 'setPageTableAreaCells'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rowCount' => 'getRowCount',
        'columnCount' => 'getColumnCount',
        'pageTableAreaCells' => 'getPageTableAreaCells'
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
        $this->container['rowCount'] = isset($data['rowCount']) ? $data['rowCount'] : null;
        $this->container['columnCount'] = isset($data['columnCount']) ? $data['columnCount'] : null;
        $this->container['pageTableAreaCells'] = isset($data['pageTableAreaCells']) ? $data['pageTableAreaCells'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['rowCount'] === null) {
            $invalidProperties[] = "'rowCount' can't be null";
        }
        if ($this->container['columnCount'] === null) {
            $invalidProperties[] = "'columnCount' can't be null";
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

        if ($this->container['rowCount'] === null) {
            return false;
        }
        if ($this->container['columnCount'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets rowCount
     *
     * @return int
     */
    public function getRowCount()
    {
        return $this->container['rowCount'];
    }

    /*
     * Sets rowCount
     *
     * @param int $rowCount Gets or sets the total number of the table rows.
     *
     * @return $this
     */
    public function setRowCount($rowCount)
    {
        $this->container['rowCount'] = $rowCount;

        return $this;
    }

    /*
     * Gets columnCount
     *
     * @return int
     */
    public function getColumnCount()
    {
        return $this->container['columnCount'];
    }

    /*
     * Sets columnCount
     *
     * @param int $columnCount Gets or sets the total number of the table columns.
     *
     * @return $this
     */
    public function setColumnCount($columnCount)
    {
        $this->container['columnCount'] = $columnCount;

        return $this;
    }

    /*
     * Gets pageTableAreaCells
     *
     * @return \GroupDocs\Parser\Model\PageTableAreaCell[]
     */
    public function getPageTableAreaCells()
    {
        return $this->container['pageTableAreaCells'];
    }

    /*
     * Sets pageTableAreaCells
     *
     * @param \GroupDocs\Parser\Model\PageTableAreaCell[] $pageTableAreaCells Gets or sets the collection of table area cell.
     *
     * @return $this
     */
    public function setPageTableAreaCells($pageTableAreaCells)
    {
        $this->container['pageTableAreaCells'] = $pageTableAreaCells;

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


