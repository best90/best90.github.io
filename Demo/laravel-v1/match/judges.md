## 赛事评委

```
GET /match/:match_id/judges
```

### request example
```json
/match/251/judges
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[
        {
            "id":406,
            "name":"21号",
            "tel":"00118396008421",
            "city":"上海",
            "domain":"互联网",
            "profile":"寻找独角兽",
            "race_affair_id":null,
            "bp_count":0,
            "status":"OK"
        },
        {
            "id":407,
            "name":"明星VC",
            "tel":"00118396008455",
            "city":"中国",
            "domain":"娱乐",
            "profile":"明星团体组成的VC团队",
            "race_affair_id":null,
            "bp_count":1,
            "status":"OK"
        },
        {
            "id":409,
            "name":"隔壁老王",
            "tel":"00118396008444",
            "city":"福建",
            "domain":"隔壁邻居",
            "profile":"专注挖墙角二十年",
            "race_affair_id":null,
            "bp_count":0,
            "status":"OK"
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

## 邀请评委

```
POST /match/:match_id/judges
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `judge` | array | √ | |选择的评委id array|
| `other` | array | √ | |未选择的评委id array|

### request example
```json
/match/251/judges

{
  'judge':{1,2},
  'other': {3}
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