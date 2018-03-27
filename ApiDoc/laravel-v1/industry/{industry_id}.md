## 编辑赛事行业

```
PATCH /industry/:industry_id
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |名称|

### request example
```json
/industry/87

{
  'name': 'xxxx'
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":"87",
        'industry_name': 'xxxx'
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