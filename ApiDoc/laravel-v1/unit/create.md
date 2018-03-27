## 创建赛程

```
POST /unit
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `admin_id` | int | √ | |管理员id|
| `zone_id` | int | √ | |赛区id|
| `name` | string | √ | |名称|
| `start_time` | int | √ | |开始时间|
| `end_time` | int | √ | |结束时间|

### request example
```json
{
  'admin_id': 196,
  'zone_id': 306,
  'name': 'aaaaa',
  'start_time': 1496160000,
  'end_time': 1496419200
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":509
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