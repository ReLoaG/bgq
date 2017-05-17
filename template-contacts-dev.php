<?php
/**
 * Template Name: Contacts - dev version
 */
?>

<section class="contacts-page">
    <div class="inner-content">
        <div class="right-column">
            <div class="heading-text">
                <span>
                    контакти
                </span>
            </div>
            <div class="simple-text">
                <span>
                    Щорічно на підприємстві виробляється понад 1 млн. тонн <br>
                    щебеневої продукції різних фракцій. Наш щебінь<br>
                    використовується для будівництва доріг та залізничних<br>
                    насипів, виробництва асфальту, бетону. Зручне розташування<br>
                    кар’єра, наявність власної навантажувально-<br>
                    розвантажувальної з/д площадки, а також двох залізничних <br>
                    під’їзних шляхів дозволяє здійснювати безперебійну <br>
                    поставку продукції. Завдяки тому, що Бехівський кар’єр є <br>
                    підприємством з іноземними інвестиціями, у виробництво <br>
                    постійно впроваджуються нові технології, удосконалюється <br>
                    якість продукції. <br>

                    Наш щебінь має унікальну міцність у 1200-1400 та >1400, <br>
                    що наразі є найвищим показником в Україні, а в комплексі <br>
                    з найновітнішим обладнанням та європейськими стандартами <br>
                    контролю всіх етапів виробництва дає найкращу продукцію <br>
                    на ринку України.
                </span>
            </div>
        </div>
        <div id="map"></div>
        <script>
            function initMap() {
                var uluru = {lat: 51.0171962, lng: 28.6931463};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 9,
                    center: uluru,
                    scrollwheel: false
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdt5_jM_QvE5CfEpF2jrjIxwO9hGp0xgI&callback=initMap">
        </script>
    </div>
</section>

<?php// while (have_posts()) : the_post(); ?>
  <?php// get_template_part('templates/page', 'header'); ?>
  <?php// get_template_part('templates/content', 'page'); ?>
<?php// endwhile; ?>
