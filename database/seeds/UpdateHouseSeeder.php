<?php

use Illuminate\Database\Seeder;

class UpdateHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $house = new \App\House();
        $house->name = 'Tam Dao Hideaway Nest';
        $house->house_category = 'Căn hộ cao cấp';
        $house->room_category = 'Phòng đơn';
        $house->bedroom_amount = '4';
        $house->bathroom_amount = '2';
        $house->description = '- Tại Tam Dao Hideaway Nest du khách được tận hưởng các dịch vụ và tiện nghi được xếp hạng hàng đầu để thư giãn thoải mái nhất

- Vila của chúng tôi là bên trong Tam Đảo Golf và Resort 45 phút từ cầu Nhật Tân của đường cao tốc Nội Bài - Lào Cai

- Khi đứng trên đỉnh đồi thông, du khách có thể tận hưởng không chỉ bầu không khí trong lành, hương vị của thiên nhiên mà còn là vẻ đẹp kỳ lạ của Tam Đảo Hideaway Nest, một lối thoát độc đáo cho kỳ nghỉ thư giãn

- Có rất nhiều sự lựa chọn cho du khách khám phá bao gồm thăm quan điểm du lịch nổi tiếng như thị trấn miền núi Tam Đảo / Núi Tây Thiên và các món ăn địa phương đặc biệt';
        $house->price = '2100000';
        $house->address='Tam Đảo, Vĩnh Phúc, Vietnam ';
        $house->save();
    }
}
