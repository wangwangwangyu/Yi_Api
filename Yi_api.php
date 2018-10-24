<?php
//code说明。200请求成功，404未找到数据，401 非法请求
学车技巧列表
请求地址: 
http:// http://mp.whrango.com/api/skill/skill_list
请求参数:
cate_id 科目 //科一 9 科二 10 科三 11 科四 12
page  页码
pageSize 每页条数
返回结构:
{
  "code": 200,
  "data": ,列表信息
"count": ,文章数量
"msg": , 
}
//code说明。200请求成功，404未找到数据，401 非法请求
示例：{
    "msg": "学车技巧",
    "data": [
        {
            "id": 1,
            "cate_id": 2,
            "title": "dscd",
            "title_sub": "csdcdsc",
            "title_color": null,
            "url": null,
            "thumb": "/storage/201810/19/57293918bf338a7b63a9139e61449c82.jpeg",
            "thumbs": null,
            "click": 0,
            "body": "&lt;p&gt;cscsdcscdscsdcds&lt;/p&gt;",
            "keywords": null,
            "description": null,
            "sort": 500,
            "exattr": "null",
            "author": null,
            "created_at": "1539704251",
            "updated_at": "1540172756",
            "is_show": 1,
            "is_stick": 0
        }
    ],
    "count": 2,
    "code": 200
}
//-----------------------------------------------------------------------------------------

学车技巧详情
请求地址: 
http:// http://mp.whrango.com/api/skill/skill
请求参数:
skill_id  文章ID
返回结构:
{
  "code": 200,
  "data": , 
"msg": ,
}
示例
{
    "msg": "学车技巧详情",
    "data": {
        "id": 2,
        "cate_id": 2,
        "title": "练车技巧",
        "title_sub": "练车技巧1",
        "title_color": null,
        "url": null,
        "thumb": "/storage/201810/22/59057729ad734e73aeea442f13b6605a.jpeg",
        "thumbs": null,
        "click": 0,
        "body": "&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;/storage/201810/22/fcc9ef79940502a87c5cba5b1fcc4abb.jpeg&quot; style=&quot;height:56px; width:100px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;练车技巧&lt;/p&gt;",
        "keywords": null,
        "description": null,
        "sort": 500,
        "exattr": "null",
        "author": null,
        "created_at": "1540171629",
        "updated_at": "1540172745",
        "is_show": 1,
        "is_stick": 0
    },
    "code": 200
}
//--------------------------------------------------------------------------------------------------
练习场列表
请求地址: 
http:// http://mp.whrango.com/api/plade/plade_list
//data中"distance"为练习场和学员之间的距离km
请求参数:
lat 纬度//30.123456
lng 经度//111.123456
返回结构:
{
  "code": 200,
  "data": ,列表信息
"count": ,数量
"msg": , 
}

