<?php
namespace Acme\PayMethods\Sagepay;
use Acme\PayMethods\PayMethodInterface;

class Transactions implements PayMethodInterface {

/******************************************************************/
	
	public function takePayment()
	{
		
		return __CLASS__. '->'.__FUNCTION__;
	}
/******************************************************************/

	public function refundPayment(){
		
		
	}
/******************************************************************/
	
	public function listTransactions()
	{
		
		
	}
/******************************************************************/

}