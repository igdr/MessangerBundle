<?php

namespace Igdr\Bundle\MessangerBundle\Tests\DependencyInjection;

use Igdr\Bundle\MessangerBundle\DependencyInjection\IgdrMessangerExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Class IgdrMessangerExtensionTest
 */
class IgdrMessangerExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testLoad()
    {
        $this->configuration = new ContainerBuilder();
        $loader              = new IgdrMessangerExtension();
        $loader->load(array(), $this->configuration);
        $this->assertTrue($this->configuration instanceof ContainerBuilder);
    }

    /**
     * @test
     */
    public function testGetAlias()
    {
        $loader = new IgdrMessangerExtension();
        $this->assertEquals('igdr_messanger', $loader->getAlias());
    }
}
