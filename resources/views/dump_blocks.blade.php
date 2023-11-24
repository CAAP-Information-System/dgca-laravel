<style>
    .wonders-sect {
        margin-top: 8vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 3vh;
    }

    .circle-container {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
        position: relative;
        transition: border 0.2s ease, transform 0.5s ease;
        /* Added transition properties for smooth animation */
    }

    .circle-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        /* Set the image to be in front */
    }

    .text-below {
        text-align: center;
        margin-top: 30%;
        transform: translateY(100%);
        /* Initially move the text below the circle */
        opacity: 0;
        font-weight: bold;
        color: #ffff;
        transition: transform 0.5s ease, opacity 0.5s ease;
        line-height: 1vh;
        display: absolute;
    }

    .place {
        font-size: 30px;
        line-height: 25px;
    }

    .loc {
        font-weight: 200;
    }

    .circle-container:hover {
        transform: scale(1.2);
        padding: 10px;
        border: 15px solid #e2b100;
    }

    .circle-container:hover .circle-image {
        filter: blur(5px);
        /* Apply blur effect on hover */
    }

    .circle-container:hover .text-below {
        transform: translateY(0);
        /* Move the text upward on hover */
        opacity: 1;
    }
</style>

<section class="wonders-sect">
    <div class="circle-container">
        <img class="circle-image" src="https://verafiles.org/wp-content/uploads/2014/04/Cagsawa-ruins-with-Mayon-Volcano-at-the-background.-From-flickr..jpg" alt="Circle Image">
        <div class="text-below">
            <p class="place">Mayon Volcano</p>
            <p class="loc">Bicol</p>
        </div>
    </div>
    <div class="circle-container">
        <img class="circle-image" src="https://gttp.imgix.net/260574/x/0/chocolate-hills-in-bohol-how-to-go-best-time-to-go-activities-amp-tours-2.jpg?auto=compress%2Cformat&ch=Width%2CDPR&dpr=1&ixlib=php-3.3.0&w=883" alt="Circle Image">
        <div class="text-below">
            <p class="place">Chocolate Hills</p>
            <p class="loc">Bohol</p>
        </div>
    </div>
    <div class="circle-container">
        <img class="circle-image" src="https://dbijapkm3o6fj.cloudfront.net/resources/19076,1004,1,6,4,0,600,450/-4601-/20190114220334/rizal-park.jpeg" alt="Circle Image">
        <div class="text-below">
            <p class="place">Luneta Park</p>
            <p class="loc">Manila</p>
        </div>
    </div>
    <div class="circle-container">
        <img class="circle-image" src="https://lp-cms-production.imgix.net/2019-06/GettyImages-483535221_super.jpg" alt="Circle Image">
        <div class="text-below">
            <p class="place">Boracay</p>
            <p class="loc">Aklan</p>
        </div>
    </div>
    <div class="circle-container">
        <img class="circle-image" src="https://www.tripsavvy.com/thmb/zVjvBeG_XRv3zwVeq3A_R_TtMfU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-515030857-599ff63e03f402001100ee1d-6218e3c18a3a4503a2a1fb183ce8ccfb.jpg" alt="Circle Image">
        <div class="text-below">
            <p class="place">Fort Santiago</p>
            <p class="loc">Manila</p>
        </div>
    </div>
    <div class="circle-container">
        <img class="circle-image" src="https://cdn.tatlerasia.com/asiatatler/i/ph/2021/05/14120924-untitled_cover_1085x694.png" alt="Circle Image">
        <div class="text-below">
            <p class="place">Vigan</p>
            <p class="loc">Ilocos Sur</p>
        </div>
    </div>
</section>
