<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ParserImageApiTest.php">
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
use GroupDocs\Parser\Model\ImagesOptions;

require_once "BaseApiTestCase.php";

class ParserImageApiTest extends BaseApiTestCase
{
    public function testGetImage_Docx()
    {
        $testFile = Internal\TestFiles::getFileFourPages();
        $options = new ImagesOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\imagesRequest($options);

        $response = self::$parseApi->images($request);
        $this->assertNotNull($response);
        foreach ($response->getImages() as $key => $image) {
            $this->assertNotNull($image->getPath());
            $this->assertNotNull($image->getDownLoadUrl());
        }
    }

    public function testGetImage_Pdf_FromPages()
    {
        $testFile = Internal\TestFiles::getFilePdf();
        $options = new ImagesOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setStartPageNumber(1);
        $options->setCountPagesToExtract(2);
        $request = new Requests\imagesRequest($options);

        $response = self::$parseApi->images($request);
        $this->assertNotNull($response);
        $this->assertNotNull($response->getPages());
        $this->assertEquals(2, count($response->getPages()));
        $this->assertEquals("parser/images/pdf/template-document_pdf/page_1/image_0.jpeg", $response->getPages()[0]->getImages()[0]->getPath());
        $this->assertEquals("parser/images/pdf/template-document_pdf/page_2/image_0.jpeg", $response->getPages()[1]->getImages()[0]->getPath());
    }

    public function imageExtractTest_Pdf_ContainerItem_FromPages()
    {
        $testFile = Internal\TestFiles::getFilePdfContainer();
        $options = new ImagesOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setStartPageNumber(1);
        $options->setCountPagesToExtract(2);
        $containerItemInfo = new ContainerItemInfo(array("relative_path" => "template-document.pdf"));
        $options->setContainerItemInfo($containerItemInfo);
        $request = new Requests\imagesRequest($options);

        $response = self::$parseApi->images($request);
        $this->assertNotNull($response);
        $this->assertNotNull($response->getPages());
        $this->assertEquals(2, count($response->getPages()));
        $this->assertEquals("parser/images/pdf/template-document_pdf/page_1/image_0.jpeg", $response->getPages()[0]->getImages()[0]->getPath());
        $this->assertEquals("parser/images/pdf/template-document_pdf/page_2/image_0.jpeg", $response->getPages()[1]->getImages()[0]->getPath());
    }

    public function testGetImage_Pdf_FromPages_OutOfThePageRange()
    {
        $this->expectException(\GroupDocs\Parser\ApiException::class);
        $this->expectExceptionMessage("Request parameters missing or have incorrect format");

        $testFile = Internal\TestFiles::getFilePdf();
        $options = new ImagesOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setStartPageNumber(3);
        $options->setCountPagesToExtract(5);
        $request = new Requests\imagesRequest($options);

        $response = self::$parseApi->images($request);
    }

    public function testGetImage_Pdf_Container_FromPages_Error()
    {
        $this->expectException(\GroupDocs\Parser\ApiException::class);
        $this->expectExceptionMessage("The specified file 'containers\archive\docx.zip' has type which is not currently supported.");

        $testFile = Internal\TestFiles::getFileZip();
        $options = new ImagesOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $options->setStartPageNumber(3);
        $options->setCountPagesToExtract(5);
        $request = new Requests\imagesRequest($options);

        $response = self::$parseApi->images($request);
    }

    public function testGetImage_FileNotFoundResult()
    {
        $this->expectException(\GroupDocs\Parser\ApiException::class);
        $this->expectExceptionMessage("Can't find file located at 'folder/file-not-exist.pdf'.");

        $testFile = Internal\TestFiles::getFileNotExist();
        $options = new ImagesOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\imagesRequest($options);

        $response = self::$parseApi->images($request);
    }

    public function testGetImage_IncorrectPassword()
    {
        $this->expectException(\GroupDocs\Parser\ApiException::class);
        $this->expectExceptionMessage("Password provided for file 'words\docx\password-protected.docx' is incorrect.");

        $testFile = Internal\TestFiles::getFilePasswordProtected();
        $testFile->password = "123";
        $options = new ImagesOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\imagesRequest($options);

        $response = self::$parseApi->images($request);
    }
}
