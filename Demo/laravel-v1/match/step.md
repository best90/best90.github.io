## 获取赛事设置进度

```
GET /match/:match_id/step
```

### request example
```json
/match/315/step
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "finished_step":null
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

## 设置赛事进度

```
PATCH /match/:match_id/step
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `finished_step` | int | √ | |步数|


### request example
```json
/match/315/step

{
  'finished_step':6
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