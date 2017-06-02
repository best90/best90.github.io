## 赛事评分标准

```
GET /match/:match_id/standard
```

### request example
```json
/match/251/standard
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "standard_id":127,
        "standard_name":"痛点需求,团队实力,行业前景,市场容量,商业模式,其他",
        "standard_weight":"20,20,20,10,20,10"
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

## 设置赛事评分标准

```
POST /match/:match_id/standard
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |评分项|
| `weight` | string | √ | |评分分值|

### request example
```json
/match/251/standard

{
  'name':'痛点需求,团队实力,行业前景,市场容量,商业模式,其他',
  'weight':'20,20,20,10,20,10'
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "standard_id":127
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