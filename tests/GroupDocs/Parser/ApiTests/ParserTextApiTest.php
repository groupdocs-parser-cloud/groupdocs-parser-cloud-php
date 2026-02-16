<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ParserTextApiTest.php">
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
use GroupDocs\Parser\Model\TextOptions;
use GroupDocs\Parser\Model\FormattedTextOptions;

require_once "BaseApiTestCase.php";

class ParserTextApiTest extends BaseApiTestCase
{
    public function testExtractText()
    {
        $testFile = Internal\TestFiles::getFileOnePage();
        $options = new TextOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\textRequest($options);

        $response = self::$parseApi->text($request);
        $this->assertNotNull($response->getText());
        $this->assertEquals("First Page\r\r\f", $response->getText());
    }

    public function testExtractPages()
    {
        $testFile = Internal\TestFiles::getFileFourPages();
        $options = new TextOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setStartPageNumber(0);
        $options->setCountPagesToExtract(4);
        $textOpts = new FormattedTextOptions();
        $textOpts->setMode("PlainText");
        $options->setFormattedTextOptions($textOpts);
        $request = new Requests\textRequest($options);

        $response = self::$parseApi->text($request);
        $this->assertNotNull($response->getPages());
        $pages = $response->getPages();
        $this->assertEquals(0, $pages[0]->getPageIndex());
        $this->assertEquals("Text inside bookmark 0\n\nPage 0 heading\n\nPage Text - Page 0\n\n\fText inside bookmark 1\n\n", $pages[0]->getText());
    
        $this->assertEquals(3, $pages[3]->getPageIndex());
        $this->assertEquals("\fText inside bookmark 3\n\nPage 3 heading\n\nPage Text - Page 3\n\n", $pages[3]->getText());
    }

    public function testExtractFormatted()
    {
        $testFile = Internal\TestFiles::getFileFormattedDocument();
        $options = new TextOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $textOpts = new FormattedTextOptions();
        $textOpts->setMode("Html");
        $options->setFormattedTextOptions($textOpts);
        $request = new Requests\textRequest($options);

        $response = self::$parseApi->text($request);
        $this->assertNotNull($response->getText());
        $this->assertTrue(strpos($response->getText(),"<b>Bold text</b>") !== false);
        $this->assertTrue(strpos($response->getText(),"<i>Italic text</i>") !== false);
        $this->assertTrue(strpos($response->getText(),"<h1>Heading 1</h1>") !== false);
        $this->assertTrue(strpos($response->getText(),"<tr><td><p>table</p></td>") !== false);
        $this->assertTrue(strpos($response->getText(),"<ol><li><i>First element</i>") !== false);
        $this->assertTrue(strpos($response->getText(),"<a href=\"http://targetwebsite.domain\">Hyperlink </a>") !== false);
    }

    public function testExtractText_FileNotFoundResult()
    {
        $this->expectException(\GroupDocs\Parser\ApiException::class);
        $this->expectExceptionMessage("Can't find file located at 'folder/file-not-exist.pdf'.");
        
        $testFile = Internal\TestFiles::getFileNotExist();
        $options = new TextOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\textRequest($options);

        $response = self::$parseApi->text($request);
    }

    public function testExtractText_IncorrectPassword()
    {
        $this->expectException(\GroupDocs\Parser\ApiException::class);
        $this->expectExceptionMessage("Password provided for file 'words/docx/password-protected.docx' is incorrect.");
        
        $testFile = Internal\TestFiles::getFilePasswordProtected();
        $testFile->password = "123";
        $options = new TextOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\textRequest($options);

        $response = self::$parseApi->text($request);
    }

    public function testExtractText_Md()
    {
        $testFile = Internal\TestFiles::getFileMd();
        $options = new TextOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\textRequest($options);

        $response = self::$parseApi->text($request);
        $this->assertNotNull($response->getText());
        $this->assertEquals("# Test\r\rText for test:\r\r\tOne\r\tTwo\r\tSub1\rSub2\r\tThree\r\rBullets:\r\rA\rAA\rB\rC\f", $response->getText());
    }
}
