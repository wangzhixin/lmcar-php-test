<?php

namespace App\Service;

class ProductHandler
{
    private $products = [
        [
            'id' => 1,
            'name' => 'Coca-cola',
            'type' => 'Drinks',
            'price' => 10,
            'create_at' => '2021-04-20 10:00:00',
        ],
        [
            'id' => 2,
            'name' => 'Persi',
            'type' => 'Drinks',
            'price' => 5,
            'create_at' => '2021-04-21 09:00:00',
        ],
        [
            'id' => 3,
            'name' => 'Ham Sandwich',
            'type' => 'Sandwich',
            'price' => 45,
            'create_at' => '2021-04-20 19:00:00',
        ],
        [
            'id' => 4,
            'name' => 'Cup cake',
            'type' => 'Dessert',
            'price' => 35,
            'create_at' => '2021-04-18 08:45:00',
        ],
        [
            'id' => 5,
            'name' => 'New York Cheese Cake',
            'type' => 'Dessert',
            'price' => 40,
            'create_at' => '2021-04-19 14:38:00',
        ],
        [
            'id' => 6,
            'name' => 'Lemon Tea',
            'type' => 'Drinks',
            'price' => 8,
            'create_at' => '2021-04-04 19:23:00',
        ],
    ];
    /**
     * @Author  :   wangZhixin 
     * @Desc    :   检测数组
     */
    private function chechArray($toArray)
    {
        $check = false;
        if (is_array($toArray) && count($toArray) > 0) {
            $check = true;
        }
        return $check;
    }
    /**
     * @Author  :   wangZhixin 
     * @Desc    :   获取商品总价格
     */
    public function getTotalPrice()
    {
        $totalPrice = 0;
        if ($this->chechArray($this->products)) {
            foreach ($this->products as $value) {
                $totalPrice += $value["price"];
            }
        }
        return $totalPrice;
    }
    /**
     * @Author  :   wangZhixin 
     * @Desc    :   金額排序（由大至小）2.並篩選商品類種是 “Dessert” 的商品
     */
    public function sortToProducts()
    {
        $products = array();
        if ($this->chechArray($this->products)) {
            foreach ($this->products as $value) {
                if ($value['type'] == "Dessert") {
                    $products[] = $value;
                }
            }
            usort($products, function ($current, $next) {
                return $current['price'] < $next['price'];
            });
        }
        return $products;
    }
    /**
     * @Author  :   wangZhixin 
     * @Desc    :   3.把創建日期轉換為 unix timestamp。
     */
    public function dateToTimestamp($data)
    {
        return strtotime($data);
    }
}
