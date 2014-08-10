<?php

namespace Weshop\Bundle\MessageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WeshopMessageBundle extends Bundle
{
	public function getParent(){

		return "FOSMessageBundle";
    
	}
}
