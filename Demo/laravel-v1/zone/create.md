## 创建赛区

```
POST /zone
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `admin_id` | int | √ | |管理员id|
| `match_id` | int | √ | |赛事id|
| `name` | string | √ | |名称|
| `start_time` | int | √ | |开始时间|
| `end_time` | int | √ | |结束时间|
| `industry` | array | √ | |行业id array|


### request example
```json
{
  'admin_id':196,
  'match_id':284,
  'name': 'zzzzzz',
  'start_time': 1495641600,
  'end_time': 1496160000,
  'industry':{7,11}
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":306
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