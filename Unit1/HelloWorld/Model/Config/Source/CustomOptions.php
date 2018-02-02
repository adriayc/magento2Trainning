<?php
/**
 * Created by PhpStorm.
 * User: adrian
 * Date: 2/2/18
 * Time: 2:36 PM
 */

namespace Unit1\HelloWorld\Model\Config\Source;


class CustomOptions implements \Magento\Framework\Option\ArrayInterface
{


    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        $options = [
            [
                'label' => __('In Price'),
                'value' => '1',
            ],
            [
                'label' => __('In Description'),
                'value' => '2',
            ]
        ];
        return $options;
    }
}