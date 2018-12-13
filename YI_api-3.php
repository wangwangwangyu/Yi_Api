<?php
//—————————————————————考试中心列表
https://www.guaikakeji.com/api/center/center_list

返回结构:
{

    "code": 201,
    "msg": , 
     "data": , 
     'count'
}

示例：{
    "code": 200,
    "msg": "请求成功",
    "data": [
        'data':{'id': 2, 'title': "测试", 'detail': "dededede", 'updated_at': "1544627225", 'created_at': "1544627225"},
    ]
    'count':1
}
   

//——用户提交考试
https://www.guaikakeji.com/api/examination/add

 'user_id' => '用户id',
 'cneter_id' => '考试中心id',
 'day' => '日期',

返回结构:
{

    "code": 200,
    "msg": , 

}

示例：{
    "code": 201,
    "msg": "预约失败了"
}
//——用户删除考试
https://www.guaikakeji.com/api/examination/del

 'user_id' => '用户id',
 'examination_id' => '考试id',
返回结构:
{

    "code": 200,
    "msg": , 

}

示例：{
    "code": 201,
    "msg": "失败了"
}