示例：{
    "msg": "练习场列表",
    "data": [
        {
            "id": 7,
            "name": "大大方方2",
            "address_detail": "反对v发v地方",
            "lng": "114.353939",
            "lat": "30.585999",
            "created_at": "1539571355",
            "updated_at": "1540267364",
            "zoom": 18,
            "is_show": 1,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 0,
            "created_time": "2018-10-15 10:42:35",
            "updated_time": "2018-10-23 12:02:44"
        },
        {
            "id": 3,
            "name": "测试1",
            "address_detail": "欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏/r下",
            "lng": "114.336085",
            "lat": "30.547853",
            "created_at": "1539571260",
            "updated_at": "1539571459",
            "zoom": 15,
            "is_show": 1,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 4.57,
            "created_time": "2018-10-15 10:41:00",
            "updated_time": "2018-10-15 10:44:19"
        },
        {
            "id": 4,
            "name": "大大方方",
            "address_detail": "反对v发v地方",
            "lng": "114.316527",
            "lat": "30.529811",
            "created_at": "1539571355",
            "updated_at": "1539609863",
            "zoom": 17,
            "is_show": 1,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 7.2,
            "created_time": "2018-10-15 10:42:35",
            "updated_time": "2018-10-15 21:24:23"
        },
        {
            "id": 5,
            "name": "嗡嗡嗡1",
            "address_detail": "反对v发v地方",
            "lng": "114.416527",
            "lat": "30.529811",
            "created_at": "1539571355",
            "updated_at": "1539609863",
            "zoom": 17,
            "is_show": 1,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 8.66,
            "created_time": "2018-10-15 10:42:35",
            "updated_time": "2018-10-15 21:24:23"
        },
        {
            "id": 6,
            "name": "嗡嗡嗡2",
            "address_detail": "反对v发v地方",
            "lng": "114.416527",
            "lat": "30.829811",
            "created_at": "1539571355",
            "updated_at": "1539609863",
            "zoom": 17,
            "is_show": 1,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 27.76,
            "created_time": "2018-10-15 10:42:35",
            "updated_time": "2018-10-15 21:24:23"
        }
    ],
    "count": 5,
    "code": 200
}
//-----------------------------------------------------------------------------------------

练习场详情
请求地址: 
http:// http://mp.whrango.com/api/plade/plade
请求参数:
plade_id  练习场ID
返回结构:
{
  "code": 200,
  "data": , 
"msg": ,
}
示例
{
    "msg": "练习场详情",
    "data": {
        "id": 7,
        "name": "大大方方2",
        "address_detail": "反对v发v地方",
        "lng": "114.353939",
        "lat": "30.585999",
        "created_at": "1539571355",
        "updated_at": "1540267364",
        "zoom": 18,
        "is_show": 1,
        "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
    },
    "code": 200
}
//-----------------------------------------------------------------------------------------
学车套餐列表
请求地址: 
http:// http://mp.whrango.com/api/meal/meal_list
请求参数:
page  页码
pageSize 每页条数
返回结构:
{
  "code": 200,
  "data": ,列表信息
"count": ,文章数量
"msg": , 
}
//code说明。200请求成功，404未找到数据，401 非法请求
示例：{
    "msg": "学车套餐",
    "data": [
        {
            "id": 2,
            "title": "套餐2",
            "subtitle": "vfdvf",
            "thumb": "http://mp.whrango.com/storage/201810/15/d40d13bbceffb3132460f52833b04efa.jpeg",
            "price": 33333,
            "commission": 332,
            "body": "efvefvf",
            "created_at": "1539574657",
            "updated_at": "1539609817",
            "is_show": 1,
            "sort": 500,
          
        },
        {
            "id": 3,
            "title": "套餐3",
            "subtitle": "vfdvf",
            "thumb": "http://mp.whrango.com/storage/201810/15/d40d13bbceffb3132460f52833b04efa.jpeg",
            "price": 3333,
            "commission": 333,
            "body": "efvefvf",
            "created_at": "1539574657",
            "updated_at": "1539609817",
            "is_show": 1,
            "sort": 500,
           
        }
    ],
    "count": 5,
    "code": 200
}
//-----------------------
学车套餐详情
请求地址: 
http:// http://mp.whrango.com/api/meal/meal
请求参数:
meal_id  套餐ID
返回结构:
{
  "code": 200,
  "data": , 
"msg": ,
}
示例:
{
    "msg": "套餐详情",
    "data": {
        "id": 1,
        "title": "套餐1",
        "subtitle": "测试1",
        "thumb": "http://mp.whrango.com/storage/201810/15/087667b01cbbacf8889b2e638c98a282.jpeg",
        "price": 1111,
        "commission": 22,
        "body": "<p>的程度CDC</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/201810/15/c3a40fd36bb61c8f3eb6afe970a473b0.jpeg\" style=\"height:427px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\">挺好的地方</p>",
        "created_at": "1539573711",
        "updated_at": "1539574070",
        "is_show": 1,
        "sort": 500,
    },
    "code": 200
}
//-----------------------------------------------------------------------------------------
页面单个banner
请求地址: 
http:// http://mp.whrango.com/api/banner/banner
请求参数:
 按分类cate_id 
