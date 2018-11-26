
# curl 模拟请求类

## 安装
> composer require lyp/think-curl

## 使用简单示例

```php
    $res = lyp\curl\Curl::http('https://api.goseek.cn/Tools/holiday',['date' => '20180520'],'GET');
```


