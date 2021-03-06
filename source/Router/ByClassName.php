<?php namespace Apishka\EasyExtend\Router;

use Apishka\EasyExtend\RouterAbstract;

/**
 * By class name
 *
 * @uses RouterAbstract
 *
 * @author Evgeny Reykh <evgeny@reykh.com>
 */

class ByClassName extends RouterAbstract
{
    /**
     * Is correct item
     *
     * @param \ReflectionClass $reflector
     *
     * @return bool
     */

    protected function isCorrectItem(\ReflectionClass $reflector)
    {
        return parent::isCorrectItem($reflector) && $this->hasClassTrait($reflector, 'Apishka\EasyExtend\Helper\ByClassNameTrait');
    }

    /**
     * Get class data
     *
     * @param \ReflectionClass $reflector
     * @param object           $item
     *
     * @return mixed
     */

    protected function getClassData(\ReflectionClass $reflector, $item)
    {
        $data = parent::getClassData($reflector, $item);
        $data['prefixes'] = $item->__apishkaGetPrefixes();

        return $data;
    }
}
