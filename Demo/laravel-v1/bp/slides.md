## BP slide信息

```
GET /bp/:unis/slides
```

### request example
```json
/bp/5fxqw90qcz39/slides
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "token":"irx4hvkxpgun14957829487910bpie2305262a7ac3",
        "slide_id":3180,
        "slide_token":"irx4hvkxpgun14957829487910bpie2305262a7ac3"
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