<?php
class Excellence_Pay_Model_Pay
  extends Mage_Payment_Model_Method_Abstract {

  protected $_code = 'pay';
  protected $_formBlockType = 'pay/form_pay';
  protected $_infoBlockType = 'pay/info_pay';

  public function assignData($data) {
    if (!($data instanceof Varien_Object)) {
      $data = new Varien_Object($data);
    }
    $info = $this->getInfoInstance();
    $info->setCheckNo($data->getCheckNo())->setCheckDate($data->getCheckDate());
    return $this;
  }

  public function validate() {
    parent::validate();
    return $this;
  }

public function authorize(Varien_Object $payment, $amount) {
            $data = $payment->getData();
        Mage::getUrl("direcpay/arithmetic/checkout");
    }

  public function getOrderPlaceRedirectUrl()
{
      return 'https://www.pinvalidda.com/opencms/opencms/system/modules/com.entretenimientoenlawebcolombia/templates/homePage'; //Replace url with your own
}
}
?>
