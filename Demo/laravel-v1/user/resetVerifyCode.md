## 密码重置验证码

```
POST /user/resetVerifyCode
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `mobile` | string | √ | |手机号|


### request example
```json
{
    "mobile": 00118396008400
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