## 报名信息反馈

```
GET /match/:match_id/notice
```

### request example
```json
/match/251/notice
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":251,
        "notification_success":"您好，神马已收到您的报名信息，未来的赛程发展状况我们将会通过邮件或短信的方式及时通知您，请关注！",
        "notification_no_finished":"报名成功，bp尚未完成请记得完善bp",
        "mail_success_switch":1,
        "mail_title":"恭喜您成功报名神马！",
        "mail_text":"<p>您好，神马已收到您的报名信息，未来的赛程发展状况我们将会通过邮件或短信的方式及时通知您，请关注！</p> "
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

## 设置报名反馈信息

```
POST /match/:match_id/notice
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `notification_success` | string | √ | |报名成功信息|
| `notification_no_finished` | string | √ | |未完成报名信息|
| `mail_success_switch` | int | √ | |开启邮件通知 1开启 0关闭|
| `mail_title` | string | √ | |邮件标题|
| `mail_text` | string | √ | |邮件内容|

### request example
```json
/match/251/notice

{
    'notification_success':'您好，神马已收到您的报名信息，未来的赛程发展状况我们将会通过邮件或短信的方式及时通知您，请关注！',
    'notification_no_finished':'报名成功，bp尚未完成请记得完善bp',
    'mail_success_switch':1,
    'mail_title':'恭喜您成功报名神马！',
    'mail_text':'<p>您好，神马已收到您的报名信息，未来的赛程发展状况我们将会通过邮件或短信的方式及时通知您，请关注！</p>'
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