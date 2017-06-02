## 参赛BP列表

```
POST /match/:match_id/bp
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `judge_id` | int | √ | |评委id|
| `zone_id` | int |  | |赛区id|
| `unit_id` | int |  | |赛程id|
| `industry_id` | int |  | |行业id|

### request example
```json
/match/251/bp

{
  'judge_id': 363,
  'zone_id': 162
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[
        {
            "id":411,
            "mobile":"00118396008410",
            "project_name":"aaa",
            "industry_name":"企业服务",
            "race_unit_id":255,
            "race_unit_name":"all_project",
            "race_zone_id":162,
            "race_zone_name":"厦门赛区",
            "choose":0
        },
        {
            "id":329,
            "mobile":"18396008401",
            "project_name":"aaa",
            "industry_name":"VR/AR",
            "race_unit_id":255,
            "race_unit_name":"all_project",
            "race_zone_id":162,
            "race_zone_name":"厦门赛区",
            "choose":0
        },
        {
            "id":330,
            "mobile":"00118396008401",
            "project_name":"aaa",
            "industry_name":"金融",
            "race_unit_id":255,
            "race_unit_name":"all_project",
            "race_zone_id":162,
            "race_zone_name":"厦门赛区",
            "choose":1
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

## BP指派

```
POST /match/:match_id/bp/assign
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `judge_id` | int | √ | |评委id|
| `bp` | array | √ | |已选择的bp.id|
| `unit` | array | √ | |已选择bp对应的赛程id|
| `other_bp` | array | √ | |未选择的bp.id|
| `other_unit` | array | √ | |未选择的bp对应的赛程id|

### request example
```json
/match/251/bp/assign

{
    'judge_id': 111,
     'bp': {1, 2},
     'unit': {111, 222}
     'other_bp':{},
     'other_unit': {}
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "bp_count":2
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