<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ParserInfoApiTest.php">
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

use GroupDocs\Parser\Model\ContainerItemInfo;
use GroupDocs\Parser\Model\Requests;
use GroupDocs\Parser\Model\InfoOptions;

require_once "BaseApiTestCase.php";

class ParserInfoApiTest extends BaseApiTestCase
{
    public function testGetInfo_Txt()
    {
        $testFile = Internal\TestFiles::getFileEncodingDetection();
        $options = new InfoOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\getInfoRequest($options);

        $response = self::$infoApi->getInfo($request);
        $this->assertNotNull($response);
        $this->assertEquals("PLAIN TEXT FILE", strtoupper($response->getFileType()->getFileFormat()));
        $this->assertEquals(1, $response->getPageCount());
    }

    public function testGetInfo_ContainerInfo()
    {
        $testFile = Internal\TestFiles::getFileZip();
        $options = new InfoOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $containerItemInfo = new ContainerItemInfo();
        $containerItemInfo->setRelativePath("one-page.docx");
        $options->setContainerItemInfo($containerItemInfo);
        $request = new Requests\getInfoRequest($options);
        $response = self::$infoApi->getInfo($request);

        $this->assertNotNull($response);
        $this->assertEquals("MICROSOFT WORD OPEN XML DOCUMENT", strtoupper($response->getFileType()->getFileFormat()));
        $this->assertEquals(1, $response->getPageCount());
    }

    public function testGetInfo_FileNotFoundResult()
    {
        $this->expectException(\GroupDocs\Parser\ApiException::class);
        $this->expectExceptionMessage("Can't find file located at 'folder/file-not-exist.pdf'.");

        $testFile = Internal\TestFiles::getFileNotExist();
        $options = new InfoOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\getInfoRequest($options);

        $response = self::$infoApi->getInfo($request);
    }

    public function testGetInfo_IncorrectPassword()
    {
        $this->expectException(\GroupDocs\Parser\ApiException::class);
        $this->expectExceptionMessage("Password provided for file 'words/docx/password-protected.docx' is incorrect.");

        $testFile = Internal\TestFiles::getFilePasswordProtected();
        $testFile->password = "123";
        $options = new InfoOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\getInfoRequest($options);

        $response = self::$infoApi->getInfo($request);
    }
}
