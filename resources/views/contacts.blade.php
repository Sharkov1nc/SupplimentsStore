@extends('default')
@section('libsCSS')

@endsection
@section('content')

<picture>
<div class="container">
<img src="http://nutrientjournal.com/wp-content/uploads/2015/01/The_girl_at_the_gym_drinking_water_094943_-1680x500.jpg" >
<h1 class="center">Contact SupplementsStore</h1>
</div>
</picture>

<div class="contact-us-page__links">
        <div class="contact-us-page__link">
            <div class="contact-us-page__link-icon">
                <a href="#">
                <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dwf04d3a1e/images/contactus/icon-faq.svg">
                 </a>
            </div>
            <div>
                <h2 class="contact-us-page__link-title">Product FAQs</h2>
                <a href="#" class="button">FIND ANSWERS NOW</a>
            </div>
        </div>

        <div class="contact-us-page__link">
            <div class="contact-us-page__link-icon">
                <a href="#">
                <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dw767c574f/images/contactus/icon-shipping.svg">
                 </a>
            </div>
            <div>
                <h2 class="contact-us-page__link-title">Shipping &amp; Returns</h2>
                <a href="#" class="button">LEARN MORE</a>
            </div>
        </div>

        <div class="contact-us-page__link">
            <div class="contact-us-page__link-icon">
                <a href="#">
                <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dw1f31d01f/images/contactus/icon-warranty.svg">
                 </a>
            </div>
            <div>
                <h2 class="contact-us-page__link-title">Warranty</h2>
                <a href="#" class="button">LEARN MORE</a>
            </div>
        </div>

        <div class="contact-us-page__link">
            <div class="contact-us-page__link-icon">
                <a href="#">
                <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dwc2f2561b/images/contactus/icon-registration.svg">
                 </a>
            </div>
            <div>
                <h2 class="contact-us-page__link-title">Product Registration</h2>
                <a href="#" class="button">REGISTER YOUR PRODUCT</a>
            </div>
        </div>

        <div class="contact-us-page__link">
            <div class="contact-us-page__link-icon">
                <a href="#" target="_blank">
                <img src="https://www.yeti.com/on/demandware.static/-/Library-Sites-SiteGenesisSharedLibrary/default/dwf1858c53/images/contactus/icon-gift-card.svg">
                 </a>
            </div>
            <div>
                <h2 class="contact-us-page__link-title">Gift Card Balance</h2>
                <a href="#" class="button" target="_blank">CHECK YOUR BALANCE</a>
            </div>
        </div>
    </div>
    
    <div class="page-content-page-with-banner">
        <h2 class="Page-title-medium-text-center">
                STILL CAN'T FIND WHAT
        <br>
                YOU'RE LOOKING FOR ?
        </h2>
        <div class="send-email-button">
            <a href="https://yeti.formstack.com/forms/contactus?_ga=2.160417853.1486690747.1552917355-1615302747.1548081829" target="_blank" class="button">SEND US AN EMAIL</a>
        </div>
    </div>

    <div class="contact-us-page_footer">
        <div class="contact-us-page_footer-item">
                <p>
                <strong>Customer Service Team</strong>
                </p>
                <p>Monday - Friday</p>
                <p>8:00AM - 5:00PM CT</p>
                <p>
                <a href="#">888-888-8889</a>
                </p>
        </div>

        <div class="contact-us-page_footer-item">
                <p>
                <strong>Corporate Office</strong>
                </p>
                <p>random adress</p>
                <p>random adress</p>
        </div>

        <div class="contact-us-page_footer-item">
                <p>
                    <strong>SupplementsStore Store</strong>
                </p>
                <p>random street</p>
                <p>random city</p>
                <p>
                    <a href="#">888-888-8889</a>
                </p>
                <b>
                    <a href="#">More information</a>
                </b>
        </div>
    </div>
<style>
@import url('https://fonts.googleapis.com/css?family=Francois+One&display=swap');
@import url('https://fonts.googleapis.com/css?family=Bangers&display=swap');
    picture img{
    width: 1790px;
    height: 540px;
    }
    .container {
        width: 100%;
    }
    .contact-us-page__links{
    display:flex;
    flex-wrap: wrap;
    -webkit-box-align: center;
    align-items: center;
    justify-content: space-evenly;
    text-align: center;
    max-width: 1600px;
    margin: 0 auto;
    padding: 60px 40px;
    border-bottom: 2px solid #00263e;
    }
    .button{
    color: #00263e;
    font-size: 14px;
    line-height: 40px;
    border:2px solid #00263e;
    padding: 10px;
    min-width: 115px;
    }
    .button:hover{
        background-color:#00263e;
        color:white;
    }
    .button-transparent-bg {
    padding: 21px 38px 17px;
    border: 3px solid #fff;
    background: 0 0;
}
    .center {
    position: absolute;
    color:white;
    top: 27%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: 'Bangers', cursive;
    font-size: 70px;
    font-style:bold;
    text-shadow: 2px 2px black;
    }
    .medium-text-center {
    text-align: center!important;
    margin-bottom:21px;
    font-family: 'Anton', sans-serif;
    }
    .send-email-button{
        text-align:center!important;
    }
    h2{
        margin-bottom:18px;
    }
    .Page-title-medium-text-center{
        font-family: 'Francois One', sans-serif;
        font-weight: 400;
        text-align:center;
    }
    .page-content-page-with-banner{
        padding-bottom:80px;
        border-bottom: 2px solid #00263e;
    }
    .contact-us-page_footer {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    max-width: 1600px;
    margin: 0 auto;
    padding: 70px 0;
    border-top: 2px solid #00263e;
    text-transform: none;
    font-size:15px;
    }
    .contact-us-page_footer-item {
    max-width: 300px;
    margin: 0 50px 40px;
    text-align: center;
    }
    a{
        color:#00263e;
    }
    a:hover{
        color:#00263e;
    }

</style>

@endsection
@section('libsJS')

@endsection
