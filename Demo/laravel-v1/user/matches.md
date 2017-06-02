## 用户赛事列表

```
GET /user/:user_id/matches
```

### request example
```json
/user/196/matches
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[
        {
            "id":248,
            "race_affair_name":"aaa",
            "guide_step":7,
            "limit":""
        },
        {
            "id":251,
            "race_affair_name":"神马",
            "guide_step":7,
            "limit":""
        },
        {
            "id":262,
            "race_affair_name":"飞鸟",
            "guide_step":6,
            "limit":""
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