<?php namespace ApishkaTest\EasyExtend\Router\Fixtures\Tree;

use ApishkaTest\EasyExtend\Router\Fixtures\TreeAbstract;

/**
 * Cherry
 *
 * @uses TreeAbstract
 *
 * @author Evgeny Reykh <evgeny@reykh.com>
 */

class Cherry extends TreeAbstract
{
    /**
     * Apishka supported keys
     */

    public function __apishkaSupportedKeys()
    {
        return array(
            'cherry',
        );
    }
}
