## 参赛者BP信息

```
GET /player/bp
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `ticket` | string | √ | |ticket string|

### request example
```json
{
  'ticket': '5fxqw90qcz3920170526020717ghesaz8538bcde6d'
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":330,
        "player_name":"",
        "email":"",
        "tel":"00118396008401",
        "unis":"5fxqw90qcz39",
        "slide_id":3180,
        "company_name":"sms love",
        "del":null,
        "info_json":null,
        "bp_progress":"100",
        "introduction":"什么时候开始",
        "bp_covery":"https://img.bp.nutsb.com/slidecover/for-73lggbawww2a.png"
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