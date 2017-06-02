## 赛区评分标准

```
GET /zone/:zone_id/standard
```

### request example
```json
/zone/306/standard
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "standard_id":153,
        "standard_name":"痛点需求,团队实力,行业前景,市场容量,商业模式",
        "standard_weight":"20,20,20,20,20"
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

## 是否使用个别评分标准

```
GET /zone/:zone_id/standard/individual
```

### request example
```json
/zone/306/standard/individual
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "individual":0
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

## 设置是否使用个别评分标准

```
PATCH /zone/:zone_id/standard/individual
```

### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `individual` | int | √ | |个别评分 1是 0否|

### request example
```json
/zone/306/standard/individual

{
 'individual': 1
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

## 设置个别评分标准

```
POST /zone/:zone_id/standard
```

### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |评分项|
| `weight` | string | √ | |评分分值|

### request example
```json
/zone/306/standard

{
  'name': '痛点需求,团队实力,行业前景,市场容量,商业模式'.
  'weight': '20,20,20,20,20'
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "standard_id":175
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