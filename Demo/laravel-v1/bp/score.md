## BP评分

```
POST /bp/score/:map_id
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `standard_id` | int | √ | |评分标准id|
| `score` | string | √ | |评分|

### request example
```json
/bp/score/893

{
    'standard_id': 170,
    'score': '10,9,9,9,9,10'
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[

    ],
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