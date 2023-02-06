<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <title>DMP landing page</title>
</head>

<body dir="rtl">
    <header>
        <nav>
            <div class="logo">
                <h1>DMP</h1>
                <h4 dir="ltr">SOFTWARE CO.</h4>
            </div>
            <p>إبداع يلبي طموحاتكم</p>
        </nav>
        <div class="text">
            <h4>نبتكر الأفكار والحلول</h4>
            <h1>التواصل عبر <br> المحتوى الرقمي</h1>
            <p>فنحن مبدعون في تطوير وبلورت الأفكار لتصبح حقيقة ويكون العميل <br> على رضى كامل من العمل ذو الجودة العالية
                والخدمة الراقية</p>
        </div>
        <aside>
            <p>شبكاتنا الاجتماعية</p>
            <img src="{{ asset('Icons/Social-Icons/Instagram.svg') }}" alt="">
            <img src="{{ asset('Icons/Social-Icons/Snapchat.svg') }}" alt="">
            <img src="{{ asset('Icons/Social-Icons/Twitter.svg') }}" alt="">
            <img src="{{ asset('Icons/Social-Icons/Whatsapp.svg') }}" alt="">
            <img src="{{ asset('Icons/Social-Icons/LinkedIn.svg') }}" alt="">
        </aside>
    </header>

    <section class="clients-section">
        <div class="title">
            <img src="{{ asset('Patterns/Section-Pattern.svg') }}" alt="">
            <div class="text">
                <h4>عملائنا</h4>
                <h1>ريادة وزيادة</h1>
            </div>
        </div>
        <div class="owl-carousel owl-theme" dir="ltr">
            <div class="item">
                <img src="{{ asset('Images/hawacom.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('Images/vitaminCenter.jpeg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('Images/2M-logo.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('Images/logo2.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('Images/hawacom.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('Images/vitaminCenter.jpeg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('Images/2M-logo.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('Images/logo2.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('Images/hawacom.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('Images/vitaminCenter.jpeg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('Images/2M-logo.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('Images/logo2.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="title">
            <img src="{{ asset('Patterns/Section-Pattern.svg') }}" alt="">
            <div class="text">
                <h4>رسالة بسيطة</h4>
                <h1>تأثير كبير</h1>
            </div>
        </div>
        <div class="flex">
            <div class="card">
                <div class="icon">
                    <img src="{{ asset('Icons/Cards-Icons/Icon.svg') }}" alt="">
                </div>
                <div class="text">
                    <span class="number">03</span>
                    <h1>نظام الذكاء الاصطناعي</h1>
                    <p>نقوم ببرمجة وتكويد احدث تقنيات البحث والتحيل بالذكاء الصناعي وانظمة التحليل المتقدمة لنتيح
                        للعملاء الابداع مندون حدود</p>
                </div>
                <img class="footer-img" src="{{ asset('Patterns/Card-Pattern.svg') }}" alt="">
            </div>
            <div class="card">
                <div class="icon">
                    <img src="{{ asset('Icons/Cards-Icons/Icon-2.svg') }}" alt="">
                </div>
                <div class="text">
                    <span class="number">02</span>
                    <h1>برمجة المواقع</h1>
                    <p>برمجة المواقع وتصميمها وبناء موقع ملائم لجميع الاأعمال ويتناسق مع أحدث التكنولوجيا في الحماية
                        والسرعة والأمن</p>
                </div>
                <img class="footer-img" src="{{ asset('Patterns/Card-Pattern.svg') }}" alt="">
            </div>
            <div class="card">
                <div class="icon">
                    <img src="{{ asset('Icons/Cards-Icons/Icon-1.svg') }}" alt="">
                </div>
                <div class="text">
                    <span class="number">01</span>
                    <h1>برمجة التطبيقات</h1>
                    <p>نقوم ببرمجة التطبيقات بأحدث التقنيات المعمول بها والمجربة بالفاعلية والجودة ونوفر للعملاء أفضل
                        عمل
                    </p>
                </div>
                <img class="footer-img" src="{{ asset('Patterns/Card-Pattern.svg') }}" alt="">
            </div>
        </div>
    </section>

    <script src="{{ asset('JS/jquery.min.js') }}"></script>
    <script src="{{ asset('JS/owl.carousel.min.js') }}"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
</body>

</html>
