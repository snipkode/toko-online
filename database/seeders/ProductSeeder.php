<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            "name" => "Blogspot Masign Template",
            "price" => "120000",
            "picture" => "https://cdn.dribbble.com/users/808342/screenshots/14801725/media/d9a8ac34fb8592181876a8c290e5726c.jpg?compress=1&resize=400x300",
            "description" => "Gallery blogger themes provide a visually appealing platform for individuals looking to showcase their work, art, or personal photos online. These themes are",
            "link" => "https://drive.google.com/drive/folders/17-nbGO-w6lZ6Zu3smuRHbKS9DctiXl6i"
        ]);
        Products::create([
            "name" => "Blogspot Arya ReactJS",
            "price" => "155000",
            "picture" => "https://cdn.dribbble.com/users/808342/screenshots/14801725/media/d9a8ac34fb8592181876a8c290e5726c.jpg?compress=1&resize=400x300",
            "description" => "Gallery blogger themes provide a visually appealing platform for individuals looking to showcase their work, art, or personal photos online. These themes are",
            "link" => "https://drive.google.com/drive/folders/17-nbGO-w6lZ6Zu3smuRHbKS9DctiXl6i"
        ]);
    }
}
