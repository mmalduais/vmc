<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>librrary</title>
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="app/assets/css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="app/assets/css/all.min.css" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="app/assets/css/about.css" />
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

                <img src="app/assets/image/اogo.PNG">
                <form>
                    <input class="main-input" type="search" placeholder="البحث" rirc>
                    <i class="fas fa-search"></i>
                </form>
                <!-- <i class="fas fa-search"></i> -->
                <div class="app/assets/image-trash">
                    <div id="conter">0</div>
                    <a href="checkout.html"><img src="app/assets/image/trash.PNG"></a>
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
            <div class="numbertext">1 / 5</div>
            <img src="app/assets/image/img1.jpg" height="300px">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="app/assets/image/img2.jpg" height="300px">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <img src="app/assets/image/img3.jpg" height="300px">
            <div class="text">Caption Three</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="app/assets/image/img4.jpg" height="300px">
            <div class="text">Caption Three</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="app/assets/image/img5.jpg" height="300px">
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


    <div class="types">
        <h2>تصفح حسب القسم</h2>
        <div class="container">

            <div class="card">

                <a href="gategory.html"> <img src="app/assets/image/svgexport-46.svg"></a>
                <p>دين</p>
            </div>
            <div class="card">

                <a href="gategory.html"> <img src="app/assets/image/svgexport-42.svg"></a>
                <p>تاريخ</p>
            </div>
            <div class="card">

                <a href="gategory.html"> <img src="app/assets/image/svgexport-40.svg"></a>
                <p>روايات</p>
            </div>
            <div class="card">

                <a href="gategory.html"><img src="app/assets/image/svgexport-43.svg"></a>
                <p>سياسة</p>
            </div>
            <div class="card">

                <a href="gategory.html"><img src="app/assets/image/svgexport-45.svg"></a>
                <p>اقتصاد</p>
            </div>
            <div class="card">

                <a href="gategory.html"><img src="app/assets/image/svgexport-47.svg"></a>
                <p>طبخ</p>
            </div>
            <div class="card">


                <a href="gategory.html"><img src="app/assets/image/svgexport-48.svg"></a>
                <p>ترفية</p>
            </div>

        </div>
    </div>

    <!---------------------------------Start Rataing---------------------------------------------------->

    <div class=" ads">
        <div class="adver1">
            <div class="adver">
                <img src="app/assets/image/adver5.webp">
            </div>

            <div class="adver">
                <img src="app/assets/image/adver4.webp">
            </div>

            <div class="adver">
                <img src="app/assets/image/adver3.webp">
            </div>
        </div>

        <div class="adver2">
            <div class="adver">
                <img src="app/assets/image/adver2.webp">
            </div>

            <!-- <div class="adver">
            <img src="app/assets/image/adver1.webp" width="200px">
          </div> -->

            <div class="adver">
                <img src="app/assets/image/adver5.webp">
            </div>
        </div>

    </div>

    <!---------------------------------End Rataing---------------------------------------------------->

    <!------------Start-Article-------------------------------->

    <div class="articles">

        <div class="container">
            <!---------------------------------------------------------------------------------->
            <!-- <div class="relegen" id="relegen"> religious (current)--political- hestrical-- economical-----cook-----novel--->
            <h2>العروض الحالية</h2>
            <div class="box1">


                <div class="box current" id="current">


                    <a href="Details1.html"><img src="app/assets/image/book.PNG" alt=""></a>
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p class="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>

                            <div onclick="countCard();">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                    <defs>
                                        <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path
                                                    d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                    id="bga"></path>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                                <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                    transform="translate(7 7)"></use>
                                            </g>
                                        </symbol>
                                    </defs>
                                    <use xlink:href="#cart-circle"></use>
                                </svg>
                            </div>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box current" id="current">
                    <a href="Details1.html"><img src="app/assets/app/assets/image/book2.PNG" alt=""></a>
                    <div class=" content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg   xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box current" id="current">
                    <a href="Details1.html"><img src="app/assets/image/الامبالاة.PNG" alt=""></a>
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p class="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box" id="current">
                    <img src="app/assets/image/magic3.PNG" alt="">
                    <div class="content">
                        <div class="book current">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p class="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box current" id="current">
                    <img src="app/assets/image/marrid7.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p class="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>

            </div>
            <!----End class Box1-->
            <!-- </div> -->

            <!---------------------------------------------------------------------------------->
            <!-- <div class="religious" id="religious"> -->
            <h2> الكتب الدينية</h2>
            <div class="box2">
                <div class="box" id="religious">
                    <img src="app/assets/image/book3.PNG" alt="">
                    <div class="content">
                        <div class="book political">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p class="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box religious" id="religious">
                    <img src="app/assets/image/magic.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p class="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box religious" id="religious">
                    <img src="app/assets/image/magic3.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p class="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box religious" id="religious">
                    <img src="app/assets/image/book2.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p class="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box religious" id="religious">
                    <img src="app/assets/image/marrid7.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
            </div>
            <!------End Box2-->

            <!---------------------------------------------------------------------------------->
            <!-- <div class="hestrical" id="hestrical"> -->
            <h2> الكتب التاريخية</h2>
            <div class="box3">
                <div class="box hestrical" id="hestrical">
                    <img src="app/assets/image/marrid2.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box hestrical" id="hestrical">
                    <img src="app/assets/image/marrid6.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box hestrical" id="hestrical">
                    <img src="app/assets/image/marrid2.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box hestrical" id="hestrical">
                    <img src="app/assets/image/magic3.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box hestrical" id="hestrical">
                    <img src="app/assets/image/marrid2.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
            </div>
            <!-----End-Box3-->

            <!---------------------------------------------------------------------------------->

            <!---------------------------------------------------------------------------------->
            <!-- <div class="economical" id="economical"> -->
            <h2> الكتب السياسية</h2>
            <div class="box4">
                <div class="box political" id="political">
                    <img src="app/assets/image/book2.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box political" id="political">
                    <img src="app/assets/image/marrid7.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box political" id="political">
                    <img src="app/assets/image/magic.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box political" id="political">
                    <img src="app/assets/image/magic2.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box political" id="political">
                    <img src="app/assets/image/marrid4.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
            </div>
            <!-----End-Box4-->

            <!---------------------------------------------------------------------------------->

            <!---------------------------------------------------------------------------------->
            <!-- <div class="economical" id="economical"> -->
            <h2> الكتب الاقتصادية</h2>
            <div class="box5">
                <div class="box economical" id="economical">
                    <img src="app/assets/image/الامبالاة.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box economical" id="economical">
                    <img src="app/assets/image/الله.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box economical" id="economical">
                    <img src="app/assets/image/magic.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box economical" id="economical">
                    <img src="app/assets/image/book1PNG.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box economical" id="economical">
                    <img src="app/assets/image/magic.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
            </div>
            <!-----End-Box5-->

            <!---------------------------------------------------------------------------------->

            <!---------------------------------------------------------------------------------->
            <!-- <div class="cook" id="cook"> -->
            <h2> كتب الطبخ </h2>
            <div class="box6">
                <div class="box cook" id="cook">
                    <img src="app/assets/image/marrid7.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box cook" id="cook">
                    <img src="app/assets/image/marrid2.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box cook" id="cook">
                    <img src="app/assets/image/magic2.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box cook" id="cook">
                    <img src="app/assets/image/marrid6.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box cook" id="cook">
                    <img src="app/assets/image/marrid2.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
            </div>
            <!-----End-Box6-->
            <!---------------------------------------------------------------------------------->

            <!-- <div class="cook" id="cook"> -->
            <h2> كتب الروايات </h2>
            <div class="box7">
                <div class="box novel" id="novel">
                    <img src="app/assets/image/marrid7.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box novel" id="novel">
                    <img src="app/assets/image/marrid2.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box novel" id="novel">
                    <img src="app/assets/image/marrid4.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box novel" id="novel">
                    <img src="app/assets/image/magic3.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
                <div class="box novel" id="novel">
                    <img src="app/assets/image/magic.PNG" alt="">
                    <div class="content">
                        <div class="book">
                            <p> كتاب الكتروني</p>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="book-type__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 13 15" id="ebook" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M.553 1.687h12.098v13.056H.553z" fill="none"></path>
                                            <path
                                                d="M11.52 11.19L7.3 12.935V4.697l4.22-1.744v8.238zm-1.713 2.047c-.224.09-.405-.081-.405-.38 0-.3.181-.615.405-.704.223-.089.405.082.405.381 0 .3-.182.614-.405.703zm-5.544-.712l-.028-1.154c.975-.252 1.033-1.948 1.033-1.948l.657.219c-.209 2.905-1.662 2.883-1.662 2.883zM1.632 9.598l.746.248s.35.999 1.006 1.303l-.058-2.33.649.215.085 3.465s-1.552.056-2.428-2.901zM3.959 8.38c.007.313-.135.513-.314.454-.181-.06-.335-.36-.343-.672-.008-.313.134-.52.316-.458.179.059.333.364.34.676zm-2.435.872c-.474-2.137.039-3.467.039-3.467l3.184 1.062c-1.11-2.178-2.176-1.013-2.176-1.013l-.859-.286c.57-1.612 1.949-1.023 1.949-1.023 1.826.827 2.168 3.826 2.168 3.826L2.041 7.088c-.268.907.188 2.399.188 2.399l-.705-.235zm10.561-7.42c-.487-.258-.967-.134-1.47.083l-4.013 1.79-4.063-1.79c-.504-.217-.892-.203-1.211-.082-.512.196-.775.51-.775 1.084v8.205c0 .7.403 1.331 1.017 1.596l4.336 1.865c.095.04.445.16.743.16.26 0 .557-.12.65-.16l4.335-1.865c.615-.265 1.017-.896 1.017-1.596V2.917c0-.574-.12-.851-.566-1.086z"
                                                fill="#9E1D22"></path>
                                            <path
                                                d="M2.101 1.308l.13.037.111.04c.168.066.311.136.478.208.326.144.669.3 1.01.459l2.654 1.236c-.48-.347-1.388-1-2.307-1.63a338.79 338.79 0 01-.502-.337 8.57 8.57 0 00-.486-.301 1.056 1.056 0 00-.43-.142 1.265 1.265 0 00-.408.017 1.166 1.166 0 00-.53.266 1.185 1.185 0 00-.09.09c.042.002.081.003.124.009.08.015.159.022.246.048"
                                                fill="#9E1D22"></path>
                                            <path d="M3.356.349h3.128v2.714H3.356z" fill="none"></path>
                                            <path
                                                d="M3.617.603l.089.056.074.055c.11.087.202.172.31.263.211.18.433.374.651.569l1.237 1.102c.154.129.383.312.506.415-.292-.38-.884-1.094-1.399-1.731-.2-.244-.404-.497-.596-.698a.843.843 0 00-.29-.203 1.005 1.005 0 00-.306-.078.874.874 0 00-.537.123c.029.012.059.022.089.035.056.03.113.053.172.092m6.709.991c.167-.073.31-.143.478-.209l.112-.04.13-.036c.087-.027.166-.035.246-.05.042-.005.082-.006.122-.008a1.2 1.2 0 00-.301-.239 1.14 1.14 0 00-.318-.116 1.263 1.263 0 00-.408-.018 1.058 1.058 0 00-.43.141 8.99 8.99 0 00-.485.301l-.502.337a123.27 123.27 0 00-2.308 1.631l2.655-1.236c.34-.16.683-.315 1.01-.458"
                                                fill="#9E1D22"></path>
                                            <path d="M6.662.349H9.79v2.714H6.66z" fill="none"></path>
                                            <path
                                                d="M8.405 1.546c.218-.195.44-.388.651-.569.108-.091.2-.175.31-.263L9.441.66l.088-.056c.059-.039.116-.063.172-.092.03-.013.06-.023.09-.035a.874.874 0 00-.537-.123 1.004 1.004 0 00-.308.078.85.85 0 00-.288.203c-.193.201-.397.454-.596.698-.515.637-1.108 1.35-1.4 1.731.123-.103.352-.286.506-.415l1.237-1.102"
                                                fill="#9E1D22"></path>
                                            <path d="M.037 14.743h12.614V.349H.037z" fill="none"></path>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#ebook">
                                </use>
                            </svg>

                        </div>

                        <div class="start">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <p>ابابيل (كتاب الكتروني)</p>
                        </div>
                        <div class="price">
                            <h2>49.99 <small>رس</small></h2>
                            <h3>صيغ اخرى:<span style="color: #01539c">كتاب مطبوع</span></h3>
                            <p id="demo"></p>

                        </div>
                        <div class="info">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon--default list__icon" width="24" height="24">
                                <defs>
                                    <symbol viewBox="0 0 24 24" id="star" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0L8.75 8.125 0 8.719l6.719 5.625-2.125 8.469L12 18.155l7.406 4.657-2.125-8.47L24 8.72l-8.75-.594z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#star" fill="#42526E"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="icon list__icon side-menu__icon ar-flip" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 32 32" id="cart-circle" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path
                                                d="M1.087 0A1.1 1.1 0 000 1.108c0 .609.49 1.107 1.088 1.107.375-.004.721-.2.92-.52.197-.32.22-.718.058-1.058a2.474 2.474 0 011.781 1.976l2.038 11.8a1.64 1.64 0 001.47 1.36A1.385 1.385 0 007.2 17.22c.227.473.701.775 1.224.78a1.37 1.37 0 001.22-.773 1.385 1.385 0 00-.142-1.444h3.549a1.39 1.39 0 00-.137 1.44c.227.468.697.768 1.215.776.52-.005.992-.304 1.22-.773a1.385 1.385 0 00-.141-1.443h1.366v-.552H7.491a1.09 1.09 0 01-1.072-.917l-.368-2.13h8.695c.878 0 1.645-.616 1.85-1.485L18 4.735 4.572 3.617l-.19-1.098A3.008 3.008 0 001.438 0h-.351zm5.661 6.429h8.362a.32.32 0 01.32.321.32.32 0 01-.32.321H6.748a.32.32 0 01-.32-.321.32.32 0 01.32-.321zm-6.507 0h3.378c.132 0 .24.144.24.321 0 .177-.108.321-.24.321H.239C.108 7.071 0 6.927 0 6.75c0-.177.107-.321.24-.321zM8.034 9h5.79a.323.323 0 010 .642h-5.79a.323.323 0 010-.642zM1.608 9h1.928a.32.32 0 01.32.321.32.32 0 01-.32.321H1.608a.323.323 0 010-.642z"
                                                id="bga"></path>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <circle fill="#D4070E" cx="16" cy="16" r="16"></circle>
                                            <use fill="#FFFFFF" fill-rule="nonzero" xlink:href="#bga"
                                                transform="translate(7 7)"></use>
                                        </g>
                                    </symbol>
                                </defs>
                                <use xlink:href="#cart-circle"></use>
                            </svg>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                class="button__icon" width="32" height="32">
                                <defs>
                                    <symbol viewBox="0 0 81 62.9" id="compare" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M76.8 34.6H56v-8.4c0-2.5-1.3-3.2-3.2-1.5L35.7 40.3c-1.9 1.7-1.8 4.4 0 6.1L52.8 62c1.9 1.7 3.2 1 3.2-1.5v-8.9h20.8c2.5 0 4.2-1.8 4.2-4.3v-7.9c0-2.5-1.7-4.8-4.2-4.8zM45.3 16.5L28.2.9C26.3-.8 25-.1 25 2.4v9.2H4.2C1.7 11.6 0 13 0 15.5v7.9c0 2.5 1.7 5.1 4.2 5.1H25v8c0 2.5 1.4 3.2 3.2 1.5l17.1-15.6c1.9-1.5 1.9-4.2 0-5.9z">
                                        </path>
                                    </symbol>
                                </defs>
                                <use xlink:href="#compare" fill="#42526E">
                                </use>
                            </svg>


                        </div>

                    </div>
                </div>
            </div>
            <!-----End-Box7----->
            <!---------------------------------------------------------------------------------->

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


                    <img src="app/assets/image/svgexport-58.svg" alt="">
                    <img src="app/assets/image/svgexport-59.svg" alt="">
                    <img src="app/assets/image/svgexport-60.svg" alt="">
                    <img src="app/assets/image/svgexport-61.svg" alt="">
                    <img src="app/assets/image/svgexport-62.svg" alt="">
                    <img src="app/assets/image/svgexport-63.svg" alt="">
                    <img src="app/assets/image/svgexport-64.svg" alt="">



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
                            class="payment__app/assets/image" width="100px" height="265.5">
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
                            class="payment__app/assets/image" width="100px" height="265.5">
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
                            class="payment__app/assets/image" width="100px" height="265.5">
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
                            class="payment__app/assets/image" width="100px" height="265.5">
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


    <script src="js/main.js"></script>
</body>

</html>