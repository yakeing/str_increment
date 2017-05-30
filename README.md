# str_increment

String Increment Class

author [yakeing](http://weibo.com/yakeing)

[![image](https://oauth.sinaapp.com/svg/4D4D4D/License/F66000/MPL2.0/image.svg)](https://github.com/yakeing/fsockopen/blob/master/LICENSE)

[![image](https://oauth.sinaapp.com/svg/4D4D4D/Language/007EC6/PHP/image.svg)](https://github.com/yakeing/str_increment)

[![get header](https://oauth.sinaapp.com/svg/4D4D4D/Version/97CA00/1.0/image.svg)](https://github.com/yakeing/str_increment/tree/master/version1.0)

[![get header](https://oauth.sinaapp.com/svg/4D4D4D/Version/97CA00/1.1/image.svg)](https://github.com/yakeing/str_increment/tree/master/version1.1) Singleton pattern

[![get header](https://oauth.sinaapp.com/svg/4D4D4D/Version/97CA00/2.0/image.svg)](https://github.com/yakeing/str_increment/tree/master/version2.0)

str_increment init / Set up
---

As of 2.0
~~~
  $FinallyStr = '000';
  $Type='string'; //[string / alpha / lower / upper ]
  $FirstRandomCode=false;
  echo str_increment::NewStr($FinallyStr, $Type, $FirstRandomCode);
  //return 001
~~~

As of 1.2
- $NumberTable = false

~~~
  ABC ==> ABD
  QAbc ==> QAbd
  WSazZ ==> WSbAa
~~~

- $LowercaseTable = false

~~~
  123 ==> 124
  Y12A ==> Y12B
  GEA9Z ==> GEAA0
~~~

- $UppercaseTable = false

~~~
  89z ==> 8a0
  y09zz ==> y0a00
  ctvr9 ==> ctvra
~~~

- $FirstRandomCode = true

~~~
  H9990 ==> C9991
  HC99zz ==> 0C99AA
  H0H9H9C ==> 80H9H9D
  .....
~~~

str_increment use
---

> str_increment::NewStr(string)

str_increment usage scenario
---

- [x] URL
~~~
  https://github.com/fTg5A
  https://github.com/0EaG7
~~~

- [x] USER ID
<table>
    <tr><th>USER</th><th>UID</th></tr>
    <tr><td>John</td><td>F8aJ0e</td></tr>
    <tr><td>Kim</td><td>fWd0fJ</td></tr>
    <tr><td>Mary</td><td>F8qWc5</td></tr>
</table>

