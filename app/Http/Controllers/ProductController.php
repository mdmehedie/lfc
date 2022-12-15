<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function menu (){
        $Popular = [
            [
                "name" => "1 Pcs Chicken, Vegetable Rice, Soft Drink",
                "img" => "assets/images/menu/1.png",
                "menu" => "Chicken, Rice, Soft drinks",
                "price" => "220",
            ],
            [
                "name" => "Fried Rice 2 Pcs Hot Wings",
                "img" => "assets/images/menu/6.png",
                "menu" => "2Pcs Chicken, Fried Rice, Salad",
                "price" => "150",
            ],
            [
                "name" => "Crispy Chicken Burge with Cheese",
                "img" => "assets/images/menu/11.png",
                "menu" => "Chicken, Cheese",
                "price" => "200",
            ],
            [
                "name" => "How Wings 6 Pcs",
                "img" => "assets/images/menu/21.png",
                "menu" => "Chicken 6 pcs",
                "price" => "180",
            ],
            [
                "name" => "Vegetable Rice with 1 Fried Chicken veg.",
                "img" => "assets/images/menu/2.png",
                "menu" => "Chicken, Rice, Vegetable, Curry, Soft drinks",
                "price" => "250",
            ],
            [
                "name" => "Set Noodles",
                "img" => "assets/images/menu/7.png",
                "menu" => "Chicken, Noodles",
                "price" => "160",
            ],
            [
                "name" => "Chicken Patty Burgger",
                "img" => "assets/images/menu/12.png",
                "menu" => "Chicken, Bun",
                "price" => "175",
            ],
            [
                "name" => "BBQ Spicy Wings 6 Pcs",
                "img" => "assets/images/menu/22.png",
                "menu" => "Chicken, BBQ",
                "price" => "200",
            ]
        ];

        $Breakfast = [
            [
                "name" => "Chicken Sub Sandwich",
                "img" => "assets/images/menu/56.png",
                "menu" => "Chicken, Sandwich",
                "price" => "150",
            ],
            [
                "name" => "Chicken Sub Sandwich With Cheese",
                "img" => "assets/images/menu/57.png",
                "menu" => "Chicken, Cheese, Sandwich",
                "price" => "190",
            ],
            [
                "name" => "Crispy Chicken Sub Sandwich",
                "img" => "assets/images/menu/58.png",
                "menu" => "Crispy, Chicken",
                "price" => "230",
            ],
            [
                "name" => "Beef Sub Sandwich",
                "img" => "assets/images/menu/59.png",
                "menu" => "Beef, Sandwich",
                "price" => "220",
            ],
            [
                "name" => "Beef Cheese Sub Sandwich",
                "img" => "assets/images/menu/60.png",
                "menu" => "Beef, Cheese, Sandwich",
                "price" => "250",
            ],
            [
                "name" => "Vegetable Snadwich",
                "img" => "assets/images/menu/61.png",
                "menu" => "Mixed Vegetable, Snadwich",
                "price" => "70",
            ],
            [
                "name" => "Chicken Sandwich",
                "img" => "assets/images/menu/62.png",
                "menu" => "Chicken",
                "price" => "100",
            ],
            [
                "name" => "Club Sandwich with France Fry",
                "img" => "assets/images/menu/63.png",
                "menu" => "Sandwich, France Fry",
                "price" => "260",
            ],
            [
                "name" => "Chicken Sandwich with Cheese",
                "img" => "assets/images/menu/64.png",
                "menu" => "Chicken, Cheese",
                "price" => "140",
            ],
            [
                "name" => "Hunter Beef Sandwich",
                "img" => "assets/images/menu/65.png",
                "menu" => "Beef, Sandwich",
                "price" => "150",
            ]
        ];

        $Lunch = [
            [
                "name" => "1 Pcs Chicken, Vegetable Rice, Soft Drink",
                "img" => "assets/images/menu/1.png",
                "menu" => "Chicken, Rice, Soft drinks",
                "price" => "220",
            ],
            [
                "name" => "Vegetable Rice with 1 Fried Chicken veg.",
                "img" => "assets/images/menu/2.png",
                "menu" => "Chicken, Rice, Vegetable, Curry, Soft drinks",
                "price" => "250",
            ],
            [
                "name" => "Vegetable Fry Rice with Boneless BBQ Strip (10p), Coleslaw",
                "img" => "assets/images/menu/3.png",
                "menu" => "Boneless BBQ, Strip, Coleslaw, Vegetable Fry Rice, Soft drinks",
                "price" => "250",
            ],
            [
                "name" => "Vegetable Rice with Gravy Chicken",
                "img" => "assets/images/menu/4.png",
                "menu" => "Vegetable, Rice, Soft drinks",
                "price" => "300",
            ],
            [
                "name" => "Fried Rice, Chicken Salad",
                "img" => "assets/images/menu/5.png",
                "menu" => "Fried Rice, BBQ/Tandoori Chicken Salad, Chilli Chicken, Soft drinks",
                "price" => "330",
            ],
            [
                "name" => "Fried Rice 2 Pcs Hot Wings",
                "img" => "assets/images/menu/6.png",
                "menu" => "2Pcs Chicken, Fried Rice, Salad",
                "price" => "150",
            ],
            [
                "name" => "Set Noodles",
                "img" => "assets/images/menu/7.png",
                "menu" => "Chicken, Noodles",
                "price" => "160",
            ],
            [
                "name" => "Mixed Noodles",
                "img" => "assets/images/menu/8.png",
                "menu" => "Egg, Vegetable, Tomato, SOS",
                "price" => "180",
            ]
        ];

        $Snaks = [
            [
                "name" => "How Wings 6 Pcs",
                "img" => "assets/images/menu/21.png",
                "menu" => "Chicken 6 pcs",
                "price" => "180",
            ],
            [
                "name" => "BBQ Spicy Wings 6 Pcs",
                "img" => "assets/images/menu/22.png",
                "menu" => "Chicken, BBQ",
                "price" => "200",
            ],
            [
                "name" => "Pop Chicken (10 Pcs)",
                "img" => "assets/images/menu/23.png",
                "menu" => "Chicken",
                "price" => "140",
            ],
            [
                "name" => "BBQ Spicy Bonless Strip (15 Pcs)",
                "img" => "assets/images/menu/24.png",
                "menu" => "Strip, BBQ, Bonless",
                "price" => "170",
            ],
            [
                "name" => "Chicken Strip 4 Pcs",
                "img" => "assets/images/menu/25.png",
                "menu" => "Chicken",
                "price" => "200",
            ]
        ];


        $Dinner = [
            [
                "name" => "Fried Rice 2 Pcs Hot Wings",
                "img" => "assets/images/menu/6.png",
                "menu" => "2Pcs Chicken, Fried Rice, Salad",
                "price" => "150",
            ],
            [
                "name" => "Set Noodles",
                "img" => "assets/images/menu/7.png",
                "menu" => "Chicken, Noodles",
                "price" => "160",
            ],
            [
                "name" => "Mixed Noodles",
                "img" => "assets/images/menu/8.png",
                "menu" => "Egg, Vegetable, Tomato, SOS",
                "price" => "180",
            ],
            [
                "name" => "Special Mixed Fried Rice",
                "img" => "assets/images/menu/9.png",
                "menu" => "Fried Rice",
                "price" => "170",
            ],
            [
                "name" => "Fried Rice with Sizzling (Beef/Chicken) Salad",
                "img" => "assets/images/menu/10.png",
                "menu" => "Fried Rice, Sizzling, Salad, Soft Drink",
                "price" => "550",
            ],
            [
                "name" => "Crispy Chicken Burge with Cheese",
                "img" => "assets/images/menu/11.png",
                "menu" => "Chicken, Cheese",
                "price" => "200",
            ],
            [
                "name" => "Chicken Patty Burgger",
                "img" => "assets/images/menu/12.png",
                "menu" => "Chicken, Bun",
                "price" => "175",
            ]
        ];


        $Drinks = [
            [
                "name" => "Coffee",
                "img" => "assets/images/menu/27.png",
                "menu" => "",
                "price" => "50",
            ],
            [
                "name" => "Cold Coffee",
                "img" => "assets/images/menu/28.png",
                "menu" => "",
                "price" => "110",
            ],
            [
                "name" => "Milk Shake",
                "img" => "assets/images/menu/29.png",
                "menu" => "",
                "price" => "150",
            ]
        ];


        return view("menu", compact("Popular", "Breakfast", "Lunch", "Snaks", "Dinner", "Drinks"));
    }
}
