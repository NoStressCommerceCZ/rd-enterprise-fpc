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
/** 
 * {comment}
 * 
 * @category Nostress 
 * @package Nostress_Fpctesting
 * @author NoStress Commerce
 */

class Nostress_Fpctesting_IndexController extends Mage_Core_Controller_Front_Action
{
	protected function _initAction() {
		$this->loadLayout();

		return $this;
	}

	public function indexAction() {
		$this->_initAction();
		$this->renderLayout();
	}
	
	public function versionOneAction() {
		$this->_initAction();
		$this->renderLayout();
	}

	public function versionTwoAction() {
		$this->_initAction();
		$this->renderLayout();
	}
	
}
