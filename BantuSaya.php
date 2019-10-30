<!DOCTYPE html>
<html>
    <head>
        <!--Semua berasal dari asus.com./id/-->
        <link rel="stylesheet" type="text/css" href="home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href = "css/bootstrap.min.css" rel = "stylesheet" type = "text/css">
        <title>zenbook13 kw 5</title>
        <?php
            header('Refresh: 5;url=Laptop.html');
        ?>
    </head>
    <body>
        <nav class="navbar-light bg-light navbar navbar-expand-md">
                <a href="Home.html"class="navbar-brand"><img src="asus.png" alt="susa logo" height="30"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MenuAtas"
                        aria-controls="MenuAtas" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="MenuAtas">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                                <a id="produk" class="nav-link menuText" href="#">Product</a>
                        </li>
                        <li class="nav-item">
                                <a id="what" class="nav-link menuText" href="#">What's Hot</a>
                        </li>
                        <li class="nav-item">
                                <a id="commercial" class="nav-link menuText" href="#">Commercial</a>
                        </li>
                        <li class="nav-item">
                                <a id="service"class="nav-link menuText" href="#">Service</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link menuText" href="#">ROG</a>
                        </li>
                        </ul>
                </div>
        </nav>
        <div id="produkMenu" class="produk">
            <div class="menuProduk">
                <ul>
                    <li id="phone">Phone</li>
                    <li id="laptop">Laptop & PC 2-in-1</li>
                    <li>Motherboards</li>
                    <li>Graphics Cards</li>
                    <li>Desktop & PC All-in-One</li>
                    <li>Display & Projector</li>
                    <li>Networking</li>
                    <li>Sound</li>
                    <li>Peripheral & Data Storage</li>
                    <li>Gaming</li>
                    <li>Power-Supply-Unit</li>
                    <li>Server & Wrokstation Komersial</li>
                </ul>
            </div>
            <div class="isiProduk">
                <div id="isiProdukPhone" class="isiProdukM">
                    <a href = "Laptop.html" class = laptopButton ><p>Phone</p></a>
                    <ul>
                        <li>Zenfone Max</li>
                        <li>Gaming Phone</li>
                        <li>ZenFone</li>
                        <li>ZenFone Live</li>
                        <li>ZenFone Selfie</li>
                        <li>ZenFone Go</li>
                    </ul>
                </div>
                <div id="isiProdukLaptop" class="isiProdukM">
                    <a href = "Laptop.html" class = laptopButton ><p>Laptop</p></a>
                    <ul>
                        <li>ZenBook</li>
                        <li>VivoBook</li>
                        <li>ROG</li>
                        <li>TUF-Series</li>
                        <li>FX-Series</li>
                        <li>ChromeBook</li>
                        <li>E-Series</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="whatM">
            <div class="satu">
                <img src="paint1.jpg" alt="gambar1">
                <p>Wow</p>
            </div>
            <div class="satu">
                <img src="paint2.jpg" alt="gambar2">
                <p>Lorem ipsum</p>
            </div>
            <div class="satu">
                <img src="paint3.jpg" alt="gambar3">
                <p>susa</p>
            </div>
        </div>
        <div id="komerM"class="produk">
            <div class="menuProduk">
                <ul>
                    <li>Overview</li>
                    <li>Produk</li>
                    <li>Business Size</li>
                    <li id="solution">Solution</li>
                    <li>Industry</li>
                </ul>
            </div>
            <div class="isiProduk">
                <div id="isiKomerSolution" class="isiProdukM">
                    <ul>
                        <li>Mobile Solution</li>
                        <li>Business Protection</li>
                        <li>Improve Performance</li>
                        <li>Enchance Communication</li>
                        <li>Green Office</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Servis">

        </div>
        <div class="rog">

        </div>
        <?php
            if (isset($_POST['submit'])) {
                if(isset($_POST['jenis'])||isset($_POST['apa'])||isset($_POST['hal'])||isset($_POST['bagaimana'])){
                        echo "<h2>Karena Anda memilih: </h2>";
                }
                if(isset($_POST['jenis'])){
                        echo "<h4>".$_POST['jenis'].",</h4><br>";
                }
                if(isset($_POST['apa'])){
                        echo "<h4>".$_POST['apa'].",</h4><br>";
                }
                if(isset($_POST['hal'])){
                        echo "<h4>".$_POST['hal'].",</h4><br>";
                }
                if(isset($_POST['bagaimana'])){
                        echo "<h4>".$_POST['bagaimana'].",</h4><br>";
                }
                if(isset($_POST['jenis'])||isset($_POST['apa'])||isset($_POST['hal'])||isset($_POST['bagaimana'])){
                        echo "<h2> Maka laptop ini adalah yang paling cocok buat anda!</h2>";  
                }
                else{
                        echo "<h2>Beli saja produk ini kalau anda bingung!</h2>";
                }
            }
            if(isset($_POST['saran'])){
                    echo"<h2>Kami cuma punya produk ini di beli saja</h2>";
            }
            
        ?>
        <hr>
        <h1 id = "top">ZenBook 13 UX333FN</h1>
        <hr>
        <h2>Finish/Color</h2>
        <h4>Royal Blue,Icicle Silver, Burgundy Red</h4>
        <hr>
        <h2>Operating System</h2>
        <h4><strong>Windows 10 Home</strong></h4>
        <hr>
        <h2>Processor</h2>
        <h4><strong>Intel Core i7-8565U processor</strong></h4>
        <h4>1.8GHz quad-core with Turbo Boost (up to 4.6 GHz) and 8MB cache</h4>
        <h4><strong>Intel Core i5-8265U processor</strong></h4>
        <h4>1.6GHz quad-core with Turbo Boost (up to 3.9 GHz) and 6MB cache</h4>
        <hr>
        <h2>Graphics</h2>
        <h4><strong>NVIDIA GeForce MX150</strong></h4>
        <h4>2GB GDDR5 VRAM</h4>
        <h4><strong>Integrated Intel UHD Graphics 620</strong></h4>
        <hr>
        <h2>Display</h2>
        <h4>13.3” LED-backlit FHD (1920 x 1080) 16:9 standard display Four-way frameless NanoEdge design with 95% screen-to-body ratio 2.8mm-thin side bezel and 3.3mm bottom bezel Wide 100% sRGB color gamut 178° wide-view technology</h4>
        <hr>
        <h2>Memory</h2>
        <h4><strong>8GB / 16GB 2133MHz LPDDR3 onboard</strong></h4>
        <hr>
        <h2>Storage</h2>
        <h4><strong>512GB PCIe 3.0 x2 SSD</strong></h4>
        <hr>
        <h2>Interfaces</h2>
        <h4>1 x USB 3.1 Gen 2 Type-C™ (up to 10Gbps)<br>
                1 x USB 3.1 Type-A (up to 10Gbps)<br>
                1 x USB 2.0 Type-A<br>
                1 x HDMI<br>
                1 x MicroSD card reader
        </h4>
        <hr>
        <h2>Keyboard and Touchpad</h2>
        <h4><strong>Keyboard</strong></h4><br>
        <h4>Full-size backlit, with 1.4mm key travel</h4>
        <h4><strong>Touchpad</strong></h4>
        <h4>Glass-covered with integrated NumberPad; intelligent palm-rejection<br>
            Precision Touchpad (PTP) technology supports up to four-finger smart gestures
        </h4>
        <hr>
        <h2>Audio</h2>
        <h4> 
                ASUS SonicMaster stereo audio system with surround-sound; smart amplifier for maximum audio performance<br>         
                Array microphone with Cortana and Alexa2 voice-recognition support<br>           
                3.5mm headphone jack<br>                
                Long-travel voice coils for improved low-frequency response<br>              
                Certified by Harman Kardon<br>
        </h4>
        <hr>
        <h2>Camera</h2>
        <h4>3D IR HD camera</h4>
        <hr>
        <h2>Wireless Connectivity</h2>
        <h4><strong>Wi-Fi</strong></h4>
        <h4>Dual-band 802.11ac gigabit-class Wi-Fi</h4>
        <h4><strong>bluetooth</strong><br> Bluetooth 5.0</h4>
        <hr>
        <h2>Battery and Power</h2>
        <h4>Up to 14 hours battery life3<br>
                50Wh 3-cell lithium-polymer battery<br>
                65W power adapter<br>
                (Output: 19V DC, 65W)<br>
                (Input: 100-240V AC, 50/60Hz universal)<br>
        </h4>
        <hr>
        <h2>Weight and Dimensions</h2>
        <h4><strong>Height:</strong> 1.68cm(0.67 inches)<br>
            <strong>Width:</strong> 30.2cm(11.89 inches)<br>
            <strong>Depth:</strong> 18.9cm(7.44 inches)<br>
            <strong>Weight:</strong> Width standard display:Approx. 1.19kg
        </h4>
        <hr>
        <h2>Included in the Box</h2>
        <h4>ZenBook 13 (UX333)<br>
                Protective sleeve <br>          
                USB3.0 to RJ45 cable<Br>
                65W power adapter<Br>
                Plug Type: ø4 (mm)
        </h4>
        <hr>
        <h2>Included Software</h2>
        <h4>ASUS Battery Health Charging<br> ASUS Splendid<br>Quite Fan</h4>
        <hr>
        <a class = "pulang" href ="#top"><h1>Back to Top</h1></a>
        <script type="text/javascript" src="home.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>