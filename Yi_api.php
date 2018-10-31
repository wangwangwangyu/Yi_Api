<?php
学车技巧首页/分类页
请求地址: 
http:// http://mp.whrango.com/api/skill/skill_index
请求参数:
返回结构:
{
  "code": 200,
  "data": ,列表信息
"count": ,文章数量
"msg": , 
}

{
    "msg": "学车技巧分类",
    "data": [
        {
            "id": 9,
            "name_cn": "科目一",
            "name_en": "subject_1"
        },
        {
            "id": 10,
            "name_cn": "科目二",
            "name_en": "subject_2"
        },
        {
            "id": 11,
            "name_cn": "科目三",
            "name_en": "subject_3"
        },
        {
            "id": 12,
            "name_cn": "科目四",
            "name_en": "subject_4"
        }
    ],
    "count": 4,
    "code": 200
}
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
            "id": 5,
            "title": "练车技巧5",
            "title_sub": "练车技巧5",
            "updated_at": "2018-10-23 10:23:49",
            "thumb": "http://mp.whrango.com/storage/201810/22/59057729ad734e73aeea442f13b6605a.jpeg",
            "cate_name": "科目一"
        },
        {
            "id": 6,
            "title": "练车技巧6",
            "title_sub": "练车技巧6",
            "updated_at": "2018-10-23 10:23:49",
            "thumb": "http://mp.whrango.com/storage/201810/22/59057729ad734e73aeea442f13b6605a.jpeg",
            "cate_name": "科目一"
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
        "id": 18,
        "title": "科目一10",
        "title_sub": "科目一10科目一10科目一10科目一10",
        "updated_at": "2018-10-24 11:10:36",
        "thumb": "http://mp.whrango.com/storage/201810/23/7a8e0cb3435a62ff22aa0926aa059e65.jpeg",
        "body": "",
        "author": null,
        "click": 0，
        "cate_name": "科目一"
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
            "id": 5,
            "name": "嗡嗡嗡1",
            "address_detail": "反对v发v地方",
            "lng": "114.416527",
            "lat": "30.529811",
            "zoom": 17,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 8.66,
        },
        {
            "id": 6,
            "name": "嗡嗡嗡2",
            "address_detail": "反对v发v地方",
            "lng": "114.416527",
            "lat": "30.829811",
            "zoom": 17,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 27.76,
      
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
        "zoom": 18,
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
            "price": 33333
        },
        {
            "id": 3,
            "title": "套餐3",
            "subtitle": "vfdvf",
            "thumb": "http://mp.whrango.com/storage/201810/15/d40d13bbceffb3132460f52833b04efa.jpeg",
            "price": 3333
        },
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
        "id": 3,
        "title": "套餐3",
        "subtitle": "vfdvf",
        "thumb": "http://mp.whrango.com/storage/201810/15/d40d13bbceffb3132460f52833b04efa.jpeg",
        "price": 3333,
        "body": "<p>efvefvf</p>"
    },
    "code": 200
}
//-----------------------------------------------------------------------------------------
页面单个banner
请求地址: 
http:// http://mp.whrango.com/api/banner/banner
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
    "data": [
        {
            "id": 5,
            "thumb": "http://mp.whrango.com/storage/201810/23/3a1b4d0437675e6ac09825566cb8877c.jpeg",
            "cate_id": 3,
            "title": "index",
            "sort": 50
        },
        {
            "id": 12,
            "thumb": "http://mp.whrango.com/storage/201810/23/3a1b4d0437675e6ac09825566cb8877c.jpeg",
            "cate_id": 3,
            "title": "index",
            "sort": 50
        },
        {
            "id": 13,
            "thumb": "http://mp.whrango.com/storage/201810/23/3a1b4d0437675e6ac09825566cb8877c.jpeg",
            "cate_id": 3,
            "title": "index",
            "sort": 50
        }
    ],
    "code": 200,
    "count": 3,
    "msg": "banner图"
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
        "body": "<p>关于我们</p>",
        "updated_at": "2018-10-23 10:23:19"
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
示例：
{
    "data": {
        "id": 13,
        "cate_id": 6,
        "title": "保证协议",
        "title_sub": null,
        "body": "<p>xxx</p>",
        "updated_at": "2018-10-23 10:23:19"
    },
    "code": 200,
    "msg": "保证协议",
    "count": 1
}

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
示例：
{
    "data": {
        "id": 13,
        "cate_id": 6,
        "title": "学车流程",
        "title_sub": null,
        "body": "<p>xxx</p>",
        "updated_at": "2018-10-23 10:23:19"
    },
    "code": 200,
    "msg": "学车流程",
    "count": 1
}

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
示例：
{
    "data": {
        "id": 13,
        "cate_id": 6,
        "title": "安全保障",
        "title_sub": null,
        "body": "<p>xxx</p>",
        "updated_at": "2018-10-23 10:23:19"
    },
    "code": 200,
    "msg": "安全保障",
    "count": 1
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
示例：
{
    "msg": "新闻列表",
    "data": [
        {
            "id": 20,
            "title": "新闻",
            "title_sub": "新闻xxx",
            "updated_at": "2018-10-23 17:35:41",
            "thumb": "http://mp.whrango.com/storage/201810/23/7a8e0cb3435a62ff22aa0926aa059e65.jpeg"
        },
        {
            "id": 1,
            "title": "新闻1",
            "title_sub": "新闻1",
            "updated_at": "2018-10-22 11:25:49",
            "thumb": "http://mp.whrango.com/storage/201810/19/57293918bf338a7b63a9139e61449c82.jpeg"
        }
    ],
    "count": 2,
    "code": 200
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
{
    "msg": "新闻详情",
    "data": {
        "id": 20,
        "title": "新闻",
        "title_sub": "新闻xxx",
        "updated_at": "2018-10-23 17:35:41",
        "thumb": "http://mp.whrango.com/storage/201810/23/7a8e0cb3435a62ff22aa0926aa059e65.jpeg",
        "body": "xx",
        "author": null,
        "click": 0
    },
    "code": 200
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
示例：
{
    "msg": "常见问题列表",
    "data": [
        {
            "id": 26,
            "title": "一般多久可以拿证？",
            "title_sub": null,
            "body": ""
        }
    ],
    "count": 9,
    "code": 200
}


//-----------------
首页导航
请求地址: 
http:// http://mp.whrango.com/api/nav/nav
请求参数:

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：
{
    "data": [
        {
            "id": 17,
            "url": "http://mp.whrango.com/api/flow/flow",
            "name": "学车流程",
            "thumb": "http://mp.whrango.com/storage/201810/25/d52b67473111af94b5a5dc2205711c81.png"
        },
        {
            "id": 18,
            "url": "http://mp.whrango.com/api/insurance/insurance",
            "name": "安全保障",
            "thumb": null
        },
       
    ],
    "count": 5,
    "code": 200,
    "msg": "平台首页"
}
//-----------------
用户添加订单
请求地址: 
http:// http://mp.whrango.com/api/user/make_order
请求参数:
meal_id 套餐*
plade_id 练习场*
user_id 用户*
address 联系地址*
phone   使用此套餐的人的电话*
sms_code   手机验证码*  
school   就读学校
name       使用此套餐的人的真实姓名*
code   代理邀请码

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：
{
    "data": "订单号:20181026854309",
    "count": 0,
    "code": 200,
    "msg": "添加成功"
}
//-----------------
用户中心订单列表，显示订单数的
请求地址: 
http:// http://mp.whrango.com/api/user/oeder_index
请求参数:
user_id 用户

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：
{
    "msg": "订单信息",
    "data": [
        {
            "total": 9,
            "name": "待签约",
            "status": 1
        },
        {
            "total": 0,
            "name": "待付款",
            "status": 2
        },
        {
            "total": 2,
            "name": "报名成功",
            "status": 3
        },
        {
            "total": 0,
            "name": "已经退款",
            "status": 4
        }
    ],
    "count": 4,
    "code": 200
}
//-----------------
用户订单列表页menu，
请求地址: 
http:// http://mp.whrango.com/api/user/order_menu
请求参数:


返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：
{
    "msg": "订单信息",
    "data": [
        {
            "name": "全部",
            "status": 0
        },
        {
            "name": "待签约",
            "status": 1
        },
        {
            "name": "待付款",
            "status": 2
        },
        {
            "name": "报名成功",
            "status": 3
        }
    ],
    "count": 4,
    "code": 200
}
//-----------------
用户订单列表页拉取列表，
请求地址: 
http:// http://mp.whrango.com/api/user/order_list
请求参数:
user_id
status  0 全部，1 待签约，2 待付款 ，3 报名成功

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：
{
    "msg": "订单信息",
    "data": [
        {
            "id": 14,
            "created_at": "2018-10-25 17:57:09",
            "meal_title": "套餐3",
            "meal_thumb": "http://mp.whrango.com/storage/201810/15/d40d13bbceffb3132460f52833b04efa.jpeg",
            "meal_price": 3333,
            "meal_subtitle": "vfdvf",
            "serial": 20181025900445,
            "agency_id": null
        },
        {
            "id": 15,
            "created_at": "2018-10-25 17:57:52",
            "meal_title": "套餐3",
            "meal_thumb": "http://mp.whrango.com/storage/201810/15/d40d13bbceffb3132460f52833b04efa.jpeg",
            "meal_price": 3333,
            "meal_subtitle": "vfdvf",
            "serial": 20181025115164,
            "agency_id": 3
        },
    ],
    "count": 4,
    "code": 200
}
//-----------------
用户订单详情，
请求地址: 
http:// http://mp.whrango.com/api/user/order_info
请求参数:
user_id
order_id

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：
{
    "msg": "订单:20181025711267",
    "data": [
        {
            "id": 17,
            "user_id": 20,
            "meal_id": 3,
            "serial": 20181025711267,
            "price": "3333.00",
            "real_pay_money": null,
            "pay_time": null,
            "returned_money": null,
            "status": 1,
            "realname": "旺二哥",
            "phone": 13895789658,
            "code": "197388",
            "plade_id": 7,
            "address": "吴家湾",
            "school": "华科",
            "created_at": "2018-10-25 17:58:28",
            "updated_at": "1540461508",
            "agency_id": 3,
            "meal_title": "套餐3",
            "meal_thumb": "http://mp.whrango.com/storage/201810/15/d40d13bbceffb3132460f52833b04efa.jpeg",
            "meal_price": 3333,
            "meal_subtitle": "vfdvf",
            "plade_name": "大大方方2",
            "plade_address": "反对v发v地方",
            "agency_name": "旺旺11",
            "agency_phone": 12356522656,
            "user_phone": 18888888888,
            "user_nickName": "张锦飞🐲",
            "user_realName": "飞哥"
        }
    ],
    "code": 200
}
//-----------------
短信验证码，
请求地址: 
http:// http://mp.whrango.com/api/sms/make_code
请求参数:
user_id 用户id
phone  用户电话

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：

    {
    "count": 0,
    "code": 200,
    "msg": "发送成功注意查收！"
}

//-----------------
用户发起支付
请求地址: 
http:// http://mp.whrango.com/api/user/pay_trade
请求参数:

trade_id  订单号


成功返回：

	{
    "config": {
        "appId": "wxeca0eddc17136a6a",
        "timeStamp": 1540863272,
        "nonceStr": "8SmJxw9ICSK4ngw1",
        "package": "prepay_id=wx300934323802175ab5e500993470496557",
        "signType": "MD5",
        "paySign": "CD10F2BCAFEEF508B55CBB83E711D119"
    },
    "code": 200
}


失败返回：
{
    "config": {
        "appId": "wxeca0eddc17136a6a",
        "timeStamp": 1540863272,
        "nonceStr": "8SmJxw9ICSK4ngw1",
        "package": "prepay_id=wx300934323802175ab5e500993470496557",
        "signType": "MD5",
        "paySign": "CD10F2BCAFEEF508B55CBB83E711D119"
    },
    "code": 200
}

//-----------------
意见反馈提交，
请求地址: 
http:// http://mp.whrango.com/api/user/guestbook_create
请求参数:
user_id 用户id
body   留言内容

返回结构:
{
  "code": 200,
"msg": , 
}
示例：

    {
    "code": 200,
    "msg": "留言成功"
}


//-----------------
意见反馈页面，
请求地址: 
http:// http://mp.whrango.com/api/user/guestbook


返回结构:
{
	"data"：’‘，
  "code": 200,
"msg": , 
}
示例：


{
    "data": {
        "post_url": "http://mp.whrango.com/api/user/guestbook_create"
    },
    "code": 200,
    "msg": "请求成功"
}

//-----------------
取消体检预约，
请求地址: 
http:// http://mp.whrango.com/api/user/exam_del
user_id 

返回结构:
{
	
  "code": 200,
"msg": , 
}
示例：

{
    "code": 200,
    "msg": "预约取消成功"
}

//-----------------
学员体检预约首页，
请求地址: 
http:// http://mp.whrango.com/api/user/exam
user_id 

返回结构:
{
	
  "code": 200,
"msg": , 
 "data":
}
示例：
没有预约过
{
    "data": {
        "post_url": "http://mp.whrango.com/api/user/exam_reserve", //提交预约选择班次页面
        "msg": "未预约"
    },
    "code": "201",
    "msg": "没有预约过"
}
有取消的预约
{
    "data": {
        "post_url": "http://mp.whrango.com/api/user/exam_reserve",
        "msg": "未预约"
    },
    "code": 201,
    "msg": "预约已经取消"
}
有准备中的预约
{
    "data": {
        "id": 1,
        "time": "2018-01-18 00:00:00",
        "address": "光谷广场",
        "car_number": "aDSCDSCS",
        "car_man": "CDSCSDC",
        "car_phone": 15958927175,
        "created_at": "1540824752",
        "updated_at": "1540825295",
        "post_url": "http://mp.whrango.com/api/user/exam_del", //删除预约
        "msg": "预约中"
    },
    "code": 200,
    "msg": "有正在装备的预约"
}


//-----------------reserve

学员预约体检页面体捡班次选择，
请求地址: 
http:// http://mp.whrango.com/api/user/exam_reserve

返回结构:
{
	
  "code": 200,
"msg": , 
 "data":
}
{
    "data": [
        {
            "id": 3,
            "time": "2018-11-09 00:00",
            "address": "光谷广场A",
            "car_phone": 13866665555,
            "car_number": "weweew",
            "car_man": "werewrwer"
        },
        {
            "id": 4,
            "time": "2018-11-08 12:00",
            "address": "光谷",
            "car_phone": 18956523652,
            "car_number": "鄂A198725",
            "car_man": "形式上"
        }
    ],
    "post_url": "http://mp.whrango.com/api/user/exam_create", //提交预约地址
    "code": 200,
    "msg": "有可选择的预约"
}
学员体检预约提交，
请求地址: 
http:// http://mp.whrango.com/api/user/exam_create
user_id 
exam_id 

返回结构:
{
	
  "code": 200,
"msg": , 

}
示例：
{
    "code": 200,
    "msg": "预约成功"
}

学员的教练，
请求地址: 
http:// http://mp.whrango.com/api/user/user_coach
user_id 

返回结构:
{
	 "data":
	"code": 200,
    "msg": , 

}
示例：
有数据返回：
{
    "data": {
        "coach": {
            "coach_2": {
                "coach_id": 3,
                "cate_name": "科目二教练",
                "phone": 12567687666,
                "name": "张1",
                "gender": "女"
            },
            "coach_3": {
                "coach_id": 4,
                "cate_name": "科目三教练",
                "phone": 66666666666,
                "name": "张12",
                "gender": "女"
            }
        },
        "post_url": "http://mp.whrango.com/api/coach/coach_exercise"  //请求到教练的可预约的学车课程列表
    },
    "msg": "学员的教练",
    "code": 200
}
没数据：
{
    "data": [],
    "msg": "还没有教练",
    "code": 200
}
/****************************************************************************************/
代理的学员
请求地址: 
http:// http://mp.whrango.com/api/agency/trade_list
请求参数：
           'code' => '邀请码',
            'status' => '订单状态',
            'page' => '页码',
            'pageSize' => '页数'

返回结构:
{

	 "data":
	"code": 200,
    "msg": , 

}
示例：
{
    "post_url": "http://mp.whrango.com/api/agency/edit_trade_status",
    "msg": "请求成功",
    "data": [
        {
            "id": 19,
            "realname": "旺二哥",
            "phone": 15958927178,
            "created_at": "2018-10-25 23:28",
            "status": 1,
            "order_status": "待签约"
        },
       
    ],
    "count": 5,
    "code": 200
}
代理的确认签约，缴费
请求地址: 
http:// http://mp.whrango.com/api/agency/trade_list
请求参数：
            'order_id' => '订单id',
            'status' => '订单状态',  2，签约完成，3，缴费完成

返回结构:
{

	"code": 200,
    "msg": , 

}
示例：
{
   
    "msg": "编辑订单成功",
    "code": 200
}