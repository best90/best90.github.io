## 赛区指派

```
POST /zone/assign
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `admin_id` | int | √ | |管理员id|
| `match_id` | int | √ | |赛事id|
| `zone` | array | √ | |赛区id array|


### request example
```json
{
  'admin_id':196,
  'match_id':284,
  'zone':{7,11}
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