<?php
namespace Igdr\Bundle\MessangerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('igdr_messanger');

        $rootNode
            ->children()
                ->arrayNode('email')
                    ->children()
                        ->scalarNode('from')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                        ->scalarNode('from_name')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}