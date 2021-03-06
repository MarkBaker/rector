<?php declare(strict_types=1);

namespace Rector\CodeQuality\Tests\Rector\Array_\CallableThisArrayToAnonymousFunctionRector;

use Rector\CodeQuality\Rector\Array_\CallableThisArrayToAnonymousFunctionRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class CallableThisArrayToAnonymousFunctionRectorTest extends AbstractRectorTestCase
{
    public function test(): void
    {
        $this->doTestFiles([
            __DIR__ . '/Fixture/fixture.php.inc',
            __DIR__ . '/Fixture/skip.php.inc',
            __DIR__ . '/Fixture/another_class.php.inc',
        ]);
    }

    protected function getRectorClass(): string
    {
        return CallableThisArrayToAnonymousFunctionRector::class;
    }
}
