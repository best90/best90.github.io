## 评委赛程

```
GET /judge/:judge_id/units
```

### request example
```json
/judge/363/units
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[
        {
            "race_affair_name":"神马",
            "banner_url":"2017-05-23/5923af7e4a9c1.jpg",
            "race_zone_id":162,
            "race_zone_name":"厦门赛区",
            "race_unit_id":255,
            "race_unit_name":"all_project",
            "unscore_num":0
        },
        {
            "race_affair_name":"神马",
            "banner_url":"2017-05-23/5923af7e4a9c1.jpg",
            "race_zone_id":220,
            "race_zone_name":"福州赛区",
            "race_unit_id":334,
            "race_unit_name":"all_project",
            "unscore_num":1
        },
        {
            "race_affair_name":"神马",
            "banner_url":"2017-05-23/5923af7e4a9c1.jpg",
            "race_zone_id":233,
            "race_zone_name":"泉州赛区",
            "race_unit_id":354,
            "race_unit_name":"all_project",
            "unscore_num":0
        },
        {
            "race_affair_name":"aaaa",
            "banner_url":"2017-05-26/59279debb0e79.jpg",
            "race_zone_id":261,
            "race_zone_name":"福建",
            "race_unit_id":422,
            "race_unit_name":"all_project",
            "unscore_num":0
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