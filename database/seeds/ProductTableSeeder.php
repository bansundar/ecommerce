<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $products = [
              ['name' => 'Item1', 'price' => 10, 'weight'=>200,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item2', 'price' => 100, 'weight'=>20,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item3', 'price' => 30, 'weight'=>300,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item4', 'price' => 20, 'weight'=>500,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item5', 'price' => 30, 'weight'=>250,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item6', 'price' => 40, 'weight'=>10,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item7', 'price' => 200, 'weight'=>10,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item8', 'price' => 120, 'weight'=>500,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item9', 'price' => 130, 'weight'=>790,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item10', 'price' => 20, 'weight'=>100,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item11', 'price' => 10, 'weight'=>340,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item12', 'price' => 4, 'weight'=>800,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item13', 'price' => 5, 'weight'=>200,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item14', 'price' => 240, 'weight'=>20,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item15', 'price' => 123, 'weight'=>700,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item16', 'price' => 245, 'weight'=>10,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item17', 'price' => 230, 'weight'=>20,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item18', 'price' => 110, 'weight'=>200,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item19', 'price' => 45, 'weight'=>200,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item20', 'price' => 67, 'weight'=>20,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item21', 'price' => 88, 'weight'=>300,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item22', 'price' => 10, 'weight'=>500,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item23', 'price' => 17, 'weight'=>250,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item24', 'price' => 19, 'weight'=>10,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item25', 'price' => 89, 'weight'=>10,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item26', 'price' => 45, 'weight'=>500,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item27', 'price' => 99, 'weight'=>790,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item28', 'price' => 125, 'weight'=>100,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item29', 'price' => 198, 'weight'=>340,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item30', 'price' => 220, 'weight'=>800,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item31', 'price' => 249, 'weight'=>200,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item32', 'price' => 230, 'weight'=>20,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item33', 'price' => 190, 'weight'=>700,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item34', 'price' => 45, 'weight'=>10,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item35', 'price' => 12, 'weight'=>20,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item36', 'price' => 5, 'weight'=>200,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item37', 'price' => 2, 'weight'=>200,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item38', 'price' => 90, 'weight'=>20,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item39', 'price' => 12, 'weight'=>300,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item40', 'price' => 167, 'weight'=>500,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item41', 'price' => 12, 'weight'=>250,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item42', 'price' => 8, 'weight'=>10,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item43', 'price' => 2, 'weight'=>10,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item44', 'price' => 9, 'weight'=>500,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item45', 'price' => 210, 'weight'=>790,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item46', 'price' => 167, 'weight'=>100,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item47', 'price' => 23, 'weight'=>340,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item48', 'price' => 190, 'weight'=>800,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item49', 'price' => 199, 'weight'=>200,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
              ['name' => 'Item50', 'price' => 12, 'weight'=>20,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
          ];

      DB::table('products')->insert($products);
    }
}
