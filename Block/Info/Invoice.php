<?php

namespace Heidelpay\Gateway\Block\Info;

/**
 * Heidelpay Invoice Info Block
 *
 * @license    Use of this software requires acceptance of the License Agreement. See LICENSE file.
 * @copyright  Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link       https://dev.heidelpay.de/magento2
 * @author     Stephano Vogel
 *
 * @package    heidelpay\magento2\block\info\invoice
 */
class Invoice extends \Heidelpay\Gateway\Block\Info\AbstractBlock
{
    /**
     * @var string
     */
    protected $_template = 'Heidelpay_Gateway::info/invoice.phtml';

    /**
     * @return string
     */
    public function toPdf()
    {
        $this->setTemplate('Heidelpay_Gateway::info/pdf/invoice.phtml');
        return $this->toHtml();
    }
}
