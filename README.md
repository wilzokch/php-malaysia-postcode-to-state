PHP Library - Convert Malaysia Post Code to State
=========================

This library will convert Malaysia Post Code to State

Composer
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