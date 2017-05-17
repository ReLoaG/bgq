<footer class="footer">
    <div class="<?php if( is_page( 2) ){echo 'inner-content';} elseif ( is_page( array(13, 19))) {echo 'inner-content-contacts';} else {echo 'hide';} ?>">
        <div class="left-column">
            <div class="heading-text">
                напишіть нам!
            </div>
            <form action="#" class="footer-form">
                <label>
                    <input type="text" placeholder="ІМ’Я , ПРІЗВИЩЕ">
                </label>
                <label>
                    <input type="email" placeholder="E-MAIL">
                </label>
                <label>
                    <input type="text" placeholder="НОМЕР ТЕЛЕФОНУ">
                </label>
                <label>
                    <input type="text" placeholder="КОМЕНТАР">
                </label>
                <input type="submit" value="надіслати">
            </form>
        </div>
        <div class="right-column">
            <div class="heading-text">
                контакти
            </div>
            <div class="column-1">
                <div class="address">
                    <div class="subtitle">
                        адреса підприємства
                    </div>
                    <div class="plain-text">
                        Україна Житомирська обл. <br>
                        Коростенський р-н. с. Бехи 11521
                    </div>
                </div>
                <div class="phone-numbers">
                    <div class="subtitle">
                        КОНТАКТНІ ТЕЛЕФОНИ
                    </div>
                    <div class="plain-text">
                        +380 067 412 71 48   Нач. Збуту <br>

                        +380 067 484 05 05   Директор <br>

                        +380 412 55 21 26   Секретар <br>

                        +380 412 55 21 27   Секретар
                    </div>
                </div>
            </div>
            <div class="column-2">
                <div class="email-address">
                    <div class="subtitle">
                        електронна скринька
                    </div>
                    <div class="plain-text">
                        info@bgk2006.com
                    </div>
                </div>
                <div class="email-address">
                    <div class="subtitle">
                        відділ постачання
                    </div>
                    <div class="plain-text">
                        supply@bgk2006.com
                    </div>
                </div>
                <div class="email-address">
                    <div class="subtitle">
                        відділ збуту
                    </div>
                    <div class="plain-text">
                        v.polosenko@bgk2006.com
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <img src="http://bqg.dev:8888/wp-content/uploads/2017/05/copyright.png" alt="copyright">
    </div>
</footer>
