<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://github.com/friendsofhyperf/ide-helper
 * @document https://github.com/friendsofhyperf/ide-helper/blob/master/README.md
 * @contact  huangdijia@gmail.com
 * @license  https://github.com/friendsofhyperf/ide-helper/blob/master/LICENSE
 */
namespace HyperfTest\Cases;

/**
 * @internal
 * @coversNothing
 */
class ExampleTest extends AbstractTestCase
{
    public function testExample()
    {
        $this->assertTrue(true);

        $this->assertTrue(extension_loaded('swoole'));
    }
}
