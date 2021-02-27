# str increment

This is string increment class that can be used extensively for uppercase or lowercase letters as well as for various hexadecimal characters.

### Travis CI badge

[![Travis-ci](https://api.travis-ci.com/yakeing/str_increment.svg?branch=master)](https://travis-ci.com/yakeing/str_increment)

### codecov badge

[![codecov](https://codecov.io/gh/yakeing/str_increment/branch/master/graph/badge.svg)](https://codecov.io/gh/yakeing/str_increment)

### Github badge

[![Downloads](https://badging.now.sh/github/downloads/yakeing/str_increment?icon=github)](../../)
[![Size](https://badging.now.sh/github/size/yakeing/str_increment?icon=github)](src)
[![tag](https://badging.now.sh/github/tag/yakeing/str_increment?icon=github)](../../releases)
[![license](https://badging.now.sh/static/label/license/555/MPL-2.0/fe7d37?icon=github)](LICENSE)
[![languages](https://badging.now.sh/static/label/language/555/PHP/34abef?icon=github)](../../search?l=php)

### Installation

Use [Composer](https://getcomposer.org) to install the library.
Of course, You can go to [Packagist](https://packagist.org/packages/yakeing/str_increment) to view.

```
    $ composer require yakeing/str_increment
```

str_increment init / Set up

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

[Sponsor](https://github.com/yakeing/Documentation/blob/master/Sponsor/README.md)
---
If you've got value from any of the content which I have created, then I would very much appreciate your support by payment donate.

[![Sponsor](https://badging.now.sh/static/label/Sponsor/EA4AAA?icon=heart)](https://github.com/yakeing/Documentation/blob/master/Sponsor/README.md)

Author
---

weibo: [yakeing](https://weibo.com/yakeing)

twitter: [yakeing](https://twitter.com/yakeing)
