<?php
class Vsourz_Exitscreen_Model_Source_Page
{

    protected $_options;

    public function toOptionArray()
    {
        if (!$this->_options)
		{
            $this->_options = Mage::getResourceModel('cms/page_collection')
                ->load()->toOptionIdArray();
        }
		$this->_options[] = array('value' => 'catalog', 'label' => 'Catalog');
		$this->_options[] = array('value' => 'checkout', 'label' => 'Checkout');
		return $this->_options;
    }
}
