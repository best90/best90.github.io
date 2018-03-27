## 报名页信息

```
GET /match/:match_id/registration
```

### request example
```json
/match/307/registration
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "admin_id":196,
        "race_affair_name":"嗖嗖嗖",
        "htmlfoot":"ssssssssssssssssss",
        "htmlhead":"<p>cccccccccccc</p>",
        "commit_before_bp_finished":0,
        "if_attachment":1,
        "if_multiple_enroll":1,
        "personInfo":[
            {
                "id":"1",
                "text":"姓名",
                "value":"1"
            },
            {
                "id":"2",
                "text":"QQ",
                "value":"1"
            },
            {
                "id":"3",
                "text":"生日",
                "value":"2"
            },
            {
                "id":"4",
                "text":"性别",
                "value":"2"
            },
            {
                "id":"5",
                "text":"职位",
                "value":"2"
            },
            {
                "id":"6",
                "text":"网址",
                "value":"2"
            },
            {
                "id":"7",
                "text":"公司地址",
                "value":"2"
            },
            {
                "id":"8",
                "text":"手机号码",
                "value":"1"
            },
            {
                "id":"9",
                "text":"固话",
                "value":"2"
            },
            {
                "id":"10",
                "text":"城市",
                "value":"2"
            },
            {
                "id":"11",
                "text":"微信",
                "value":"2"
            },
            {
                "id":"17",
                "text":"邮箱",
                "value":"1"
            }
        ],
        "projectInfo":[
            {
                "id":"14",
                "text":"项目名称",
                "value":"1"
            },
            {
                "id":"15",
                "text":"项目简介",
                "value":"1"
            },
            {
                "id":"16",
                "text":"官方网站",
                "value":"1"
            },
            {
                "id":"19",
                "text":"地区",
                "value":"2"
            },
            {
                "id":"20",
                "text":"企业规模",
                "value":"2"
            },
            {
                "id":"23",
                "text":"公司阶段",
                "value":"2"
            },
            {
                "id":"24",
                "text":"产品",
                "value":"2"
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

## 设置报名页信息

```
POST /match/:match_id/registration
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `data` | array | √ | |数据|

### request example
```json
/match/307/registration

{
  'data': {
    "htmlfoot":"ssssssssssssssssss",
    "htmlhead":"<p>cccccccccccc</p>",
    "commit_before_bp_finished":0,
    "if_attachment":1,
    "if_multiple_enroll":1,
    'personInfo':{},
    'projectInfo':{}
  }
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