## 评委BP列表

```
GET /judge/:judge_id/bp
```

### request example
```json
/judge/363/bp

{
  'unit_id': 255
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[
        {
            "map_id":893,
            "bp_id":330,
            "name":"sms love",
            "brief":"什么时候开始",
            "cover":"https://img.bp.nutsb.com/slidecover/for-73lggbawww2a.png",
            "scores":"100,95,92,98,90,90",
            "if_score":1
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