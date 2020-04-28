<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PageArea.php">
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
 * PageArea
 *
 * @description Class for document page area.
 */
class PageArea implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PageArea";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'rectangle' => '\GroupDocs\Parser\Model\Rectangle',
        'page' => '\GroupDocs\Parser\Model\Page',
        'pageTextArea' => '\GroupDocs\Parser\Model\PageTextArea',
        'pageTableArea' => '\GroupDocs\Parser\Model\PageTableArea'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'rectangle' => null,
        'page' => null,
        'pageTextArea' => null,
        'pageTableArea' => null
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
        'rectangle' => 'Rectangle',
        'page' => 'Page',
        'pageTextArea' => 'PageTextArea',
        'pageTableArea' => 'PageTableArea'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rectangle' => 'setRectangle',
        'page' => 'setPage',
        'pageTextArea' => 'setPageTextArea',
        'pageTableArea' => 'setPageTableArea'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rectangle' => 'getRectangle',
        'page' => 'getPage',
        'pageTextArea' => 'getPageTextArea',
        'pageTableArea' => 'getPageTableArea'
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
        $this->container['rectangle'] = isset($data['rectangle']) ? $data['rectangle'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pageTextArea'] = isset($data['pageTextArea']) ? $data['pageTextArea'] : null;
        $this->container['pageTableArea'] = isset($data['pageTableArea']) ? $data['pageTableArea'] : null;
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
     * @param \GroupDocs\Parser\Model\Rectangle $rectangle Gets or sets the rectangular area.
     *
     * @return $this
     */
    public function setRectangle($rectangle)
    {
        $this->container['rectangle'] = $rectangle;

        return $this;
    }

    /*
     * Gets page
     *
     * @return \GroupDocs\Parser\Model\Page
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /*
     * Sets page
     *
     * @param \GroupDocs\Parser\Model\Page $page Gets or sets the document page information such as page index and page size.
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /*
     * Gets pageTextArea
     *
     * @return \GroupDocs\Parser\Model\PageTextArea
     */
    public function getPageTextArea()
    {
        return $this->container['pageTextArea'];
    }

    /*
     * Sets pageTextArea
     *
     * @param \GroupDocs\Parser\Model\PageTextArea $pageTextArea Gets or sets the text area. Represents a page text area which is used to represent a text value in the parsing by template functionality.
     *
     * @return $this
     */
    public function setPageTextArea($pageTextArea)
    {
        $this->container['pageTextArea'] = $pageTextArea;

        return $this;
    }

    /*
     * Gets pageTableArea
     *
     * @return \GroupDocs\Parser\Model\PageTableArea
     */
    public function getPageTableArea()
    {
        return $this->container['pageTableArea'];
    }

    /*
     * Sets pageTableArea
     *
     * @param \GroupDocs\Parser\Model\PageTableArea $pageTableArea Gets or sets the table area. Represents a table page area which is used to represent a table in the parsing by template functionality.
     *
     * @return $this
     */
    public function setPageTableArea($pageTableArea)
    {
        $this->container['pageTableArea'] = $pageTableArea;

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


