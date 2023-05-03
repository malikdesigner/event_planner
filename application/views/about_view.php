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
    <h2 class="about_header">About us</h2>
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