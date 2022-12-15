<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpacialProductController extends Controller
{
    public function index (){
        $SliderProducts = [
            [
                "name" => "1 Pcs Chicken, Vegetable Rice, Soft Drink",
                "img" => "assets/images/menu/top-1.png",
                "menu" => "Chicken, Rice, Soft drinks",
                "price" => "220",
            ],
            [
                "name" => "Crispy Chicken Burger With Cheese",
                "img" => "assets/images/menu/top-11.png",
                "menu" => "Chicken, Cheese, Butter",
                "price" => "200",
            ],
            [
                "name" => "Hot Wing 6 Pcs",
                "img" => "assets/images/menu/top-21.png",
                "menu" => "Chicken, SOS",
                "price" => "180",
            ],
            [
                "name" => "LFC Spacial Pizza",
                "img" => "assets/images/menu/top-66.png",
                "menu" => "Chicken, Mushroom, Onion, Tomato, Capsicum & Mozarella",
                "price" => "650",
            ]
        ];
        $BestMeal = [
            [
                "name" => "Vegetable Rice with Gravy Chicken & Soft Drink",
                "img" => "assets/images/menu/4.png",
                "menu" => "Chicken, Rice, Soft drinks",
                "price" => "220",
            ],
            [
                "name" => "Crispy Chicken Burger with France Fry (R) & Soft Drink",
                "img" => "assets/images/menu/14.png",
                "menu" => "Chicken, Cheese, Butter",
                "price" => "200",
            ],
            [
                "name" => "Beef Khichuri",
                "img" => "assets/images/menu/83.png",
                "menu" => "Chicken, SOS",
                "price" => "130",
            ]
        ];
        $PopularMenu = [
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
        $SpacialProducts = [
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

        return view("index", compact("SpacialProducts", "BestMeal", "PopularMenu", "SliderProducts"));
    }
}
