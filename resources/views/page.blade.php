<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href="./pages/index.css">
    <link rel='stylesheet' type='text/css' href="./dop.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <title>{{__('lang.head_title')}}</title>
</head>
<body class="page">
    <header class="header">
        <img src="./images/header-logo.svg" class="logo" alt="Логотип">
        <ul class="header__language-links">
            <li><a href="{{ route('rupage') }}" class="header__language-link header__language-link_language_ru">Ru</a></li>
            <li><a href="{{ route('enpage') }}" class="header__language-link header__language-link_language_en">En</a></li>
        </ul>
    </header>
    <main class="content">
        <section class="lead">
            <h1 class="lead__title">{{__('lang.lead__title')}}</h1>
            <p class="lead__subtitle">{{__('lang.lead__subtitle')}}</p>
            <img src="./images/lead-polka.jpg" class="lead__image" alt="Полка задний фон">
            <p class="lead__caption">{{__('lang.lead__caption')}}</p>
        </section>

        <div class = "triangle">

        </div>

        <section class="intro">
            <h2 class="intro__title">{{__('lang.intro__title')}}</h2>
            <p class="intro__text">{{__('lang.intro__text')}}</p>
            <ul class="intro__list">
                <li><span id= "intro_list1" class='intro__list-bold'>{{__('lang.intro_list1')}}</span> 11</li>
                <li><span id= "intro_list2" class='intro__list-bold'>{{__('lang.intro_list2')}}</span> 12</li>
                <li><span id= "intro_list3" class='intro__list-bold'>{{__('lang.intro_list3')}}</span> 16</li>
                <li><span id= "intro_list4" class='intro__list-bold'>{{__('lang.intro_list4')}}</span> 105</li>
                <li><span id= "intro_list5" class='intro__list-bold'>{{__('lang.intro_list5')}}</span> 241</li>
            </ul>
        </section>
            <div class="img-slider">
                <div class="slide active">
                  <img src="images/baikal.jpg" alt="">
                  <div class="info">
                  </div>
                </div>
                <div class="slide">
                  <img src="images/kamchatka_volcano2.jpg" alt="">
                  <div class="info">
                  </div>
                </div>
                <div class="slide">
                  <img src="images/kamchatka_volcano.jpg" alt="">
                  <div class="info">
                  </div>
                </div>
                <div class="slide">
                  <img src="images/Russia_Sochi_Parks.jpg" alt="">
                  <div class="info">
                  </div>
                </div>
                <div class="slide">
                  <img src="images/train.jpg" alt="">
                  <div class="info">
                  </div>
                </div>
                <div class="navigation">
                  <div class="btn active"></div>
                  <div class="btn"></div>
                  <div class="btn"></div>
                  <div class="btn"></div>
                  <div class="btn"></div>
                </div>
              </div>

        <section class="places">
            <article class="place">
                <div class="place__row place__row_role_title">
                    <h2 id="place_title1" class="place__title">{{__('lang.place_title1')}}</h2>
                    <div class="place__website">
                        <h3 class="place__url-heading">URL</h3>
                        <a href="http://park-kosa.ru" class="place__link">park-kosa.ru</a>
                    </div>
                    
                </div>
                <div class="place__row place__row_role_content">
                    <img src="./images/place-kosa.jpg" class="place__image" alt="Коса">
                    <div class="place__column">
                        <p id="place__paragraph1" class="place__paragraph">{{__('lang.place__paragraph1')}}</p>
                        <p id="place__paragraph2" class="place__paragraph">{{__('lang.place__paragraph2')}}</p>
                    </div>
                </div>
            </article>

            <article class="place">
                <div class="place__row place__row_role_title">
                    <h2 id="place_title2" class="place__title">{{__('lang.place_title2')}}</h2>
                    <div class="place__website">
                        <h3 class="place__url-heading">URL</h3>
                        <a href="https://yourshot.nationalgeographic.com/photos/?keywords=kolskiy" class="place__link">National Geographic</a>
                    </div>
                </div>
                <div class="place__row place__row_role_content">
                    <img src="./images/place-kolsky.jpg" class="place__image" alt="Кольский">
                    <div class="place__column">
                        <p id="place__paragraph3" class="place__paragraph">{{__('lang.place__paragraph3')}}</p>
                        <p id="place__paragraph4" class="place__paragraph">{{__('lang.place__paragraph4')}}</p>
                    </div>
                </div>
            </article>

            <article class="place">
                <div class="place__row place__row_role_title">
                    <h2 id="place_title3" class="place__title">{{__('lang.place_title3')}}</h2>
                    <div class="place__website">
                        <h3 class="place__url-heading">URL</h3>
                        <a href="https://www.facebook.com/vera.bashmakova/posts/10156011613718822 " class="place__link">Facebook</a>
                    </div>
                </div>
                <div class="place__row place__row_role_content">
                    <img src="./images/place-altai.jpg" class="place__image"  alt="Алтай">
                    <div class="place__column">
                        <p id="place__paragraph5" class="place__paragraph">{{__('lang.place__paragraph5')}}</p>
                        <p id="place__paragraph6" class="place__paragraph">{{__('lang.place__paragraph6')}}</p>
                    </div>
                </div>
            </article>

            <article class="place">
                <div class="place__row place__row_role_title">
                    <h2 id="place_title4" class="place__title">{{__('lang.place_title4')}}</h2>
                    <div class="place__website">
                        <h3 class="place__url-heading">URL</h3>
                        <a href="https://vk.com/baikalmile" class="place__link">https://vk.com/baikalmile</a>
                    </div>
                </div>
                <div class="place__row place__row_role_content">
                    <img src="./images/place-winter-baikal.jpg" class="place__image" alt="Байкал">
                    <div class="place__column">
                        <p id="place__paragraph7" class="place__paragraph">{{__('lang.place__paragraph7')}}</p>
                        <p id="place__paragraph8" class="place__paragraph">{{__('lang.place__paragraph8')}}</p>
                    </div>
                </div>
            </article>

            <article class="place">
                <div class="place__row place__row_role_title">
                    <h2 id="place_title5" class="place__title">{{__('lang.place_title5')}}</h2>
                    <div class="place__website">
                        <h3 class="place__url-heading">URL</h3>
                        <a href="http://vodlozero.ru" class="place__link">http://vodlozero.ru/</a>
                    </div>
                </div>
                <div class="place__row place__row_role_content">
                    <img src="./images/place-karelia.jpg" class="place__image" alt="Карелия">
                    <div class="place__column">
                        <p id="place__paragraph9" class="place__paragraph">{{__('lang.place__paragraph9')}}</p>
                    </div>
                </div>
            </article>
        </section>
        <section class="cover">
            <a href="https://stampsy.com/na-elektrichkakh-do-baikala" class="cover__link cover__background">
                <h2 class="cover__title">{{__('lang.cover__title')}}</h2>
                <p class="cover__subtitle">{{__('lang.cover__subtitle')}}</p>
                <div class="cover__overlay"></div>
            </a>
        </section>
        <section class="payment">
            <button class="payment__button">{{__('lang.payment__button')}}</button>    
        </section>
        <section class="location">
            <h2 class = "loaction__title">{{__('lang.loaction__title')}}</h2>
            <ul class="location__list">
                <li><span id= "location_list1" class='location__list-bold'>{{__('lang.location_list1')}}</span> <p id= "location_li1">{{__('lang.location_li1')}}</p></li>
                <li></li><span id= "location_list2"class='location__list-bold'>{{__('lang.location_list2')}}</span><p id= "location_li2">{{__('lang.location_li2')}}</p></li>
                <li><span id= "location_list3" class='location__list-bold'>{{__('lang.location_list3')}}</span> <p id= "location_li3">{{__('lang.location_li3')}}</p></li>
            </ul>
            
        </section>

        <form enctype="multipart/form-data" action="{{ route('add-form') }}" method="post" class="add-form">
            @csrf
            <h2 class="add-form__title">{{__('lang.add_form__title')}}</h2>

            <input type="text" name="document__title" id="document__title" placeholder="{{__('lang.document__title')}}" class="add-form__input">

            <input type="file" name="document__file" id="document__file" class="add-form__file-input" multiple>

            <button type="submit" class="add-form__submit">{{__('lang.add_form__submit')}}</button>
        </form>

    </main>
    
    <footer class="footer">
        <nav class="footer__nav">
            <ul class="footer__links">
                <li><a href="https://yandex.ru/maps" id ="footer__link1" class="footer__link">{{__('lang.footer__link1')}}</a></li>
                <li><a href="https://yandex.ru/pogoda" id ="footer__link2" class="footer__link">{{__('lang.footer__link2')}}</a></li>
                <li><a href="https://rasp.yandex.ru" id ="footer__link3" class="footer__link">{{__('lang.footer__link3')}}</a></li>
                <li><a href="https://calendar.yandex.ru" id ="footer__link4" class="footer__link">{{__('lang.footer__link4')}}</a></li>
                <li><a href="https://travel.yandex.ru" id ="footer__link5" class="footer__link">{{__('lang.footer__link5')}}</a></li>
            </ul>
        </nav>
        <p class="footer__copyright">{{__('lang.footer__copyright')}}</p>
    </footer>
    <div id = "popup" class="popup popup_type_payment">
        <form method="POST" class="form">
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Full Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Nick Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
                <div class="input-group">
                    <div class="input-box">
                        <input type="email" placeholder="Email Adress" required class="name">
                        <i class="fa fa-envelope icon"></i>
                    </div>
                </div>
                <div class="input-group">
                        <div class="input-box">
                            <h4>Date of Birth</h4>
                            <input type="text" placeholder="DD" class="dob" required class="date">
                            <input type="text" placeholder="MM" class="dob" required class="date">
                            <input type="text" placeholder="YYYY" class="dob"required class="date">
                        </div>
                        <div class="input-box">
                            <h4>Gender</h4>
                            <input type="radio" id="b1" name="gendar" checked class="radio">
                            <label for="b1">Male</label>
                            <input type="radio" id="b2" name="gendar" class="radio">
                            <label for="b2">Female</label>
                        </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <h4>Payment Details</h4>
                        <input type="radio" name="pay" id="bc1" checked class="radio">
                        <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                        <input type="radio" name="pay" id="bc2" class="radio">
                        <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <input type="tel" placeholder="Card Number" required class="name">
                        <i class="fa fa-credit-card icon"></i>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <input type="tel" placeholder="Card CVC" required class="name">
                        <i class="fa fa-user icon"></i>
                    </div>
                <div class="input-box">
                    <select>
                        <option>01 jun</option>
                        <option>02 jun</option>
                        <option>03 jun</option>
                    </select>
                    <select>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <button type="submit">PAY NOW</button>
                </div>
            </div>
        </form>
    </div>
    <script src="./popup.js"></script>
    <script src="./translate.js"></script>
    <script src="./map.js"></script>
    <script src="./slider.js"></script>
    <script src="sweetalert2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function sweetalertclick(){
            Swal.fire(
                'Good job!',
                'You clicked the button!',
                'success'
            )
        }
    </script>
</body>
</html>