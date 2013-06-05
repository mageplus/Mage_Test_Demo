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

class Foo_Bar_Model_Product extends Mage_Catalog_Model_Product
{
    public function getSku()
    {
    	return parent::getSku() . "-FOO";
    }
}
