<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Navbar;
  
class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            [
                'name' => 'หน้าแรก',
                'route' => 'home',
                'ordering' => 1,
            ],
            [
                'name' => 'Link รับทรพย์',
                'route' => 'linkincome',
                'ordering' => 2,
            ],
            [
                'name' => 'บทความ',
                'route' => 'article',
                'ordering' => 3,
            ],
            [
                'name' => 'ติดต่อเรา',
                'route' => 'contact',
                'ordering' => 4,
            ],
            [
                'name' => 'Game Online',
                'route' => 'Game',
                'ordering' => 5,
            ],
            [
                'name' => 'ฟุตบอล',
                'route' => 'football',
                'ordering' => 6,
            ],
            [
                'name' => 'บาคาร่า',
                'route' => 'barcarat',
                'ordering' => 7,
            ],
            [
                'name' => 'สล็อต',
                'route' => 'slot',
                'ordering' => 8,
            ],
            [
                'name' => 'ไฮโล',
                'route' => 'heilo',
                'ordering' => 9,
            ]
            

        ];
  
        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
}