// 4 平台首页banner，5学员注册，6平台登陆，7学员登陆，8学员找回密码，9学车流程，10常见问题，11安全保障
返回结构:
{
  "code": 200,
  "data": ,列表信息
"count": ,文章数量
"msg": , 
}
//code说明。200请求成功，404未找到数据，401 非法请求
示例：
{
    "data": {
        "id": 11,
        "cate_id": 9,
        "title": "index",
        "url": "#",
        "target": "_self",
        "thumb": "http://mp.whrango.com/storage/201810/24/1f114ab8642c589347d99ed229d086b6.jpeg",
        "sort": 50,
        "created_at": "2018-10-23 10:52:42",
        "updated_at": "2018-10-24 16:04:36",
        "is_show": 1
    },
    "code": 200,
    "count": 1,
  }
 2页面单个banner
页面单个banner
请求地址: 
http:// http://mp.whrango.com/api/banner/_banner
请求参数:
banner_id 
// 4 平台首页banner，5学员注册，6平台登陆，7学员登陆，8学员找回密码，9学车流程，10常见问题，11安全保障
返回结构:
{
  "code": 200,
  "data": ,列表信息
"count": ,文章数量
"msg": , 
}
//code说明。200请求成功，404未找到数据，401 非法请求
示例：
{
    "data": {
        "id": 11,
        "cate_id": 9,
        "title": "index",
        "url": "#",
        "target": "_self",
        "thumb": "http://mp.whrango.com/storage/201810/24/1f114ab8642c589347d99ed229d086b6.jpeg",
        "sort": 50,
        "created_at": "2018-10-23 10:52:42",
        "updated_at": "2018-10-24 16:04:36",
        "is_show": 1
    },
    "code": 200,
    "count": 1,
  }
//-----------------------
关于我们
请求地址: 
http:// http://mp.whrango.com/api/about/about
请求参数:

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
//code说明。200请求成功，404未找到数据，401 非法请求
示例：
{
    "data": {
        "id": 13,
        "cate_id": 6,
        "title": "关于我们",
        "title_sub": null,
        "title_color": null,
        "url": "/about",
        "thumb": "http://mp.whrango.com",
        "thumbs": null,
        "click": 0,
        "body": "<p>关于我们</p>",
        "keywords": null,
        "description": null,
        "sort": 500,
        "exattr": "null",
        "author": null,
        "created_at": "2018-10-23 10:23:19",
        "updated_at": "2018-10-23 10:23:19",
        "is_show": 1,
        "is_stick": 0
    },
    "code": 200,
    "msg": "关于我们",
    "count": 1
}
//-----------------------
保证协议
请求地址: 
http:// http://mp.whrango.com/api/agreement/agreement
请求参数:

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
//code说明。200请求成功，404未找到数据，401 非法请求
//-----------------------
学车流程
请求地址: 
http:// http://mp.whrango.com/api/flow/flow
请求参数:

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
//code说明。200请求成功，404未找到数据，401 非法请求
//-----------------
安全保障
请求地址: 
http:// http://mp.whrango.com/api/insurance/insurance
请求参数:

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
//code说明。200请求成功，404未找到数据，401 非法请求
//-----------------
新闻列表
请求地址: 
http:// http://mp.whrango.com/api/news/news_list
请求参数:

page  页码
pageSize 每页条数

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
//-----------------
新闻详情
请求地址: 
http:// http://mp.whrango.com/api/news/news
请求参数:

news_id

返回结构:
{
  "code": 200,
  "data": ,信息

"msg": , 
}
//-----------------
常见问题列表
请求地址: 
http:// http://mp.whrango.com/api/question/questions
请求参数:

page  页码
pageSize 每页条数

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}