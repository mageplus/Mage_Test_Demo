<?php
/**
 * Foo_Bar - the simple Mage_Test demo module
 *
 * @category    Foo
 * @package     Bar
 * @author      Lee Bolding <lee@mageplus.org>
 * @copyright   2013, Mage+ Ltd (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Foo_Bar_Test_Model_Product extends Mage_Catalog_Test_Model_Product
{
    /**
     * @var Mage_Catalog_Model_Product
     */
    protected $_model;
  
    protected $_sku = "123456789";

    protected function setUp()
    {
        //$this->_model = Mage::getConfig()->getGroupedClassName(parent::CLASS_GROUP_TYPE, parent::CLASS_ID);
	$this->_model = Mage::getModel(parent::CLASS_ID);
    }

    public function testFooBar()
    {
       $this->_model->setSku($this->_sku);
       $this->assertEquals($this->_sku . "-FOO", $this->_model->getSku());
    }
}
