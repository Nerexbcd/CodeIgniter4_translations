<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Translations\Tests;

/**
 * @internal
 */
final class DutchTranslationTest extends AbstractTranslationTestCase
{
    protected function setUp(): void
    {
        // The keys of this locale that do not differ from the english value even if translated.
        $this->excludedLocaleKeyTranslations = [
            'CLI.generator.parentClass',
            'CLI.generator.returnType',
            'CLI.generator.viewName.cell',
            'Cast.invalidTimestamp',
            'Email.exitStatus',
            'Migrations.batch',
            'Migrations.namespace',
        ];
    }
}
