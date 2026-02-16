<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="TestFiles.php">
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

namespace GroupDocs\Parser\ApiTests\Internal;

require_once "TestFile.php";

/*
 * Describes file for tests.
 */
class TestFiles
{
    public static function getFilePasswordProtected()
    {
        $file = new TestFile();
        $file->fileName = "password-protected.docx";
        $file->folder = "words/docx/";
        $file->password = "password";
        return $file;
    }

    public static function getFileFourPages()
    {
        $file = new TestFile();
        $file->fileName = "four-pages.docx";
        $file->folder = "words/docx/";
        return $file;
    }
    public static function getFileOnePage()
    {
        $file = new TestFile();
        $file->fileName = "one-page.docx";
        $file->folder = "words/docx/";
        return $file;
    }
    public static function getFileBarcodes()
    {
        $file = new TestFile();
        $file->fileName = "barcodes.docx";
        $file->folder = "words/docx/";
        return $file;
    }
    public static function getFileTemplateDocumentDocx()
    {
        $file = new TestFile();
        $file->fileName = "template-document.docx";
        $file->folder = "words/docx/";
        return $file;
    }
    public static function getFileFormattedDocument()
    {
        $file = new TestFile();
        $file->fileName = "formatted-document.docx";
        $file->folder = "words/docx/";
        return $file;
    }
    public static function getFileEncodingDetection()
    {
        $file = new TestFile();
        $file->fileName = "encoding-detection.txt";
        $file->folder = "words/txt/";
        return $file;
    }
    public static function getFileZip()
    {
        $file = new TestFile();
        $file->fileName = "docx.zip";
        $file->folder = "containers/archive/";
        return $file;
    }
    public static function getFileZipWithEmailImagePdf()
    {
        $file = new TestFile();
        $file->fileName = "zip-eml-jpg-pdf.zip";
        $file->folder = "containers/archive/";
        return $file;
    }
    public static function getFileJpegFile()
    {
        $file = new TestFile();
        $file->fileName = "document.jpeg";
        $file->folder = "image/jpeg/";
        return $file;
    }
    public static function getFileImageAndAttachment()
    {
        $file = new TestFile();
        $file->fileName = "embedded-image-and-attachment.eml";
        $file->folder = "email/eml/";
        return $file;
    }
    public static function getFilePdf()
    {
        $file = new TestFile();
        $file->fileName = "template-document.pdf";
        $file->folder = "pdf/";
        return $file;
    }
    public static function getFilePdfContainer()
    {
        $file = new TestFile();
        $file->fileName = "PDF with attachements.pdf";
        $file->folder = "pdf/";
        $file->password = "password";
        return $file;
    }
    public static function getFileNotExist()
    {
        $file = new TestFile();
        $file->fileName = "file-not-exist.pdf";
        $file->folder = "folder/";
        return $file;
    }
    public static function getFileTar()
    {
        $file = new TestFile();
        $file->fileName = "sample.tar";
        $file->folder = "containers/archive/";
        return $file;
    }
    public static function getFileRar()
    {
        $file = new TestFile();
        $file->fileName = "sample.rar";
        $file->folder = "containers/archive/";
        return $file;
    }
    public static function getFileMd()
    {
        $file = new TestFile();
        $file->fileName = "sample.md";
        $file->folder = "words/docx/";
        return $file;
    }

    public static function getFileVideo()
    {
        $file = new TestFile();
        $file->fileName = "sample.avi";
        $file->folder = "video/avi/";
        return $file;
    }

    public static function getFileInvoice()
    {
        $file = new TestFile();
        $file->fileName = "Invoice.xlsx";
        $file->folder = "cells/";
        return $file;
    }    

    public static function getTestFilesList()
    {
        return array(
            self::getFilePasswordProtected(),
            self::getFileFourPages(),
            self::getFileOnePage(),
            self::getFileTemplateDocumentDocx(),
            self::getFileFormattedDocument(),
            self::getFileEncodingDetection(),
            self::getFileZip(),
            self::getFileZipWithEmailImagePdf(),
            self::getFileJpegFile(),
            self::getFileImageAndAttachment(),
            self::getFilePdf(),
            self::getFilePdfContainer(),
            self::getFileTar(),
            self::getFileRar(),
            self::getFileMd(),
            self::getFileInvoice()
        );
    }
}