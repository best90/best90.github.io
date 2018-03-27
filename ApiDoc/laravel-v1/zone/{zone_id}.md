## 编辑赛区

```
PATCH /zone/:zone_id
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |名称|
| `start_time` | int | √ | |开始时间|
| `end_time` | int | √ | |结束时间|
| `industry` | array | √ | |行业id array|

### request example
```json
/zone/306

{
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
        "zone_id":"306"
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


## 删除赛区

```
DELETE /zone/:zone_id
```

### request example
```json
/zone/306
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