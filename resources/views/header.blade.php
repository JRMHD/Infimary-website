<div class="py-md-5 py-4 border-bottom">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center">
                <a class="navbar-brand" href="{{ url('welcome') }}">
                    <img src="images/St. James Logo white.png" alt="St. James Infirmary Logo" style="max-height: 70px;">
                </a>
            </div>

            <div class="col-md-4 order-md-1 d-flex topper mb-md-0 mb-2 align-items-center text-md-right">
                <div class="icon d-flex justify-content-center align-items-center order-md-last">
                    <span class="icon-map"></span>
                </div>
                <div class="pr-md-4 pl-md-0 pl-3 text">
                    <p class="con">
                        <span>Free Call</span>
                        <span>+254 735 615 131</span>
                    </p>
                    <p class="con">St. James Infirmary Busia, Busia Town, Western Kenya</p>
                </div>
            </div>
            <div class="col-md-4 order-md-3 d-flex topper mb-md-0 align-items-center">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <div class="text pl-3 pl-md-3">
                    <p class="hr"><span>Open Hours</span></p>
                    <p class="time">
                        <span>24/7 Emergency Services Available</span>
                        <span id="clock"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateClock() {
        var now = new Date();
        var date = now.toDateString();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();

        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        var timeString = hours + ":" + minutes + ":" + seconds;
        document.getElementById("clock").innerHTML = date + " " + timeString;
    }

    setInterval(updateClock, 1000);
</script>
