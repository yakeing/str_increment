# str_increment
String Increment Class

author [yakeing](http://weibo.com/yakeing) 


str_increment init / Set up
---

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

