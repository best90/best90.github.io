## 密码重置

```
PATCH /user/password
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `mobile` | string | √ | |手机号|
| `password` | string | √ | |密码|
| `token` | string | √ | |验证码|

### request example
```json
{
    "mobile": 18396008401,
    "password": 123456,
    'token': 1234
}
```

### response:
#### 成功
```json
{
  "code": 0,
  "data": [],
  "msg": "成功"
}
```
#### 失败
```
{
  "code": 2,
  "data": [],
  "msg": "请求参数错误"
}
```