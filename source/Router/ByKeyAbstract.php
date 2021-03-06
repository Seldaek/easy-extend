<?php namespace Apishka\EasyExtend\Router;

use Apishka\EasyExtend\RouterAbstract;

/**
 * By key abstract
 *
 * @uses RouterAbstract
 * @abstract
 *
 * @author Evgeny Reykh <evgeny@reykh.com>
 */

abstract class ByKeyAbstract extends RouterAbstract
{
    /**
     * Get class variants
     *
     * @param \ReflectionClass $reflector
     * @param object           $item
     *
     * @return array
     */

    protected function getClassVariants(\ReflectionClass $reflector, $item)
    {
        return $item->__apishkaSupportedKeys();
    }
}
