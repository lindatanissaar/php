<style>
    #btnSubmit{
        background: #212F40;
    }
</style>
<body>
    <nav class="horizontal">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Work</a></li>
            <li><a href="#">Helping</a></li>
            <li class="language"><a href="#">EST</a></li>
            <li class="language"><a href="#">ENG</a></li>
        </ul>
    </nav>

    <div class="image">
        <img src="assets/images/lion.jpg" alt="lions">

        <h2><span>Donate For Wild Cats<span class='spacer'></span><br /><span class='spacer'></span>Your gift today will help Panthera protect wild cats.</span></h2>

        <button type="button" id="btn" class="btn btn-lg" data-toggle="modal" data-target="#popUpWindow">Log In</button>

        <div class="modal fade" id="popUpWindow">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Log In</h3>
                        <p id="alertText"></p>
                    </div>

                    <!-- body (form) -->
                    <div class="modal-body">
                        <form role="form"  name="myForm">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" name="email" id="email" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Password" name="password" id="password">
                            </div>
                        </form>
                    </div>

                    <!-- button -->
                    <div class="modal-footer">
                        <input type="button" id="btnSubmit" class="btn btn-primary btn-block" value="Log In!">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>