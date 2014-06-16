Forms in PHP
=============
Codes and demos and forms operations in PHP.


Compare "post" and "get" method
--------------------------------
> ### 为什么使用 $_GET？
> 1. 在使用 $_GET 变量时，所有的变量名和值都会显示在 URL 中。所以在发送密码或其他敏感信息时，不应该使用这个方法。不过，正因为变量显示在 URL 中，因此可以在收藏夹中收藏该页面。在某些情况下，这是很有用的。
> 2. HTTP GET 方法不适合大型的变量值；值是不能超过 100 个字符的。