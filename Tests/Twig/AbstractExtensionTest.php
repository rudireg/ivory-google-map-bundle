<?php

/*
 * This file is part of the Ivory Google Map bundle package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMapBundle\Tests\Twig;

use PHPUnit\Framework\TestCase;
use Twig\Environment;
use Twig\Extension\ExtensionInterface;
use Twig\Loader\FilesystemLoader;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
abstract class AbstractExtensionTest extends TestCase
{
    /**
     * @var Environment
     */
    private $twig;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->twig = new Environment(new FilesystemLoader([]));
        $this->twig->addExtension($this->createExtension());
    }

    /**
     * @return ExtensionInterface
     */
    abstract protected function createExtension();

    /**
     * @return Environment
     */
    protected function getTwig()
    {
        return $this->twig;
    }
}
