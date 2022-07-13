<header>
    <div class="container">
        <div class="top-head-div">
            <div class="text">
                <p>DC POWER℠VISA®</p>
                <p>ADDITIONAL DC SITES</p>
            </div>
        </div>

        <div class="mid-head-div">
            <div class="internal-div">
                <img src="images/dc-logo.png" alt="">
                @foreach ($navBar as $nav)
                    <li>
                        <a href="">{{$nav['navName']}}</a>
                    </li>
                @endforeach

                <input type="text" placeholder="Search" name="" id="">
            </div>
        </div>

        <div class="bot-head-div">

        </div>
    </div>
</header>
