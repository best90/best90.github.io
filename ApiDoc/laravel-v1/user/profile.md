## 个人资料

```
PATCH /user/:user_id/profile
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `nick_name` | string | √ | |昵称|
| `password` | string | √ | |密码|
| `new_password` | string | | |新密码|

### request example
```json
{
    "nick_name": 'xxxx',
    "password": 123456,
    "new_password": 123456
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[],
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