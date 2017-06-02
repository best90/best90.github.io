## 编辑赛程

```
PATCH /unit/{unit_id}
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |名称|
| `start_time` | int | √ | |开始时间|
| `end_time` | int | √ | |结束时间|

### request example
```json
/unit/509

{
  'name': 'zzzzzz',
  'start_time': 1495641600,
  'end_time': 1496160000,
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":"509"
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


## 删除赛程

```
DELETE /unit/:unit_id
```

### request example
```json
/unit/509
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