<?php

use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $house = new \App\House();
        $house->name = 'The Chill';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = 'Đó sẽ là một ngày đẹp nắng bạn bỏ trốn xã hội ồn ào ngoài kia và tìm đến chúng mình, chill’in cùng không gian vintage, mộc mộc của những điều hoài cổ nhưng yên bình, với cái tông màu ngọt dịu, xoa dịu tâm hồn mặn chat của bạn sau những tổn thương của cuộc đời dành cho bạn. Tại The Chill, chúng mình quan trọng nhất là trải nghiệm của từng bạn đến với homestay, vì thế nên mọi bước chân của bạn tại The Chill đều được nâng niu, “chill” như cái tên của tụi mình vậy. Bỏ hết muộn phiền ngay và đến với The Chill đi! The Chill không có gì nhiều ngoài sảnh ngoài với bàn trà hồng lịm lãng mạn lúc nào cũng thơm phức mùi trà bánh sẵn sàng chờ bạn với những người đồng hành đến thưởng thức, thư giãn rồi ngắm cảnh tuyệt đẹp nè. Tụi mình còn có không gian rooftop siêu xịn, bạn chẳng cần phải đi đâu xa để tìm kiếm một buổi BBQ Party bởi ngay chính tại The Chill, bạn có thể cùng bạn bè mê say với chút rượu và BBQ nóng hổi trên lò. Cùng với view sân thượng, “từ trên cao ta nhìn xuống”, siêu thích, siêu đã cho những giây phút nghỉ ngơi hiếm hoi giữa cuộc đua dài hơi của bạn với đời';
        $house->price = '900000';
        $house->address = 'Hanoi';
        $house->user_id = 1;
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Luxury Villa 6BR';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '5';
        $house->bathroom_amount = '5';
        $house->description = '✦Luxury Villa 6BR✦Bathtub✦Big yard✦Sai Gon River View [Sweethost] là một biệt thự yên tĩnh nằm trong khu biệt thự Thảo Điền, quận 02, với 06 phòng ngủ hiện đại, 02 ghế sofa và 02 đệm phụ, đủ cho những nhóm bạn hay gia đình từ 16 khách, và luôn tràn ngập ánh sáng từ rất nhiều những khung cửa sổ và ban cộng rộng.';
        $house->price = '7020000';
        $house->user_id = 1;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'FIKA No.1';
        $house->house_category = 'Can ho hien dai';
        $house->room_category = 'Nha o';
        $house->bedroom_amount = '4';
        $house->bathroom_amount = '7';
        $house->description = 'Không gian căn hộ rộng 40m2 ở tầng 2, được thiết kế theo phong cách Bắc Âu tinh tế. View kính lớn giúp căn hộ luôn tràn ngập ánh sáng, và sạc đầy năng lượng cho kỳ nghỉ của bạn. Mang đến một trải nghiệm tốt nhất dù là bạn đang du lịch hay tìm một nơi làm việc.';
        $house->price = '17000000';
        $house->user_id = 1;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Zeta homes';
        $house->house_category = 'Chung cu';
        $house->room_category = 'Phong doi';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = 'Zeta Homes - Căn hộ studio với đầy đủ tiện ích bao gồm bếp, nhà tắm rộng rãi, sofa, bàn, giường ngủ,.... tất cả đều được thiết kế và sắp xếp hợp lý, tạo cảm giác thoải mái, tiện nghi. Ngoài ra Zeta homes còn có chỗ đậu xe miễn phí ngay dưới tầng trệt của tòa nhà, máy giặt và máy sấy quần áo cũng được sử dụng hoàn toàn miễn phí.';
        $house->price = '1400000';
        $house->address = 'Hanoi';
        $house->user_id = 1;
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Lovely&Modern';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = 'Golden Manson là khu vực cư trú mới ở TP HCM, nơi bạn có thể thấy sự pha trộn giữa phong cách sống truyền thống và hiện đại, được biết đến là khu vực thân thiện với gia đình của thành phố. Đây là nơi hoàn hảo. Bảo mật cao mọi lúc. Thẻ thường trú để truy cập vào tòa nhà và thang máy. Khóa thông minh với mật khẩu để truy cập Căn hộ. Căn hộ nằm trên tầng 17 tại tòa nhà GM1 với đầy đủ nội thất, hoàn toàn riêng tư, yên tĩnh và an toàn, có thể chứa tới 6 người, lý tưởng cho khách doanh nhân, gia đình (có trẻ em và người già) hoặc một nhóm bạn. Nó mở ra để xem thành phố.';
        $house->price = '900000';  
        $house->user_id = 1;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Premium 3BR';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Nha o';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = 'Sweethost Premium 3BR tọa lạc trên tầng 44 của tòa nhà cao nhất Việt Nam Landmark 81, với tổng diện tích 117m2 có sức chứa lên đến 8 khách. Căn hộ được trang trí nội thất hiện đại, trang nhã cùng với view nhìn trực diện ra sông Sài Gòn và toàn thành phố. Ngoài ra, các dịch vụ đi kèm cũng sẽ là một điểm cộng lớn không thể bỏ qua khi trải nghiệm cùng Sweethost.﻿';
        $house->price = '500000';
        $house->address = 'Hanoi';
        $house->user_id = 1;
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Stay&Fun No.4 ';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = 'Homestay chúng mình nằm ngay trung tâm thành phố, sát gần Nhà thờ Đức Bà và Vincom Đồng Khởi. Nằm ở trên tầng 5 chung cư và không có thang máy. Có thể bạn sẽ ngại leo thang nhưng tin mình đi, trải nghiệm tại căn hộ sẽ không khiến bạn thất vọng. Nếu bạn cần trợ giúp với hành lý, hãy liên hệ chúng mình để được phụ mang đồ lên nhé!';
        $house->price = '700000';
        $house->address = 'Hanoi';
        $house->user_id = 1;
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Luxury Villa 5BRs';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = '✦Luxury Villa 5BR✦Bathtub✦Big yard✦Sai Gon River View [Sweethost] là một biệt thự yên tĩnh nằm trong khu biệt thự Thảo Điền, quận 02, với 06 phòng ngủ hiện đại, 02 ghế sofa và 02 đệm phụ, đủ cho những nhóm bạn hay gia đình từ 16 khách, và luôn tràn ngập ánh sáng từ rất nhiều những khung cửa sổ và ban cộng rộng.';
        $house->price = '900000';
        $house->user_id = 1;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Zeta homes';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '5';
        $house->description = 'Zeta Homes - Căn hộ studio với đầy đủ tiện ích bao gồm bếp, nhà tắm rộng rãi, sofa, bàn, giường ngủ,.... tất cả đều được thiết kế và sắp xếp hợp lý, tạo cảm giác thoải mái, tiện nghi. Ngoài ra Zeta homes còn có chỗ đậu xe miễn phí ngay dưới tầng trệt của tòa nhà, máy giặt và máy sấy quần áo cũng được sử dụng hoàn toàn miễn phí.';
        $house->price = '1900000';
        $house->user_id = 1;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Lovely&Modern 2Brs';
        $house->house_category = 'Chung cu';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '7';
        $house->bathroom_amount = '4';
        $house->description = 'Golden Manson là khu vực cư trú mới ở TP HCM, nơi bạn có thể thấy sự pha trộn giữa phong cách sống truyền thống và hiện đại, được biết đến là khu vực thân thiện với gia đình của thành phố. Đây là nơi hoàn hảo. Bảo mật cao mọi lúc. Thẻ thường trú để truy cập vào tòa nhà và thang máy. Khóa thông minh với mật khẩu để truy cập Căn hộ. Căn hộ nằm trên tầng 17 tại tòa nhà GM1 với đầy đủ nội thất, hoàn toàn riêng tư, yên tĩnh và an toàn, có thể chứa tới 6 người, lý tưởng cho khách doanh nhân, gia đình (có trẻ em và người già) hoặc một nhóm bạn. Nó mở ra để xem thành phố.';
        $house->price = '10200000';
        $house->user_id = 1;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Premium 3BR';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = 'Sweethost Premium 3BR tọa lạc trên tầng 44 của tòa nhà cao nhất Việt Nam Landmark 81, với tổng diện tích 117m2 có sức chứa lên đến 8 khách. Căn hộ được trang trí nội thất hiện đại, trang nhã cùng với view nhìn trực diện ra sông Sài Gòn và toàn thành phố. Ngoài ra, các dịch vụ đi kèm cũng sẽ là một điểm cộng lớn không thể bỏ qua khi trải nghiệm cùng Sweethost.﻿';
        $house->price = '400000';
        $house->user_id = 1;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Stay&Fun No.4';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '21';
        $house->bathroom_amount = '2';
        $house->description = 'Homestay chúng mình nằm ngay trung tâm thành phố, sát gần Nhà thờ Đức Bà và Vincom Đồng Khởi. Nằm ở trên tầng 5 chung cư và không có thang máy. Có thể bạn sẽ ngại leo thang nhưng tin mình đi, trải nghiệm tại căn hộ sẽ không khiến bạn thất vọng. Nếu bạn cần trợ giúp với hành lý, hãy liên hệ chúng mình để được phụ mang đồ lên nhé!';
        $house->price = '1500000';
        $house->user_id = 1;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Thao Dien Dist 2';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Nha o';
        $house->bedroom_amount = '28';
        $house->bathroom_amount = '2';
        $house->description = '✦Luxury Villa 5BR✦Bathtub✦Big yard✦Sai Gon River View [Sweethost] là một biệt thự yên tĩnh nằm trong khu biệt thự Thảo Điền, quận 02, với 06 phòng ngủ hiện đại, 02 ghế sofa và 02 đệm phụ, đủ cho những nhóm bạn hay gia đình từ 16 khách, và luôn tràn ngập ánh sáng từ rất nhiều những khung cửa sổ và ban cộng rộng.';
        $house->price = '11900000';
        $house->address = 'Hanoi';
        $house->user_id = 1;
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Studio';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = 'Spotless Studio tọa lạc trên đường Nguyễn Trãi, Quận 1 gần vòng xoay Starbucks, New World Hotel';
        $house->price = '900000';
        $house->user_id = 2;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = '2 BR- Lux Millennium';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = 'Hope Homestay nằm ở trung tâm Sài Gòn- Quận 1, nơi nhộn nhịp cả ngày lẫn đêm, đây là một nơi yên tĩnh, nơi bạn có thể có được giấc ngủ cần thiết sau một ngày bận rộn tham quan thành phố Hồ Chí Minh. Trở thành một studio retro trong một tòa nhà địa phương cổ xưa với các đặc điểm di sản, bạn sẽ cảm nhận được văn hóa Việt Nam ở đó.';
        $house->price = '900000';
        $house->address = 'Hanoi';
        $house->user_id = 1;
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'CayeeHome';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = 'Giữa nhịp sống tấp nập bộn bề hối hả nên thiết nghĩ cần lắm một nơi vừa đầy đủ tiện nghi thiết yếu cho cuộc sống vừa nhẹ nhàng thư thái giúp ta tìm lại sự bình yên tận sâu trong tâm. Vì thế mà CayeeHome ra đời.';
        $house->price = '900000';
        $house->user_id = 1;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'FREE AIRPORT PICKUP';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = 'Vinhomes Central Park là khu đô thị mới của thành phố, nơi bạn có thể thấy sự kết hợp hài hoà giữa phong cách sống truyền thống và hiện đại. Đây là nơi hoàn hảo để khám phá cuộc sống của những người dân địa phương và dành cho những người thích cây xanh ngoài trời.';
        $house->price = '200000';
        $house->user_id = 1;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Sunshine';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '3';
        $house->description = 'Ban công rộng rãi, sạch sẽ tại phòng khách là nơi lý tưởng để bạn có thể nhâm nhi vài tách trà, đọc sách hay ngắm nhìn toàn cảnh thành phố từ trên cao sau một ngày khám phá thành phố. Cùng với cửa sổ ở phòng ngủ giúp căn phòng tràn ngập ánh nắng và gió trời.';
        $house->price = '300000';
        $house->user_id = 2;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'TAN SON NHAT AIRPORT';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '3';
        $house->bathroom_amount = '2';
        $house->description = 'Nằm trong bán kính 1,5 km từ Trung tâm Hội nghị Triển lãm Quốc tế HIECC Hồ Chí Minh, Căn hộ Sky Center ở thành phố Thành phố Hồ Chí Minh này có khu vườn cũng như Wi-Fi miễn phí. Có vị trí thuận tiện tại quận Tân Bình, chỗ nghỉ cách chợ Tân Định 5 km. Trong khu vực có các điểm tham quan như Chùa Giác Lâm và trung tâm mua sắm Sài Gòn Square 3 - đường Hai Bà Trưng, đều cách đó 6 km.';
        $house->price = '200000';
        $house->user_id = 2;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Enchanting home';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = 'Vinhomes Central Park là khu đô thị mới của thành phố, nơi bạn có thể thấy sự kết hợp hài hoà giữa phong cách sống truyền thống và hiện đại. Đây là nơi hoàn hảo để khám phá cuộc sống của những người dân địa phương và dành cho những người thích cây xanh ngoài trời.';
        $house->price = '200000';
        $house->user_id = 3;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'THE MANOR - LUXURY 1BR';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '2';
        $house->description = 'Đến The Manor sẽ giúp bạn có một kỳ nghỉ sang trọng ở thành phố Hồ Chí Minh. Bạn sẽ có chỗ ở của riêng bạn với vị trí tuyệt vời cộng với hồ bơi và phòng tập thể dục miễn phí trên tầng thượng để thư giãn với tầm nhìn tuyệt vời.';
        $house->price = '200000';
        $house->user_id = 3;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();

        $house = new \App\House();
        $house->name = 'Luxury 1BR ';
        $house->house_category = 'Chung cu cao cap';
        $house->room_category = 'Phong don';
        $house->bedroom_amount = '2';
        $house->bathroom_amount = '4';
        $house->description = 'Botanica là khu vực cư trú mới ở HCM, nơi bạn có thể thấy sự pha trộn giữa phong cách sống truyền thống và hiện đại, được biết đến là khu vực thân thiện với gia đình của thành phố. Đây là nơi hoàn hảo. Bảo mật cao mọi lúc. Thẻ thường trú để truy cập vào tòa nhà và thang máy. Khóa thông minh với mật khẩu để truy cập Căn hộ.';
        $house->price = '2100000';
        $house->user_id = 2;
        $house->address='Hanoi';
        $house->location='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17714.676711777458!2d105.84428731999469!3d21.030603811301695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf59d8f429%3A0x7830a3dfd6e566a1!2zSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594349527749!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $house->save();
    }
}
