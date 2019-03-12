# str_increment

This is string increment class that can be used extensively for uppercase or lowercase letters as well as for various hexadecimal characters


### Travis CI

[![Travis-ci](https://api.travis-ci.org/yakeing/str_increment.svg)](https://travis-ci.org/yakeing/str_increment)

### Packagist

[![Version](http://img.shields.io/packagist/v/yakeing/str_increment.svg)](https://packagist.org/packages/yakeing/str_increment/releases)
[![Downloads](http://img.shields.io/packagist/dt/yakeing/str_increment.svg)](https://packagist.org/packages/yakeing/str_increment)

### Github

[![Downloads](https://img.shields.io/github/downloads/yakeing/str_increment/total.svg)](https://github.com/yakeing/str_increment)
[![Size](https://img.shields.io/github/size/yakeing/str_increment/src/str_increment/StrIncrement.php.svg)](https://github.com/yakeing/str_increment/blob/master/src/str_increment/StrIncrement.php)
[![tag](https://img.shields.io/github/tag/yakeing/str_increment.svg)](https://github.com/yakeing/str_increment/releases)
[![Language](https://img.shields.io/github/license/yakeing/str_increment.svg)](https://github.com/yakeing/str_increment/blob/master/LICENSE)
[![Php](https://img.shields.io/github/languages/top/yakeing/str_increment.svg)](https://github.com/yakeing/str_increment)

### Old Version

[![Version](https://img.shields.io/badge/Version-1.0.0-yellow.svg)](https://github.com/yakeing/str_increment/tree/master/version1.0)
[![Size](https://img.shields.io/github/size/yakeing/str_increment/version1.0/StrIncrement.php.svg)](https://github.com/yakeing/str_increment/blob/master/version1.0/StrIncrement.php)

[![Version](https://img.shields.io/badge/Version-1.1.0-yellow.svg)](https://github.com/yakeing/str_increment/tree/master/version1.1)
[![Size](https://img.shields.io/github/size/yakeing/str_increment/version1.1/StrIncrement.php.svg)](https://github.com/yakeing/str_increment/blob/master/version1.1/StrIncrement.php)
` Singleton pattern `

[![Version](https://img.shields.io/badge/Version-2.0.0-yellow.svg)](https://github.com/yakeing/str_increment/tree/master/version2.0)
[![Size](https://img.shields.io/github/size/yakeing/str_increment/version2.0/StrIncrement.php.svg)](https://github.com/yakeing/str_increment/blob/master/version2.0/StrIncrement.php)


### Installation

Use [Composer](https://getcomposer.org) to install the library.

```

    $ composer require yakeing/str_increment

```


str_increment init / Set up
---

### 16Hex ( Must be lowercase )
```php
    $str = '0fff';
    $ret = StrIncrement::NewStr($str, 16);
    var_dump('1000' == $ret);
```

### 10Hex ( Decimalist )
```php
    //string
    $str = '1999';
    $ret = StrIncrement::NewStr($str, 10);
    var_dump('2000' == $ret);

      //integer
    $int = 100;
    $ret = StrIncrement::NewStr($int, 10);
    var_dump('101' == $ret);
```

### alphabetic character
```php
    $str = 'ABzZ';
    $ret = StrIncrement::NewStr($str, 'letters');
    var_dump('ABAa' == $ret);
```

### Lower case letters
```php
    $str = 'zxc';
    $ret = StrIncrement::NewStr($str, 'lowercase');
    var_dump('zxd' == $ret);
```

### uppercase letter
```php
    $str = 'ABZ';
    $ret = StrIncrement::NewStr($str, 'uppercase');
    var_dump('ACA' == $ret);
```

### str_increment usage scenario

- [x] URL
```
  https://github.com/fTg5A

  https://github.com/0EaG7
```

- [x] USER ID
<table>
    <tr><th>USER</th><th>UID</th></tr>
    <tr><td>John</td><td>F8aJ0e</td></tr>
    <tr><td>Kim</td><td>fWd0fJ</td></tr>
    <tr><td>Mary</td><td>F8qWc5</td></tr>
</table>


Donate
---
Your donation makes CODE better.

 Bitcoin (比特币赞助)

 396N76o9eJVCPEB7fjAp7RuQUXLs3xVm7D

 ![Bitcoin](https://raw.githubusercontent.com/yakeing/Content/master/Donate/Bitcoin.png)

 WeChat (微信赞助)

 ![WeChat](https://raw.githubusercontent.com/yakeing/Content/master/Donate/WeChat.png)

 Alipay (支付宝赞助)

 ![Alipay](https://raw.githubusercontent.com/yakeing/Content/master/Donate/Alipay.png)

Author
---

weibo: [yakeing](https://weibo.com/yakeing)

twitter: [yakeing](https://twitter.com/yakeing)
