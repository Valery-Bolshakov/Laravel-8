@extends('layouts.layout_homepage')


@section('body')
    <div id="universe">
        <!-- <div class="main-content"> -->
        <section class="page-home">
            <div class="content-home">

                <div class="homepage-hero">
                    <div id="sign-up-estimate" class="hero-bk-holder"
                        {{--style="background: linear-gradient(transparent, transparent, #fffefe),
                            /*url({{route('home')}}/liox/images/images/home-hero4.webp)*/;
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: center bottom;"--}}>
                        <div class="text home-text">
                            <h5 class="hero-sub-title"
                                style="text-align: center;font-size: 22px; position: relative; top: 10px; letter-spacing: -0.5px; padding: 0 40px; font-weight:500;">
                                Make time for the things you love with Liox!</h5>
                            <div>
                                <h1 class="large" style="text-align: center;">Laundry Service &amp;<br>
                                    Dry Cleaning. Delivered
                                </h1>
                            </div>
                        </div>

                        <style>
                            .hero_label {
                                position: relative;
                                top: 1px;
                                margin: 0 10px;
                                font-size: 13px;
                                text-shadow: 0 0 12px #FFF;
                            }

                            .hero_input {
                                width: 20px;
                                height: 20px;
                                border: 1px solid #3d77ea;
                            }

                            @media screen and (max-width: 639px) {
                                .hero_label {
                                    letter-spacing: 0.75px;
                                }

                                .hero-sub-title {
                                    top: -10px !important;
                                }
                            }

                            @media screen and (max-width: 359px) {
                                .hero_label {
                                    letter-spacing: 0.75px;
                                    font-size: 11px !important;
                                    top: 2px;
                                    margin: 0 6px;
                                }

                                .hero-sub-title {
                                    display: none;
                                }
                            }
                        </style>

                        <!-- This is the include for the input action-bar -->
                        <div class="action-bar" style="max-width:950px;">
                            <form action="{{ route('order') }}" id="home-form" class="home-form">
                                <div id="service" style="display: flex; position: absolute; left: 0; top: -30px;">

                                    <input type="radio" id="service_wash" class="hero_input" name="service" value="wash"
                                           checked="" {{--onchange="updateButton(&#39;wash&#39;);"--}}>
                                    <label for="service_wash" class="hero_label" style="margin-right:15px;">Wash &amp;
                                        Fold</label>

                                    <input type="radio" id="service_dryclean" class="hero_input" name="service"
                                           value="dryclean" {{--onchange="updateButton(&#39;dryclean&#39;);"--}}>
                                    <label for="service_dryclean" class="hero_label">Dry Cleaning</label>

                                    <input type="radio" id="service_maid" class="hero_input" name="service"
                                           value="homeclean" {{--onchange="updateButton(&#39;homeclean&#39;);"--}}>
                                    <label class="hide-on-phone hero_label" for="service_maid">Home Cleaning</label>
                                    <label class="only-on-phone hero_label" for="service_maid"
                                           style="margin:0 0 0 10px;">Maid</label>
                                </div>

                                {{--
                                <script>
                                    function SetDropoffTIme() {
                                        //var x = document.getElementById("time-end").selectedIndex;
                                        var y = document.getElementById("time-end").options;
                                        for (var i = 0; i < y.length; i++) {
                                            var m = y[i].value.includes("11:00 am");
                                            var n = y[i].value.includes("08:00 pm");
                                            if (m) {
                                                console.log("am is at " + m);
                                                return;
                                            }
                                            if (n) {
                                                console.log("am is at " + n);
                                                document.getElementById("time-end").selectedIndex = i;
                                            }
                                        }
                                    }

                                    function UpdateTotal() {
                                        var price_order = parseInt(document.getElementById('price_order').value);
                                        if (document.getElementById('corona_discount') && document.getElementById(
                                            'corona_discount').checked) {
                                            var discount = 15;
                                        } else {
                                            var discount = 10;
                                        }
                                        var extra = 5;
                                        var same_day = parseInt(document.getElementById("sameday").value);
                                        var total = price_order - discount + extra * same_day;
                                        document.getElementById('price_num').innerHTML = total;
                                        document.getElementById('order_btn_discount_text').innerHTML =
                                            '$10 OFF First Two Orders';
                                    }

                                    function updateButton(service) {

                                        globalData = {
                                            'goBack': service
                                        };

                                        if (service == "wash") {
                                            if (document.getElementById('service_wash').checked) {
                                                var service = 'washFold';
                                                document.getElementById('price_num').innerHTML = getSetting('minimum_order_price', 30);
                                                document.getElementById('schedule_book').innerHTML = 'Schedule';
                                                document.getElementById('service_var').value = 'wash';
                                                document.getElementById('order_btn_discount_text').innerHTML = '$10 OFF First Two Orders';

                                                $('#day-start').html('');
                                                $('#time-start').html('');

                                                $.get('/time-schedule?wash=1').then((response) => {

                                                    $.each(response, function (idx, val) {
                                                        $('#day-start').append($('<option/>', {
                                                            value: val['day_info']['value'],
                                                            text: val['day_info']['text']
                                                        }));
                                                    });

                                                    let work_times = response[0]['work_times'];
                                                    $.each(work_times, function (idx, val) {
                                                        $('#time-start').append($('<option/>', {
                                                            value: val['value'],
                                                            text: val['text']
                                                        }));
                                                    });
                                                });
                                            }
                                            document.getElementById('pickup_label').innerHTML = 'pickup';
                                        } else if (service == "dryclean") {
                                            if (document.getElementById('service_dryclean').checked) {
                                                document.getElementById('price_num').innerHTML = getSetting('minimum_order_price', 30);
                                                document.getElementById('schedule_book').innerHTML = 'Schedule';
                                                document.getElementById('order_btn_discount_text').innerHTML = '$10 OFF First Two Orders';
                                                var service = 'dryCleaning';
                                                document.getElementById('service_var').value = 'dryclean';
                                                document.getElementById('pickup_label').innerHTML = 'pickup';
                                                if (document.getElementById('corona_discount') && document.getElementById(
                                                    'corona_discount').checked) {
                                                    document.getElementById('corona_discount').checked = false;
                                                }

                                                $('#day-start').html('');
                                                $('#time-start').html('');

                                                $.get('/time-schedule?wash=2').then((response) => {

                                                    $.each(response, function (idx, val) {
                                                        $('#day-start').append($('<option/>', {
                                                            value: val['day_info']['value'],
                                                            text: val['day_info']['text']
                                                        }));
                                                    });

                                                    let work_times = response[0]['work_times'];
                                                    $.each(work_times, function (idx, val) {
                                                        $('#time-start').append($('<option/>', {
                                                            value: val['value'],
                                                            text: val['text']
                                                        }));
                                                    });
                                                });
                                            }

                                            globalData = {
                                                'goBack': service
                                            };
                                        } else if (service == "homeclean") {
                                            if (document.getElementById('service_maid').checked) {
                                                document.getElementById('schedule_book').innerHTML = 'Book';

                                                document.getElementById('price_num').innerHTML = '84';
                                                document.getElementById('order_btn_discount_text').innerHTML =
                                                    '$20 OFF First Two Orders';
                                                console.log(document.getElementById('price_num').innerHTML);
                                                document.getElementById('pickup_label').innerHTML = 'date';

                                                $('#day-start').html('');
                                                $('#time-start').html('');

                                                $.get('/time-schedule?wash=3').then((response) => {

                                                    $.each(response, function (idx, val) {
                                                        $('#day-start').append($('<option/>', {
                                                            value: val['day_info']['value'],
                                                            text: val['day_info']['text']
                                                        }));
                                                    });

                                                    let work_times = response[0]['work_times'];
                                                    $.each(work_times, function (idx, val) {
                                                        $('#time-start').append($('<option/>', {
                                                            value: val['value'],
                                                            text: val['text']
                                                        }));
                                                    });
                                                });
                                            }
                                        } else if (service == "shop") {
                                            if (document.getElementById('service_dryclean').checked) {
                                                document.getElementById('price_num').innerHTML = getSetting('minimum_order_price', 30);
                                                document.getElementById('order_btn_discount_text').innerHTML = '$20 OFF First Two Orders';
                                                var service = 'dryCleaning';
                                                document.getElementById('service_var').value = 'dryclean';
                                                document.getElementById('pickup_label').innerHTML = 'pickup';
                                                if (document.getElementById('corona_discount') && document.getElementById(
                                                    'corona_discount').checked) {
                                                    document.getElementById('corona_discount').checked = false;
                                                }
                                            }
                                        }
                                    }

                                    function checkSameDay() {

                                        if (document.getElementById('service_var').value == 'homeclean') {
                                            var x1 = document.getElementById("day-start").selectedIndex;
                                            var y1 = document.getElementById("day-start").options;
                                            var p1 = document.getElementById("time-start").selectedIndex;
                                            var w1 = document.getElementById("time-start").options;
                                            var dateX = y1[x1].text;
                                            //console.log(dateX);
                                            var dateY = w1[p1].text;
                                            //console.log(dateY);

                                            var strX = dateX.length
                                            var resX = dateX.substring(0, strX - 2);
                                            var strY = dateY.length
                                            var resY = dateY.substring(0, strY - 11);
                                            var date = new Date();
                                            var YR = date.getFullYear();
                                            var dateString1 = resX + " " + YR + " " + resY;
                                            //console.log(dateString1);
                                            return;
                                        }
                                        var x1 = document.getElementById("day-start").selectedIndex;
                                        var y1 = document.getElementById("day-start").options;
                                        var p1 = document.getElementById("time-start").selectedIndex;
                                        var w1 = document.getElementById("time-start").options;
                                        var dateX = y1[x1].text;
                                        //console.log(dateX);
                                        var dateY = w1[p1].text;
                                        //console.log(dateY);
                                        var strX = dateX.length
                                        var resX = dateX.substring(0, strX - 2);
                                        var strY = dateY.length
                                        var resY = dateY.substring(0, strY - 11);
                                        var date = new Date();
                                        var YR = date.getFullYear();
                                        var dateString1 = resX + " " + YR + " " + resY;

                                        var p2 = document.getElementById("time-end").selectedIndex;
                                        var w2 = document.getElementById("time-end").options;
                                        var x2 = document.getElementById("day-end").selectedIndex;
                                        var y2 = document.getElementById("day-end").options;

                                        var dateX = y2[x2].text;
                                        var dateY = w2[p2].text;
                                        var strX = dateX.length
                                        var resX = dateX.substring(0, strX - 2);
                                        var strY = dateY.length
                                        var resY = dateY.substring(0, strY - 11);
                                        var date = new Date();
                                        var YR = date.getFullYear();
                                        var dateString2 = resX + " " + YR + " " + resY;
                                        //console.log(dateString2);
                                        var someDate2 = new Date(dateString2);
                                        someDate2 = someDate2.getTime();

                                        var someDate1 = new Date(dateString1);
                                        someDate1 = someDate1.getTime();

                                        var difference = (someDate2 - someDate1) / (1000 * 60 * 60);
                                        //console.log(difference + " hours difference for pickup and delivery");

                                        if (y1[x1].text == y2[x2].text || difference < 22) {
                                            //if(document.getElementById("sameday").value == 1){
                                            //DO NOTHING
                                            //} else {
                                            document.getElementById("sameday").value = 1;
                                            //}
                                        } else {
                                            //if(document.getElementById("sameday").value == 1){
                                            document.getElementById("sameday").value = 0;
                                            //} else {
                                            //DO NOTHING
                                            //}
                                        }
                                        UpdateTotal();
                                    }

                                </script>
    --}}

                                <style>
                                    .time_view1 div,
                                    .time_view1 div select {
                                        border-radius: 5px 0 0 5px !important;
                                    }

                                    .time_view1 div,
                                    .time_view2 div,
                                    .time_view3 div,
                                    .time_view4 div {
                                        border-color: #98a7b3 !important;
                                    }

                                    #order-button {
                                        border-radius: 0 5px 5px 0;
                                        box-shadow: 1px 1px 2px 0px #1f1d1d;
                                    }

                                    .time_view2,
                                    .time_view4 {
                                        display: none;
                                    }

                                    .sign-up-estimate {
                                        font-weight: 100;
                                    }

                                    @media screen and (max-width: 639px) {
                                        .h2.large, h2.large {
                                            font-size: 32px;
                                            line-height: 32px;
                                        }

                                        #order-button {
                                            border-radius: 5px;
                                        }

                                        .time_view3 div,
                                        .time_view3 div select {
                                            border-radius: 0 5px 5px 0px !important;
                                        }
                                    }

                                    @media screen and (max-width: 359px) {
                                        .h2.large, h2.large {
                                            font-size: 28px;
                                            line-height: 28px;
                                        }

                                        .h1.large,
                                        h1.large {
                                            font-size: 32px;
                                            line-height: 36px;
                                        }

                                        #service label {
                                            font-size: 10px;
                                        }
                                    }
                                </style>


                                <div class="time_view1 time-page-form input-group input-day" style="margin-bottom:0;">
                                    <div class="mc-select mc-select-home" data-select="room_bath">
                                        <select class="homepage_schedule" name="day-start" id="day-start"
                                                style="background: none;z-index: 5;position: relative;">
                                            {{--@foreach ($pickupData as $pickupDate)
                                                <option
                                                    value="{{ $pickupDate['day_info']['value'] }}">{{ $pickupDate['day_info']['text'] }}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                    <span id="pickup_label" class="meta-time select-time">pickup</span>
                                </div>

                                <div class="time_view3 time-page-form input-group" style="margin-bottom:0;">
                                    <div class="mc-select mc-select-home" data-select="room_bath">
                                        <select class="homepage_schedule" name="time-start" id="time-start"
                                                style="background: none;z-index: 5;position: relative;">
                                            {{--@foreach ($pickupData[0]['work_times'] as $pickupTime)
                                                <option
                                                    value="{{ $pickupTime['value'] }}">{{ $pickupTime['text'] }}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                    <span class="meta-time select-time">time</span>
                                </div>

                                <div class="time_view2 time-page-form input-group input-day"
                                     style="margin-bottom:10px;">
                                    <div class="mc-select mc-select-home" data-select="room_bath">
                                        <select class="homepage_schedule" name="day-end" id="day-end"
                                                style="background: none;z-index: 5;position: relative;">
                                        </select>
                                    </div>
                                    <span class="meta-time select-time">delivery</span>
                                </div>

                                <div class="time_view4 time-page-form input-group" style="margin-bottom:10px;">
                                    <div class="mc-select mc-select-home" data-select="room_bath">
                                        <select class="homepage_schedule" name="time-end" id="time-end"
                                                style="background: none;z-index: 5;position: relative;">
                                        </select>
                                    </div>
                                    <span class="meta-time select-time">time</span>
                                </div>

                                <input type="hidden" name="day-start-text" id="day-start-text" value="Mon, Sep 14th">
                                <input type="hidden" name="day-end-text" id="day-end-text" value="Mon, Sep 14th">
                                <input type="hidden" name="time-start-text" id="time-start-text"
                                       value="06:30 am - 08:00 am">
                                <input type="hidden" name="time-end-text" id="time-end-text"
                                       value="07:00 pm - 09:00 pm">
                                <input type="hidden" name="service_var" id="service_var" value="wash">
                                <input type="hidden" name="sameday" id="sameday" value="1">

                                {{--<script>
                                    var json_pickup =
                                        '[{ "day_info":{ "text":"Mon, Sep 14th","value":"2020-09-14" },
                                        "work_times":[ {"text":"06:30 am - 08:00 am","value":"07:00 am"},
                                        {"text":"07:00 am - 08:30 am","value":"07:30 am"},
                                        {"text":"07:30 am - 09:00 am","value":"08:00 am"},
                                        {"text":"08:00 am - 09:30 am","value":"08:30 am"},
                                        {"text":"08:30 am - 10:00 am","value":"09:00 am"},
                                        {"text":"08:30 am - 10:30 am","value":"09:30 am"},
                                        {"text":"09:00 am - 11:00 am","value":"10:00 am"},
                                        {"text":"09:30 am - 11:30 am","value":"10:30 am"},
                                        {"text":"10:00 am - 12:00 pm","value":"11:00 am"},
                                        {"text":"10:30 am - 12:30 pm","value":"11:30 am"},
                                        {"text":"04:00 pm - 06:00 pm","value":"05:00 pm"},
                                        {"text":"04:30 pm - 06:30 pm","value":"05:30 pm"},
                                        {"text":"05:00 pm - 07:00 pm","value":"06:00 pm"},
                                        {"text":"05:30 pm - 07:30 pm","value":"06:30 pm"},
                                        {"text":"06:00 pm - 08:00 pm","value":"07:00 pm"},
                                        {"text":"06:30 pm - 08:30 pm","value":"07:30 pm"},
                                        {"text":"07:00 pm - 09:00 pm","value":"08:00 pm"},
                                        {"text":"07:30 pm - 09:30 pm","value":"08:30 pm"},
                                        {"text":"08:00 pm - 10:00 pm","value":"09:00 pm"}] },
                                        { "day_info":{ "text":"Tue, Sep 15th","value":"2020-09-15" },
                                        "work_times":[ {"text":"06:30 am - 08:00 am","value":"07:00 am"},
                                        {"text":"07:00 am - 08:30 am","value":"07:30 am"},
                                        {"text":"07:30 am - 09:00 am","value":"08:00 am"},
                                        {"text":"08:00 am - 09:30 am","value":"08:30 am"},
                                        {"text":"08:30 am - 10:00 am","value":"09:00 am"},
                                        {"text":"08:30 am - 10:30 am","value":"09:30 am"},
                                        {"text":"09:00 am - 11:00 am","value":"10:00 am"},
                                        {"text":"09:30 am - 11:30 am","value":"10:30 am"},
                                        {"text":"10:00 am - 12:00 pm","value":"11:00 am"},
                                        {"text":"10:30 am - 12:30 pm","value":"11:30 am"},
                                        {"text":"04:00 pm - 06:00 pm","value":"05:00 pm"},
                                        {"text":"04:30 pm - 06:30 pm","value":"05:30 pm"},
                                        {"text":"05:00 pm - 07:00 pm","value":"06:00 pm"},
                                        {"text":"05:30 pm - 07:30 pm","value":"06:30 pm"},
                                        {"text":"06:00 pm - 08:00 pm","value":"07:00 pm"},
                                        {"text":"06:30 pm - 08:30 pm","value":"07:30 pm"},
                                        {"text":"07:00 pm - 09:00 pm","value":"08:00 pm"},
                                        {"text":"07:30 pm - 09:30 pm","value":"08:30 pm"},
                                        {"text":"08:00 pm - 10:00 pm","value":"09:00 pm"}] },{ "day_info":{ "text":"Wed, Sep 16th","value":"2020-09-16" },
                                        "work_times":[ {"text":"06:30 am - 08:00 am","value":"07:00 am"},{"text":"07:00 am - 08:30 am","value":"07:30 am"},
                                        {"text":"07:30 am - 09:00 am","value":"08:00 am"},{"text":"08:00 am - 09:30 am","value":"08:30 am"},
                                        {"text":"08:30 am - 10:00 am","value":"09:00 am"},{"text":"08:30 am - 10:30 am","value":"09:30 am"},
                                        {"text":"09:00 am - 11:00 am","value":"10:00 am"},{"text":"09:30 am - 11:30 am","value":"10:30 am"},
                                        {"text":"10:00 am - 12:00 pm","value":"11:00 am"},{"text":"10:30 am - 12:30 pm","value":"11:30 am"},
                                        {"text":"04:00 pm - 06:00 pm","value":"05:00 pm"},{"text":"04:30 pm - 06:30 pm","value":"05:30 pm"},
                                        {"text":"05:00 pm - 07:00 pm","value":"06:00 pm"},{"text":"05:30 pm - 07:30 pm","value":"06:30 pm"},
                                        "text":"06:00 pm - 08:00 pm","value":"07:00 pm"},{"text":"06:30 pm - 08:30 pm","value":"07:30 pm"},
                                        {"text":"07:00 pm - 09:00 pm","value":"08:00 pm"},{"text":"07:30 pm - 09:30 pm","value":"08:30 pm"},
                                        {"text":"08:00 pm - 10:00 pm","value":"09:00 pm"}] },{ "day_info":{ "text":"Thu, Sep 17th","value":"2020-09-17" },
                                        "work_times":[ {"text":"06:30 am - 08:00 am","value":"07:00 am"},{"text":"07:00 am - 08:30 am","value":"07:30 am"},
                                        {"text":"07:30 am - 09:00 am","value":"08:00 am"},{"text":"08:00 am - 09:30 am","value":"08:30 am"},
                                        {"text":"08:30 am - 10:00 am","value":"09:00 am"},{"text":"08:30 am - 10:30 am","value":"09:30 am"},
                                        {"text":"09:00 am - 11:00 am","value":"10:00 am"},{"text":"09:30 am - 11:30 am","value":"10:30 am"},
                                        {"text":"10:00 am - 12:00 pm","value":"11:00 am"},{"text":"10:30 am - 12:30 pm","value":"11:30 am"},
                                        {"text":"04:00 pm - 06:00 pm","value":"05:00 pm"},{"text":"04:30 pm - 06:30 pm","value":"05:30 pm"},
                                        {"text":"05:00 pm - 07:00 pm","value":"06:00 pm"},{"text":"05:30 pm - 07:30 pm","value":"06:30 pm"},{"text":"06:00 pm - 08:00 pm","value":"07:00 pm"},{"text":"06:30 pm - 08:30 pm","value":"07:30 pm"},{"text":"07:00 pm - 09:00 pm","value":"08:00 pm"},{"text":"07:30 pm - 09:30 pm","value":"08:30 pm"},{"text":"08:00 pm - 10:00 pm","value":"09:00 pm"}] },{ "day_info":{ "text":"Fri, Sep 18th","value":"2020-09-18" }, "work_times":[ {"text":"06:30 am - 08:00 am","value":"07:00 am"},{"text":"07:00 am - 08:30 am","value":"07:30 am"},{"text":"07:30 am - 09:00 am","value":"08:00 am"},{"text":"08:00 am - 09:30 am","value":"08:30 am"},{"text":"08:30 am - 10:00 am","value":"09:00 am"},{"text":"08:30 am - 10:30 am","value":"09:30 am"},{"text":"09:00 am - 11:00 am","value":"10:00 am"},{"text":"09:30 am - 11:30 am","value":"10:30 am"},{"text":"10:00 am - 12:00 pm","value":"11:00 am"},{"text":"10:30 am - 12:30 pm","value":"11:30 am"},{"text":"04:00 pm - 06:00 pm","value":"05:00 pm"},{"text":"04:30 pm - 06:30 pm","value":"05:30 pm"},{"text":"05:00 pm - 07:00 pm","value":"06:00 pm"},{"text":"05:30 pm - 07:30 pm","value":"06:30 pm"},{"text":"06:00 pm - 08:00 pm","value":"07:00 pm"},{"text":"06:30 pm - 08:30 pm","value":"07:30 pm"},{"text":"07:00 pm - 09:00 pm","value":"08:00 pm"},{"text":"07:30 pm - 09:30 pm","value":"08:30 pm"},{"text":"08:00 pm - 10:00 pm","value":"09:00 pm"}] },{ "day_info":{ "text":"Sat, Sep 19th","value":"2020-09-19" }, "work_times":[ {"text":"07:30 am - 09:00 am","value":"08:00 am"},{"text":"08:00 am - 09:30 am","value":"08:30 am"},{"text":"08:30 am - 10:00 am","value":"09:00 am"},{"text":"08:30 am - 10:30 am","value":"09:30 am"},{"text":"09:00 am - 11:00 am","value":"10:00 am"},{"text":"09:30 am - 11:30 am","value":"10:30 am"},{"text":"10:00 am - 12:00 pm","value":"11:00 am"},{"text":"10:30 am - 12:30 pm","value":"11:30 am"},{"text":"04:00 pm - 06:00 pm","value":"05:00 pm"},{"text":"04:30 pm - 06:30 pm","value":"05:30 pm"},{"text":"05:00 pm - 07:00 pm","value":"06:00 pm"},{"text":"05:30 pm - 07:30 pm","value":"06:30 pm"},{"text":"06:00 pm - 08:00 pm","value":"07:00 pm"},{"text":"06:30 pm - 08:30 pm","value":"07:30 pm"},{"text":"07:00 pm - 09:00 pm","value":"08:00 pm"},{"text":"07:30 pm - 09:30 pm","value":"08:30 pm"},{"text":"08:00 pm - 10:00 pm","value":"09:00 pm"}] },{ "day_info":{ "text":"Sun, Sep 20th","value":"2020-09-20" }, "work_times":[ {"text":"07:30 am - 09:00 am","value":"08:00 am"},{"text":"08:00 am - 09:30 am","value":"08:30 am"},{"text":"08:30 am - 10:00 am","value":"09:00 am"},{"text":"08:30 am - 10:30 am","value":"09:30 am"},{"text":"09:00 am - 11:00 am","value":"10:00 am"},{"text":"09:30 am - 11:30 am","value":"10:30 am"},{"text":"10:00 am - 12:00 pm","value":"11:00 am"},{"text":"10:30 am - 12:30 pm","value":"11:30 am"},{"text":"04:00 pm - 06:00 pm","value":"05:00 pm"},{"text":"04:30 pm - 06:30 pm","value":"05:30 pm"},{"text":"05:00 pm - 07:00 pm","value":"06:00 pm"},{"text":"05:30 pm - 07:30 pm","value":"06:30 pm"},{"text":"06:00 pm - 08:00 pm","value":"07:00 pm"},{"text":"06:30 pm - 08:30 pm","value":"07:30 pm"},{"text":"07:00 pm - 09:00 pm","value":"08:00 pm"},{"text":"07:30 pm - 09:30 pm","value":"08:30 pm"},{"text":"08:00 pm - 10:00 pm","value":"09:00 pm"}] },{ "day_info":{ "text":"Mon, Sep 21st","value":"2020-09-21" }, "work_times":[ {"text":"06:30 am - 08:00 am","value":"07:00 am"},{"text":"07:00 am - 08:30 am","value":"07:30 am"},{"text":"07:30 am - 09:00 am","value":"08:00 am"},{"text":"08:00 am - 09:30 am","value":"08:30 am"},{"text":"08:30 am - 10:00 am","value":"09:00 am"},{"text":"08:30 am - 10:30 am","value":"09:30 am"},{"text":"09:00 am - 11:00 am","value":"10:00 am"},{"text":"09:30 am - 11:30 am","value":"10:30 am"},{"text":"10:00 am - 12:00 pm","value":"11:00 am"},{"text":"10:30 am - 12:30 pm","value":"11:30 am"},{"text":"04:00 pm - 06:00 pm","value":"05:00 pm"},{"text":"04:30 pm - 06:30 pm","value":"05:30 pm"},{"text":"05:00 pm - 07:00 pm","value":"06:00 pm"},{"text":"05:30 pm - 07:30 pm","value":"06:30 pm"},{"text":"06:00 pm - 08:00 pm","value":"07:00 pm"},{"text":"06:30 pm - 08:30 pm","value":"07:30 pm"},{"text":"07:00 pm - 09:00 pm","value":"08:00 pm"},{"text":"07:30 pm - 09:30 pm","value":"08:30 pm"},{"text":"08:00 pm - 10:00 pm","value":"09:00 pm"}] },{ "day_info":{ "text":"Tue, Sep 22nd","value":"2020-09-22" }, "work_times":[ {"text":"06:30 am - 08:00 am","value":"07:00 am"},{"text":"07:00 am - 08:30 am","value":"07:30 am"},{"text":"07:30 am - 09:00 am","value":"08:00 am"},{"text":"08:00 am - 09:30 am","value":"08:30 am"},{"text":"08:30 am - 10:00 am","value":"09:00 am"},{"text":"08:30 am - 10:30 am","value":"09:30 am"},{"text":"09:00 am - 11:00 am","value":"10:00 am"},{"text":"09:30 am - 11:30 am","value":"10:30 am"},{"text":"10:00 am - 12:00 pm","value":"11:00 am"},{"text":"10:30 am - 12:30 pm","value":"11:30 am"},{"text":"04:00 pm - 06:00 pm","value":"05:00 pm"},{"text":"04:30 pm - 06:30 pm","value":"05:30 pm"},{"text":"05:00 pm - 07:00 pm","value":"06:00 pm"},{"text":"05:30 pm - 07:30 pm","value":"06:30 pm"},{"text":"06:00 pm - 08:00 pm","value":"07:00 pm"},{"text":"06:30 pm - 08:30 pm","value":"07:30 pm"},{"text":"07:00 pm - 09:00 pm","value":"08:00 pm"},{"text":"07:30 pm - 09:30 pm","value":"08:30 pm"},{"text":"08:00 pm - 10:00 pm","value":"09:00 pm"}] },{ "day_info":{ "text":"Wed, Sep 23rd","value":"2020-09-23" }, "work_times":[ {"text":"06:30 am - 08:00 am","value":"07:00 am"},{"text":"07:00 am - 08:30 am","value":"07:30 am"},{"text":"07:30 am - 09:00 am","value":"08:00 am"},{"text":"08:00 am - 09:30 am","value":"08:30 am"},{"text":"08:30 am - 10:00 am","value":"09:00 am"},{"text":"08:30 am - 10:30 am","value":"09:30 am"},{"text":"09:00 am - 11:00 am","value":"10:00 am"},{"text":"09:30 am - 11:30 am","value":"10:30 am"},{"text":"10:00 am - 12:00 pm","value":"11:00 am"},{"text":"10:30 am - 12:30 pm","value":"11:30 am"},{"text":"04:00 pm - 06:00 pm","value":"05:00 pm"},{"text":"04:30 pm - 06:30 pm","value":"05:30 pm"},{"text":"05:00 pm - 07:00 pm","value":"06:00 pm"},{"text":"05:30 pm - 07:30 pm","value":"06:30 pm"},{"text":"06:00 pm - 08:00 pm","value":"07:00 pm"},{"text":"06:30 pm - 08:30 pm","value":"07:30 pm"},{"text":"07:00 pm - 09:00 pm","value":"08:00 pm"},{"text":"07:30 pm - 09:30 pm","value":"08:30 pm"},{"text":"08:00 pm - 10:00 pm","value":"09:00 pm"}] }]';
                                </script>--}}

                                <input type="hidden" name="price_order" id="price_order"
                                    {{--value="{{ \App\Models\Setting::getSetting('minimum_order_price') }}"--}}>
                                <div class="input-group input-group-submit" style="margin-top: 0;margin-bottom: 40px;">
                                    <button id="order-button" style="">
                                    <span id="homepage_text_1"
                                          style="line-height:52px;font-size:20px;position: relative;top: 2px;">
                                        <span id="schedule_book">Schedule</span> From $
                                        <span
                                            id="price_num">{{--{{ \App\Models\Setting::getSetting('minimum_order_price') }}--}}</span>
                                        <svg width="8px" height="12px" viewBox="0 0 8 12" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                               fill-rule="evenodd">
                                                <g id="right-carrot" transform="translate(1.000000, 0.000000)"
                                                   stroke="#FFFFFF">
                                                    <polyline id="Path" points="0.2 11.7 5.7 6.2 0.2 0.7"></polyline>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    </button>
                                    <div
                                        style="padding: 15px; text-align: center; vertical-align: middle; border: 1px dashed #1e90da; border-top: 0;">
                                    <span id="order_btn_discount_text"
                                          style="display:block;position:relative;top: 0px;font-size: 15px;text-align: center;color: #14374c;font-weight: bold;text-transform: capitalize;">$10
                                        OFF First Two Orders</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End of Action-Bar -->

                        <!-- Meta Information in header -->
                        <div class="meta-info">
                            <ul>
                                <li style="font-weight:bold;"><img src="/images/new_images/star-outline.svg" class="svg"
                                                                   loading="lazy"
                                                                   alt="Highest Quality Laundry Service">New York's
                                    Highest Rated Service
                                </li>
                                <li style="font-weight:bold;"><img src="/images/new_images/check.svg" class="svg"
                                                                   loading="lazy"
                                                                   alt="Laundry done in house">Insured and Bonded
                                    Service
                                </li>
                                <li style="font-weight:bold;"><img src="/images/new_images/leaf.svg" class="svg"
                                                                   loading="lazy"
                                                                   alt="Eco friendly laundry service">Eco and green
                                    cleaning supplies
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of hero-bk-bolder -->
                </div>
                <!-- end of hero homepage -->

                <style>
                    .how-liox-works .input-group {
                        box-sizing: border-box;
                        padding: 0 10px;
                        padding-right: 30px;
                    }

                    @media screen and (max-width: 640px) {
                        .how-liox-works .text {
                            padding-right: 0px !important;
                            float: none !important;
                        }

                        .how-liox-works .input-group {
                            padding-right: 0px;
                        }

                        .how-liox-works {
                            margin-top: 60px;
                        }
                    }
                </style>
                <style>
                    .steps.steps3 li {
                        font-size: 18px;
                        font-weight: 300;
                    }

                    #liox_laundry_guide h2 {
                        text-align: center;
                        margin: 70px 10px 40px 10px;
                    }

                    #liox_laundry_guide img,
                    #liox_laundry_guide .text {
                        float: left;
                    }

                    #liox_laundry_guide .text {
                        margin-left: 20px;
                        max-width: calc(100% - 195px);
                    }

                    @media screen and (max-width: 940px) {
                        #liox_laundry_guide {
                            margin-top: 60px;
                        }

                        #liox_laundry_guide img,
                        #liox_laundry_guide .text {
                            float: none;
                        }

                        #liox_laundry_guide img {
                            max-width: 200px;
                        }

                        #liox_laundry_guide .text {
                            max-width: initial;
                            margin-left: 70px;
                            margin-right: 40px;
                        }

                        #liox_laundry_guide h4 {
                            font-size: 24px;
                            padding-bottom: 20px;
                        }
                    }
                </style>
                <style>
                    #reviews_section .input-group {
                        box-sizing: border-box;
                        padding: 0 30px 0 10px;
                    }

                    #reviews_section .text p {
                        min-height: 225px;
                    }

                    @media screen and (max-width: 640px) {
                        #reviews_section .input-group {
                            padding: 0 0 30px 0;
                        }

                        #reviews_section .text p {
                            min-height: auto;
                        }
                    }
                </style>
                <style>
                    #additional_section .stars {
                        box-sizing: border-box;
                        padding: 15px 0px;
                        padding-right: 30px;
                        text-align: left;
                    }

                    #additional_section h3 {
                        text-align: left;
                    }

                    #additional_section .text {
                        max-width: 450px;
                    }

                    @media screen and (max-width: 640px) {
                        #additional_section .steps div {
                            padding: 0;
                            text-align: center;
                        }

                        #additional_section .steps div div p {
                            text-align: left;
                        }

                        #additional_section .stars {
                            max-height: initial;
                            padding: 0 0 15px 0 !important;
                            text-align: center;
                        }

                        #additional_section {
                            margin: 60px auto;
                        }

                        #additional_section .input-group {
                            margin-bottom: 40px;
                        }

                        #additional_section h3 {
                            text-align: center;
                        }
                    }
                </style>

                {{-- setting home_page_html--}}
                {{--            {!! \App\Models\Setting::getSetting('home_page_html') ?? '' !!}--}}
                {{-- /settings home_page_html--}}

                <style>
                    #cleaning-lab-section {
                        background-color: white;
                        max-width: 1440px;
                        margin: auto;

                        padding-bottom: 60px;
                    }

                    #cleaning-lab-section img {
                        margin-bottom: 80px;
                    }

                    #cleaning-lab-section img {
                        width: 100%;
                        max-width: 320px;
                        height: 200px
                    }

                    .article_home {
                        clear: both;
                        float: none;
                        margin-top: 20px;
                    }

                    .article_home_img,
                    .article_home_text {
                        float: left;
                    }

                    .article_home_text {
                        width: calc(100% - 335px);
                        padding-left: 15px;
                    }

                    .article_home_text h2 {
                        text-align: left;
                        margin: 0 0 8px 0px;
                        top: 0px;
                        position: relative;
                        line-height: 40px;
                    }

                    .article_home_text .summary {
                        text-align: left;
                        margin: 0 0 0 0px;
                        font-size: 18px;
                        line-height: 24px;
                        font-weight: 100;
                        width: auto;
                    }

                    .article_home_text .date_p {
                        text-align: left;
                        font-size: 15px;
                        position: relative;
                        top: 1px;
                        margin-bottom: 0;
                        line-height: 16px;
                    }

                    #cleaning-lab-section .article-home-img-large {
                        display: block !important;
                        box-shadow: #07b78e 2px 1px 4px 0px;
                        border-radius: 7px;
                    }

                    #cleaning-lab-section .article-home-img-large:hover {
                        box-shadow: #65f1d1 2px 1px 4px 0px;
                    }

                    #cleaning-lab-section .article-home-img-small {
                        display: none !important;
                    }

                    @media screen and (max-width: 640px) {
                        #cleaning-lab-section img {
                            margin-bottom: 20px;
                        }

                        #cleaning-lab-section .article-home-img-large {
                            display: none !important;
                        }

                        #cleaning-lab-section .article-home-img-small {
                            display: block !important;
                        }

                        #cleaning-lab-section img {
                            max-width: 100%;
                            height: 105px;
                        }

                        .article_home_img,
                        .article_home_text {
                            float: none;
                            width: 100%;
                            padding-left: 0px;
                        }

                        .article_home_text h2 {
                            line-height: 30px !important;
                        }

                        .article_home_text .summary {
                            font-size: 16px;
                            line-height: 20px;
                        }

                        .article_home_text .date_p {
                            font-size: 14px;
                        }
                    }
                </style>
                <!-- End of Section -->

            </div>
        </section>


        <div class="closing-cta-section clear">
            <h2 class="white large" style="text-align:center; margin-bottom:20px;">Ready for more ‘you’ time?</h2>
            <div class="action-bar" style="max-width: 600px">
                <form method="get" action="{{--{{ route('home') }}/order-page--}}">
                    <div class="input-group ">
                        <div class="mc-select" style="border: 0; border-radius: 5px 0 0 5px !important;">
                            <select id="homepage_service_2" class="homepage_schedule" name="service"
                                    style="background-color:#3d77ea; color: #FFF; border-radius: 5px 0 0 5px !important;">
                                <option value="wash">Wash &amp; Fold</option>
                                <option value="dryclean">Dry Cleaning</option>
                                <option value="homeclean">Home Cleaning</option>
                            </select>
                        </div>
                        <span class="meta-time select-time" style="color:#FFF; font-weight:100;">service</span>
                    </div>

                    <div class="input-group input-group-submit">
                        <button class="homepage_schedule"
                                style="border-radius: 0 5px 5px 0 !important; padding-top:0px; background-color:#ffffff; color:#16374b;">
                            Order
                            <b style="font-size:20px;">Today</b></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- UNIVERSE -->
@endsection
