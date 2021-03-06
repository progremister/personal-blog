<aside class="sidebar" id="sidebar">
    <div class="sidebar__header">
        <img src="{{ asset("images/sidebar/sidebar-header.jpg") }}" alt="">
    </div>
    <div class="sidebar__content">
        <div class="profile">
            <img class="profile__avatar" src="{{ asset("images/sidebar/avatar.jpg") }}" alt="">
            <div class="profile__header">
                <div class="profile__name">Дмитро Колосовський</div>
                <div class="profile__prof">блог web-розробника</div>
            </div>
            
            <ul class="social">
                <li class="social__item">
                    <a class="social__link" href="https://www.instagram.com/dima.kolosovskyi/" target="_blank">
                        <img src="{{ asset("images/sidebar/social/instagram.svg") }}" alt="Instagram">
                    </a>
                </li>
                <li class="social__item">
                    <a class="social__link" href="https://twitter.com/d_kolosovskyi" target="_blank">
                        <img src="{{ asset("images/icons/twitter.png") }}" alt="Twitter">
                    </a>
                </li>
                <li class="social__item">
                    <a class="social__link" href="https://www.facebook.com/dmitro.kolosovskyi.3" target="_blank">
                        <img src="{{ asset("images/icons/facebook.png") }}" alt="Facebook">
                    </a>
                </li>
            </ul>
        </div>

        <nav class="nav nav--mobile">
            <ul class="nav__list">
                <li>
                    <a href="/" class="nav__link">Головна</a>
                </li>
                <li class="nav__item">
                    <a href="#" class="nav__link has-subnav" id="accordion">Статті</a>
    
                    <ul class="subnav subnav--sidebar" id="subnav">
                        <li>
                            <a href="#" class="subnav__link" id="">Створення сайтів</a>
                        </li>
                        <li>
                            <a href="#" class="subnav__link" id="">Інтернет-маркетинг</a>
                        </li>
                        <li>
                            <a href="#" class="subnav__link" id="">Просування відео</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/about" class="nav__link">Про мене</a>
                </li>
                <li>
                    <a href="{{ route('profile') }}" class="nav__link">Профіль</a>
                </li>
                <li>
                    <a href="#" class="nav__link">Вийти</a>
                </li>
            </ul>
        </nav>
    </div>

    

    <div class="profile__text">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere placeat illo, reiciendis, blanditiis impedit excepturi corporis itaque numquam, id quis ipsam nobis vitae distinctio dolorem et dolor officiis. Modi, optio?</p>  
    </div>
    <div class="sidebar__footer">
        <button type="button" class="btn btn--red" data-modal="contact-modal">Зв'язатися</button>
        <a class="btn btn--blue" href="{{ route('works')}} ">Мої роботи</a>
    </div>
</aside>