<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\SecurityBundle\Tests\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class XmlSecurityExtensionTest extends SecurityExtensionTest
{
    protected function loadFromFile(ContainerBuilder $container, $file)
    {
        $loadXml = new XmlFileLoader($container, __DIR__.'/Fixtures/xml');
        $loadXml->load($file.'.xml');
    }
}
