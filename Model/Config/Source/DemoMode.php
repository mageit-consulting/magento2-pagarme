<?php

namespace MageIT\PagarMe\Model\Config\Source;

class DemoMode implements \Magento\Framework\Option\ArrayInterface
{

    /**
     * @var \MageIT\PagarMe\Helper\Data
     */
    protected $_pagarmeHelper;

    /**
     * DemoMode constructor.
     *
     * @param \MageIT\PagarMe\Helper\Data $adyenHelper
     */
    public function __construct(
        \MageIT\PagarMe\Helper\Data $pagarmeHelper
    ) {
        $this->_pagarmeHelper = $pagarmeHelper;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $recurringTypes = $this->_pagarmeHelper->getModes();

        foreach ($recurringTypes as $code => $label) {
            $options[] = ['value' => $code, 'label' => $label];
        }
        return $options;
    }
}
