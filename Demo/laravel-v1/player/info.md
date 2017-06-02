## 参赛报名信息

```
GET /player/info
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `bp_id` | int | √ | |bp id|
| `match_id` | int | √ | |赛事id|

### request example
```json
{
    'bp_id': 330,
    'match_id': 251,
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "match_id":"251",
        "bp_id":"330",
        "enroll":[
            {
                "zone_name":"厦门赛区",
                "zone_id":162,
                "industry_name":"金融",
                "industry_id":9
            }
        ],
        "person":[
            {
                "id":1,
                "value":"sss"
            },
            {
                "id":8,
                "value":"18396008401"
            },
            {
                "id":17,
                "value":"422247668@qq.com"
            },
            {
                "id":58,
                "value":null
            },
            {
                "id":59,
                "value":null
            }
        ],
        "project":[
            {
                "id":14,
                "value":"sss"
            },
            {
                "id":15,
                "value":"sssss"
            }
        ]
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