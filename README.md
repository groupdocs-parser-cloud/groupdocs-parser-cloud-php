![](https://img.shields.io/badge/api-v1.0-lightgrey) ![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/groupdocscloud/groupdocs-parser-cloud) [![GitHub license](https://img.shields.io/github/license/groupdocs-parser-cloud/groupdocs-parser-cloud-php)](https://github.com/groupdocs-parser-cloud/groupdocs-parser-cloud-php/blob/master/LICENSE)

# PHP SDK to Parse Documents in the Cloud

GroupDocs.Parser Cloud SDK for PHP wraps GroupDocs.Parser RESTful APIs so you may integrate **Document Parser** features in your own apps with zero initial cost.

GroupDocs.Parser Cloud API allows the developers to parse documents such as invoices, receipts or financial tables to extract text, images and metadata from 40+ popular document formats.

## Cloud Document Parser Features

- Create easy to define templates with a data field and table definitions.
- Parse documents with pre-defined templates.
- Extract data from invoices or from other sorts of documents.
- Supports extracting text and images.
- Extract data from regular documents as well as from email or archive containers.
- Obtain data from PDF portfolios.
- Fetch text fields, numbers, and tables from common documents.
- Save your templates in the storage and parse your documents with them.
- Ability to extract HTML or Markdown (MD) text for a quick preview.
- Fetch specific pages of plain as well as formatted text.
- Extract formatted (bold, italic, hyperlink, etc.) text in the MD format.
- Support for extracting text in HTML formatting (paragraph, hyperlinks, lists, etc.).
- Retrieve all images from a document and save them.
- Obtain basic information about documents, archives, emails, and attachments, etc.
- Extract data from a document contained inside a ZIP archive, email, or PDF portfolio.

## Parse Document By Template Supported Formats

- Word Processing: DOC, DOT, DOCX, DOCM, DOTX, DOTM, ODT, OTT, RTF
- Spreadsheet: XLS, XLT, XLSX, XLSM, XLSB, XLTX, XLTM, ODS, OTS, CSV, XLA, XLAM, NUMBERS
- Presentation: PPT, PPS, POT, PPTX, PPTM, POTX, POTM, PPSX, PPSM, ODP, OTP
- Portable: PDF

## Extract Text Supported Formats

- Word Processing: DOC, DOT, DOCX, DOCM, DOTX, DOTM, TXT, ODT, OTT, RTF
- Spreadsheet: XLS, XLT, XLSX, XLSM, XLSB, XLTX, XLTM, ODS, OTS, CSV, XLA, XLAM, NUMBERS
- Presentation: PPT, PPS, POT, PPTX, PPTM, POTX, POTM, PPSX, PPSM, ODP, OTP
- Portable: PDF
- Markup: HTML, XHTML, MHTML, MD, XML
- eBook: CHM, EPUB, FB2
- Emails: EML, EMLX, MSG
- Notes: ONE

## Extract Document Info Supported Formats

- Word Processing: DOC, DOT, DOCX, DOCM, DOTX, DOTM, TXT, ODT, OTT, RTF
- Spreadsheet: XLS, XLT, XLSX, XLSM, XLSB, XLTX, XLTM, ODS, OTS, CSV, XLA, XLAM, NUMBERS
- Presentation: PPT, PPS, POT, PPTX, PPTM, POTX, POTM, PPSX, PPSM, ODP, OTP
- Portable: PDF
- Markup: HTML, XHTML, MHTML, MD, XML
- eBook: CHM, EPUB, FB2
- Emails: PST, OST, EML, EMLX, MSG
- Notes: ONE
- Archives: ZIP

## Extract Images Supported Formats

- Word Processing: DOC, DOT, DOCX, DOCM, DOTX, DOTM, TXT, ODT, OTT, RTF
- Spreadsheet: XLS, XLT, XLSX, XLSM, XLSB, XLTX, XLTM, ODS, OTS, CSV, XLA, XLAM, NUMBERS
- Presentation: PPT, PPS, POT, PPTX, PPTM, POTX, POTM, PPSX, PPSM, ODP, OTP
- Portable: PDF
- Emails: EML, EMLX, MSG
- Ar5chives: ZIP

## Extract Container Items Info Supported Formats

- Portable: PDF
- Emails: PST, OST, EML, EMLX, MSG
- Archives: ZIP

## Get Started with GroupDocs.Parser Cloud SDK for PHP

First create an account at [GroupDocs for Cloud](https://dashboard.groupdocs.cloud/) and get your application information. Next, follow the installation steps as given below.

### Install via Composer

The package is available at [Packagist](https://packagist.org/) and it can be installed via [Composer](http://getcomposer.org/) by executing following command.

```shell
composer require groupdocscloud/groupdocs-parser-cloud
```

You can also install the package directly from this repository. Add the following to `composer.json`, then run `composer install`.

```javascript
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/groupdocs-parser-cloud/groupdocs-parser-cloud-php.git"
    }
  ],
  "require": {
    "groupdocscloud/groupdocs-parser-cloud": "*"
  }
}
```

### Install Manually

Clone or download this repository, then run `composer install` in the root directory to install dependencies and include `autoload.php` into your code file.

```php
require_once('/path/to/groupdocs-parser-cloud-php/vendor/autoload.php');
```

### Tests

Set your application information in [json.config](tests/GroupDocs/Parser/config.json) and execute the following command to run the unit tests.

```shell
php composer.phar install ./vendor/bin/phpunit
```

## Get Supported File Formats for Parser

```php
use GroupDocs\Parser\Model;
use GroupDocs\Parser\Model\Requests;

//Get Client Id and Client Secret from https://dashboard.groupdocs.cloud
$myClientId = "";
$myClientSecret = "";

// Create instance of the API
$configuration = new GroupDocs\Parser\Configuration();
$configuration->setAppSid($myClientId);
$configuration->setAppKey($myClientSecret);
$infoApi = new GroupDocs\Parser\InfoApi($configuration);


$response = $infoApi->getSupportedFileFormats();

foreach ($response->getFormats() as $key => $format) {
	echo $format->getFileFormat() . " - " .  $format->getExtension(), "\n";
}
```

## GroupDocs.Parser Cloud SDKs in Popular Languages

| .NET | Java | PHP | Python | Ruby | Node.js | Android |
|---|---|---|---|---|---|---|
| [GitHub](https://github.com/groupdocs-parser-cloud/groupdocs-parser-cloud-dotnet) | [GitHub](https://github.com/groupdocs-parser-cloud/groupdocs-parser-cloud-java) | [GitHub](https://github.com/groupdocs-parser-cloud/groupdocs-parser-cloud-php) | [GitHub](https://github.com/groupdocs-parser-cloud/groupdocs-parser-cloud-python) | [GitHub](https://github.com/groupdocs-parser-cloud/groupdocs-parser-cloud-ruby)  | [GitHub](https://github.com/groupdocs-parser-cloud/groupdocs-parser-cloud-node) | [GitHub](https://github.com/groupdocs-parser-cloud/groupdocs-parser-cloud-android) |
| [NuGet](https://www.nuget.org/packages/GroupDocs.parser-Cloud/) | [Maven](https://repository.groupdocs.cloud/webapp/#/artifacts/browse/tree/General/repo/com/groupdocs/groupdocs-parser-cloud) | [Composer](https://packagist.org/packages/groupdocscloud/groupdocs-parser-cloud) | [PIP](https://pypi.org/project/groupdocs-parser-cloud/) | [GEM](https://rubygems.org/gems/groupdocs_parser_cloud)  | [NPM](https://www.npmjs.com/package/groupdocs-parser-cloud) | [Maven](https://repository.groupdocs.cloud/webapp/#/artifacts/browse/tree/General/repo/com/groupdocs/groupdocs-parser-cloud-android) |


[Home](https://www.groupdocs.cloud/) | [Product Page](https://products.groupdocs.cloud/parser/java) | [Docs](https://docs.groupdocs.cloud/parser/) | [Demos](https://products.groupdocs.app/parser/family) | [API Reference](https://apireference.groupdocs.cloud/parser/) | [Examples](https://github.com/groupdocs-parser-cloud/groupdocs-parser-cloud-java-samples) | [Blog](https://blog.groupdocs.cloud/category/parser/) | [Free Support](https://forum.groupdocs.cloud/c/parser) | [Free Trial](https://purchase.groupdocs.cloud/trial)
