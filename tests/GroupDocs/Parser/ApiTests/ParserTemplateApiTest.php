<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ParserTemplateApiTest.php">
 *   Copyright (c) Aspose Pty Ltd
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
use GroupDocs\Parser\Model\TemplateOptions;
use GroupDocs\Parser\Model\Field;
use GroupDocs\Parser\Model\FieldPosition;
use GroupDocs\Parser\Model\Rectangle;
use GroupDocs\Parser\Model\Size;
use GroupDocs\Parser\Model\Point;
use GroupDocs\Parser\Model\Table;
use GroupDocs\Parser\Model\DetectorParameters;
use GroupDocs\Parser\Model\CreateTemplateOptions;
use GroupDocs\Parser\Model\Template;

require_once "BaseApiTestCase.php";

class ParserTemplateApiTest extends BaseApiTestCase
{
    public function testCreateTemplate()
    {
        $options = new CreateTemplateOptions();
        $template = $this->getTemplate();
        $options->setTemplate($template);
        $options->setTemplatePath("templates/template_2.json");

        $request = new Requests\createTemplateRequest($options);

        $response = self::$templateApi->createTemplate($request);

        $this->assertNotNull($response);
        $this->assertTrue(strpos($response->getUrl(), "storage/file/templates/template_2.json") !== false);
    }

    public function testGetTemplate()
    {
        $options = new CreateTemplateOptions();
        $template = $this->getTemplate();
        $options->setTemplate($template);
        $options->setTemplatePath("templates/template_1.json");

        $request = new Requests\createTemplateRequest($options);

        $response = self::$templateApi->createTemplate($request);

        $this->assertNotNull($response);

        $getOptions = new TemplateOptions();
        $getOptions->setTemplatePath("templates/template_1.json");

        $getRequest = new Requests\getTemplateRequest($getOptions);
        $getResponse = self::$templateApi->getTemplate($getRequest);

        $this->assertNotNull($getResponse);
        $this->assertEquals(3, count($getResponse->getFields()));
        $this->assertEquals(1, count($getResponse->getTables()));
    }

    public function testDeleteTemplate()
    {
        $options = new CreateTemplateOptions();
        $template = $this->getTemplate();
        $options->setTemplate($template);
        $options->setTemplatePath("templates/template_1.json");

        $request = new Requests\createTemplateRequest($options);

        $response = self::$templateApi->createTemplate($request);

        $this->assertNotNull($response);

        $deleteOptions = new TemplateOptions();
        $deleteOptions->setTemplatePath("templates/template_1.json");

        $deleteRequest = new Requests\deleteTemplateRequest($deleteOptions);
        $deleteResponse = self::$templateApi->deleteTemplate($deleteRequest);
    }

    public function testTemplate_FileNotFoundResult()
    {
        $this->expectException(\GroupDocs\Parser\ApiException::class);
        $this->expectExceptionMessage("Can't find file located at 'notExistTemplate.json'.");

        $deleteOptions = new TemplateOptions();
        $deleteOptions->setTemplatePath("notExistTemplate.json");

        $deleteRequest = new Requests\deleteTemplateRequest($deleteOptions);
        $deleteResponse = self::$templateApi->deleteTemplate($deleteRequest);
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
