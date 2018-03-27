## 用户登录

```
POST /user/login
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `mobile` | string | √ | |手机号|
| `password` | string | √ | |密码|

### request example
```json
{
    "mobile": 18396008401,
    "password": 123456
}
```

### response:
#### 成功
```json
{
  "code": 0,
  "data": {
    "user_id": 196,
    "nick_name": "芒果VC",
    "mobile": "18396008401",
    "login_count": 163,
    "login_token": "11f218d00433d54f442ed6af7e86dc96"
  },
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
