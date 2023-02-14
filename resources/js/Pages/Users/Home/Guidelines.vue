<script setup>
// Import External JS File
import '../../../../../public/assets/users/js/bundle.js'

// Import Layout
import UsersLayout from "@/Layouts/UsersLayout.vue";

// Import Component
import {Link} from '@inertiajs/inertia-vue3';
</script>

<template>
    <UsersLayout title="Guidelines">
        <main class="tt-offset-small" id="tt-pageContent">
            <div class="container">
                <div class="tt-tab-wrapper">
                    <div class="tt-wrapper-inner">
                        <ul class="nav nav-tabs pt-tabs-default" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link show active" data-toggle="tab" href="#tt-tab-01"
                                   role="tab"><span>About</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tt-tab-02"
                                   role="tab"><span>Guidelines</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tt-tab-03" role="tab"><span>FAQ</span></a>
                            </li>
                            <li class="nav-item tt-hide-xs">
                                <a class="nav-link" data-toggle="tab" href="#tt-tab-04" role="tab"><span>Terms of Service</span></a>
                            </li>
                            <li class="nav-item tt-hide-md">
                                <a class="nav-link" data-toggle="tab" href="#tt-tab-05" role="tab"><span>Privacy</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane show fade active" id="tt-tab-01" role="tabpanel">
                            <div class="tt-layout-tab">
                                <div class="tt-wrapper-inner">
                                    <h2 class="tt-title">
                                        About Forum 19
                                    </h2>
                                    Forum 19 is a community of creatives who come together to share ideas and help each
                                    other
                                    succeed.
                                    <h3 class="tt-title">
                                        Admins
                                    </h3>
                                    <div class="tt-list-avatar">
                                        <div class="row">
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-n"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Nitish</h6>
                                                        <div class="tt-value">@nitish92</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-t"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Taylor</h6>
                                                        <div class="tt-value">@tails23</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-k"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Kevin</h6>
                                                        <div class="tt-value">@kevin27</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-g"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Green</h6>
                                                        <div class="tt-value">@green63</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-d"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Dylan</h6>
                                                        <div class="tt-value">@dylan89</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-p"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Peterson</h6>
                                                        <div class="tt-value">@dylan89</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="tt-title">
                                        Moderators
                                    </h4>
                                    <div class="tt-list-avatar">
                                        <div class="row">
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-a"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">azyrus</h6>
                                                        <div class="tt-value">@azyrus21</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-s"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Smith</h6>
                                                        <div class="tt-value">@smith45</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-u"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Usain</h6>
                                                        <div class="tt-value">@bolt24</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-l"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Larry</h6>
                                                        <div class="tt-value">@larry74</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-j"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Jordan</h6>
                                                        <div class="tt-value">@jordan36</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-c"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Clive</h6>
                                                        <div class="tt-value">@clive45</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-m"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Mitchell</h6>
                                                        <div class="tt-value">@mitchell73</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-v"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Vans</h6>
                                                        <div class="tt-value">@vans49</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-p"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Baker</h6>
                                                        <div class="tt-value">@baker65</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-f"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Foster</h6>
                                                        <div class="tt-value">@foster87</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <a class="tt-avatar" href="#">
                                                    <div class="tt-col-icon">
                                                        <svg class="tt-icon">
                                                            <use xlink:href="#icon-ava-o"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="tt-col-description">
                                                        <h6 class="tt-title">Olly</h6>
                                                        <div class="tt-value">@olly39</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive-sm tt-indent-top">
                                    <table class="table-01">
                                        <caption>Site Statistics</caption>
                                        <thead>
                                        <tr>
                                            <th>Topic</th>
                                            <th>All Time</th>
                                            <th>Last 7</th>
                                            <th>Last 30</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-zebra">
                                        <tr>
                                            <td>Topics</td>
                                            <td>51.8k</td>
                                            <td>263</td>
                                            <td>1.2k</td>
                                        </tr>
                                        <tr>
                                            <td>Posts</td>
                                            <td>624k</td>
                                            <td>3.9k</td>
                                            <td>15.4k</td>
                                        </tr>
                                        <tr>
                                            <td>Users</td>
                                            <td>123k</td>
                                            <td>698</td>
                                            <td>3.3k</td>
                                        </tr>
                                        <tr>
                                            <td>Active Users</td>
                                            <td>--</td>
                                            <td>2.8k</td>
                                            <td>7.2k</td>
                                        </tr>
                                        <tr>
                                            <td>Likes</td>
                                            <td>224k</td>
                                            <td>2.5k</td>
                                            <td>9.2k</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tt-wrapper-inner tt-indent-top">
                                    <h4 class="tt-title">
                                        Contact Us
                                    </h4>
                                    Please feel free to leave us a message at sample@sample.com
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tt-tab-02" role="tabpanel">
                            <div class="tt-wrapper-inner tt-layout-tab">
                                <h6 class="tt-title tt-size-lg">
                                    Community Rules
                                </h6>
                                <p>Envato is a community of creatives who come together to share ideas and help each
                                    other
                                    succeed.</p>
                                <p>
                                    We invite you to join in, but do have a few rules. The rules and values below exist
                                    to help
                                    you understand what it means to be a member of the community and cover all aspects
                                    of
                                    community interaction on Envato forums, blogs, contests and events. We’re committed
                                    to
                                    upholding them, and we hope you will be too.
                                </p>
                                <dl class="dl-layout-01">
                                    <dt>We believe when the community succeeds, we succeed.</dt>
                                    <dd>
                                        We love healthy competition, but feel we’re all better off when we’re sharing
                                        ideas,
                                        knowledge and skills and helping one another. We come to give back, not
                                        shamelessly
                                        self-promote.
                                    </dd>
                                    <dt>
                                        We’re a global community of many types of people.
                                    </dt>
                                    <dd>
                                        We are from all corners of the earth and a glorious melting pot of creative
                                        fields,
                                        skill levels, cultures, religions and more. We think the opportunity for anyone
                                        to
                                        achieve success no matter where they come from leads to a more meritocratic and
                                        equal
                                        world.
                                    </dd>
                                    <dt>
                                        We celebrate individuality and embrace diversity.
                                    </dt>
                                    <dd>
                                        We encourage different viewpoints as long as they’re presented in a way that’s
                                        constructive and respectful. Personal attacks as well as any behavior that is
                                        hateful or
                                        offensive based on race, ethnicity, national origin, religion, gender or sexual
                                        orientation are not okay.
                                    </dd>
                                    <dt>
                                        We’re excited about and inspired by collaboration.
                                    </dt>
                                    <dd>
                                        By collaborating with people from different backgrounds, we are exposed to new
                                        ideas and
                                        perspectives that fuel the creative process and innovation.
                                    </dd>
                                    <dt>
                                        We’re always learning because we’re hungry and curious.
                                    </dt>
                                    <dd>
                                        We’re all students and teachers. Our world moves super fast and we stay ahead of
                                        the
                                        pack by pushing and pulling each other forward. We don’t follow the trends, we
                                        make
                                        them.
                                    </dd>
                                </dl>
                                <h6 class="tt-title">We follow a few hard rules. Please DON’T:</h6>
                                <ul class="tt-list-dot tt-indent-top01">
                                    <li>Participate in or encourage personal attacks, call out another user and/or
                                        sabotage a
                                        user’s item.
                                    </li>
                                    <li>Discuss politics, pornography, religion or competitive marketplaces.</li>
                                    <li>Spam.</li>
                                    <li>Troll or flame.</li>
                                    <li>Link to freebies in categories of items that are sold on Market.</li>
                                    <li>Blatantly self-promote (see A Note on Self-promotion below).</li>
                                    <li>Solicit for any kind of material support, donations, aid, etc.</li>
                                    <li>Discuss pricing of items/services in an author-driven pricing category or on
                                        Studio.
                                    </li>
                                    <li>Talk about or link to piracy, warez, illegal activity of any kind, or competitor
                                        sites
                                        or items.
                                    </li>
                                    <li>Request or post personal (or identifying) information about any user or any
                                        other
                                        person.
                                    </li>
                                    <li>Post anything that would infringe on another person’s intellectual property
                                        rights.
                                    </li>
                                </ul>
                                <p class="tt-indent-top02">
                                    We believe all ideas can (and should) be scrutinised, constructively.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tt-tab-03" role="tabpanel">
                            <div class="tt-wrapper-inner tt-layout-tab">
                                <h6 class="tt-title tt-size-lg">
                                    FAQ
                                </h6>

                                <p>
                                    Forum websites have become a popular platform for online communities to share their
                                    thoughts, opinions, and experiences on a wide range of topics. If you're new to
                                    forums or looking to join one, you might have many questions about how to use the
                                    site and participate in discussions. This is where the FAQ (Frequently Asked
                                    Questions) section comes in handy.
                                </p>

                                <p>
                                    The FAQ section is a comprehensive resource that answers common questions about the
                                    site's features, functionality, and etiquette. By taking the time to read through
                                    the FAQ, you can quickly get up to speed on how the forum works and avoid making
                                    mistakes that could detract from your experience.
                                </p>

                                <p>
                                    Here are some of the most common questions answered in the FAQ section of a forum
                                    website:
                                </p>

                                <dl class="dl-layout-01">
                                    <dt>1. How do I create a new account on the forum?</dt>
                                    <dd>
                                        <b>Answer:</b> To create a new account, click on the "Register" or "Sign Up"
                                        button
                                        located on the forum's homepage or navigation bar. Fill out the required
                                        information, such as your username, email address, and password, and then submit
                                        the form. You should then receive an email to verify your account.
                                    </dd>

                                    <dt>2. How do I post a new thread or reply to an existing one?</dt>
                                    <dd>
                                        <b>Answer:</b> To post a new thread, click on the appropriate forum category and
                                        then
                                        click on the "New Thread" button. Type in a title and your message in the
                                        provided text fields, and then hit "Post." To reply to an existing thread,
                                        simply click on the thread and then hit the "Reply" button.
                                    </dd>

                                    <dt>3. How do I edit or delete my post?</dt>
                                    <dd>
                                        <b>Answer:</b> To edit your post, find the post you want to edit and click on
                                        the "Edit" button. Make the desired changes to your post and then hit "Save." To
                                        delete your post, click on the "Delete" button and confirm the action.
                                    </dd>

                                    <dt>4. How do I upload an image or file to my post?</dt>
                                    <dd>
                                        <b>Answer:</b> To upload an image or file to your post, click on the "Upload
                                        File" or "Insert Image" button while composing your post. Choose the file from
                                        your computer and hit "Upload."
                                    </dd>

                                    <dt>5. How do I report inappropriate content or behavior on the forum?</dt>
                                    <dd>
                                        <b>Answer:</b> To report inappropriate content or behavior, click on the
                                        "Report" button located next to the post in question. Fill out the form with a
                                        brief description of the issue, and then hit "Submit." The forum staff will
                                        review your report and take appropriate action.
                                    </dd>

                                    <dt>6. How do I change my profile picture or username?</dt>
                                    <dd>
                                        <b>Answer:</b> To change your profile picture, go to your profile settings and
                                        click on the "Change Picture" button. Select the image file from your computer
                                        and hit "Upload." To change your username, go to your profile settings and edit
                                        the "Username" field. Save the changes to update your username.
                                    </dd>

                                    <dt>7. How do I search for specific topics or posts on the forum?</dt>
                                    <dd>
                                        <b>Answer:</b> To search for specific topics or posts, use the search bar
                                        located on the forum's homepage or navigation bar. Type in keywords or phrases
                                        related to what you're looking for, and then hit "Search."
                                    </dd>

                                    <dt>8. How do I subscribe to receive notifications for new posts in a thread?</dt>
                                    <dd>
                                        <b>Answer:</b> To subscribe to a thread, find the thread you want to subscribe
                                        to and click on the "Subscribe" button. You will then receive notifications for
                                        new posts in that thread.
                                    </dd>

                                    <dt>9. How do I use the private messaging feature on the forum?</dt>
                                    <dd>
                                        <b>Answer:</b> To use the private messaging feature, go to your inbox and click
                                        on the "New Message" button. Fill out the recipient, subject, and message
                                        fields, and then hit "Send." You can also access your messages by clicking on
                                        the "Inbox" button in the navigation bar.
                                    </dd>

                                    <dt>10. How do I reset my password if I forget it?</dt>
                                    <dd>
                                        <b>Answer:</b> To reset your password, click on the "Forgot Password" link
                                        located on the forum's login page. Enter your email address and follow the steps
                                        provided to reset your password.
                                    </dd>
                                </dl>

                                <p>
                                    In conclusion, the FAQ section of a forum website is a valuable resource for
                                    users to learn about the platform and participate in discussions. It provides
                                    answers to common questions about the site's features, functionality, and
                                    etiquette, helping users to quickly get up to speed and have a positive
                                    experience.
                                </p>

                                <p>
                                    By taking the time to read through the FAQ section, users can avoid common mistakes
                                    and take full advantage of the forum's features. Whether you're looking to post new
                                    threads, reply to existing ones, or simply learn more about the platform, the FAQ
                                    section is a great starting point.
                                </p>

                                <p style="margin-bottom: 25px">
                                    So if you're new to the forum or simply looking to improve your experience, be sure
                                    to check out the FAQ section and discover the power of knowledge!
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tt-tab-04" role="tabpanel">
                            <div class="tt-wrapper-inner tt-layout-tab">
                                <h6 class="tt-title tt-size-lg">
                                    Understanding the Terms of Service of a Forum Website
                                </h6>

                                <p>
                                    When using a forum website, it's important to understand and abide by the site's
                                    terms of service. The terms of service, also known as the user agreement, outline
                                    the rules and regulations for using the platform, and serve to protect both the
                                    website and its users.
                                </p>

                                <p>
                                    Here are some key elements that are typically included in a forum's terms of
                                    service:
                                </p>

                                <p>
                                    <b>User Conduct:</b> The terms of service will outline the acceptable behavior for
                                    users,
                                    including what types of content are allowed or prohibited. This can include
                                    guidelines around hate speech, spam, and personal attacks.
                                </p>

                                <p>
                                    <b>Ownership of Content:</b> The terms of service will typically outline who owns
                                    the
                                    content posted on the forum, including the website's right to use, modify, or delete
                                    posts.
                                </p>

                                <p>
                                    <b>Privacy Policy:</b> The terms of service will often include a privacy policy that
                                    outlines how the website collects, stores, and uses user data. This can include
                                    information about cookies, data sharing, and data protection.
                                </p>

                                <p>
                                    <b>Limitation of Liability:</b> The terms of service will typically include language
                                    that
                                    limits the website's liability for any harm that may arise from using the platform.
                                </p>

                                <p>
                                    <b>Dispute Resolution:</b> The terms of service will often include information about
                                    how
                                    disputes between the website and its users will be resolved, such as through
                                    mediation or arbitration.
                                </p>

                                <p>
                                    <b>Termination of Account:</b> The terms of service will outline the conditions
                                    under which
                                    a user's account may be terminated, including for violating the site's rules or for
                                    any other reason.
                                </p>

                                <p>
                                    <b>Intellectual Property Rights:</b> The terms of service may include information
                                    about the
                                    protection of intellectual property rights, including copyrights and trademarks.
                                    This can include guidelines around using content posted by others on the forum.
                                </p>

                                <p>
                                    <b>Advertising and Promotion:</b> The terms of service may outline the rules for
                                    advertising and promotion on the forum, including what types of promotions are
                                    allowed and how they should be conducted.
                                </p>

                                <p>
                                    <b>Third-Party Links:</b> The terms of service may include information about the use
                                    of
                                    third-party links on the forum, including the website's liability for any harm that
                                    may arise from following such links.
                                </p>

                                <p>
                                    <b>Modifications to the TOS:</b> The terms of service may include information about
                                    the
                                    website's ability to modify the agreement in the future, including the process for
                                    notifications and the effective date of any changes.
                                </p>

                                <p style="margin-bottom: 25px">
                                    By carefully reading and understanding the terms of service of a forum website,
                                    users can ensure they are using the platform in a way that is compliant with the
                                    site's rules and regulations. This can help to prevent disputes and ensure a
                                    positive user experience for everyone involved.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tt-tab-05" role="tabpanel">
                            <div class="tt-wrapper-inner tt-layout-tab">
                                <h6 class="tt-title tt-size-lg">
                                    Privacy Policy
                                </h6>

                                <p>
                                    At Instantlook, we are committed to protecting the privacy of our users.
                                    This privacy policy outlines how we collect, use, and protect user information on
                                    our forum.
                                </p>

                                <p>
                                    <b>1. Information Collection:</b> We collect personal information such as name,
                                    email
                                    address,
                                    and other contact information when users create an account or participate in
                                    discussions on our forum. We may also collect non-personal information such as IP
                                    address, browser type, and other technical information when users access our
                                    website.
                                </p>

                                <p>
                                    <b>2. Use of Information:</b> The information we collect may be used for a variety
                                    of
                                    purposes, including to provide users with a better experience on our forum, to
                                    improve our website, to respond to user inquiries, and to send notifications and
                                    other communications.
                                </p>

                                <p>
                                    <b>3. Sharing of Information:</b> We will not share personal information with third
                                    parties
                                    without the user's consent, except as required by law or to protect the rights,
                                    property, or safety of [Forum Website Name], its users, or others.
                                </p>

                                <p>
                                    <b>4. Security Measures:</b> We take appropriate security measures to protect
                                    against
                                    unauthorized access to or unauthorized alteration, disclosure, or destruction of
                                    data.
                                </p>

                                <p>
                                    <b>5. Data Retention:</b> We will retain user information for as long as needed to
                                    provide the
                                    services offered by our forum, or as required by law.
                                </p>

                                <p>
                                    <b>6. Changes to Privacy Policy:</b> We may update this privacy policy from time to
                                    time to
                                    reflect changes in our practices or to comply with applicable laws. Any changes will
                                    be posted on our website and will become effective upon posting.
                                </p>

                                <p>
                                    <b>7. Cookies:</b> The privacy policy may outline the use of cookies on the website
                                    and their
                                    purpose, such as to remember user preferences or to track user behavior.
                                </p>

                                <p>
                                    <b>8. User-Generated Content:</b> The privacy policy may specify how user-generated
                                    content
                                    such as posts, comments, and messages is handled, including how it is stored,
                                    shared, and protected.
                                </p>

                                <p>
                                    <b>9. Accessing and Modifying Personal Information:</b> The privacy policy may
                                    outline the
                                    process for users to access and modify their personal information, as well as how
                                    they can request the deletion of their account.
                                </p>

                                <p>
                                    <b>10. Data Transfer:</b> The privacy policy may outline how user data is
                                    transferred across
                                    borders, including the laws and regulations that govern such transfers and how they
                                    protect user privacy.
                                </p>

                                <p style="margin-bottom: 25px">
                                    By including these additional items in the privacy policy, a forum website can
                                    provide a comprehensive overview of how user data is collected, used, and protected
                                    on the platform. If you have any questions about our privacy policy, please contact us at <b>assistant@instantlook.com</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </UsersLayout>
</template>
