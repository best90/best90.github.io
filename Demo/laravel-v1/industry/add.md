## 添加赛事行业

```
POST /industry
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `match_id` | int | √ | |赛事id|
| `name` | string | √ | |行业名称|

### request example
```json
{
  'match_id': 284,
  'name': 'xxxx'
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":86,
        "industry_name":"xxxx"
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