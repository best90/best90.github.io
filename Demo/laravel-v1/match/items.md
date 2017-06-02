## 报名信息栏目

```
GET /match/:match_id/items
```

### request example
```json
/match/307/items
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "person":[
            {
                "id":1,
                "name":"姓名",
                "if_personinfo":1,
                "customize":0
            },
            {
                "id":2,
                "name":"QQ",
                "if_personinfo":1,
                "customize":0
            },
            {
                "id":3,
                "name":"生日",
                "if_personinfo":1,
                "customize":0
            },
            {
                "id":4,
                "name":"性别",
                "if_personinfo":1,
                "customize":0
            },
            {
                "id":5,
                "name":"职位",
                "if_personinfo":1,
                "customize":0
            },
            {
                "id":6,
                "name":"网址",
                "if_personinfo":1,
                "customize":0
            },
            {
                "id":7,
                "name":"公司地址",
                "if_personinfo":1,
                "customize":0
            },
            {
                "id":8,
                "name":"手机号码",
                "if_personinfo":1,
                "customize":0
            },
            {
                "id":9,
                "name":"固话",
                "if_personinfo":1,
                "customize":0
            },
            {
                "id":10,
                "name":"城市",
                "if_personinfo":1,
                "customize":0
            },
            {
                "id":11,
                "name":"微信",
                "if_personinfo":1,
                "customize":0
            },
            {
                "id":17,
                "name":"邮箱",
                "if_personinfo":1,
                "customize":0
            }
        ],
        "project":[
            {
                "id":14,
                "name":"项目名称",
                "if_personinfo":0,
                "customize":0
            },
            {
                "id":15,
                "name":"项目简介",
                "if_personinfo":0,
                "customize":0
            },
            {
                "id":16,
                "name":"官方网站",
                "if_personinfo":0,
                "customize":0
            },
            {
                "id":19,
                "name":"地区",
                "if_personinfo":0,
                "customize":0
            },
            {
                "id":20,
                "name":"企业规模",
                "if_personinfo":0,
                "customize":0
            },
            {
                "id":23,
                "name":"公司阶段",
                "if_personinfo":0,
                "customize":0
            },
            {
                "id":24,
                "name":"产品",
                "if_personinfo":0,
                "customize":0
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

## 新增报名栏目

```
POST /match/:match_id/items
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |栏目名称|
| `is_person_info` | int | √ | |是否是个人信息 1是 0不是|

### request example
```json
{
  'name': 'xxxxxx',
  'is_person_info': 1,
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":83,
        "item_name":"xxxxxx"
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

## 编辑报名栏目

```
PATCH /match/:match_id/item/:item_id
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |栏目名称|

### request example
```json
/match/251/item/82

{
  'name': 'b',
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":"82",
        "item_name":"b"
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