# Installation

To begin the installation first download the module from online. You can find what version
you require for your SilverStripe installation on the silverstripe.org website.

After you have finished downloading the file, extract the downloaded file to your sites root
folder and ensure the name of the module is `payment`.

Run a database rebuild by visiting *http://yoursite.com/dev/build*. This will add the required database
columns and tables for the module to function.

You will need to set the DPS User ID and the DPS key in the _config.php file

	define('DPSPAY_USERID', 'Your User ID');
	define('DPSPAY_KEY', 'Your DPS Key');

It is also recommended to set the location of the CA bundle if you can find this out on some systems by running the following command `curl-config --ca`

	define('SS_CACERT_LOCATION', '/opt/local/share/curl/curl-ca-bundle.crt');
