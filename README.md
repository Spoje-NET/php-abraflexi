# PHP AbraFlexi

![PHP AbraFlexi Logo](project-logo.png?raw=true "Project Logo")

PHP 8.1+ based library for easy interaction with the Czech accounting system AbraFlexi.

[![Latest Version](https://img.shields.io/github/release/Spoje-NET/php-abraflexi.svg?style=flat-square)](https://github.com/Spoje-NET/php-abraflexi/releases)
[![Software License](https://img.shields.io/badge/license-GNU-brightgreen.svg?style=flat-square)](https://github.com/Spoje-NET/php-abraflexi/blob/master/LICENSE)
[![GitHub forks](https://img.shields.io/github/forks/Spoje-NET/php-abraflexi)](https://github.com/Spoje-NET/php-abraflexi/network)
[![wakatime](https://wakatime.com/badge/user/5abba9ca-813e-43ac-9b5f-b1cfdf3dc1c7/project/48520b87-4e9a-4eca-861a-a5dd85b11374.svg)](https://wakatime.com/badge/user/5abba9ca-813e-43ac-9b5f-b1cfdf3dc1c7/project/48520b87-4e9a-4eca-861a-a5dd85b11374)
![Packagist Version](https://img.shields.io/packagist/v/spojenet/flexibee)


[![Latest Stable Version](https://poser.pugx.org/spojenet/flexibee/v/stable)](https://packagist.org/packages/spojenet/flexibee)
[![Total Downloads](https://poser.pugx.org/spojenet/flexibee/downloads)](https://packagist.org/packages/spojenet/flexibee)
[![Latest Unstable Version](https://poser.pugx.org/spojenet/flexibee/v/unstable)](https://packagist.org/packages/spojenet/flexibee)
[![License](https://poser.pugx.org/spojenet/flexibee/license)](https://packagist.org/packages/spojenet/flexibee)
[![Monthly Downloads](https://poser.pugx.org/spojenet/flexibee/d/monthly)](https://packagist.org/packages/spojenet/flexibee)
[![Daily Downloads](https://poser.pugx.org/spojenet/flexibee/d/daily)](https://packagist.org/packages/spojenet/flexibee)

# Acknowledgements

The creation of this library would not have been possible without the kind support of [Spoje.Net](http://www.spoje.net), which funded the development of the solution for connecting LMS / AbraFlexi and warehouse import. :+1:

![Spoje.Net](spoje-net_logo.gif?raw=true "Spoje.Net")

**Special thanks to the technical support of [ABRA Flexi s.r.o.](https://www.abraflexi.eu/podpora/) for their patience in responding to all questions and bug reports.**

GDPR logging support was completed with the kind help of [&lt;PureHTML&gt;](https://purehtml.cz/)

## Installation

```shell
composer require spojenet/flexibee
```

so that your resulting composer.json contains:

```json
{
    "require": {
        "spojenet/flexibee": "^3.6"
    }
}
```

Run the installation with the command **composer install**:

![Compser Install](flexipeehp-composer-install.png?raw=true "Installation")

## Configuration

Configuration is done by setting the following constants:

```php
   // AbraFlexi API URL
   define('ABRAFLEXI_URL', 'https://abraflexi-dev.spoje.net:5434');
   // AbraFlexi API User
   define('ABRAFLEXI_LOGIN', 'apiuser');
   // AbraFlexi API Password
   define('ABRAFLEXI_PASSWORD', 'apipass');
   // Company in AbraFlexi
   define('ABRAFLEXI_COMPANY', 'test_s_r_o_');
   // Or if you do not want to use username and password
   define('ABRAFLEXI_AUTHSESSID', '6QuifebMits'); // Optional
   // Slow server, large database, and over a modem
   define('ABRAFLEXI_TIMEOUT', 60); // Optional
   // Return PHP exception if AbraFlexi returns an error
   define('ABRAFLEXI_EXCEPTIONS', true); // Optional
```

If the constants are not set, the classes will also try to configure themselves from environment variables of the same name, e.g. getenv('ABRAFLEXI_URL')

It is also possible to provide login credentials when creating an instance of the class.

```php
    $invoicer = new \AbraFlexi\FakturaVydana(null,[
                'company' => 'Firma_s_r_o_',
                'url' => 'https://abraflexi.firma.cz/',
                'user' => 'rest',
                'password' => '-dj3x21xaA_'
            ]);
```

This method of setting has a higher priority than the above constant definitions.

```php
    $order = new \AbraFlexi\ObjednavkaPrijata('code:OBP0034/2019',['companyUrl'=> $_GET['companyUrl'], 'authSessionId'=>$_GET['authSessionId'] ])
```

In this way, an application triggered by a user button passing the values **companyUrl** and **authSessionId** can connect to abraflexi and a specific order.

## How does it all work?

The central component of the entire library is the RO class, which is able to communicate with the AbraFlexi REST API using the PHP curl extension.

From it, classes for individual records are derived, containing methods for frequently used operations, for example "Pay" in the case of received invoices.

A new derived class is created so that the class name is the name of the record but without hyphens. These are replaced by capital letters in the name.

```php
    function evidenceToClass($evidence)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $evidence)));
    }
```

So, if we want to derive a new class for the record "Měrné jednotky" (Units of Measure), it will look like this:

```php
    <?php
    /**
     * @link https://demo.abraflexi.eu/c/demo/merna-jednotka/properties Properties of the record
     */
    class MernaJednotka extends /AbraFlexi/RW
    {
        /**
         * Record used by the object.
         *
         * @var string
         */
        public $evidence = 'merna-jednotka';
    }
```

And then it is easy to list the units of measure in 2 lines:

```php
    $jednotky = new MernaJednotka();
    print_r( $jednotky->getAllFromAbraFlexi() );
```

If we want the newly created class to be able to write to abraflexi, it must be derived from the AbraFlexiRW parent.

More usage examples can be found [in a separate project](https://github.com/VitexSoftware/AbraFlexi-Examples/tree/master/Examples)

## Structure of Records, Actions, and Relations

In some cases, it is good to know what actions can be performed or what the structure of a record is. This information can be obtained by calling <https://demo.abraflexi.eu/c/demo/*/properties.json> or <https://demo.abraflexi.eu/c/demo/*/actions.json>. However, these are relatively time-consuming operations. Since the structure of records and actions or relations between records in AbraFlexi does not change often, AbraFlexi has a mechanism that allows you to work with this data without having to query the server.

The structure is stored in the Structure class (Actions, Relations), which contains a statically defined array with information that would otherwise have to be obtained from AbraFlexi.

An item in the list of records <https://demo.abraflexi.eu/c/demo/evidence-list> can then be easily displayed at any time:

```php
    echo \AbraFlexi\Structure::$evidence['faktura-vydana'];
```

The structures of individual records are then stored in static variables. Their name follows the same rules as for creating a new class name, except that the first letter is lowercase.

```php
    lcfirst(\AbraFlexi\Functions::evidenceToClassName($evidence))
```

If necessary, these classes can then be generated with the current content using the following command:

```shell
cd tools/
./update_all.sh
```

The operation takes several minutes. You can view the progress as follows:

```shell
tail -f /var/log/syslog | grep  AbraFlexitest
```

## Debug mode

If you set $this->debug to true in AbraFlexi objects, additional tests will be performed before sending data to AbraFlexi. The following possible errors are checked:

* Does the inserted field exist for the record?
* Is the inserted field read-only?
* If the inserted field is a relation, is it also a field?

In debug mode, all requests to abraflexi and their responses are also saved to the /tmp folder

The library includes a mechanism for sending recorded errors during AbraFlexi runtime to developers:

If AbraFlexi returns Internal Server Error 500, an email containing the error message is sent to the developers.

If AbraFlexi is running on the same server and it is possible to read the error logs, the appropriate fragment is extracted from them and added to the body of the email.

The email also contains additional information about the license and enabled modules.

Attachments also include files containing the body of the request to the server, the body of its response, and a file containing information about curl.

During the life of the object, errors are recorded and only the first of each kind is sent.

## Changes in version 3.6

* Default curl timeout set to 300
* Maximized use of the Relation object
* New class AbraFlexi\Code replacing Functions::code and Functions::uncode
* Classes are available for all records (not just the frequently used ones)

## Example of creating an instance of the FakturaVydana class

The default **Native types** mean that from the server, in a field containing a date, you get a PHP DateTime object. In the 'id' column, an integer, etc. This behavior can be disabled using the constructor parameter `['nativeTypes' = false]`

```php
    new \AbraFlexi\FakturaVydana( 'code:VF2-12345', ['nativeTypes'=>false,'debug'=>true,'ignore404'=>false] );
```

See: [constructor RO](https://github.com/Spoje-NET/php-abraflexi/blob/cd829fcb05939ab54ed99aaa63d01b63700cbb83/src/AbraFlexi/RO.php#L450)

You can specify some of these parameters:

     * user, password, authSessionId - authentication
     * company, url, evidence - force access parameters
     * prefix - for URLs starting differently than '/c/' for company
     * defaultUrlParams - array of properties then automatically added
     * debug - to enable debug mode
     * detail - to specify the required [level of detail](https://www.flexibee.eu/api/dokumentace/ref/detail-levels/).
     * offline - no network operations are performed (do not connect when instantiating the object)
     * filter - see [Filtering](https://www.flexibee.eu/api/dokumentace/ref/filters}
     * ignore404 - if you do not know whether the requested record exists, set to true so it does not throw an error
     * nativeTypes - if you want everything from the server to be returned as strings
     * timeout - patience before a network communication error is thrown (passed to cURL)
     * companyUrl - loads all connection details from the string (API password, etc.)
     * ver - force API version (if you want to call functions intended for the new web interface)
     * throwException - throw an exception at every suitable opportunity

## Autoloading data

If the constructor of the object is given an ID of type int or a code (code:..) of the record, it calls the function loadFromAbraFlexi(id). Then it is possible to access the loaded values using the methods $this->getData() and RO::getDataValue('name')

## Data types

| Machine Name   | Name            | Note        | Example     | PHP Type  |
| -------------- | :-------------- | ----------- | :----------: | :------- |
| string         | String          | Encoding is unicode. Any character can be used. | crazy pony こちらは田中さんです | string |
| integer        | Integer         | Must be without spaces. It is a signed 4-byte integer, but the range may be limited (see the overview of items for the given record) | 12 | integer |
| numeric        | Decimal number  | Must be without spaces, the decimal separator is a dot. It is an 8-byte double, but the range may be limited (see the overview of items for the given record) | 12.5 | float |
| date           | Date            | Date in the format YYYY-MM-DD; you can also specify a time zone (YYYY-MM-DDZZZ), but it will be ignored. ZZZ is the time zone designation (Z or +HH:MM or -HH:MM). | 1980‑05‑06 2015‑01‑30Z 2008‑09‑01+02:00 | \Date() |
| datetime       | Date + time     | Date and time in the format YYYY-MM-DD'T'HH:MM:SS.SSS; you can also specify a time zone (YYYY-MM-DD'T'HH:MM:SS.SSSZZZ), but it will be ignored. | 1980‑05‑06 1980‑05‑06T12:30:12 2015‑01‑30T22:55:33Z 2008‑09‑01T17:18:14+02:00  2008‑09‑01T17:18:14.075+02:00 | \DateTime() |
| logic          | Boolean value   | boolean     | true false | boolean |
| select         | Select one value | Select one value. It is represented as a string.  | typVztahu.odberDodav | string |
| relation       | Data relation   | The input is a record from another evidence (overview of identifier types)  | 123 code:CZK ext:DB:232 | \AbraFlexi\Relation |

## Testing

PHPUnit tests are located in the **testing** folder. If you want to test against a different server than the official <http://demo.abraflexi.eu/>, you need to change the settings in the **bootstrap.php** file.

The contents of the $testServer variable determine which of the preset settings will be used. And of course, you can define your own. As an example, the test server spoje.net is given here.

For testing, please first create a test company TESTING s.r.o. and set the access data for a user authorized to use the REST API. (Which is the administrator user specified during the installation of AbraFlexi.)

Warning: testing against a company with many invoices and a connected bank may take some time, as automatic document matching is also tested.

If you decide to inherit AbraFlexi in your project and write tests for these classes also inherited from AbraFlexi, e.g.:

class HookRecieverTest extends \Test\AbraFlexi\ChangesTest

Add the paths to the original tests to your composer.json:

```json
    "autoload-dev": {
        "psr-4": {
            "Test\\": "vendor/spojenet/php-abraflexi/test/src/AbraFlexi/test/",
            "Test\\Ease\\": "vendor/vitexsoftware/ease-core/tests/src/Ease",
            "Test\\AbraFlexi\\": "vendor/spojenet/php-abraflexi/test/src/AbraFlexi/",
         }
    }
```

## Examples

In the Examples folder, you can find these usage examples:

| File                                                        | Description                                 |
| ----------------------------------------------------------- | --------------------------------------------|
| [AttachmentSaveToFile.php](Examples/AttachmentSaveToFile.php) | save attachment to file
| [AttachmentUpload.php](Examples/AttachmentUpload.php)         | upload attachment
| [AuthSessionIdUsage.php](Examples/AuthSessionIdUsage.php)     | Example of AuthSessionId authentication
| [AuthentizeContact.php](Examples/AuthentizeContact.php)       | contact authentication
| [BatchOperation.php](Examples/BatchOperation.php)             | Using filter in batch operations
| [CreateLabel.php](Examples/CreateLabel.php)                   | working with labels
| [DryRun.php](Examples/DryRun.php)                             | Test save (dry-run)
| [DownloadInvoicePDF.php](Examples/DownloadInvoicePDF.php)     | download invoice PDF
| [Error404.php](Examples/Error404.php)                         | working with non-existent records
| [FindOverdueInvoices.php](Examples/FindOverdueInvoices.php)   | find overdue invoices
| [GetRecordWithRelation.php](Examples/GetRecordWithRelation.php) | Get record including data from sub-record
| [GetBankAccountForCompany.php](Examples/GetBankAccountForCompany.php) | Get bank account for company from directory
| [InvoiceLockUnlock.php](Examples/InvoiceLockUnlock.php)       | Locking and unlocking record
| [InvoiceCopy.php](Examples/InvoiceCopy.php)                   | create tax document from advance
| [LoginLogout](Examples/LoginLogout.php)                       | user login and logout
| [NajdiDanovyDokladKzalohovemu.php](Examples/NajdiDanovyDokladKzalohovemu.php) | find document
| [Naskladnění.php](Examples/Naskladneni.php)                   | Stock product with serial numbers
| [NewInvoice.php](Examples/NewInvoice.php)                     | New invoice with due date printed as json
| [ObjectChaining.php](Examples/ObjectChaining.php)             | Chaining objects for multiple operations in one request
| [ObjectCooperation.php](Examples/ObjectsCooperation.php)      | Sharing data and connection parameters between objects
| [PerformingActions.php](Examples/PerformingActions.php)       | How to perform actions on a document, e.g. cancellation
| [ReadAddressColumns.php](Examples/ReadAddressColumns.php)     | return specific columns
| [sendInvoiceByMail.php](Examples/sendInvoiceByMail.php)       | send invoice by email
| [SendReminders.php](Examples/SendReminders.php)               | send reminders
| [SetContactAuth.php](Examples/SetContactAuth.php)             | set authentication
| [TestConnection.php](Examples/TestConnection.php)             | connection check

## Usage examples

* [Flexplorer](https://github.com/VitexSoftware/Flexplorer) Developer tool and record editor
* [FlexiProXY](https://github.com/VitexSoftware/FlexiProxy) Modifier of the AbraFlexi web interface
* [Upomínač](https://github.com/VitexSoftware/php-abraflexi-reminder) Reminder sender
* [Matcher](https://github.com/VitexSoftware/php-abraflexi-matcher) Invoice matcher
* [Redmine2AbraFlexi](https://github.com/VitexSoftware/Redmine2AbraFlexi) Generates invoices from time worked in Redmine
* [FlexiPeeHP-Bricks](https://github.com/VitexSoftware/FlexiPeeHP-Bricks) Examples and frequently used classes when working with AbraFlexi
* [AbraFlexi Tools](https://github.com/VitexSoftware/AbraFlexi-Tools) Tools for scripting AbraFlexi from the command line

## References

* [Import data from FAPI to AbraFlexi](https://flexibee.info/fapi2abraflexi/)  - blahasoft.cz
* [Import data from iDoklad to AbraFlexi](https://flexibee.info/idoklad2abraflexi/) - blahasoft.cz

## AbraFlexi libraries for other languages

* [Flexipy](https://github.com/JakubJecminek/flexipy)  (Python) [Documentation](http://pythonhosted.org/flexipy/index.html)
* [Flexibee.rb](https://github.com/danpecher/flexibee.rb) (Ruby)
* [UniMapper Flexibee extension](https://github.com/unimapper/flexibee) (PHP)
* [Flexibee client](https://github.com/ricco24/flexibee-client) (PHP)
* [flexibee-client](https://github.com/Ecomailcz/flexibee-client) (PHP)
* [flexibee-client](https://github.com/klemen/flexibee-client) (PHP)
* [Flexibee](https://github.com/adleritech/flexibee) (Java)

[WakaTime project statistics](https://wakatime.com/@Vitex/projects/eftagqirep?start=2022-10-09&end=2022-10-15)
[Project statistics before renaming](https://wakatime.com/@5abba9ca-813e-43ac-9b5f-b1cfdf3dc1c7/projects/ypdqvdcmsg) (approx. 250h)
