<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Error;

require_once realpath(__DIR__) . '/../../app/bootstrap.php';
require_once 'processor.php';

/**
 * Error processor factory
 */
class ProcessorFactory
{
    /**
     * Create Processor
     *
     * @return Processor
     */
    public function createProcessor()
    {
        $objectManagerFactory = \Magento\Framework\App\Bootstrap::createObjectManagerFactory(BP, $_SERVER);
        $objectManager = $objectManagerFactory->create($_SERVER);
        $response = $objectManager->create('Magento\Framework\App\Response\Http');
        return new Processor($response);
    }
}
