<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <header id="tt-header">
        <div class="container">
            <div class="row tt-row no-gutters">
                <div class="col-auto">

                    <Link class="toggle-mobile-menu" href="#">
                        <svg class="tt-icon">
                            <use xlink:href="#icon-menu_icon"></use>
                        </svg>
                    </Link>

                    <div class="tt-logo">
                        <Link :href="route('users.homepage')"><img alt="" src="../../../public/assets/users/images/logo.png"/>
                        </Link>
                    </div>

                    <div class="tt-desktop-menu">
                        <nav>
                            <ul>
                                <li>
                                    <Link :href="route('users.categories-list')"><span>Categories</span></Link>
                                </li>

                                <li>
                                    <Link href="/"><span>Topics</span></Link>
                                </li>

                                <li>
                                    <Link href="/"><span>Member</span></Link>
                                </li>

                                <li>
                                    <Link :href="route('users.guidelines')"><span>Guidelines</span></Link>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="tt-search">

                        <button class="tt-search-toggle" data-target="#modalAdvancedSearch" data-toggle="modal">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-search"></use>
                            </svg>
                        </button>

                        <form class="search-wrapper">
                            <div class="search-form">
                                <input class="tt-search__input" placeholder="Search" type="text">
                                <button class="tt-search__btn" type="submit">
                                    <svg class="tt-icon">
                                        <use xlink:href="#icon-search"></use>
                                    </svg>
                                </button>
                                <button class="tt-search__close">
                                    <svg class="tt-icon">
                                        <use xlink:href="#cancel"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="search-results">
                                <div class="tt-search-scroll">
                                    <ul>
                                        <li>
                                            <Link href="page-single-topic.html">
                                                <h6 class="tt-title">Rdr2 secret easter eggs</h6>
                                                <div class="tt-description">
                                                    Here’s what I’ve found in Red Dead Redem..
                                                </div>
                                            </Link>
                                        </li>
                                        <li>
                                            <Link href="page-single-topic.html">
                                                <h6 class="tt-title">Top 10 easter eggs in Red Dead Rede..</h6>
                                                <div class="tt-description">
                                                    You can find these easter eggs in Red Dea..
                                                </div>
                                            </Link>
                                        </li>
                                        <li>
                                            <Link href="page-single-topic.html">
                                                <h6 class="tt-title">Red Dead Redemtion: Arthur Morgan..</h6>
                                                <div class="tt-description">
                                                    Here’s what I’ve found in Red Dead Redem..
                                                </div>
                                            </Link>
                                        </li>
                                        <li>
                                            <Link href="page-single-topic.html">
                                                <h6 class="tt-title">Rdr2 secret easter eggs</h6>
                                                <div class="tt-description">
                                                    Here’s what I’ve found in Red Dead Redem..
                                                </div>
                                            </Link>
                                        </li>
                                        <li>
                                            <Link href="page-single-topic.html">
                                                <h6 class="tt-title">Top 10 easter eggs in Red Dead Rede..</h6>
                                                <div class="tt-description">
                                                    You can find these easter eggs in Red Dea..
                                                </div>
                                            </Link>
                                        </li>
                                        <li>
                                            <Link href="page-single-topic.html">
                                                <h6 class="tt-title">Red Dead Redemtion: Arthur Morgan..</h6>
                                                <div class="tt-description">
                                                    Here’s what I’ve found in Red Dead Redem..
                                                </div>
                                            </Link>
                                        </li>
                                    </ul>
                                </div>
                                <button class="tt-view-all" data-target="#modalAdvancedSearch" data-toggle="modal"
                                        type="button">Advanced Search
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-auto ml-auto">
                    <div class="tt-account-btn">
                        <Link class="btn btn-primary" href="page-login.html">Log in</Link>
                        <Link class="btn btn-secondary" href="page-signup.html">Sign up</Link>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>
