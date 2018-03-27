## 是否是赛事评委

```
GET /judge/exists/:unis
```

### request example
```json
/judge/exists/pzcrf0b8mlrc
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":363
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