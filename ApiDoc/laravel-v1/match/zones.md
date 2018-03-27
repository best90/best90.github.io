## 赛区列表

```
GET /match/:match_id/zones
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `admin_id` | int | √ | |管理员id|


### request example
```json
/match/251/zones

{
  'admin_id': 196
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[
        {
            "id":162,
            "race_zone_name":"厦门赛区",
            "start_time":1494950400,
            "end_time":1498752000,
            "type":1,
            "units":[
                {
                    "id":255,
                    "race_unit_name":"all_project",
                    "type":null,
                    "start_time":1475998586,
                    "end_time":2147483647
                },
                {
                    "id":256,
                    "race_unit_name":"10强预选赛",
                    "type":null,
                    "start_time":1476633600,
                    "end_time":1477843200
                },
                {
                    "id":257,
                    "race_unit_name":"初赛",
                    "type":null,
                    "start_time":1477929600,
                    "end_time":1478102400
                },
                {
                    "id":258,
                    "race_unit_name":"决赛",
                    "type":null,
                    "start_time":1478188800,
                    "end_time":1478275200
                }
            ],
            "bp_count":7
        },
        {
            "id":220,
            "race_zone_name":"福州赛区",
            "start_time":1491408000,
            "end_time":1496160000,
            "type":1,
            "units":[
                {
                    "id":334,
                    "race_unit_name":"all_project",
                    "type":null,
                    "start_time":1476093451,
                    "end_time":2147483647
                }
            ],
            "bp_count":5
        },
        {
            "id":233,
            "race_zone_name":"泉州赛区",
            "start_time":1476374400,
            "end_time":1477843200,
            "type":1,
            "units":[
                {
                    "id":354,
                    "race_unit_name":"all_project",
                    "type":null,
                    "start_time":1476432168,
                    "end_time":2147483647
                },
                {
                    "id":355,
                    "race_unit_name":"正式赛",
                    "type":null,
                    "start_time":1477929600,
                    "end_time":1478102400
                }
            ],
            "bp_count":3
        }
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
