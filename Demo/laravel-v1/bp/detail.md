## BP详情

```
GET /bp/detail/:map_id
```

### request example
```json
/bp/detail/893
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":330,
        "slide_id":3180,
        "company_name":"sms love",
        "unis":"5fxqw90qcz39",
        "introduction":"什么时候开始",
        "race_unit_id":255,
        "judge_id":363,
        "score":"100,95,92,98,90,90",
        "review":null,
        "attachment":[
            {
                "attachement_name":"效果图.jpg",
                "enroll_url":"2017-04-20/58f8908dc168a.jpg"
            },
            {
                "attachement_name":"58f8908dc168a.jpg",
                "enroll_url":"2017-05-23/592404aee71a9.jpg"
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