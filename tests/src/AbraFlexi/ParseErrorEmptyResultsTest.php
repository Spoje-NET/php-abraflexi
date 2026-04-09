<?php

declare(strict_types=1);

namespace Test\AbraFlexi;

use AbraFlexi\RW;

/**
 * Test for issue #98: parseError() crashes when results is an empty array.
 */
class ParseErrorEmptyResultsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers \AbraFlexi\RW::parseError
     */
    public function testParseErrorWithEmptyResultsArray(): void
    {
        $rw = new RW(null, ['offline' => true]);

        // Simulate the API response that causes the crash:
        // success is true but results is an empty array
        $responseDecoded = [
            'success' => 'true',
            'stats' => [
                'created' => '0',
                'updated' => '0',
                'deleted' => '0',
                'skipped' => '0',
                'failed' => '0',
            ],
            'results' => [],
        ];

        // This should not throw "Undefined array key 0"
        $errorCount = $rw->parseError($responseDecoded);

        $this->assertSame(0, $errorCount);
    }

    /**
     * @covers \AbraFlexi\RW::parseError
     */
    public function testParseErrorWithNonEmptyResultsStillWorks(): void
    {
        $rw = new RW(null, ['offline' => true]);

        $responseDecoded = [
            'results' => [
                [
                    'errors' => [
                        ['message' => 'Some error', 'for' => 'field'],
                    ],
                ],
            ],
        ];

        $errorCount = $rw->parseError($responseDecoded);

        $this->assertGreaterThan(0, $errorCount);
    }
}
