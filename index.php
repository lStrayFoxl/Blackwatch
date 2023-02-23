<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackwatch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/adaptation.css">
    <link rel="icon" href="img/BWicon.png" type="image/x-icon">
</head>
<body>

    <!-- Header section -->
    <header class="header">
        <div class="hat">
            <div class="countainer">
                <h2 class="article_hat">Black and <span class="yellow">yellow</span></h2>
                <div class="linkHat">
                    <div class="oneLink">
                        <a href="#models" class="link right">MODELS</a>
                    </div>
                    <div class="twoLink">
                        <a href="#purchase" class="link right">PURCHASE</a>
                    </div>
                    <div class="bottom">
                        <a href="page/aboutUs.html" class="link">ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="countainer">
            <div class="header_content">
                <div class="hatDescript">
                    <h1 class="articleHat">BLACKWATCH</h1>
                    <div class="descript">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus metus leo, 
                        aliquam nec ex sed, suscipit cursus lectus. Fusce dapibus cursus tristique. Vestibulum ex erat.
                    </div>
                </div>
                <div class="blackwatch_main"></div>
            </div>
        </div>
    </header>

    <!-- Main section -->
    <main class="mainSection">

        <!-- About the watch section -->
        <section class="aboutTheWatch">
            <div class="countainer">
                
                <h3 class="article">ABOUT THE WATCH</h3>
                <div class="description_watch">
                    <div class="descriptTheWatch">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue velit lectus, sed faucibus 
                        elit commodo at. Nulla facilisi. Nunc scelerisque nisl elementum elit bibendum, vel feugiat sapien elementum. 
                        Sed in mauris ut libero dignissim posuere eget et ante. Nunc vitae aliquam arcu. Donec pharetra enim vel vehicula 
                        vestibulum. Pellentesque malesuada risus ut augue lacinia gravida. Nullam tristique suscipit arcu ut tempus. Ut leo 
                        odio, tempus at magna nec, luctus consequat urna. Morbi a nisl tellus. Nulla enim dui, iaculis in nulla eu, pellentesque 
                        ultrices lectus. In sed pharetra neque, non ultrices erat. Ut ex odio, imperdiet sit amet rhoncus at, facilisis non ligula. 
                        Donec vitae consectetur nulla.
                    </div>
                    <div class="photo_watch"></div>
                </div>

            </div>
        </section>

        <!-- Models section -->
        <section class="models" id="models">
            <div class="countainer">

                <h3 class="article">MODELS</h3>
                <div class="model-x">
                    <div class="photoModelX"></div>
                    <div class="title">BLACKWATCH-X</div>
                    <div class="descriptModelX">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu mattis neque, in luctus enim. 
                        Nulla facilisi. Nullam suscipit augue at commodo molestie. Ut tincidunt lectus ligula, vitae porttitor 
                        ligula vulputate at. Nam a orci nunc. Quisque ut mi eu augue mattis lobortis nec ut ligula. Maecenas 
                        augue magna, porta.
                    </div>
                </div>

                <div class="model-y">
                    <div class="photoModelY"></div>
                    <div class="title">BLACKWATCH-Y</div>
                    <div class="descriptModelY">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu mattis neque, in luctus enim. 
                        Nulla facilisi. Nullam suscipit augue at commodo molestie. Ut tincidunt lectus ligula, vitae porttitor 
                        ligula vulputate at. Nam a orci nunc. Quisque ut mi eu augue mattis lobortis nec ut ligula. Maecenas 
                        augue magna, porta.
                    </div>
                </div>

            </div>
        </section>

        <!-- Purchase section -->
        <section class="purchase" id="purchase">
            <div class="countainer">
                
                <h3 class="article">PURCHASE</h3>
                <div class="errMessage" id="errMessage">
                    <span class="error">Data not found. Enter data into the form.</span>
                </div>
                <form action="assets/handler.php" method="get" class="form" name="formPurchape">
                    <div class="inputFormInfo">
                        <div class="collum1">
                            <label for="enterName" class="labelForm">NAME</label><br>
                            <input type="text" id="enterName" class="inputForm" name="enterName" onfocus="(disableErrMess())"><br><br>
                            <label for="enterSurname" class="labelForm">SURNAME</label><br>
                            <input type="text" id="enterSurname" class="inputForm" name="enterSurname" onfocus="(disableErrMess())"><br><br>
                            <label for="enterPhone" class="labelForm">PHONE NUMBER</label><br>
                            <input type="text" id="enterPhone" class="inputForm" name="enterPhone" onfocus="(disableErrMess())">
                        </div>
                        
                        <div class="collum2">
                            <label for="enterAddress" class="labelForm">ADDRESS</label><br>
                            <input type="text" id="enterAddress" class="inputForm" name="enterAddress" onfocus="(disableErrMess())"><br><br>
                            <label for="enterModel" class="labelForm">MODEL</label><br>
                            <select id="enterModel" class="selectForm inputForm" name="enterModel" onfocus="(disableErrMess())">
                                <option selected class="none"></option>
                                <option value="modelX" class="modelX">Blackwatch-X</option>
                                <option value="modelY" class="modelY">Blackwatch-Y</option>
                            </select><br>
                        </div>
                    </div>
                    
                    <div class="btnForm">
                        <button type="button" id="purchaseBtn" class="butPurchase" name="purchaseBtn">PURCHASE</button>
                    </div>

                    <!-- Modal Input Window -->
                    <div class="modal" id="dataValidation">
                        <div class="modal_content">
                            <div class="dataPurchase">
                                <div class="mTitle">Confirmation of an order</div>
                                <div class="data">

                                    <div class="dataConfirm">
                                        <span class="dataName">Name:</span>
                                        <span class="textdata" id="dataName"></span>
                                    </div>
                                    <div class="dataConfirm">
                                        <span class="dataName">Surname:</span>
                                        <span class="textdata" id="dataSurname"></span>
                                    </div>
                                    <div class="dataConfirm">
                                        <span class="dataName">Phone number:</span>
                                        <span class="textdata" id="dataPhone"></span>
                                    </div>
                                    <div class="dataConfirm">
                                        <span class="dataName">Address:</span>
                                        <span class="textdata" id="dataAddress"></span>
                                    </div>
                                    <div class="dataConfirm">
                                        <span class="dataName">Modal:</span>
                                        <span class="textdata" id="dataModel"></span>
                                    </div>
                                    <div class="buttonModal">
                                        <button type="submit" class="butConfirm" name="butConfirm">CONFIRM</button>
                                        <button type="button" id="butCancel" class="butCancel">CANCEL</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </section>

    </main>

    <!-- Footer section -->
    <footer class="footer">
        <div class="countainer">

            <div class="info">
                <div class="articleInf">Information</div>
                <a href="#models" class="linkFooter">MODELS</a><br><br>
                <a href="#purchase" class="linkFooter">PURCHASE</a><br><br>
                <a href="page/aboutUs.html" class="linkFooter">ABOUT US</a>
            </div>

            <div class="contact">
                <div class="articleCont">Contact details</div>
                <span class="number">+7956465-65-47</span>
                <span class="number">+7956465-65-47</span><br class="indent"><br class="indent">
                <span class="number">+7956465-65-47</span>
                <span class="number">+7956465-65-47</span>
            </div>
        </div>
    </footer>

    <!-- Connecting to js -->
    <script src="script.js"></script>
</body>
</html>