PHP Library - Convert Malaysia Postal Code to State
=========================

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
