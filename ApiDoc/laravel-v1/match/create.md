## 创建赛事

```
POST /match
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |赛事名称|
| `admin_id` | string | √ | |管理员id|

### request example
```json
{
  "name": 'z',
  "admin_id": 110
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":315
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