<style>
    html {
        scroll-behavior: smooth;
    }

    /* body {
        background-image: url('https://img.freepik.com/free-photo/diverse-group-friends-summer-shoot_53876-47015.jpg?w=740&t=st=1683052300~exp=1683052900~hmac=dd9836207236754aa706f0cf9570a892004d899bf584e812db8f0b1e15c0da5a');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-color: rgba(255, 255, 255, 0.5);
    } */

    aside {
        width: 30%;
        padding-left: 15px;
        margin-left: 15px;
        float: right;
        font-style: italic;
        background-color: lightgray;
    }

    .bg-black {
        background: linear-gradient(109.6deg, rgb(36, 45, 57) 11.2%, rgb(16, 37, 60) 51.2%, rgb(0, 0, 0) 98.6%);

    }

    .text-white {
        color: white;
    }

    .text-black {
        color: black;
    }

    .bg-primary-orange {
        background-color: #fec503;
    }

    .primary-orange {
        color: #fec503;
    }

    .org-btn {
        border: 1px solid #fec503;
        color: #fec503;
    }

    .org-btn:hover {
        background-color: #fec503;
        color: white;
    }

    .light-grey {
        color: #6c757d;
    }

    .bg-light-grey {
        background-color: #6c757d:
    }

    .social-buttons-circle-dark-grey {
        background: #1a1d20;
    }

    /* img css */

    /* .testimonals-container img{
        width:300px;
        
        } */

    /* hero */
    .center {
        text-align: center;
    }

    /*  Card hover */
    .move-up:hover {
        background-color: #fec503;
        color: white;
        transition: all .5s;
        transform: translateY(-10px);
    }

    .ng-mrg-t {
        margin-top: -50px;
    }


    /* Footer code */
    .foot {
        /*   position: relative; */
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #1a1d20;
        color: white;
        text-align: center;
        top: 75px;
    }

    a {
        color: #6c757d;
    }

    a:hover {
        color: #fec503;
        text-decoration: none;
    }

    ::selection {
        background: #fec503;
        text-shadow: none;
    }

    .footer-column {
        text-align: center;
    }

    .nav-link {
        padding: 0.1rem 0;
    }

    span.nav-link {
        color: #6c757d;
    }

    span.nav-link:hover {
        color: #fec503;
    }

    span.footer-title {
        font-size: 14px;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
    }

    .fas {
        margin-right: 0.5rem;
    }

    footer {
        padding: 2rem 0;
        background-color: #212529;

    }


    ul.social-buttons {
        margin-bottom: 0;
    }

    ul.social-buttons li a:active,
    ul.social-buttons li a:focus,
    ul.social-buttons li a:hover {
        background-color: #fec503;
    }

    ul.social-buttons li a {
        font-size: 20px;
        line-height: 40px;
        display: block;
        width: 40px;
        height: 40px;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        color: #fff;
        border-radius: 100%;
        outline: 0;
        background-color: #1a1d20;
    }

    footer .quick-links {
        font-size: 90%;
        line-height: 40px;
        margin-bottom: 0;
        text-transform: none;
        font-family: Montserrat, "Helvetica Neue", Helvetica, Arial, sans-serif;
    }


    .copyright {
        color: white;
    }

    .fa-ellipsis-h {
        color: white;
        padding: 2rem 0;
    }
</style>


<div class="hero-container " id="hero-sec">
    <div class="container-fluid bg-black">
        <div class="row d-flex">
            <div class="col align-middle">
                <div class="px-2 py-2">
                    <img src="https://img.freepik.com/free-vector/happy-freelancer-with-computer-home-young-man-sitting-armchair-using-laptop-chatting-online-smiling-vector-illustration-distance-work-online-learning-freelance_74855-8401.jpg?w=900&t=st=1667037491~exp=1667038091~hmac=7c71ea8afc8f3cc8065c5ccc05d105e3c8a7b76f0133016cb210a7882dc19611" class="img-fluid" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="px-5 py-5 mt-5">
                    <div class="px-2 py-2 align-middle">
                        <h4 class="text-light">Get all your needs Here</h4>
                        <p class="text-light"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..</p>
                    </div>
                    <div class="px-2 py-2">
                        <a href="<?= $this->config->base_url("event/index") ?>" type="button" class="btn btn-outline-secondary">Checkout Our Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
    section {
        margin-top: 1.5rem;

    }


    .about_header {
        text-align: center;
    }

    .about {
        height: 30vh;
        padding: 0.5rem 7.5rem;
        text-align: center;
        margin-bottom: 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .about>div {
        width: 50%;
    }


    .packages {
        height: 40vh;
        background-color: #dddd;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0.5rem 7.5rem;
    }

    .package {
        margin-right: 7rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 15rem;
        text-align: center;
        box-sizing: border-box;
    }

    .icon1,
    .icon2,
    .icon3 {
        font-size: 36px;
    }

    .icon1 {
        color: #297dc2
    }

    .icon2 {
        color: #297dc2
    }

    .icon3 {
        color: #297dc2;
    }

    .button {
        background-color: white;
        color: #212427;
        border: 2px solid #297dc2;
        cursor: pointer;
        padding: 0.5rem 2rem;
        border-radius: 25px;
        transition: .3s;
    }

    .button:hover {
        background-color: #297dc2;
        color: white;
    }

    .icon_arrow {
        margin-left: 1rem;
        color: #297dc2;
        margin-left: 1rem;

    }

    .icon_arrow:hover {
        display: none;
    }
</style>
<section class="about">
    <h2 class="about_header">Xpert Events</h2>
    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto voluptatum eum expedita voluptates. Voluptates a eum libero doloribus corrupti ipsum! Magnam aperiam natus accusantium dolorum voluptate iste optio nihil quis nemo nobis velit eos omnis obcaecati eligendi eum inventore autem, est, sequi, quae temporibus aliquam beatae. Sed sunt ab quis.</p>
    </div>
</section>
<section class="packages bg-black text-light">
    <div class="package">
        <i class="fa-solid fa-gift icon1"></i>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, nemo.</p>
        <button class="button">Silver Event <i class="fa-solid fa-angle-right icon_arrow"></i></button>
    </div>
    <div class="package">
        <i class="fa-solid fa-gift icon2"></i>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, nemo.</p>
        <button class="button">Gold Event <i class="fa-solid fa-angle-right icon_arrow"></i></button>
    </div>
    <div class="package">
        <i class="fa-solid fa-gift icon3"></i>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, nemo.</p>
        <button class="button">Platinum Event <i class="fa-solid fa-angle-right icon_arrow"></i></button>
    </div>
</section>