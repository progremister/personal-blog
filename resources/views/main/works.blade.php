@extends('layouts.main')

@section('title')
Works
@endsection


@section('body')

<h1 class="page__title">Мої роботи</h1>

    <article class="work">
        <div class="work__preview">
            <img src="{{ asset("images/works/portfolio.jpg") }}" alt="">
        </div>
        <div class="work__content">
            <h2 class="work__title">
                <a href="" target="_blank">my-portfolio.com</a>
            </h2>
            <div class="work__description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi atque fuga, dolor illo nesciunt ipsa soluta repudiandae est reprehenderit provident itaque officiis saepe enim modi ab commodi, qui placeat vitae.</p>
            </div>
            <ul class="tags">
                <li class="tags__item">дизайн</li>
                <li class="tags__item">створення сайтів</li>
                <li class="tags__item">резюме</li>
            </ul>
            <div class="work__btn">
                <a class="btn btn--blue  btn--rounded btn--sm" ref="" target="_blank">Перейти на сайт</a>
            </div>
        </div>
    </article>
    <article class="work">
        <div class="work__preview">
            <img src="{{ asset("images/works/mogo.jpg") }}" alt="">
        </div>
        <div class="work__content">
            <h2 class="work__title">
                <a href="" target="_blank">mogo.com</a>
            </h2>
            <div class="work__description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi atque fuga, dolor illo nesciunt ipsa soluta repudiandae est reprehenderit provident itaque officiis saepe enim modi ab commodi, qui placeat vitae.</p>
            </div>
            <ul class="tags">
                <li class="tags__item">дизайн</li>
                <li class="tags__item">створення сайтів</li>
                <li class="tags__item">SMM</li>
            </ul>
            <div class="work__btn">
                <a class="btn btn--blue  btn--rounded btn--sm" ref="" target="_blank">Перейти на сайт</a>
            </div>
        </div>
    </article>
    <article class="work">
        <div class="work__preview">
            <img src="{{ asset("images/works/activebox.jpg") }}" alt="">
        </div>
        <div class="work__content">
            <h2 class="work__title">
                <a href="" target="_blank">activebox.com</a>
            </h2>
            <div class="work__description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi atque fuga, dolor illo nesciunt ipsa soluta repudiandae est reprehenderit provident itaque officiis saepe enim modi.</p>
            </div>
            <ul class="tags">
                <li class="tags__item">дизайн</li>
                <li class="tags__item">створення сайтів</li>
                <li class="tags__item">SMM</li>
            </ul>
            <div class="work__btn">
                <a class="btn btn--blue  btn--rounded btn--sm" ref="" target="_blank">Перейти на сайт</a>
            </div>
        </div>
    </article>

@endsection
