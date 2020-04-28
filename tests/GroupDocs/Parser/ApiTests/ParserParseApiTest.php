<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ParserParseApiTest.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
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

namespace GroupDocs\Parser\ApiTests;

use GroupDocs\Parser\Model\Requests;
use GroupDocs\Parser\Model\ParseOptions;
use GroupDocs\Parser\Model\Field;
use GroupDocs\Parser\Model\FieldPosition;
use GroupDocs\Parser\Model\Rectangle;
use GroupDocs\Parser\Model\Table;
use GroupDocs\Parser\Model\DetectorParameters;
use GroupDocs\Parser\Model\Template;
use GroupDocs\Parser\Model\Size;
use GroupDocs\Parser\Model\Point;

require_once "BaseApiTest.php";

class ParserParseApiTest extends BaseApiTest
{
    public function testParseDocument_FileNotFoundResult()
    {
        $this->setExpectedExceptionRegExp(
            \GroupDocs\Parser\ApiException::class,
            "/Can't find file located at 'folder\/file-not-exist.pdf'./"
        );

        $testFile = Internal\TestFiles::getFileNotExist();
        $options = new ParseOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $template = $this->getTemplate();
        $options->setTemplate($template);
        $request = new Requests\parseRequest($options);

        $response = self::$parseApi->parse($request);
    }

    public function testParseDocument_IncorrectPassword()
    {
        $this->setExpectedExceptionRegExp(
            \GroupDocs\Parser\ApiException::class,
            "/Password provided for file 'words\\\\docx\\\\password-protected.docx' is incorrect./"
        );

        $testFile = Internal\TestFiles::getFilePasswordProtected();
        $testFile->password = "123";
        $options = new ParseOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $template = $this->getTemplate();
        $options->setTemplate($template);
        $request = new Requests\parseRequest($options);
        $response = self::$parseApi->parse($request);
    }

    public function testParseDocument()
    {
        $testFile = Internal\TestFiles::getFileTemplateDocumentDocx();
        $options = new ParseOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $template = $this->getTemplate();
        $options->setTemplate($template);
        $request = new Requests\parseRequest($options);

        $response = self::$parseApi->parse($request);

        $this->assertNotNull($response);
        $this->assertEquals(4, $response->getCount());

        $fieldNames = array(
            "FIELD1", "RELATEDFIELD2", "REGEX", "TABLECELLS"
        );
        foreach ($response->getFieldsData() as $key => $value) {
            $this->assertTrue(in_array($value->getName(), $fieldNames));
            if ($value->getName() == "TABLECELLS") {
                $this->assertEquals(4, $value->getPageArea()->getPageTableArea()->getColumnCount());
                $this->assertEquals(3, $value->getPageArea()->getPageTableArea()->getRowCount());
            }
        };
    }

    public function testParseDocument_NotSupportedFile()
    {
        $this->setExpectedExceptionRegExp(
            \GroupDocs\Parser\ApiException::class,
            "/The specified file 'image\\\\jpeg\\\\document.jpeg' has type which is not currently supported./"
        );

        $testFile = Internal\TestFiles::getFileJpegFile();
        $options = new ParseOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $template = $this->getTemplate();
        $options->setTemplate($template);
        $request = new Requests\parseRequest($options);

        $response = self::$parseApi->parse($request);
    }

    public function getTemplate()
    {
        $field1 = new Field();
        $field1->setFieldName("Field1");
        $field1->setPageIndex(4);
        $fieldPosition1 = new FieldPosition();
        $fieldPosition1->setFieldPositionType("Fixed");
        $rect1 = new Rectangle();
        $size1 = new Size(array("height" => 30, "width" => 140));
        $rect1->setSize($size1);
        $point1 = new Point(array("x" => 0, "y" => 0));
        $rect1->setPosition($point1);
        $fieldPosition1->setRectangle($rect1);
        $field1->setFieldPosition($fieldPosition1);

        $field2 = new Field();
        $field2->setFieldName("RelatedField2");
        $fieldPosition2 = new FieldPosition();
        $fieldPosition2->setFieldPositionType("Linked");
        $fieldPosition2->setLinkedFieldName("Field1");
        $fieldPosition2->setIsBottomLinked(true);
        $fieldPosition2->setIsRightLinked(true);

        $searchArea = new Size();
        $searchArea->setWidth(209);
        $searchArea->setHeight(24);
        $fieldPosition2->setSearchArea($searchArea);
        $fieldPosition2->setAutoScale(false);
        $field2->setFieldPosition($fieldPosition2);

        $field3 = new Field();
        $field3->setFieldName("Regex");
        $fieldPosition3 = new FieldPosition();
        $fieldPosition3->setFieldPositionType("Regex");
        $fieldPosition3->setRegex("REGEX TEXT 123");
        $field3->setFieldPosition($fieldPosition3);


        $table = new Table();
        $table->setTableName("TableCells");
        $table->setPageIndex(5);
        $detectorparams = new DetectorParameters();
        $rect = new Rectangle();
        $size = new Size(array("height" => 400, "width" => 600));
        $rect->setSize($size);
        $point = new Point(array("x" => 0, "y" => 0));
        $rect->setPosition($point);

        $detectorparams->setRectangle($rect);
        $table->setDetectorParameters($detectorparams);

        $fields = array($field1, $field2, $field3);
        $tables = array($table);
        $options = new Template();
        $options->setFields($fields);
        $options->setTables($tables);

        return $options;
    }
}
