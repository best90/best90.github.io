## 邀请短信发送

```
POST /judge/message
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |姓名|
| `mobile` | string | √ | |手机号|
| `match_id` | int | √ | |赛事id|

### request example
```json
{
  'name':'罗明',
  'mobile':'15559112327',
  'match_id':284
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[

    ],
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