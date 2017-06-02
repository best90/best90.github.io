## 参赛报名

```
POST /enroll/commit
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `match_id` | int | √ | |赛事id|
| `unis` | string | √ | |bp unis|
| `slide` | string | √ | |slide json string|
| `person` | array | √ | |个人信息|
| `project` | array | √ | |项目信息|
| `enroll` | array | √ | |报名信息|

### request example
```json
{
  'match_id':284,
  'unis':'5fxqw90qcz39',
  'slide':{
    "slide_id":3180,
    "unis":"irx4hvkxpgun",
    "privacy_id":2,
    "template_id":1019,
    "cover_id":13948,
    "name":"sms love",
    "brief":"什么时候开始",
    "finished_step":0,
    "finished_page_count":1,
    "total_page_count":14,
    "create_time":"2017-03-30T18:19:52.000Z",   
    "update_time":"2017-04-20T19:22:02.000Z",
    "orientation":2,
    "industry_id":9,
    "project_stage":2,
    "share_privacy_id":1
  },
  'cover':'https://img.bp.nutsb.com/slidecover/for-73lggbawww2a.png',
  'person':[
    {
      'id': 1,
      'value': 'aaa'
    }
  ],
  'project': [
    {
      'id': 17,
      'value': 'aaa'
    }
  ],
  'enroll':[
    {
      'zone_id': 306,
      'industry_id': 7,
    }
  ]
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

## 手机参赛报名

```
POST /enroll/commit/mobile
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `match_id` | int | √ | |赛事id|
| `mobile` | string | √ | |手机号|
| `email` | string | √ | |邮箱|
| `person` | array | √ | |个人信息|
| `project` | array | √ | |项目信息|
| `enroll` | array | √ | |报名信息|

### request example
```json
{
  'match_id':284,
  'mobile': '18396008400',
  'email': 'xxx@qq.com',
  'person':[
    {
      'id': 1,
      'value': 'aaa'
    }
  ],
  'project': [
    {
      'id': 17,
      'value': 'aaa'
    }
  ],
  'enroll':[
    {
      'zone_id': 306,
      'industry_id': 7,
    }
  ]
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