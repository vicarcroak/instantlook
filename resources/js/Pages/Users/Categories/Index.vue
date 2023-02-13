<script setup>
// Import Component
import { Link } from '@inertiajs/inertia-vue3';

// Import External JS File
import '../../../../../public/assets/users/js/bundle.js'

// Import Layout
import UsersLayout from "@/Layouts/UsersLayout.vue";
</script>

<template>
    <UsersLayout title="Categories">
        <main id="tt-pageContent">
            <div class="tt-custom-mobile-indent container">
                <div class="tt-categories-title">
                    <div class="tt-title">Categories</div>
                    <div class="tt-search">
                        <form class="search-wrapper">
                            <div class="search-form">
                                <input class="tt-search__input" placeholder="Search Categories" type="text">
                                <button class="tt-search__btn" type="submit">
                                    <svg class="tt-icon">
                                        <use xlink:href="#icon-search"></use>
                                    </svg>
                                </button>
                                <button class="tt-search__close">
                                    <svg class="tt-icon">
                                        <use xlink:href="#icon-cancel"></use>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tt-categories-list">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color01 tt-badge">politics</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 1,245</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <Link class="tt-btn-icon" href="#">
                                        <i class="tt-icon">
                                            <svg>
                                                <use xlink:href="#icon-favorite"></use>
                                            </svg>
                                        </i>
                                    </Link>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color02 tt-badge">video</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 368</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">movies</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">new movies</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">marvel movies</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">netflix</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">prime</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color03 tt-badge">exchange</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 381</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color04 tt-badge">pets</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 98</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color05 tt-badge">music</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 28</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color06 tt-badge">movies</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 74</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color15 tt-badge">nature</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 1,245</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color07 tt-badge">video games</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 1,245</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color08 tt-badge">youtube</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 1,245</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color09 tt-badge">social</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 1,245</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color10 tt-badge">science</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 1,245</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color11 tt-badge">entertainment</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 1,245</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color04 tt-badge">pets</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 1,245</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color05 tt-badge">music</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 1,245</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-item">
                                <div class="tt-item-header">
                                    <ul class="tt-list-badge">
                                        <li><Link href="#"><span class="tt-color06 tt-badge">movies</span></Link> </li>
                                    </ul>
                                    <h6 class="tt-title"><Link href="page-categories-single.html">Threads - 1,245</Link> </h6>
                                </div>
                                <div class="tt-item-layout">
                                    <div class="tt-innerwrapper">
                                        Lets discuss about whats happening around the world politics.
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <h6 class="tt-title">Similar TAGS</h6>
                                        <ul class="tt-list-badge">
                                            <li><Link href="#"><span class="tt-badge">world politics</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">human rights</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">trump</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">climate change</span></Link> </li>
                                            <li><Link href="#"><span class="tt-badge">foreign policy</span></Link> </li>
                                        </ul>
                                    </div>
                                    <div class="tt-innerwrapper">
                                        <Link class="tt-btn-icon" href="#">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-favorite"></use>
                                                </svg>
                                            </i>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="tt-row-btn">
                                <button class="btn-icon js-topiclist-showmore" type="button">
                                    <svg class="tt-icon">
                                        <use xlink:href="#icon-load_lore_icon"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </UsersLayout>
</template>
