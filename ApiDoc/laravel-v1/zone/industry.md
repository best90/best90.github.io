## 赛区行业

```
GET /zone/:zone_id/industry
```

### request example
```json
/zone/162/industry
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":162,
        "race_zone_name":"厦门赛区",
        "data":[
            {
                "id":7,
                "industry_name":"电商"
            },
            {
                "id":8,
                "industry_name":"企业服务"
            },
            {
                "id":9,
                "industry_name":"金融"
            },
            {
                "id":10,
                "industry_name":"医疗健康"
            },
            {
                "id":11,
                "industry_name":"教育"
            },
            {
                "id":12,
                "industry_name":"文体娱乐"
            },
            {
                "id":13,
                "industry_name":"游戏"
            },
            {
                "id":14,
                "industry_name":"社交"
            },
            {
                "id":15,
                "industry_name":"智能硬件"
            },
            {
                "id":16,
                "industry_name":"消费升级"
            },
            {
                "id":17,
                "industry_name":"广告营销"
            },
            {
                "id":18,
                "industry_name":"汽车交通"
            },
            {
                "id":19,
                "industry_name":"VR/AR"
            },
            {
                "id":20,
                "industry_name":"内容经济"
            },
            {
                "id":21,
                "industry_name":"大数据"
            },
            {
                "id":56,
                "industry_name":"移动互联网"
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