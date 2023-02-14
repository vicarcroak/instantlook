<script setup>
// Import External JS File
import '../../../../../public/assets/users/js/bundle.js'

// Import Layout
import UsersLayout from "@/Layouts/UsersLayout.vue";

// Import Component
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <UsersLayout title="Subscription">
        <section class="hero-section">
            <h1>Choose Your Subscription Plan</h1>
            <p>Get access to all of our amazing features and benefits with a simple subscription.</p>
        </section>

        <!-- Plan section -->
        <section class="plan-section">
            <div class="plan-card">
                <h2>Basic Plan</h2>
                <p>$9.99/month</p>
                <div class="plan-description">
                    <p>Access to all basic features</p>
                </div>
                <div class="btn-group">
                    <button>Subscribe</button>
                </div>
            </div>
            <div class="plan-card">
                <h2>Premium Plan</h2>
                <p>$19.99/month</p>
                <div class="plan-description">
                    <p>Access to all basic and premium features</p>
                </div>
                <div class="btn-group">
                    <button>Subscribe</button>
                </div>
            </div>
            <div class="plan-card">
                <h2>Pro Plan</h2>
                <p>$29.99/month</p>
                <div class="plan-description">
                    <p>Access to all basic, premium, and pro features</p>
                </div>
                <div class="btn-group">
                    <button>Subscribe</button>
                </div>
            </div>
        </section>
    </UsersLayout>
</template>

<style scoped>
/* Add some styles for the page */
.hero-section {
    background-color: #f2f2f2;
    padding: 50px 0;
    margin-top: 70px;
    text-align: center;
}

.hero-section h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.plan-section {
    display: flex;
    justify-content: center;
    margin-top: 80px;
    flex-wrap: wrap;
}

.plan-card {
    background-color: #ffffff;
    width: 300px;
    height: 400px;
    padding: 40px;
    text-align: center;
    margin: 0 30px 20px;
}

.plan-card h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.plan-card p {
    font-size: 18px;
    margin-bottom: 20px;

}

.plan-card .btn-group {
    display: flex;
    justify-content: center;
}

.plan-card button {
    background-color: #4CAF50;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
}

.plan-description {
    display: flex;
    height: 160px;
    align-items: center;
}

/* Add some styles for responsive design */
@media only screen and (max-width: 768px) {
    .plan-card {
        width: 90%;
    }

    .hero-section h1 {
        line-height: 45px;
    }
}
</style>
