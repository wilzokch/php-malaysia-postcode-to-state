PHP Library - Convert Malaysia Postal Code to State
=========================

 ![php 5.5+](https://img.shields.io/badge/php-5.5+-brightgreen.svg?style=flat&logo=php&labelColor=777BB4&logoColor=white&color=lightgrey) ![author](https://img.shields.io/badge/author-kch-brightgreen.svg?style=flat&logo=bitbucket&color=lightgrey)

This library will convert Malaysia Postal Code to State

Installation via "composer require"
--------
<pre>
    composer require wilzokch/php-malaysia-postcode-to-state
</pre>

Example
--------
<pre><code>
    use Wilzokch\MalaysiaPostcodeToState\MyPostCode;
    
    $postCode = new MyPostCode('84000');
    
    echo $postCode->getState(); // you will get "Johor" 
</code></pre>

References
--------
1. https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia
2. https://track.pos.com.my/postal-services/quick-access/?postcode-finder
