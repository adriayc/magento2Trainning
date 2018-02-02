<?php
/**
 * Created by PhpStorm.
 * User: adrian
 * Date: 2/2/18
 * Time: 5:12 PM
 */

namespace Unit1\HelloWorld\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Config extends Action
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        // TODO: Implement execute() method.
    }

}