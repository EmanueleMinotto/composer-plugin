<?php

/*
 * This file is part of the Composer Resource Plugin package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Composer\ResourcePlugin\Resource;

/**
 * @since  %%NextVersion%%
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FileResource implements ResourceInterface
{
    /**
     * @var string
     */
    private $repositoryPath;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string[]
     */
    private $alternativePaths;

    public function __construct($repositoryPath, $path, array $alternativePaths = array())
    {
        $this->repositoryPath = $repositoryPath;
        $this->path = $path;
        $this->alternativePaths = $alternativePaths;
    }

    /**
     * @return string
     */
    public function getRepositoryPath()
    {
        return $this->repositoryPath;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return string[]
     */
    public function getAlternativePaths()
    {
        return $this->alternativePaths;
    }
}
