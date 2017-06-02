## 添加评委

```
POST /judge
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |姓名|
| `tel` | string | √ | |手机号|
| `city` | string |  | |城市|
| `domain` | string |  | |投资领域|
| `profile` | string |  | |简介|
| `match_id` | int | √ | |赛事id|

### request example
```json
{
  'name':'小何',
  'tel':'00118396008422',
  'city':'',
  'domain':'',
  'profile':'',
  'match_id':284
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":410,
        "name":"小何",
        "tel":"00118396008422",
        "status":"OK"
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