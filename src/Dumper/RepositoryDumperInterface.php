<?php

/*
 * This file is part of the Composer Resource Plugin package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Composer\ResourcePlugin\Dumper;

use Webmozart\Composer\ResourcePlugin\Configuration\RepositoryConfiguration;

/**
 * @since  %%NextVersion%%
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface RepositoryDumperInterface
{
    public function dump(RepositoryConfiguration $config, $targetPath);
}
