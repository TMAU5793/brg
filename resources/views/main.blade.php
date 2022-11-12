<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BRG ดีลสุขพร้อมส่ง</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/styles/css/main.css') }}">
</head>
<body>

    <div class="content landing-page">
        <div class="motor-logo hide-991">
            <img src="{{ url('assets/images/motor-expo2.png') }}" alt="">
        </div>

        <div class="box-register">
            <div class="box-head">
                <h3 class="ff-mont text-white display-6 mb-0">Happy Deal Happy Feels</h3>
                <h1 class="ff-iconic-bold">ดีลสุขพร้อมส่ง</h1>
                <p class="display-6 text-white">ส่ง Iphone14 ให้เฉพาะลูกค้า BRG เท่านั้น</p>
            </div>

            <div class="box-body mb-4">
                <form action="">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="txt_name" class="form-control" placeholder="ชื่อ - นามสกุล">
                    </div>
                    <div class="input-group">
                        <input type="email" name="txt_email" class="form-control" placeholder="อีเมล">
                    </div>
                    <div class="input-group">
                        <input type="text" name="txt_phone" class="form-control" placeholder="เบอร์ติดต่อ">
                    </div>
                    <div class="input-group">
                        <input type="text" name="txt_line" class="form-control" placeholder="ไลน์ไอดี">
                    </div>
                    <div class="input-group">
                        <input type="text" name="txt_car" class="form-control" placeholder="สนใจรถยนต์รุ่นไหน">
                    </div>
                    <button class="btn-submit">ลงทะเบียน</button>
                </form>
            </div>

            <div class="box-footer text-white">
                <p>เพียงแค่ลงทะเบียนเข้าชมบูธ BRG และจองรถที่งาน Thailand International Motor Expo 2022 ณ IMPACT Challenger เมืองทองธานี ความพิเศษยังไม่หมดเพียงเท่านี้ เรายังมีของรางวัลอีกมากมายสำหรับผู้ที่ร่วมลงทะเบียนเข้ามา รวมมูลค่ากว่า 100,000 บาท !!!</p>
                <strong class="ff-iconic-bold">***เงื่อนไขเป็นไปตามที่บริษัทฯกำหนด***</strong>
            </div>
        </div>

        <div class="gif-section hide-991">
            <div class="gif-1">
                <img src="{{ url('assets/images/h-gifbox1.png') }}" alt="">
            </div>
            <div class="gif-2">
                <img src="{{ url('assets/images/h-gifbox2.png') }}" alt="">
            </div>
            <div class="gif-3">
                <img src="{{ url('assets/images/h-gifbox3.png') }}" alt="">
            </div>
            <div class="gif-iphone">
                <img src="{{ url('assets/images/h-iphone.png') }}" alt="">
            </div>
            <div class="gif-camera">
                <img src="{{ url('assets/images/h-camera.png') }}" alt="">
            </div>
            <div class="gif-bicycle">
                <img src="{{ url('assets/images/h-bicycle.png') }}" alt="">
            </div>
            <div class="gif-ef1">
                <img src="{{ url('assets/images/ef-1.png') }}" alt="">
            </div>
            <div class="gif-ef2">
                <img src="{{ url('assets/images/ef-2.png') }}" alt="">
            </div>
        </div>

        <div class="mobile-footer show-991">
            <div class="row">
                <div class="col">
                    <img src="{{ url('assets/images/mobile/gifbox-1.png') }}" alt="" srcset="">
                </div>
                <div class="col">
                    <img src="{{ url('assets/images/mobile/gif-iphone.png') }}" alt="" srcset="">
                </div>
                <div class="col">
                    <img src="{{ url('assets/images/mobile/motor-expo.png') }}" alt="" srcset="">
                </div>                
                <div class="col">
                    <img src="{{ url('assets/images/mobile/gifbox-2.png') }}" alt="" srcset="">
                </div>
                <div class="col">
                    <img src="{{ url('assets/images/mobile/gif-camera.png') }}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('assets/bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>
</body>
</html>