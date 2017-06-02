## 用户注册

```
POST /user/register
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
    "code":0,
    "data":{
        "user_id":241,
        "nick_name":null,
        "login_token":"2bb03da4eebc8191b1d864cb6358b7a9",
        "if_super":null
    },
    "msg":"成功"
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