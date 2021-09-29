<?php

$array = [  
            [
                'name' => 'Akash', 
                'email' => 'akash.sahani@ambab.com',
                'mobileNo' => '989898989',
                'address' => [
                    'roomNo' => '40',
                    'area' => 'Santosh Nagar',
                    '1city' => [
                        'cityName'=> 'Maharashtra',
                        'pincode' => '400065'
                    ]
                ]
            ],

            [
                'name' => 'Keval', 
                'email' => 'keval.parekh@ambab.com',
                'mobileNo' => '1234567890',
                'address' => [
                    'roomNo' => '10',
                    'area' => 'Gorai',
                    'city' => [
                        'cityName'=> 'Maharashtra',
                        'pincode' => [
                            'dummy' => [
                                'test' => [
                                    'test2' => 1212121
                                ]
                            ]
                        ]
                    ]
                ]
            ],

            [
                'name' => 'Ashwin', 
                'email' => 'ashwin.gupta@ambab.com',
                'mobileNo' => '456123465',
                'address' => [
                    'roomNo' => '01',
                    'area' => 'Miraroad',
                    'city' => [
                        'cityName'=> 'Maharashtra',
                        'pincode' => [
                            'dummy' => [
                                'test' => 1212121
                            ]
                        ]
                    ]
                ]
            ],
            ['Akash' => 'Sahani'],
            ['Vishal' => [
                'study' => 'BTech'
                ]
            ]
        ];


        function getDepthArray($array) {
            if(is_array($array)) {
                return 1 + max(array_map("getDepthArray", $array));
            }
        }

        echo "Maximum Depth of Array is : " . getDepthArray($array) - 1;
