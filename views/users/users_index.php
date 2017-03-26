<style>
    #btnSubmit{
        background: #212F40;
    }
</style>
<body>
    <nav class="horizontal">
        <ul>
            <li><a href="#"><?=__("Home")?></a></li>
            <li><a href="#"><?=__("About Us")?></a></li>
            <li><a href="#"><?=__("Our Work")?></a></li>
            <li><a href="#"><?=__("Helping")?></a></li>
            <li class="language"><a href="users?language=et">EST</a></li>
            <li class="language"><a href="users?language=en">ENG</a></li>
        </ul>
    </nav>



    <div class="image">
        <img src="assets/images/lion.jpg" alt="lions">

        <h2><span><?=__("Donate For Wild Cats")?><span class='spacer'></span><br /><span class='spacer'></span><?=__("Your gift today will help Panthera protect wild cats.")?></span></h2>

        <button type="button" id="btn" class="btn btn-lg" data-toggle="modal" data-target="#popUpWindow">Log In</button>
        <a id="btn" class="btn btn-primary btn-lg" href="logout"><?=__("Log Out")?></a>
    </div>

</body>