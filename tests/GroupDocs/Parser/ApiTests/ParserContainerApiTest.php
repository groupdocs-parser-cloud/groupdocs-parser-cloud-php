<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ParserContainerApiTest.php">
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

use GroupDocs\Parser\Model\ContainerOptions;
use GroupDocs\Parser\Model\Requests;

require_once "BaseApiTest.php";

class ParserContainerApiTest extends BaseApiTest
{
    public function test_get_container_item_info()
    {
        $testFile = Internal\TestFiles::getFileZip();
        $options = new ContainerOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\containerRequest($options);

        $response = self::$infoApi->container($request);
        $this->assertNotNull($response);
        $this->assertEquals(2, count($response->getContainerItems()));
        $itemNames = array(
            "one-page.docx", "four-pages.docx"
        );
        foreach ($response->getContainerItems() as $key => $value) {
            $this->assertTrue(in_array($value->getName(), $itemNames));
        }
    }

    public function test_get_container_item_info_file_not_found_result()
    {
        $this->setExpectedExceptionRegExp(
            \GroupDocs\Parser\ApiException::class,
            "/Can't find file located at 'folder\/file-not-exist.pdf'./"
        );

        $testFile = Internal\TestFiles::getFileNotExist();
        $options = new ContainerOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\containerRequest($options);

        $response = self::$infoApi->container($request);
    }

    public function test_get_container_item_info_unsupported_file()
    {
        $this->setExpectedExceptionRegExp(
            \GroupDocs\Parser\ApiException::class,
            "/The specified file 'words\\\\docx\\\\four-pages.docx' has type which is not currently supported./"
        );

        $testFile = Internal\TestFiles::getFileFourPages();
        $options = new ContainerOptions();
        $options->setFileInfo($testFile->ToFileInfo());
        $request = new Requests\containerRequest($options);

        $response = self::$infoApi->container($request);
    }
}
