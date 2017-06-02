## Api验证

|key|type|description|
|---|---|---|
|**`Authorization`**|string|unit时间戳+login_token|
|**`X-Timestamp`**|string|请求的unit时间戳|

说明：login_token是用户登录返回的。
###### example

```http
GET / HTTP/1.1
HOST api.example.com
...
Authorization: 1495789117fe038bf10f1426fc0f1a85d2b7ec58a3
X-Timestamp: 1495789117
...
```
