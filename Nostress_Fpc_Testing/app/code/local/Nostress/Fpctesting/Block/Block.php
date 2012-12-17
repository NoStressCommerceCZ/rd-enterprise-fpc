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

class Nostress_Fpctesting_Block_Block extends Mage_Core_Block_Abstract {

	protected function _toHtml() {
		
		$html = array();
		$html[] = __METHOD__;

		if ( Mage::getSingleton('customer/session')->isLoggedIn() ) {
			$customer = Mage::getSingleton('customer/session')->getCustomer();
			$html[] = $customer->getEmail();			
		} else {
			$html[] = 'no customer logged in';
		}
		
		$get_parameter = $this->getRequest()->getParam('variable', false);
		$html[] = (!$get_parameter?'GET "variable" is empty':"variable=$get_parameter");

		$o = '<ul>';
		foreach ($html as $line) {
			$o = '<li>' . $line . '</li>';
		}
		$o .= '</ul>';
		
		return $o;

	}
	
}