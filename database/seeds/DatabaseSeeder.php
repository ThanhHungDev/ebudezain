<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ///user supper admin
        DB::table('users')->insert(
            [
                'name'       => 'Trương Thanh Hùng',
                'email'      => 'thanhhung.code@gmail.com',
                'avatar'     => 'upload/images/avatar.jpg',
                'password'   => bcrypt('123456789'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name'       => 'phượng hoàng',
                'email'      => 'phuong_hoang@gmail.com',
                'avatar'     => 'upload/images/avatar1.jpg',
                'password'   => bcrypt('123456789'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name'       => 'uyên',
                'email'      => 'uyen@gmail.com',
                'avatar'     => 'upload/images/avatar2.jpg',
                'password'   => bcrypt('123456789'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        ///category
        // id	name	slug	excerpt	thumbnail	background	description	image_seo	
        // keyword_seo	description_seo	created_at	updated_at
        DB::table('category')->insert([
            [
                'name'            => '店舗テンプレート',
                'slug'            => 'store-template-店舗テンプレート',
                'excerpt'         => '1000を超える非常に美しく、常に更新されるWebインターフェイス',
                'thumbnail'       => null,
                'background'      => null,
                'description'     => '自分のスタイルに合わせて簡単に変更',
                'site_name'         => 'プロのSEOウェブデザイン、モバイル互換性',
                'image_seo'       => null,
                'keyword_seo'     => '',
                'description_seo' => '美しいウェブサイトインターフェース、プロフェッショナルなウェブサイトデザイン、評判のSEO基準、高速なウェブデザイン時間、最も安い価格を保管してください。',
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s')
            ]
        ]);
        // name	slug excerpt thumbnail	background	description	product_category_id	image_seo	
        // keyword_seo	description_seo	created_at	updated_at
        DB::table('category_type')->insert(
            [
                [
                    'name'            => 'giao diện thương mại điện tử',
                    'slug'            => 'thuong-mai-dien-tu',
                    'excerpt'         => 'thương mại điển tử rất có lợi nhuận',
                    'thumbnail'       => null,
                    'background'      => null,
                    'description'     => 'áo thun nam, áo thun nam xuất khẩu, áo thun nam ngoại, áo thun nam chất lượng, áo thun nam giá rẻ, đồng hồ xách tay',
                    'category_id'     => 1,
                    'site_name'       => 'kho giao diện đẹp thương mại điện tử',
                    'image_seo'       => null,
                    'keyword_seo'     => '',
                    'description_seo' => '',
                    'created_at'      => date('Y-m-d H:i:s'),
                    'updated_at'      => date('Y-m-d H:i:s')
                ],
                [
                    'name'            => 'giới nthieeuj công ty',
                    'slug'            => 'giới thiệu công ty',
                    'excerpt'         => 'giới thiệu công ty',
                    'thumbnail'       => null,
                    'background'      => null,
                    'description'     => 'fgjdgnfdj',
                    'category_id'     => 1,
                    'site_name'       => 'kho giao diện đẹp thương mại điện tử',
                    'image_seo'       => null,
                    'keyword_seo'     => 'giới thiệu công ty',
                    'description_seo' => 'giới thiệu công ty',
                    'created_at'      => date('Y-m-d H:i:s'),
                    'updated_at'      => date('Y-m-d H:i:s')
                ]
            ]
        );
        // name	slug	price	price_sale	price_unit	description	
        // count	count_unit	thumbnail	post_by_user_id	product_type_id	like	view	
        // publish	image_seo	keyword_seo	description_seo	created_at	updated_at	
        DB::table('post')->insert(
            [
                [
                    'title'            => 'mẫu ưeb thương mại diẹn tử chuyên nghiệp',
                    'slug'             => 'mau-web-thuong-mai-dien-tu',
                    'excerpt'          => 'mẫu ưeb site bán hàng',
                    'content'          => 'Mẫu website thương mại điện tử đẹp chuyên nghiệp Website thương mại điện tử là trang thông tin điện tử được thiết lập nhằm phục vụ một phần hoặc toàn bộ quá trình hoạt động mua bán hàng hóa cũng như cung ứng dịch vụ. Từ việc trưng bày, giới thiệu hàng hóa, dịch vụ, bán hàng hóa dịch vụ, thanh toán và dịch vụ sau bán hàng. Hay có thể nói một cách đơn giản hơn, Website thương mại điện tử là một loại của website bán hàng.Khi lên kế hoạch thiết kế web thương mại điện tử, bạn cần phải xem xét nhiều yếu tố như thông tin chi tiết sản phẩm, hình ảnh sản phẩm, quá trình thanh toán đơn giản và minh bạch, các bộ lọc sản thích hợp cũng như các tùy chọn tìm kiếm, dịch vụ khách hàng lựa chọn có đáng tin cậy hay không, các phương thức thanh toán, giao diện website được thiết kế có hấp dẫn, thu hút người dùng, thân thiện với người sử dụng. Để làm được điều này quả là điều không hề đơn giản.Đây cũng chính là lý do mà trước khi thiết kế website thương mại điện tử mới hoặc nâng cấp gian hàng trực tuyến hiện tại của mình. Hãy tìm hiểu, tham khảo một số mẫu website thương mại điện tử hấp dẫn để lên những ý tưởng hấp dẫn cho dự án của mình tại Expro Việt Nam.',
                    'category_type_id' => 1,
                    'site_name'        => 'Mẫu website thương mại điện tử đẹp chuyên nghiệp',
                    'image_seo'        => null,
                    'keyword_seo'      => 'mẫu web',
                    'description_seo'  => 'mẫu hậu',
                    'created_at'       => date('Y-m-d H:i:s'),
                    'updated_at'       => date('Y-m-d H:i:s')
                ]
            ]
        );
    }
}
