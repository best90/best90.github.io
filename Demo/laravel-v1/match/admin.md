## 赛事管理员

```
GET /match/:match_id/admins
```

### request example
```json
/match/251/admins
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[
        {
            "id":211,
            "tel":"18396008400",
            "nick_name":"18396008400",
            "level":2,
            "register_time":null,
            "last_time":1492077663,
            "login_count":6,
            "race_zone_name":"福州赛区"
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

## 添加赛事管理员

```
POST /match/:match_id/admins
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |姓名|
| `tel` | string | √ | |手机号|
| `level` | int | √ | |等级|
| `password` | string | √ | |密码|
| `admin_id` | int | √ | |当前管理员|

### request example
```json
/match/251/admins

{
  'name': 'xxxx',
  'tel': '00118396008400',
  'level': 2,
  'password': '123456',
  'admin_id': 196,
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":236
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

## 删除赛事管理员

```
DELETE /match/:match_id/admins/:admin_id
```

### request example
```json
/match/251/admins/236
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