<?php

namespace Azhar\HelloWorld\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	/**
     * @var \Magento\Framework\App\Config\ScopeConfigInterfac
     */
    CONST ENABLE      = 'azhar_helloworld/general/enable';
    CONST BLOCK_LABEL = 'azhar_helloworld/general/block_label';
    CONST TEXT_ALIGN  = 'azhar_helloworld/general/text_align';
    CONST IMAGE       = 'azhar_helloworld/general/image';


    protected $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);

        $this->scopeConfig = $context->getScopeConfig();
    }

    public function getEnable(){
        return $this->scopeConfig->getValue(self::ENABLE);
    }

    public function getBlockLabel(){
        return $this->scopeConfig->getValue(self::BLOCK_LABEL);
    }

    // public function getTextAlign(){
    //     return $this->scopeConfig->getValue(self::TEXT_ALIGN);
    // }

    public function getImage(){
        return $this->scopeConfig->getValue(self::IMAGE);
    }
}