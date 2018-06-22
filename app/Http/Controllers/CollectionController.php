<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSum()
    {
        $orders = [
            [
                'id'            => 1,
                'user_id'       => 8,
                'mobile'        => '15221598663',
                'status'        => 0,
                'real_name'     => '孟海龙',
                'order_product' => [
                    [
                        'order_id' => 1, 'product_id' => 8, 'param' => '红色 32G', 'price' => 1399.00,
                        'product'  =>
                            ['id'    => 1, 'name' => '魅族pro7豪华专业版',
                             'image' => [
                                 ['id' => 1, 'thumbnail' => 'https://www.2345.com/i/search0320/baidu_web.gif',],
                                 ['id' => 2, 'thumbnail' => 'https://www.2345.com/i/search0320/baidu_web.gif',],
                                 ['id' => 3, 'thumbnail' => 'https://www.2345.com/i/search0320/baidu_web.gif',]
                             ]
                            ]
                        ],
                    [
                        'order_id' => 1, 'product_id' => 8, 'param' => '白色 128G', 'price' => 1999.00,
                        'product'  =>
                            ['id'    => 1, 'name' => '魅族pro7豪华专业版',
                             'image' => [
                                 ['id' => 7, 'thumbnail' => 'https://www.2345.com/i/search0320/baidu_web.gif',],
                                 ['id' => 8, 'thumbnail' => 'https://www.2345.com/i/search0320/baidu_web.gif',],
                                 ['id' => 9, 'thumbnail' => 'https://www.2345.com/i/search0320/baidu_web.gif',]
                             ]
                            ]
                    ],
                ]
            ]
        ];
        //传统通过2层foreach的写法
        $price =0;
        foreach($orders as $d){
            foreach($d['order_product'] as $v){
                $price += $v['price'];
            }
        }
//        dd($price);
        //flatten() 获取集合中项目的扁平数组,去掉1层的数组
        //2层map循环的用法
        dump(collect($orders)->map(function ($order){
            return $order['order_product'];
        })->flatten(1)->map(function ($product){
            return $product['price'];
        })->sum());
        //collect的精简用法
        //flatMap()方法是flatten()方法和map()方法的组合
        dump(collect($orders)->flatMap(function ($order){
            return $order['order_product'];
        })->sum('price'));
    }

    public function formatData()
    {
        $data = [
          'BeiJing_A_A18',
          'YunNan_J7',
          'ShangHai_C6',
          'P8',
          'BeiJing_B_B06'
        ];
        $formatData = [
          'A18','J7','C6','P8','B06'
        ];
        dump(collect($data)->map(function ($data){
            //P8这个数据比较特殊,没有_,所以我们要判断一下
            if (strrpos($data,'_')===false){
                return $data;
            }
            $newData = strrpos($data,'_');
            $offset = $newData+1;
            return substr($data,$offset);
        }));
        //使用explode的做法
        dump(collect($data)->map(function ($data){
            $newData = explode('_',$data);
            return end($newData);
        }));
        //collect()里面的last()方法
        dump(collect($data)->map(function ($data){
            return collect(explode('_',$data))->last();
        }));
    }
}
