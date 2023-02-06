<script setup>
// Import External JS File
import '../../../public/assets/users/js/bundle.js'

// Import Layout
import UsersLayout from "@/Layouts/UsersLayout.vue";

// Import Component
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <!-- Template Page -->
    <UsersLayout title="Homepage">
        <main class="tt-offset-small" id="tt-pageContent">
            <div class="container">
                <div class="tt-topic-list">
                    <div class="tt-list-header">
                        <div class="tt-col-topic">Topic</div>
                        <div class="tt-col-category">Category</div>
                        <div class="tt-col-value hide-mobile">Likes</div>
                        <div class="tt-col-value hide-mobile">Replies</div>
                        <div class="tt-col-value hide-mobile">Views</div>
                        <div class="tt-col-value">Activity</div>
                    </div>
                    <div class="tt-topic-alert tt-alert-default" role="alert">
                        <Link href="#" target="_blank">4 new posts</Link> are added recently, click here to load them.
                    </div>
                    <div class="tt-item tt-itemselect">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-k"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-pinned"></use>
                                </svg>
                                Halloween Costume Contest 2018
                            </Link></h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span
                                            class="tt-color01 tt-badge">politics</span></Link></li>
                                        <li><Link href="#"><span class="tt-badge">contests</span></Link></li>
                                        <li><Link href="#"><span class="tt-badge">authors</span></Link></li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">1h</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color01 tt-badge">politics</span></div>
                        <div class="tt-col-value hide-mobile">985</div>
                        <div class="tt-col-value tt-color-select hide-mobile">502</div>
                        <div class="tt-col-value hide-mobile">15.1k</div>
                        <div class="tt-col-value hide-mobile">1h</div>
                    </div>
                    <div class="tt-item tt-itemselect">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-l"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-locked"></use>
                                </svg>
                                We’re removing Envato Credits from Market
                            </Link></h6>
                            <div class="row align-items-center no-gutters  hide-desktope">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span
                                            class="tt-color02 tt-badge">video</span></Link>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">2h</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color02 tt-badge">video</span></div>
                        <div class="tt-col-value hide-mobile">584</div>
                        <div class="tt-col-value tt-color-select  hide-mobile">35</div>
                        <div class="tt-col-value hide-mobile">1.3k</div>
                        <div class="tt-col-value hide-mobile">2h</div>
                    </div>
                    <div class="tt-item tt-itemselect">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-d"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                Web Hosting Packages for ThemeForest WordPress
                            </Link></h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span
                                            class="tt-color03 tt-badge">exchange</span></Link></li>
                                        <li><Link href="#"><span class="tt-badge">themeforest</span></Link></li>
                                        <li><Link href="#"><span class="tt-badge">elements</span></Link></li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">2h</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color03 tt-badge">exchange</span></div>
                        <div class="tt-col-value  hide-mobile">401</div>
                        <div class="tt-col-value tt-color-select  hide-mobile">975</div>
                        <div class="tt-col-value  hide-mobile">12.6k</div>
                        <div class="tt-col-value hide-mobile">2h</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-c"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                Review Queue Changes for VideoHive & PhotoDune
                            </Link></h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span
                                            class="tt-color04 tt-badge">pets</span></Link>
                                        </li>
                                        <li><Link href="#"><span class="tt-badge">videohive</span></Link></li>
                                        <li><Link href="#"><span class="tt-badge">photodune</span></Link></li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">1d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color04 tt-badge">pets</span></div>
                        <div class="tt-col-value  hide-mobile">308</div>
                        <div class="tt-col-value tt-color-select  hide-mobile">660</div>
                        <div class="tt-col-value  hide-mobile">8.3k</div>
                        <div class="tt-col-value hide-mobile">1d</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-n"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                Does Envato act against the authors of Envato markets?
                            </Link></h6>
                            <div class="row align-items-center no-gutters  hide-desktope">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span
                                            class="tt-color05 tt-badge">music</span></Link>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">1d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color05 tt-badge">music</span></div>
                        <div class="tt-col-value hide-mobile">358</div>
                        <div class="tt-col-value tt-color-select hide-mobile">68</div>
                        <div class="tt-col-value hide-mobile">8.3k</div>
                        <div class="tt-col-value hide-mobile">1d</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-h"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-locked"></use>
                                </svg>
                                We Want to Hear From You! What Would You Like?
                            </Link></h6>
                            <div class="row align-items-center no-gutters  hide-desktope">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span class="tt-color06 tt-badge">movies</span></Link>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">2d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color06 tt-badge">movies</span></div>
                        <div class="tt-col-value hide-mobile">671</div>
                        <div class="tt-col-value tt-color-select  hide-mobile">29</div>
                        <div class="tt-col-value hide-mobile">1.3k</div>
                        <div class="tt-col-value hide-mobile">2d</div>
                    </div>
                    <div class="tt-item tt-item-popup">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-f"></use>
                            </svg>
                        </div>
                        <div class="tt-col-message">
                            Looks like you are new here. Register for free, learn and contribute.
                        </div>
                        <div class="tt-col-btn">
                            <button class="btn btn-primary" type="button">Log in</button>
                            <button class="btn btn-secondary" type="button">Sign up</button>
                            <button class="btn-icon" type="button">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-cancel"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-t"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                Cannot customize my intro
                            </Link></h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span
                                            class="tt-color07 tt-badge">video games</span></Link>
                                        </li>
                                        <li><Link href="#"><span class="tt-badge">videohive</span></Link></li>
                                        <li><Link href="#"><span class="tt-badge">photodune</span></Link></li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">2d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color07 tt-badge">video games</span></div>
                        <div class="tt-col-value hide-mobile">364</div>
                        <div class="tt-col-value tt-color-select  hide-mobile">36</div>
                        <div class="tt-col-value  hide-mobile">982</div>
                        <div class="tt-col-value hide-mobile">2d</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-k"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-verified"></use>
                                </svg>
                                Microsoft Word and Power Point
                            </Link></h6>
                            <div class="row align-items-center no-gutters hide-desktope">
                                <div class="col-11">
                                    <ul class="tt-list-badge ">
                                        <li class="show-mobile"><Link href="#"><span class="tt-color08 tt-badge">youtube</span></Link>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">3d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color08 tt-badge">youtube</span></div>
                        <div class="tt-col-value  hide-mobile">698</div>
                        <div class="tt-col-value tt-color-select  hide-mobile">78</div>
                        <div class="tt-col-value  hide-mobile">2.1k</div>
                        <div class="tt-col-value hide-mobile">3d</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-v"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                First website template got rejected.
                            </Link></h6>
                            <div class="row align-items-center no-gutters  hide-desktope">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span class="tt-color09 tt-badge">social</span></Link>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">3d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color09 tt-badge">social</span></div>
                        <div class="tt-col-value  hide-mobile">12</div>
                        <div class="tt-col-value tt-color-select  hide-mobile">3</div>
                        <div class="tt-col-value  hide-mobile">268</div>
                        <div class="tt-col-value hide-mobile">3d</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-k"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-pinned"></use>
                                </svg>
                                Proform or looking for contacting billing department
                            </Link></h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span class="tt-color10 tt-badge">science</span></Link>
                                        </li>
                                        <li><Link href="#"><span class="tt-badge">contests</span></Link></li>
                                        <li><Link href="#"><span class="tt-badge">authors</span></Link></li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">3d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color10 tt-badge">science</span></div>
                        <div class="tt-col-value hide-mobile">274</div>
                        <div class="tt-col-value tt-color-select hide-mobile">114</div>
                        <div class="tt-col-value  hide-mobile">2.3k</div>
                        <div class="tt-col-value hide-mobile">3d</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-y"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-locked"></use>
                                </svg>
                                Refund for wrongly purchase HTML template
                            </Link></h6>
                            <div class="row align-items-center no-gutters hide-desktope">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span
                                            class="tt-color11 tt-badge">entertainment</span></Link></li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">3d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color11 tt-badge">entertainment</span></div>
                        <div class="tt-col-value hide-mobile">657</div>
                        <div class="tt-col-value tt-color-select hide-mobile">177</div>
                        <div class="tt-col-value hide-mobile">2.6k</div>
                        <div class="tt-col-value hide-mobile">3d</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-s"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                Why all my affiliate balance is pending?
                            </Link></h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span
                                            class="tt-color03 tt-badge">exchange</span></Link></li>
                                        <li><Link href="#"><span class="tt-badge">themeforest</span></Link></li>
                                        <li><Link href="#"><span class="tt-badge">elements</span></Link></li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">4d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color03 tt-badge">exchange</span></div>
                        <div class="tt-col-value hide-mobile">37</div>
                        <div class="tt-col-value tt-color-select hide-mobile">31</div>
                        <div class="tt-col-value hide-mobile">257</div>
                        <div class="tt-col-value hide-mobile">4d</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-l"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                Google snippets wordpress plugin
                            </Link></h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span
                                            class="tt-color04 tt-badge">pets</span></Link>
                                        </li>
                                        <li><Link href="#"><span class="tt-badge">videohive</span></Link></li>
                                        <li><Link href="#"><span class="tt-badge">photodune</span></Link></li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">4d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color04 tt-badge">pets</span></div>
                        <div class="tt-col-value hide-mobile">987</div>
                        <div class="tt-col-value tt-color-select hide-mobile">271</div>
                        <div class="tt-col-value hide-mobile">3.8k</div>
                        <div class="tt-col-value hide-mobile">4d</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-n"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                How to use Team Listing?
                            </Link></h6>
                            <div class="row align-items-center no-gutters hide-desktope">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span class="tt-color09 tt-badge">social</span></Link>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">5d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color09 tt-badge">social</span></div>
                        <div class="tt-col-value hide-mobile">324</div>
                        <div class="tt-col-value tt-color-select hide-mobile">163</div>
                        <div class="tt-col-value hide-mobile">2.3k</div>
                        <div class="tt-col-value hide-mobile">5d</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-r"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-locked"></use>
                                </svg>
                                Can’t change image on main page of Coaching Theme
                            </Link></h6>
                            <div class="row align-items-center no-gutters hide-desktope">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span
                                            class="tt-color02 tt-badge">video</span></Link>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">5d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color02 tt-badge">video</span></div>
                        <div class="tt-col-value hide-mobile">879</div>
                        <div class="tt-col-value tt-color-select hide-mobile">237</div>
                        <div class="tt-col-value hide-mobile">4.5k</div>
                        <div class="tt-col-value hide-mobile">5d</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-b"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                Documentation on Glitch package usage?
                            </Link></h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span
                                            class="tt-color12 tt-badge">arts</span></Link>
                                        </li>
                                        <li><Link href="#"><span class="tt-badge">themeforest</span></Link></li>
                                        <li><Link href="#"><span class="tt-badge">elements</span></Link></li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">5d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color12 tt-badge">arts</span></div>
                        <div class="tt-col-value hide-mobile">726</div>
                        <div class="tt-col-value tt-color-select hide-mobile">246</div>
                        <div class="tt-col-value hide-mobile">7.6k</div>
                        <div class="tt-col-value hide-mobile">5d</div>
                    </div>
                    <div class="tt-item">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-a"></use>
                            </svg>
                        </div>
                        <div class="tt-col-description">
                            <h6 class="tt-title"><Link href="page-single-topic.html">
                                Woohoo! You’ve made it. Welcome to the Elite Club
                            </Link></h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-11">
                                    <ul class="tt-list-badge">
                                        <li class="show-mobile"><Link href="#"><span
                                            class="tt-color04 tt-badge">pets</span></Link>
                                        </li>
                                        <li><Link href="#"><span class="tt-badge">videohive</span></Link></li>
                                        <li><Link href="#"><span class="tt-badge">photodune</span></Link></li>
                                    </ul>
                                </div>
                                <div class="col-1 ml-auto show-mobile">
                                    <div class="tt-value">5d</div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-col-category"><span class="tt-color04 tt-badge">pets</span></div>
                        <div class="tt-col-value hide-mobile">674</div>
                        <div class="tt-col-value tt-color-select hide-mobile">128</div>
                        <div class="tt-col-value hide-mobile">1.3k</div>
                        <div class="tt-col-value hide-mobile">5d</div>
                    </div>
                    <div class="tt-row-btn">
                        <button class="btn-icon js-topiclist-showmore" type="button">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-load_lore_icon"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </UsersLayout>
</template>


