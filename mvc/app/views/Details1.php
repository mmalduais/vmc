<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>librrary</title>
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="css/details1.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Cairo:wght@200&family=Fruktur&family=Griffy&family=Lobster&family=Lobster+Two&family=Luxurious+Roman&family=Mochiy+Pop+One&family=Open+Sans:wght@300&family=Work+Sans:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;1,300&display=swap"
        rel="stylesheet">

</head>

<body dir="rtl">
    <header>
        <!-- <div class="container"> -->
        <nav>

            <ul>
                <i class="fas fa-bars toggle"></i>
                <li class="head" id="openForm">
                    <i class="fas fa-user"></i>
                    <label>ادخل لحسابك أو سجل الآن</label>
                </li>
                <li class="head">
                    <i class="fas fa-star"></i>
                    <label> المفضلة</label>
                <li>
                <li class="head">
                    <i class="fas fa-caravan"></i>
                    <label>تتبع الشحنه</label>
                </li>
                <li class="head">

                    <i class="fas fa-star"></i>
                    <label> طلبات الصيانه</label>
                </li>
                <li class="head">
                    <i class="fas fa-info-circle" style=""></i>
                    <label>المساعدة</label>
                </li>
                <li class="head">
                    <i class="fas fa-shield-alt"></i>
                    <label>سياسة الخصوصيه</label>
                </li>
                <li class="head">
                    <i class="fas fa-language"></i>
                    <label> اليمن</label>
                </li>
                <li class="head">
                    <i class="fas fa-language"></i>
                    <label>English</label>
                </li>

            </ul>

        </nav>

        <!-- </div> -->

    </header>
    <!--------------------Starts Search-------------------->

    <div class="serch">
        <div class="container">
            <div class="icon">

                <img src="image/اogo.PNG">
                <form>
                    <input class="main-input" type="search" placeholder="البحث" rirc>
                    <i class="fas fa-search"></i>
                </form>
                <!-- <i class="fas fa-search"></i> -->
                <div class="image-trash">
                    <a href="checkout.html"><img src="image/trash.PNG"></a>
                </div>
                <!-- <i class="fas fa-trash " style="background-color: #eeeeee; border-radius: 50%; width: 4%; height: 40px; position: relative;"></i>
                -->
            </div>
        </div>
    </div>
    <!--------------------End Search----------------------------------->



    <!--------------------modelogin-------------Layout-->

    <!--------------------modelogin-------------Layout-->


    <!-----------------------Star modelogin-------------------------->
    <div class="overlay hide"></div>

    <div class="contact hide" id="myForm">

        <div class="container">
            <button class="hide-form">Close</button>
            <form style="width: 100%;" action="#" method="post">
                <h2>تسجيل الدخول</h2>

                <input class="main" type="text" name="name" placeholder="البريد الالكتروني او رقم الجوال">
                <input class="main" type="password" name="name" placeholder="كلمة السر">
                <p>نسيت؟</p>

                <input class="main-sub" type="submit" value="تسجيل الدخول">
            </form>
            <div class="info">
                <button class="btn">ليس لدي حساب</button>
                <button> <a href="sing.html">انشاء حساب جديد</a> </button>

            </div>
        </div>
    </div>
    <!------------------End--modelogin------------------------>


    <!-------------------Start slideshow-container---------------->

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="image/img1.jpg" height="300px">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="image/img2.jpg" height="300px">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="image/img3.jpg" height="300px">
            <div class="text">Caption Three</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="image/img4.jpg" height="300px">
            <div class="text">Caption Three</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="image/img5.jpg" height="300px">
            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>


    <!-- End Landing -->
    <!----------Sttart Getgory-->


    <!---------------------------------Start Rataing---------------------------------------------------->



    <!------------Start-Details-------------------------------->
    <div class="detail">

        <ul class="main-nav">
            <li><a href="#">الرئسية/</a></li>
            <li><a href="#">الكتب العربية/</a></li>
            <li><a href="#">كتب الكترونية/</a></li>
            <li><a href="#">لأنك الله(كتاب الكتروني)</a></li>
        </ul>
        <div class="container">

            <div class="buy-det">
                <div class="image">
                    <img src="image/book.PNG">
                </div>
            </div>
            <div class="content">
                <div class="cont-text">
                    <h2>لأنك الله (كتاب الكتروني)</h2>
                    <p style="color: blue;">عرض المزيد</p>
                    <p style="color:red ;">12.99رس</p>
                </div>
                <div class="cont-text2">
                    <h3>وحدة البيع </h3>
                    <h3>( 15 المراجعات)</h3>
                    <h3> رقم المنتج 4 JBB410165 رقم الصنف</h3>
                </div>
                <h4 style="color: #646464;;">الصيغ المتوفرة</h4>
                <div class="style">
                    <div class="style1">
                        <input type="checkbox" name=""> كتاب الكتروني
                        <label style="color: red; font-size: 18px; font-weight: bold; margin: 70px;">12.99 رس</label>
                    </div>
                    <div class="style1">
                        <input type="checkbox" name="">كتاب مطبوع
                        <label style="color: red; font-size: 18px; font-weight: bold; margin: 85px;">17.25رس</label>
                    </div>

                </div>
            </div>
            <div class="add-trash">
                <div class="content">
                    <h2>ملاحظه:سيتم اضافة هذا الكتاب الى مكتبتك في قارئ جرير</h2>
                    <a href="#">اقرا المزيد</a>
                </div>
                <div class="btn">
                    <select class="number-book">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    <!-- <svg style="color: white; font-size:20px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" class="button__icon" width="32"  height="32" ><defs><symbol viewBox="0 0 32 32" id="cart" xmlns="http://www.w3.org/2000/svg"><path d="M1.932 0A1.957 1.957 0 000 1.97c0 1.082.872 1.968 1.935 1.968a1.95 1.95 0 001.633-.924 1.97 1.97 0 00.105-1.882A4.398 4.398 0 016.84 4.645l3.622 20.977a2.917 2.917 0 002.613 2.417 2.462 2.462 0 00-.275 2.574A2.438 2.438 0 0014.975 32a2.438 2.438 0 002.171-1.374 2.462 2.462 0 00-.253-2.567H23.2a2.47 2.47 0 00-.243 2.56 2.446 2.446 0 002.16 1.379 2.438 2.438 0 002.17-1.374 2.462 2.462 0 00-.252-2.565h2.43v-.982H13.316a1.938 1.938 0 01-1.905-1.63l-.654-3.785h15.458c1.56 0 2.924-1.096 3.289-2.642L32 8.418 8.128 6.43 7.79 4.478A5.347 5.347 0 002.557 0h-.625zm10.065 11.429h14.865a.57.57 0 01.568.571.57.57 0 01-.568.571H11.997A.57.57 0 0111.43 12a.57.57 0 01.568-.571zm-11.57 0h6.006c.236 0 .426.256.426.571 0 .315-.19.571-.426.571H.426C.191 12.571 0 12.315 0 12c0-.315.19-.571.426-.571h.002zM14.283 16h10.293a.574.574 0 01.492.857.568.568 0 01-.492.285H14.282a.568.568 0 01-.492-.285.574.574 0 010-.571.568.568 0 01.492-.286zM2.858 16h3.428a.57.57 0 01.569.571.57.57 0 01-.569.571H2.858a.568.568 0 01-.492-.285.574.574 0 010-.571.568.568 0 01.492-.286z"></path></symbol></defs>
                <use xlink:href="#cart" fill="#42526E"></use>
                </svg> -->
                    <button>اضف الئ السلة</button>

                </div>
                <div class="icon">
                    <p>تسوق امن <samp style="margin-right: 50px;">أصلي ومضمون</samp></p>
                    <p> شحن سريع ومجاني</p>
                </div>
                <div class="media mm">
                    <button><img src="image/share.PNG" width="77px"> </button>
                    <button><img src="image/prever.PNG" width="77px"> </button>
                    <button><img src="image/compare.PNG" width="77px"> </button>
                </div>
                <div class="media ">
                    <button><img src="image/share.PNG" width="77px"> </button>
                    <button><img src="image/prever.PNG" width="77px"> </button>
                    <button><img src="image/compare.PNG" width="77px"> </button>
                </div>

            </div>
        </div>


    </div>
    <!----------------------------------->
    <div class="com-det">
        <div class="container">

            <h2>كتاب يتحدث عن اسماء الله الحسنى وكيف نعيشها في حياتنا حرص المؤلف ان يكون الكتاب مناسبا لمن لديهم مستوى
                متوسط من الثقافه ويكون مناسب للمحتاج والمريض والسليم</h2>
            <h1>المواصفات</h1>
            <p>رقم الصنف <span style="margin-right: 50px;">JBB44146</span> </p>

            <p>رقم المنتج <span style="margin-right: 50px;">7</span> </p>

            <p>المؤلف <span style="margin-right: 50px;"> علي الجابري </span></p>

            <p>الناشر <span style="margin-right: 50px;">دار الحضارة لنشر والتوزيع </span> </p>

            <p>صيغة الكتاب <span style="margin-right: 50px;">2016</span> </p>


            <p>عدد الصفحات <span style="margin-right: 50px;">Ebook</span> </p>

            <p>صيغة الملف <span style="margin-right: 50px;"></span> </p>

            <p>اللغه <span style="margin-right: 80px;">عربي</span> </p>
        </div>

    </div>
    <!----------------------------------->
    <div class="rev">
        <div class="container">
            <p> مراجعات العملاء<button>اكتب مراجعتك +</button></p>

            <form action="#">

                <input type="text" placeholder="من قبل reem">
                <p id="for">good</p>
                <input type="text" placeholder="من مثل خالد ابو حميدة">
                <p id="for">جميل جدا</p>
                <input type="text" placeholder="من قبل بابيل">
                <p id="for">جميل جدا ومفيد</p>
            </form>
            <a href="#">لأضافة العديد من المراجع</a>
            <hr>

        </div>
    </div>
    <h2 id="mon">منتجات مشابهة</h2>
    <div class="boxx">
        <div class="image">
            <img src="image/كتاب الصلاة.PNG">
            <p>الصلاة وحكم تاركها</p>
            <h2>15رس</h2>

        </div>
        <div class="image">
            <img src="image/كتاب الصلاة.PNG">
            <p>الله</p>
            <h2>15رس</h2>

        </div>
        <div class="image">
            <img src="image/كتاب الصلاة.PNG">
            <p>علامات القيامة الكبرى</p>
            <h2>15رس</h2>

        </div>
        <div class="image">
            <img src="image/كتاب الصلاة.PNG">
            <p>بدا العد التنازلي</p>
            <h2>15رس</h2>

        </div>
        <div class="image">
            <img src="image/كتاب الصلاة.PNG">
            <p>ضع الامة وهزيمتها</p>
            <h2>15رس</h2>

        </div>
        <div class="image">
            <img src="image/كتاب الصلاة.PNG">
            <p>جهنم الصغرى</p>
            <h2>15رس</h2>

        </div>
    </div>




    <!---------------Start Footer--------------------------------Start fotter-------------------------------------------------------------->
    <footer>
        <div class="container">
            <div class="box">
                <ul>
                    <li><a href="#" class="active">انضم إلى نشرتنا البريدية</a></li>
                </ul>
                <div class="card">
                    <form method="" action="#">
                        <input type="email" placeholder="اكتب البريد الالكتروني">

                    </form>

                    <button>اشتراك</button>
                </div>


                <h2 id="imm">تواصل معنا</h2>
                <div class="info">


                    <img src="image/svgexport-58.svg" alt="">
                    <img src="image/svgexport-59.svg" alt="">
                    <img src="image/svgexport-60.svg" alt="">
                    <img src="image/svgexport-61.svg" alt="">
                    <img src="image/svgexport-62.svg" alt="">
                    <img src="image/svgexport-63.svg" alt="">
                    <img src="image/svgexport-64.svg" alt="">



                </div>

            </div>
            <div class="box">
                <ul>
                    <li><a href="#" class="active">خدمة العملاء</a></li>
                    <li><a href="#">مبيعات الشركات </a></li>

                    <li><a href="#">الأسئلة المتكررة</a></li>
                    <li><a href="#">دليل التسوق والمطبوعات</a></li>
                    <li><a href="#">خدمة الحماية الشاملة</a></li>
                    <li><a href="#">مواقع المعارض</a></li>
                    <li><a href="#">سياسة الضمان</a></li>
                    <li><a href="#">سياسة الاسترجاع والاستبدال</a></li>
                    <li><a href="#"></a>اتصل بنا</li>
                    <li><a href="#"></a>920000089</li>

                </ul>
            </div>
            <div class="box">
                <ul>
                    <li><a href="#" class="active">روابط سريعة</a></li>
                    <li><a href="#">إصدارات جرير</a></li>
                    <li><a href="#" قارئ جرير></a></li>
                    <li><a href="#">شركاء برامج المكافئات</a></li>
                    <li><a href="#">خدمات شركات الإتصالات</a></li>

                </ul>
            </div>

            <div class="box">
                <ul>
                    <li><a href="#" class="active">خدمات جرير</a></li>
                    <li><a href="#">تذاكر جرير</a></li>

                    <li><a href="#">خدمة تقسيط المشتريات</a></li>
                    <li><a href="#">خدمات ما بعد البيع</a></li>
                    <li><a href="#">خدمة الحماية الشاملة</a></li>
                    <li><a href="#">خدمة تمديد الضمان</a></li>
                    <li><a href="#">حماية أجهزة آبل</a></li>
                    <li><a href="#">بطاقة خصم جرير</a></li>
                    <li><a href="#">بطاقة جرير للهدايا</a></li>

                </ul>
            </div>

            <div class="box">
                <ul>
                    <li><a href="# " class="active">عن جرير</a></li>
                    <li><a href="#">من نحن</a></li>
                    <li><a href="#" الحوكمة></a></li>
                    <li><a href="#">علاقات المستثمرين والتقارير</a></li>
                    <li><a href="#">الاستدامة</a></li>
                    <li><a href="#">الأخبار</a></li>
                    <li><a href="#">فرص العمل</a></li>

                </ul>
            </div>
        </div>

        ----------------------------------------
        <!-- </footer> -->


        <div class="info">
            <div class="container">

                <div class="icon">
                    <div><svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                            class="payment__image" width="100px" height="265.5">
                            <defs>
                                <symbol viewBox="0 0 796.2 265.5" id="mada" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#84B740" d="M0 153.1h336.8v112.2H0z"></path>
                                    <path fill="#259BD6" d="M0 0h336.8v112.3H0z"></path>
                                    <path fill="#27292D"
                                        d="M673.6 242.5l-1.5.3c-5.2 1-7.1 1.4-10.9 1.4-8.8 0-19.2-4.5-19.2-25.7 0-10.9 1.8-25.4 18.2-25.4h.1c2.8.2 6 .5 12 2.3l1.3.4v46.7zm2.7-105.7l-2.7.5v39.2l-2.4-.7-.7-.2c-2.7-.8-8.9-2.6-14.9-2.6-32.8 0-39.7 24.8-39.7 45.6 0 28.5 16 44.9 43.9 44.9 11.8 0 20.5-1.2 29.3-4.1 8.1-2.6 11-6.3 11-14.2V132.7c-7.8 1.4-15.9 2.8-23.8 4.1m94.8 106.4l-1.4.4-5 1.3c-4.7 1.2-8.9 1.9-12.1 1.9-7.7 0-12.3-3.8-12.3-10.3 0-4.2 1.9-11.3 14.5-11.3h16.3v18zm-11.5-70.7c-10.1 0-20.5 1.8-33.4 5.8l-8.4 2.5 2.8 19 8.2-2.7c8.6-2.8 19.3-4.6 27.3-4.6 3.6 0 14.6 0 14.6 11.9v5.2h-15.3c-27.9 0-40.8 8.9-40.8 28 0 16.3 11.9 26.1 31.9 26.1 6.2 0 14.8-1.2 22.2-3l.4-.1.4.1 2.5.4c7.8 1.4 15.9 2.8 23.8 4.3V203c0-20.2-12.2-30.5-36.2-30.5m-182.8 70.7l-1.4.4-5 1.3c-4.7 1.2-8.8 1.9-12.1 1.9-7.7 0-12.3-3.8-12.3-10.3 0-4.2 1.9-11.3 14.4-11.3h16.3l.1 18zm-11.4-70.7c-10.2 0-20.5 1.8-33.4 5.8l-8.4 2.5 2.8 19 8.2-2.7c8.6-2.8 19.3-4.6 27.3-4.6 3.6 0 14.6 0 14.6 11.9v5.2h-15.3c-27.9 0-40.9 8.9-40.9 28 0 16.3 11.9 26.1 32 26.1 6.2 0 14.8-1.2 22.2-3l.4-.1.4.1 2.4.4c7.9 1.4 15.9 2.8 23.8 4.4v-62.4c.1-20.4-12.1-30.6-36.1-30.6m-93.9.2c-12.7 0-23.2 4.2-27.1 6l-1 .5-.9-.7c-5.4-3.9-13.3-5.9-24.3-5.9-9.7 0-18.8 1.4-28.7 4.3-8.5 2.6-11.8 6.7-11.8 14.4v71.3h26.6v-65.9l1.3-.4c5.4-1.8 8.6-2.1 11.7-2.1 7.7 0 11.6 4.1 11.6 12.1v56.4h26.2v-57.5c0-3.4-.7-5.4-.8-5.8l-.9-1.7 1.8-.8c4-1.8 8.4-2.7 13-2.7 5.3 0 11.6 2.1 11.6 12.1v56.4h26.1v-59c0-20.9-11.2-31-34.4-31m280-99.5c-3.9 0-10.4-.4-15.5-1.4l-1.5-.3V33c0-3.2-.6-5.2-.7-5.5l-.8-1.6 1.7-.7c.4-.2.8-.3 1.3-.5l.3-.2 1.8-.6c.3-.1.5-.2.7-.2 5.9-1.6 11.3-1.4 13.7-1.6h.1c16.3 0 18.2 14.5 18.2 25.4-.1 21.2-10.6 25.7-19.3 25.7M751.4 0h-.7c-15.3 0-31 4.2-36.6 12.4-3 4-4.7 9-4.8 14.9V67c0 3.4-.7 4.7-.8 5l-.9 1.7h-48.3V46.1h-.1C658.6 17 641.4 1 616.5 1h-24.3c-1 7.1-1.8 12.1-2.8 19.2h24.2c12.7 0 19.4 10.8 19.4 27.4v27.8l-1.7-.9c-.3-.1-2.4-.8-5.7-.8h-41.8c-.8 5.3-1.8 12.2-2.9 19.1h128.5c4.4-.9 9.5-1.7 13.9-2.4 6.5 3.2 18.6 4.9 26.9 4.9 27.9 0 46-18.7 46-47.5C796.1 19.3 778.6.6 751.4 0M526.1 104.5h1.2c27.9 0 40.9-9.2 40.9-31.9 0-16.3-11.9-29.3-31.9-29.3h-25.7c-7.7 0-12.3-4.4-12.3-11.8 0-5 1.9-11.2 14.5-11.2H569c1.2-7.3 1.8-11.9 2.9-19.2h-58.4c-27.2 0-40.9 11.4-40.9 30.4 0 18.8 11.9 28.6 31.9 28.6h25.7c7.7 0 12.3 6.1 12.3 12.5 0 4.2-1.9 12.9-14.4 12.9h-4.3l-82.3-.2h-15c-12.7 0-21.6-7.2-21.6-23.9V49.9c0-17.4 6.9-28.2 21.6-28.2h24.4c1.1-7.4 1.8-12.1 2.8-19.1h-33.3c-24.9 0-42.1 16.7-42.7 45.8v13c.6 29.1 17.8 43 42.7 43h24.3l44.6.1h36.8z">
                                    </path>
                                </symbol>
                            </defs>
                            <use xlink:href="#mada">
                            </use>
                        </svg>
                    </div>
                    <div>
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                            class="payment__image" width="100px" height="265.5">
                            <defs>
                                <symbol viewBox="0 0 796.2 265.5" id="mada" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#84B740" d="M0 153.1h336.8v112.2H0z"></path>
                                    <path fill="#259BD6" d="M0 0h336.8v112.3H0z"></path>
                                    <path fill="#27292D"
                                        d="M673.6 242.5l-1.5.3c-5.2 1-7.1 1.4-10.9 1.4-8.8 0-19.2-4.5-19.2-25.7 0-10.9 1.8-25.4 18.2-25.4h.1c2.8.2 6 .5 12 2.3l1.3.4v46.7zm2.7-105.7l-2.7.5v39.2l-2.4-.7-.7-.2c-2.7-.8-8.9-2.6-14.9-2.6-32.8 0-39.7 24.8-39.7 45.6 0 28.5 16 44.9 43.9 44.9 11.8 0 20.5-1.2 29.3-4.1 8.1-2.6 11-6.3 11-14.2V132.7c-7.8 1.4-15.9 2.8-23.8 4.1m94.8 106.4l-1.4.4-5 1.3c-4.7 1.2-8.9 1.9-12.1 1.9-7.7 0-12.3-3.8-12.3-10.3 0-4.2 1.9-11.3 14.5-11.3h16.3v18zm-11.5-70.7c-10.1 0-20.5 1.8-33.4 5.8l-8.4 2.5 2.8 19 8.2-2.7c8.6-2.8 19.3-4.6 27.3-4.6 3.6 0 14.6 0 14.6 11.9v5.2h-15.3c-27.9 0-40.8 8.9-40.8 28 0 16.3 11.9 26.1 31.9 26.1 6.2 0 14.8-1.2 22.2-3l.4-.1.4.1 2.5.4c7.8 1.4 15.9 2.8 23.8 4.3V203c0-20.2-12.2-30.5-36.2-30.5m-182.8 70.7l-1.4.4-5 1.3c-4.7 1.2-8.8 1.9-12.1 1.9-7.7 0-12.3-3.8-12.3-10.3 0-4.2 1.9-11.3 14.4-11.3h16.3l.1 18zm-11.4-70.7c-10.2 0-20.5 1.8-33.4 5.8l-8.4 2.5 2.8 19 8.2-2.7c8.6-2.8 19.3-4.6 27.3-4.6 3.6 0 14.6 0 14.6 11.9v5.2h-15.3c-27.9 0-40.9 8.9-40.9 28 0 16.3 11.9 26.1 32 26.1 6.2 0 14.8-1.2 22.2-3l.4-.1.4.1 2.4.4c7.9 1.4 15.9 2.8 23.8 4.4v-62.4c.1-20.4-12.1-30.6-36.1-30.6m-93.9.2c-12.7 0-23.2 4.2-27.1 6l-1 .5-.9-.7c-5.4-3.9-13.3-5.9-24.3-5.9-9.7 0-18.8 1.4-28.7 4.3-8.5 2.6-11.8 6.7-11.8 14.4v71.3h26.6v-65.9l1.3-.4c5.4-1.8 8.6-2.1 11.7-2.1 7.7 0 11.6 4.1 11.6 12.1v56.4h26.2v-57.5c0-3.4-.7-5.4-.8-5.8l-.9-1.7 1.8-.8c4-1.8 8.4-2.7 13-2.7 5.3 0 11.6 2.1 11.6 12.1v56.4h26.1v-59c0-20.9-11.2-31-34.4-31m280-99.5c-3.9 0-10.4-.4-15.5-1.4l-1.5-.3V33c0-3.2-.6-5.2-.7-5.5l-.8-1.6 1.7-.7c.4-.2.8-.3 1.3-.5l.3-.2 1.8-.6c.3-.1.5-.2.7-.2 5.9-1.6 11.3-1.4 13.7-1.6h.1c16.3 0 18.2 14.5 18.2 25.4-.1 21.2-10.6 25.7-19.3 25.7M751.4 0h-.7c-15.3 0-31 4.2-36.6 12.4-3 4-4.7 9-4.8 14.9V67c0 3.4-.7 4.7-.8 5l-.9 1.7h-48.3V46.1h-.1C658.6 17 641.4 1 616.5 1h-24.3c-1 7.1-1.8 12.1-2.8 19.2h24.2c12.7 0 19.4 10.8 19.4 27.4v27.8l-1.7-.9c-.3-.1-2.4-.8-5.7-.8h-41.8c-.8 5.3-1.8 12.2-2.9 19.1h128.5c4.4-.9 9.5-1.7 13.9-2.4 6.5 3.2 18.6 4.9 26.9 4.9 27.9 0 46-18.7 46-47.5C796.1 19.3 778.6.6 751.4 0M526.1 104.5h1.2c27.9 0 40.9-9.2 40.9-31.9 0-16.3-11.9-29.3-31.9-29.3h-25.7c-7.7 0-12.3-4.4-12.3-11.8 0-5 1.9-11.2 14.5-11.2H569c1.2-7.3 1.8-11.9 2.9-19.2h-58.4c-27.2 0-40.9 11.4-40.9 30.4 0 18.8 11.9 28.6 31.9 28.6h25.7c7.7 0 12.3 6.1 12.3 12.5 0 4.2-1.9 12.9-14.4 12.9h-4.3l-82.3-.2h-15c-12.7 0-21.6-7.2-21.6-23.9V49.9c0-17.4 6.9-28.2 21.6-28.2h24.4c1.1-7.4 1.8-12.1 2.8-19.1h-33.3c-24.9 0-42.1 16.7-42.7 45.8v13c.6 29.1 17.8 43 42.7 43h24.3l44.6.1h36.8z">
                                    </path>
                                </symbol>
                            </defs>
                            <use xlink:href="#mada">
                            </use>
                        </svg>
                    </div>
                    <div>
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                            class="payment__image" width="100px" height="265.5">
                            <defs>
                                <symbol viewBox="0 0 100.5 60" id="pay-at-showroom" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#FFFFFF"
                                        d="M94.5 60H5.9C2.7 60 0 57.3 0 54.1V5.9C0 2.7 2.7 0 5.9 0h88.6c3.3 0 5.9 2.7 5.9 5.9V54c.1 3.3-2.6 6-5.9 6z">
                                    </path>
                                    <g fill="#D4070E">
                                        <path d="M13.9 30.5h2.4v7.6s-5.9 1.3-8.9-4.6h2.8s1.3 1.9 3.7 2.1v-5.1z"
                                            fill="#D4070E"></path>
                                        <path
                                            d="M8.1 24.5h3.2s4.1-3.4 8.1.7H7.5s-2.1 3.3-.5 7.6h2.6s-1.6-2.9-.5-5.1h14.3s-1-6.3-7.8-6.8c-.1 0-5.3-.4-7.5 3.6zm9 11V38s5.5-1 6.6-7.6h-2.4c-.1 0-.5 3.8-4.2 5.1z"
                                            fill="#D4070E"></path>
                                        <circle cx="15" cy="29.1" r="1.3" fill="#D4070E"></circle>
                                    </g>
                                    <path
                                        d="M31.7 22c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.8 0 .3.1.6.3.8.2.2.4.3.7.3.3 0 .5-.1.7-.3s.3-.4.3-.8c0-.3-.1-.6-.3-.8-.2-.2-.4-.3-.7-.3zm2.4 0c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.8 0 .3.1.6.3.8.2.2.4.3.7.3.3 0 .5-.1.7-.3.2-.2.3-.4.3-.8 0-.3-.1-.6-.3-.8-.1-.2-.4-.3-.7-.3zm7.1-5h8.2V9.8h-2.6c-1.3 0-2.4.3-3.1 1s-1.1 1.5-1.1 2.6c0 .7.2 1.4.7 1.9h-2c-.3 0-.6-.1-.9-.3-.3-.2-.6-.6-1.1-1.2-.6-.8-1-1.3-1.2-1.6s-.5-.4-.8-.5c-.3-.1-.6-.2-.9-.2-.5 0-1.1.2-1.7.6-.6.4-1.1.9-1.4 1.4-.3.5-.5 1-.5 1.5 0 .6.2 1.1.5 1.4.3.3.9.6 1.7.8.4.1.6.2.8.3.2.1.2.3.2.4 0 .3-.1.5-.4.6-.3.1-.8.2-1.6.2h-2.5c-.3 0-.6-.1-.8-.3-.3-.2-.5-.4-.7-.7-.2-.3-.2-.6-.2-.9 0-.5 0-1 .1-1.4s.1-.7.2-1.1h-1.9c-.3.9-.5 1.9-.5 2.8 0 .6.1 1.2.4 1.7.2.5.6.9 1.1 1.2.5.3 1 .4 1.5.4H34c1.4 0 2.5-.2 3.1-.7s1-1.1 1-2c0-.4-.1-.7-.2-1-.1-.3-.4-.5-.7-.7-.3-.2-.8-.4-1.4-.6-.4-.1-.6-.3-.8-.4-.2-.1-.3-.3-.3-.5s.1-.3.2-.5.4-.4.6-.6c.2-.2.4-.2.6-.2.2 0 .5.1.7.3.3.2.6.6 1.1 1.3.4.5.6.9.7 1 .4.4.8.7 1.1.8.6.3 1.1.4 1.5.4zm4.2-5c.4-.3.9-.5 1.5-.5h.4v3.7h-.4c-.7 0-1.2-.2-1.5-.5-.3-.3-.5-.8-.5-1.3 0-.6.1-1 .5-1.4zm1.3-3.5c.3 0 .5-.1.7-.3s.3-.4.3-.8c0-.3-.1-.6-.3-.8-.2-.2-.4-.3-.7-.3-.3 0-.5.1-.7.3-.2.2-.3.4-.3.8 0 .3.1.6.3.8.2.2.4.3.7.3zm14.7 13.2c.4-.1.9-.2 1.5-.4l-.2-1.6c-.8.2-1.5.3-2.1.3-.5 0-.9-.1-1.2-.3s-.4-.5-.4-1c0-.4.1-.9.4-1.3s.7-.8 1.3-1.3c.4.3.9.5 1.4.6.5.1.9.2 1.3.2h1.7-.1 8.1V9.8h-2.6c-1.3 0-2.4.3-3.1 1s-1.1 1.5-1.1 2.6c0 .7.2 1.4.7 1.9h-3.6c-.5 0-.9-.1-1.3-.2.8-.6 1.4-1.4 1.8-2.2.4-.9.6-1.8.6-2.8-1.1-.6-2.3-.9-3.7-.9-.7 0-1.4.1-2.1.4-.7.3-1.4.6-2 1.1.1.8.4 1.6.8 2.4s1 1.5 1.6 2.1c-.8.6-1.4 1.2-1.8 1.8-.4.6-.6 1.2-.6 1.9 0 .9.3 1.6.9 2.1.6.5 1.4.8 2.4.8.5 0 1-.1 1.4-.1zM69 12c.4-.3.9-.5 1.5-.5h.5v3.7h-.4c-.7 0-1.2-.2-1.5-.5-.3-.3-.5-.8-.5-1.3-.1-.6.1-1 .4-1.4zm-10.2-.5c.2-.1.5-.3.8-.4.4-.1.7-.2 1-.2.3 0 .6 0 .9.1.3 0 .5.1.8.2 0 .6-.2 1.2-.6 1.7-.3.5-.7 1-1.2 1.4-.8-.9-1.4-1.8-1.7-2.8zm11.6-3c.3 0 .5-.1.7-.3.2-.2.3-.4.3-.8 0-.3-.1-.6-.3-.8s-.4-.3-.7-.3c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.8 0 .3.1.6.3.8s.4.3.7.3zm15.3 6.8h-3.6c-.4-1.8-.9-3.2-1.7-4.3s-1.8-1.9-3.1-2.4l-.8 2c.6.3 1.2.6 1.6 1 .4.4.8.9 1.1 1.4.3.6.5 1.3.7 2.2H75V17h12.8V5.9h-2.2v9.4zm5.1-9.4H93V17h-2.2zm-37.5 20c.3 0 .5-.1.7-.3.2-.2.3-.4.3-.8 0-.3-.1-.6-.3-.8-.2-.2-.4-.3-.7-.3-.3 0-.6.1-.7.3-.2.2-.3.4-.3.8 0 .3.1.6.3.8s.4.3.7.3zm.6 1.1c-1.7 0-3.1.9-4 2.7v-2.6h-2.2v6.7c0 .7-.2 1.3-.5 1.7s-.9.6-1.7.6h-.4c-.6 0-1.1-.2-1.4-.6-.4-.4-.5-1-.5-1.7 0-.5 0-1 .1-1.6.1-.6.2-1.1.4-1.6h-1.9c-.2.5-.4 1-.5 1.5-.1.6-.2 1.1-.2 1.7 0 .8.2 1.5.5 2.1.3.6.8 1.1 1.4 1.4.6.3 1.3.5 2.1.5h.6c1.3 0 2.4-.3 3.1-.9s1.1-1.5 1.2-2.6h7.6v-3.5c0-1.3-.3-2.3-.9-2.9-.7-.6-1.6-.9-2.8-.9zm1.4 5.6h-5.4v-1.1c1-1.8 2.1-2.7 3.4-2.7.7 0 1.2.2 1.5.5.3.3.5.9.5 1.6v1.7zm30.4 0h-1.8c-.3 0-.6 0-.9-.1-.2-.1-.4-.2-.6-.4.2-.5.3-1 .3-1.5 0-.7-.2-1.3-.4-1.8-.3-.5-.7-.9-1.3-1.2-.5-.3-1.1-.4-1.8-.4-.4 0-.9.1-1.4.2-.5.1-1 .3-1.5.6-.2.4-.4.8-.5 1.3-.1.5-.2.9-.2 1.4 0 .7.1 1.4.4 2h-3.1c-.5 0-1-.1-1.3-.3.7-.5 1.3-1.1 1.7-2s.6-1.8.6-2.9c-1-.6-2.3-.9-3.7-.9-.7 0-1.4.1-2.1.4-.7.3-1.4.6-2 1.1.1.5.2 1.1.5 1.6s.5 1.1.8 1.6c.3.5.6.8.9 1.1-.2.1-.4.1-.6.2-.3.1-.5.1-.7.1h-3.2v-5.5h-2.2v7.4c0 .5-.1.8-.4 1.1-.2.3-.6.4-.9.4-.3 0-.5 0-.7-.1-.2-.1-.4-.2-.7-.3l-.9 1.4c.5.3.9.5 1.3.6s.9.2 1.4.2c.9 0 1.7-.3 2.2-.9.6-.6.8-1.4.8-2.4v-.2h3.4c.9 0 1.8-.3 2.7-.8.4.2.8.4 1.3.6s1 .2 1.4.2h6.1c.5 0 1-.1 1.5-.2.5-.2.9-.4 1.3-.7.3.4.7.6 1.1.8.4.1.8.2 1.3.2h4V23.3h-2.2v9.3zm-15.8-1.1c-.4-.3-.7-.6-1-1.1-.3-.5-.5-1-.7-1.5.2-.2.5-.3.9-.4s.7-.2 1-.2c.7 0 1.2.1 1.6.3 0 1.2-.6 2.2-1.8 2.9zM80 32c-.4.4-.9.6-1.5.6H78c-.2-.6-.3-1.2-.3-1.7 0-.6.1-1.1.2-1.6.5-.3.9-.4 1.4-.4.4 0 .8.2 1 .5.3.3.4.7.4 1.2-.1.6-.3 1.1-.7 1.4zm10.8-8.7H93v11.1h-2.2zM13.1 48.5h-2v6.8h1.5v-2.4h.5c.6 0 1.1-.1 1.4-.3.4-.2.6-.5.8-.8.2-.3.3-.7.3-1.2 0-.7-.2-1.2-.6-1.6-.4-.3-1-.5-1.9-.5zm.7 3c-.2.2-.5.3-.9.3h-.3v-2.1h.4c.7 0 1 .3 1 1 .1.3 0 .6-.2.8zm3.9-3l-2.1 6.8h1.6l.4-1.6h2l.4 1.6h1.6l-2.1-6.8h-1.8zm.2 4l.7-3 .7 3h-1.4zm6.1-1.2l-1.1-2.8h-1.6l2 4.2v2.6h1.5v-2.6l2-4.2h-1.6zm10.9-2.4c-.5-.3-1.1-.4-1.8-.4-.8 0-1.4.2-2 .5-.6.3-1 .8-1.3 1.4s-.5 1.3-.5 2.1c0 1.1.3 2 .9 2.6.6.6 1.5.9 2.7.9.4 0 .7 0 1.1-.1.3-.1.7-.2 1-.3v-.9c-.3.1-.7.2-1 .3-.4.1-.7.1-1 .1-.9 0-1.5-.2-1.9-.8-.4-.5-.6-1.2-.6-2 0-.6.1-1.1.3-1.6.2-.5.5-.9.9-1.2s.9-.4 1.5-.4c.5 0 .9.1 1.3.3.4.2.6.5.8.9s.3.8.3 1.4c0 1.1-.2 1.6-.6 1.6-.1 0-.2 0-.3-.1s-.1-.2-.1-.4v-.5l.1-2c-.2-.1-.4-.1-.7-.2-.3 0-.5-.1-.8-.1-.6 0-1.1.2-1.5.6-.4.4-.5.9-.5 1.6 0 .6.1 1 .4 1.3.3.3.7.5 1.1.5.3 0 .5-.1.7-.2s.3-.3.5-.5h.1c.1.2.2.4.4.5.2.1.4.2.7.2.3 0 .6-.1.9-.3.2-.2.4-.5.6-.9.1-.4.2-.8.2-1.2 0-.7-.1-1.3-.4-1.8-.6-.3-1-.7-1.5-.9zM33.5 52c0 .5-.1.9-.2 1.1-.1.2-.3.3-.5.3s-.3-.1-.4-.2c-.1-.2-.2-.4-.2-.8s.1-.8.2-1 .4-.4.7-.4h.4v1zm8.7-.6c-.3-.1-.5-.3-.7-.4-.2-.1-.3-.2-.4-.3-.1-.1-.1-.3-.1-.4 0-.2.1-.4.2-.5.1-.1.3-.2.6-.2.2 0 .4 0 .7.1.2.1.5.2.8.3l.4-1.2-.9-.3c-.3-.1-.6-.1-1-.1-.7 0-1.3.2-1.7.5-.4.4-.6.8-.6 1.4 0 .4.1.7.2.9.1.2.3.5.6.6.2.2.5.3.8.5.4.2.7.4.9.6.2.2.3.3.3.6 0 .2-.1.4-.2.5-.1.1-.4.2-.7.2-.3 0-.6 0-.9-.1s-.6-.2-.9-.4V55l.9.3c.3.1.6.1 1 .1.5 0 .9-.1 1.3-.3.4-.2.6-.4.8-.7.2-.3.3-.7.3-1.1 0-.5-.1-.9-.4-1.2-.4-.2-.8-.5-1.3-.7zm6.3-.2h-2.2v-2.7h-1.5v6.8h1.5v-3h2.2v3H50v-6.8h-1.5zm7.3-2.4c-.4-.3-1-.4-1.6-.4-1 0-1.7.3-2.2.9-.5.6-.7 1.5-.7 2.6 0 .7.1 1.3.3 1.9.2.5.5.9 1 1.2s1 .4 1.6.4 1.2-.1 1.6-.4c.4-.3.8-.7 1-1.2.2-.5.3-1.2.3-1.9s-.1-1.3-.3-1.9c-.3-.5-.6-.9-1-1.2zm-.6 4.8c-.2.4-.6.6-1 .6-.5 0-.8-.2-1-.6s-.3-1-.3-1.7.1-1.3.3-1.7c.2-.4.6-.6 1.1-.6s.8.2 1 .6c.2.4.3 1 .3 1.8s-.2 1.3-.4 1.6zM64 52c-.1.3-.1.6-.2.9-.1.3-.1.6-.1.9 0-.2-.1-.4-.1-.6s-.1-.4-.1-.7c0-.2-.1-.4-.1-.5l-.8-3.6h-1.3l-.9 3.6c0 .1-.1.3-.1.5s-.1.4-.1.6c0 .2-.1.4-.1.6 0-.2 0-.4-.1-.6 0-.2-.1-.4-.1-.7 0-.2-.1-.4-.1-.6l-.8-3.3h-1.4l1.6 6.8h1.7l.8-3.4c0-.1.1-.3.1-.5s.1-.4.1-.6c0-.2.1-.4.1-.5 0 .3.1.6.1.9.1.3.1.6.1.8l.8 3.3h1.7l1.6-6.8h-1.5L64 52zm7.2-.4c.2-.3.3-.7.3-1.1 0-.7-.2-1.2-.6-1.5-.4-.3-1.1-.5-2-.5H67v6.8h1.5v-2.7h.5l1.4 2.7H72l-1.7-3c.4-.2.7-.4.9-.7zm-2.3 0h-.4v-2h.3c.4 0 .7.1.9.2.2.2.3.4.3.7 0 .7-.4 1.1-1.1 1.1zm8.3-2.8c-.4-.3-1-.4-1.6-.4-1 0-1.7.3-2.2.9-.5.6-.7 1.5-.7 2.6 0 .7.1 1.3.3 1.9.2.5.5.9 1 1.2.4.3 1 .4 1.6.4.7 0 1.2-.1 1.6-.4.4-.3.8-.7 1-1.2.2-.5.3-1.2.3-1.9s-.1-1.3-.3-1.9c-.3-.5-.6-.9-1-1.2zm-.6 4.8c-.2.4-.6.6-1 .6-.5 0-.8-.2-1-.6-.2-.4-.3-1-.3-1.7s.1-1.3.3-1.7c.2-.4.6-.6 1.1-.6.5 0 .8.2 1 .6.2.4.3 1 .3 1.8s-.2 1.3-.4 1.6zm7.4-4.8c-.4-.3-1-.4-1.6-.4-1 0-1.7.3-2.2.9-.5.6-.7 1.5-.7 2.6 0 .7.1 1.3.3 1.9.2.5.5.9 1 1.2.4.3 1 .4 1.6.4.7 0 1.2-.1 1.6-.4.4-.3.8-.7 1-1.2.2-.5.3-1.2.3-1.9s-.1-1.3-.3-1.9c-.2-.5-.6-.9-1-1.2zm-.6 4.8c-.2.4-.6.6-1 .6-.5 0-.8-.2-1-.6-.2-.4-.3-1-.3-1.7s.1-1.3.3-1.7c.2-.4.6-.6 1.1-.6.5 0 .8.2 1 .6.2.4.3 1 .3 1.8s-.2 1.3-.4 1.6zm8.2-5.1l-1.5 4.8-1.5-4.8h-2v6.8H88v-4.2c0-.3 0-.6-.1-.9l1.6 5.1h1.2l1.6-5.1v5.1h1.4v-6.8h-2.1z"
                                        fill="#D4070E"></path>
                                </symbol>
                            </defs>
                            <use xlink:href="#pay-at-showroom">
                            </use>
                        </svg>
                    </div>
                    <div>
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                            class="payment__image" width="100px" height="265.5">
                            <defs>
                                <symbol viewBox="0 0 1572.7 953.4" id="qitaf" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1456.2 622.1l-11.3-11.1-574.1-.4c-315.8 0-578.4-1.1-583.3-2.1-10.9-2.5-12-14-1.5-19.3 5.1-2.5 194.6-3.5 585.7-3.5 542.6 0 578.7.4 591.6 6.4 11.3 5 14 8.2 14.7 18.9.8 8.2-.8 14.2-4.7 17.5-5.1 3.7-7.8 2.5-17.1-6.4zM218.4 606.4c-14.3-7.2-17.5-14.2-17.5-39.6 0-21.4-.8-24.3-6.6-22.5-3.5 1.4-16.4 3.3-28.3 4.7-17.1 1.4-25.6.4-39.6-5.4-27.5-11.1-32.2-20.4-32.2-63.5 0-41 4.3-50.3 29.5-63.9 16.7-8.9 51.3-8.9 81.2.4l21.3 6.8 1.9 77.5c1.9 73.9 2.3 77.5 10.9 85.7 4.7 5 8.5 11.1 8.5 14.2 0 3.3-3.9 6.4-8.5 7.8-11.4 2.4-11.4 2.4-20.6-2.2zm-30-88.5l12.4-7.2v-33.9c0-39.6-1.5-41-37.7-41-33.8.4-43.9 10.7-43.9 44.7 0 20.7 4.3 32.5 15.1 40 9.9 6.7 39.8 5.6 54.1-2.6zm321.3 31.4c-26-8.6-39.6-31.1-32.6-54.2 5.1-17.1 19-23.9 58.6-28.9 18.6-2.1 35.4-5.4 36.5-6.4 1.5-1.1 1.5-6 0-10.7-3.1-12.1-19.8-17.5-51.3-16.1-26.8 1.1-26.8 1.1-27.9-8.6-1.5-12.8 9.8-17.1 45-17.1 29.9 0 50.5 7.5 57.9 21.4 3.1 5.7 5.1 26 5.1 57.9 0 56.4.4 56-38.1 63.2-24.9 4.5-37.8 4.5-53.2-.5zm51.2-24.6c12-3.5 16.4-13.2 13.6-30.3-1.1-6.8-3.1-7.2-23.3-5.7-23 1.4-47.8 10-50.5 17.5-.8 2.5 2.3 7.2 7 10.7 14 11.3 33.8 14.2 53.2 7.8zm-265.6 21.8c-14.7-5.7-18.3-17.1-19.8-68.6-1.9-58.9-.4-67.1 12.8-67.1 14.3 0 17.5 11.4 17.5 62.1 0 42.1.4 43.9 9.8 51.4 12.4 10 12.4 17.9-.4 22.1-5.5 2.1-10.1 3.5-10.5 3.3-.6-.1-4.9-1.5-9.4-3.2zm91.9-2.9c-9.3-3.9-15.1-10-18.3-18.6-5.1-13.6-6.6-117-1.9-141 5.1-26.4 27.9-18.6 27.9 9.7 0 12.8.8 13.6 12.8 13.6 21.7 0 29.9 3.5 29.9 12.8 0 10-10.1 15.7-28.8 15.7h-14v82l10.5 3.9c5.8 1.8 15.1 3.3 20.6 2.5 12.4-1.1 19.4 2.9 19.4 11.4.3 14.8-33.6 19.4-58.1 8zm472.7 1.1c-30.3-9.7-45.4-30.7-45.4-63.5 0-21.4 6.6-32.5 17.9-30.3 6.2 1.1 7.4 4.7 8.5 24.3 1.9 44.9 12 50.7 94.4 51.1 56.7.7 58.2.4 67.6-8.2l9.8-8.9-24.9 1.1c-45.8 2.1-64.5-12.8-64.5-52.1 0-41.8 36.9-59.6 94-44.9l22.6 6v51.1c0 49.2-.4 51.1-10.1 61.8-5.5 6-16.4 12.5-24.1 14.6-21.8 5-127.9 4-145.8-2.1zm150.8-62.5c6.2-4.7 8.1-33.9 2.7-42.1-10.9-15.4-52.8-10.3-62.2 7.5-6.6 12.5-.4 31.7 12 37.5 10.5 4.9 39.3 3.1 47.5-2.9zm89.7 64.3c-16-4.7-28.8-17.1-33.4-31.7-1.9-7.2-3.9-44.7-3.9-83.2v-70.7h9.8c5.5 0 11.3 2.9 13.6 6.8 2.3 4.3 3.9 33.2 3.9 69.6 0 38.2 1.5 66.1 4.3 71.1 5.5 11.1 18.6 17.9 31.1 16.1l9.3-1.1 1.9-80.3 1.9-80.3 10.9-1.1 10.5-1.1v30.7c0 22.9 1.5 31.1 5.5 32.5 3.1 1.1 31.1-2.1 62.5-7.5 63.7-10.3 74.2-9.3 92.1 8.2 16.4 16.1 18.6 23.5 18.6 61v35.9l10.9 2.5c5.8 1.8 26.8 2.5 46.6 2.1 28.3-.4 38.1-1.8 43.9-6.8 11.7-9.7 9.3-11.1-15.5-9.3-27.2 1.8-49-3.9-57.1-15.4-9.8-13.6-11.3-44.7-3.1-60.7 12.8-25.3 57.1-33.6 101.4-18.9l12.8 4.3-.4 44.9c-.4 75.4-7.7 83.2-81.2 84.9-31.8 1.1-49.3 0-60.6-3.9-12-3.5-18.3-3.9-23.3-1.1-9.5 5.3-196.7 7.1-213 2.5zm203.5-30.4c17.5-17.1 14-67.8-5.1-77.1-10.1-5.4-58.2-2.1-103.7 6.4l-33 6.4-1.1 36.7-1.1 36.4h67.6c66.7.1 67.5.1 76.4-8.8zm137.8-31c8.9-3.5 9.8-5.7 9.8-26v-22.5l-17.1-3.9c-12.4-2.9-20.2-2.9-29.2 0-14.3 4.7-19.8 12.5-19.8 29.6 0 22 29.6 34.2 56.3 22.8zm-780.2 48.2c-1.1-7.5-2.3-32.1-2.3-55 0-33.9-1.1-42.1-5.8-43.9-7.4-2.5-7.4-13.2 0-22.1 3.1-3.5 5.8-11.4 5.8-17.5.4-36.1 17.5-51.7 56.3-51.7 26.4 0 34.5 3.3 32.2 12.8-.8 5.4-5.8 7.2-23.3 8.9-28.8 2.9-34.1 7.2-34.1 26.8 0 15.4.4 15.7 12.8 15.7 21.7 0 29.9 3.5 29.9 12.8 0 10-10.1 15.7-28.8 15.7h-14v48.6c0 26.4-1.9 51.4-3.9 55.4-2.3 3.5-8.1 6.8-13.2 6.8-7.4-.1-9.3-2.6-11.6-13.3zm-383-142.1c-5.8-6.4-3.9-16.1 5.1-21 13.2-7.8 28.3 9.7 18.3 21-6.3 6.8-17.2 6.8-23.4 0zm703.8-5c-3.1-1.8-4.7-7.5-3.9-13.2 1.1-8.9 2.7-10.3 12.8-10.3 9.3 0 12 1.8 12.8 8.2 2.4 13.9-9.6 22.4-21.7 15.3zm415.6 0c-3.1-1.8-4.7-7.5-3.9-13.2 1.1-8.9 2.7-10.3 12.8-10.3 9.3 0 12 1.8 12.8 8.2 2.4 13.9-9.7 22.4-21.7 15.3zm35.7.4c-13.6-8.6-5.8-27.2 10.5-25 6.2.7 9.8 3.5 10.5 9.3 2.4 13.5-10.1 22.8-21 15.7z"
                                        fill="#713183"></path>
                                </symbol>
                            </defs>
                            <use xlink:href="#qitaf">
                            </use>
                        </svg>
                    </div>

                </div>

                <div class="content">
                    <h2>سياسة الخصوصية شروط الخدمة</h2>
                    <h2>.جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264. اونلاين س.ت. 1010654213</h2>


                </div>
            </div>
        </div>
    </footer>


    <script src="js/Details.js"></script>
</body>

</html>