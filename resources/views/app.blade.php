<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div>
        <header class="page-header page-header-sizing">
            <h1>OtaKunnect</h1>
        </header>
        <main class="main-login" id="app">
            <login-form></login-form>
            <div class="main-login-about">
                <h4><span >What are we?</span></h4>
                <p><mark>We are anime fans who do our best to bring each other a lot closer. Using our website, you can set up sale for all of your weeaboo goods with ease for any upcoming conventions. At the same time, you can purchase items in advance before the conventions begins; so, you can just simply pick up the goods once you reach the shop in the convention.</mark></p>
            </div>
            {{-- <img src="img/login/Group-of-Characters.png" alt="not loaded"> --}}

        </main>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>