## Configuration

The module provides a number of e-commerce payment gateways
The only tested method for SilverStripe 3.0 is for the PxPay Interface from Payment Express http://www.paymentexpress.com

To use this this you will need to define the DPS UserID and DPS Key in the config

	define('DPSPAY_USERID', 'Your User ID');
	define('DPSPAY_KEY', 'Your DPS Key');

You can also verify the authenticity of the third party by specifiying the location of the CA bundle on your server

	define('SS_CACERT_LOCATION', '/opt/local/share/curl/curl-ca-bundle.crt');
