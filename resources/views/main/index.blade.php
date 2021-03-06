@extends('layouts.main')

@section('title')
Main Page
@endsection


@section('body')

    <!-- Stories -->
    <div class="stories">
        <div class="stories__item" data-modal="story-modal">
            <img class="stories__preview" src="{{ asset("images/stories/storie1.jpg") }}" alt="">
            <div class="stories__title">Відпочиваю на природі</div>
            <time class="stories__date" datetime="2021-06-21 16:42">21.06.2021</time>
        </div>
        <div class="stories__item" data-modal="story-modal">
            <img class="stories__preview" src="{{ asset("images/stories/storie2.jpg") }}" alt="">
            <div class="stories__title">Закінчую важкий проєкт</div>
            <time class="stories__date" datetime="2021-06-15 18:26">15.06.2021</time>
        </div>
        <div class="stories__item" data-modal="story-modal">
            <img class="stories__preview" src="{{ asset("images/stories/remont.jpg") }}" alt="">
            <div class="stories__title">Зробив ремонт в залі</div>
            <time class="stories__date" datetime="2021-06-11 13:11">11.06.2021</time>
        </div>
        <div class="stories__item" data-modal="story-modal">
            <img class="stories__preview" src="{{ asset("images/stories/leto.jpg") }}" alt="">
            <div class="stories__title">Нарешті літо!</div>
            <time class="stories__date" datetime="2021-06-01 12:17">01.06.2022</time>
        </div>
    </div>

    <!-- Add post -->
    <div class="add-post">
        <form class="add-post__form" action="/" method="POST">
            <textarea name="post-text"  placeholder="Написати щось" data-autoresize=""></textarea>
            <div class="add-post__form-actions">
                <label class="add-post__file" for="add-post-file">
                    <input type="file" id="add-post-file">
                </label>   
                <button class="add-post__send" type="submit">
                    <img src="{{ asset("images/icons/send-post.svg") }}" alt="Відправити">
                </button> 
            </div>
        </form>
    </div>

    <!-- Posts -->
    <div class="post">
        <div class="post__content">
            <p class="post__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, debitis. Fugiat error repellendus quod, porro ex similique ea tenetur nemo minima tempore consequuntur aperiam omnis, aspernatur, minus ullam perferendis quae, voluphae vediam et modi asperiores libero!
            </p>
        </div>
        <div class="post__footer">
            <ul class="post__data">
                <li class="post__data-item">
                    <time datetime="2021-06-21 13:05">21.06.2021</time>
                </li>
            </ul>
        </div>
    </div>

    <!--  -->

    <article class="post">
        <div class="post__header post__header--preview">
            <a href="{{ route('post') }}" id="">
                <img class="post__preview" src="{{ asset("images/posts/post-2.jpg") }}" alt="Как писать код быстро и безболезненно?">
            </a>
        </div>
        <div class="post__content">
            <h2 class="post__title">
                <a href="{{ route('post') }}">Як писати код швидко й безболісно?</a>
            </h2>
            <p class="post__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, debitis. Fugiat error repellendus quod, porro ex similique ea tenetur nemo minima tempore consequuntur aperiam omnis, aspernatur, minus ullam perferendis quae, voluphae vediam et modi asperiores libero!
            </p>
        </div>
        <div class="post__footer">
            <ul class="post__data">
                <li class="post__data-item">
                    <time datetime="2021-06-19 16:19">19.06.2021</time>
                </li>
                <li class="post__data-item">
                    <a href="#">Створення сайтів</a>
                </li>
            </ul>
            <a href="{{ route('post') }}" class="post__read">Читати</a>
        </div>
    </article>

    <!--  -->

    <article class="post">
        <div class="post__header">
            <div class="embed">
                <iframe src="https://www.youtube.com/embed/JOSbtDVCIu0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="post__content">
            <h2 class="post__title">
                <a href="{{ route('post') }}">Придбав новий ноутбук за 30 000 грн</a>
            </h2>
        </div>
        <div class="post__footer">
            <ul class="post__data">
                <li class="post__data-item">
                    <time datetime="2021-05-14 13:05">14.05.2021</time>
                </li>
                <li class="post__data-item">
                    <a href="#">Просування відео</a>
                </li>
            </ul>
            <a href="{{ route('post') }}" class="post__read">Читати</a>
        </div>
    </article>

    <!--  -->

    <article class="post">
        <div class="post__header post__header--preview">
            <a href="{{ route('post') }}" id="">
                <img class="post__preview" src="{{ asset("images/posts/post-4.jpg") }}" alt="Как я сходил на FrontEnd Conf 2021">
            </a>
        </div>
        <div class="post__content">
            <h2 class="post__title">
                <a href="{{ route('post') }}">Як я закінчив IT Step Academy</a>
            </h2>
            <p class="post__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, debitis. Fugiat error repellendus quod, porro ex similique ea tenetur nemo minima tempore consequuntur aperiam omnis, aspernatur, minus ullam perferendis quae, voluphae vediam et modi asperiores libero!
            </p>
        </div>
        <div class="post__footer">
            <ul class="post__data">
                <li class="post__data-item">
                    <time datetime="2021-05-04 13:05">04.05.2022</time>
                </li>
                <li class="post__data-item">
                    <a href="#">Створення сайтів</a>
                </li>
            </ul>
            <a href="{{ route('post') }}" class="post__read">Читати</a>
        </div>
    </article>

    <!-- Pagination -->

    <ul class="pagination">
        <li class="pagination__item">
            <a href="#" class="pagination__link">&lt;</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link">1</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link active">2</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link">3</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link">&gt;</a>
        </li>
    </ul>

@endsection
