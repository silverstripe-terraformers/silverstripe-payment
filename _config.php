<?php

Director::addRules(100, array(
	WorldpayPayment_Handler::$URLSegment . '/$Action/$ID' => 'WorldpayPayment_Handler',
	PayPalPayment_Handler::$URLSegment . '/$Action/$ID' => 'PayPalPayment_Handler',
	'harness/$Action/$Class/$ID' => 'Harness', 
));

Object::add_extension('Member', 'PayerHavingReceipt');
// if you are using cURL you may want to add extra security by checking the third party has a valid SSL certificate
// if you do uncomment the line below and specify the location of the certificate the command `curl-config --ca` can be used to get the location
//define('SS_CACERT_LOCATION', '/opt/local/share/curl/curl-ca-bundle.crt');
