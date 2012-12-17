<?php
/** 
 * Magento Component developed by NoStress Commerce 
 * 
 * NOTICE OF LICENSE 
 * 
 * This source file is subject to the Open Software License (OSL 3.0) 
 * that is bundled with this package in the file LICENSE.txt. 
 * It is also available through the world-wide-web at this URL: 
 * http://opensource.org/licenses/osl-3.0.php 
 * If you did of the license and are unable to 
 * obtain it through the world-wide-web, please send an email 
 * to info@nostresscommerce.cz so we can send you a copy immediately. 
 * 
 * @copyright Copyright (c) 2012 NoStress Commerce
 * 
 */
class Nostress_Fpctesting_Model_Container_Block extends Enterprise_PageCache_Model_Container_Customer{
	
	/**
     * Get identifier from cookies
     *
     * @return string
     */
    protected function _getIdentifier()
    {
        $cacheId = $this->_getCookieValue(Enterprise_PageCache_Model_Cookie::COOKIE_CUSTOMER, '')
            . '_'
            . $this->_getCookieValue(Enterprise_PageCache_Model_Cookie::COOKIE_CUSTOMER_LOGGED_IN, '');
        return $cacheId;
    }
    
	/**
     * Get cache identifier
     *
     * @return string
     */
    protected function _getCacheId()
    {
        return 'CONTAINER_NOSTRESS_FPCTESTING_BLOCK_' . md5($this->_placeholder->getAttribute('cache_id') . $this->_getIdentifier());
    }
    
	/**
     * Render block content
     *
     * @return string
     */
    protected function _renderBlock()
    {
        $block = Mage::app()->getLayout()->createBlock('nostress_fpctesting/block');
        Mage::dispatchEvent('render_block', array('block' => $block, 'placeholder' => $this->_placeholder));
        return $block->toHtml();
    }
	
}