<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="Table.php">
 *   Copyright (c) Aspose Pty Ltd
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
 * Table
 *
 * @description Document template table
 */
class Table implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Table";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'tableName' => 'string',
        'pageIndex' => 'int',
        'detectorParameters' => '\GroupDocs\Parser\Model\DetectorParameters',
        'tableLayout' => '\GroupDocs\Parser\Model\TableLayout'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'tableName' => null,
        'pageIndex' => 'int32',
        'detectorParameters' => null,
        'tableLayout' => null
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
        'tableName' => 'TableName',
        'pageIndex' => 'PageIndex',
        'detectorParameters' => 'DetectorParameters',
        'tableLayout' => 'TableLayout'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tableName' => 'setTableName',
        'pageIndex' => 'setPageIndex',
        'detectorParameters' => 'setDetectorParameters',
        'tableLayout' => 'setTableLayout'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tableName' => 'getTableName',
        'pageIndex' => 'getPageIndex',
        'detectorParameters' => 'getDetectorParameters',
        'tableLayout' => 'getTableLayout'
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
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['detectorParameters'] = isset($data['detectorParameters']) ? $data['detectorParameters'] : null;
        $this->container['tableLayout'] = isset($data['tableLayout']) ? $data['tableLayout'] : null;
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
     * Gets tableName
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /*
     * Sets tableName
     *
     * @param string $tableName Gets or sets a unique template table name.
     *
     * @return $this
     */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;

        return $this;
    }

    /*
     * Gets pageIndex
     *
     * @return int
     */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /*
     * Sets pageIndex
     *
     * @param int $pageIndex The page index. An integer value that represents the index of the page where the template item is located; null if the template item is located on any page.
     *
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {
        $this->container['pageIndex'] = $pageIndex;

        return $this;
    }

    /*
     * Gets detectorParameters
     *
     * @return \GroupDocs\Parser\Model\DetectorParameters
     */
    public function getDetectorParameters()
    {
        return $this->container['detectorParameters'];
    }

    /*
     * Sets detectorParameters
     *
     * @param \GroupDocs\Parser\Model\DetectorParameters $detectorParameters Gets or sets the detector parameters. Provides parameters for the table detection algorithms.
     *
     * @return $this
     */
    public function setDetectorParameters($detectorParameters)
    {
        $this->container['detectorParameters'] = $detectorParameters;

        return $this;
    }

    /*
     * Gets tableLayout
     *
     * @return \GroupDocs\Parser\Model\TableLayout
     */
    public function getTableLayout()
    {
        return $this->container['tableLayout'];
    }

    /*
     * Sets tableLayout
     *
     * @param \GroupDocs\Parser\Model\TableLayout $tableLayout Gets or sets the table layout. Provides the template table layout which is used by Table to define table position.
     *
     * @return $this
     */
    public function setTableLayout($tableLayout)
    {
        $this->container['tableLayout'] = $tableLayout;

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


