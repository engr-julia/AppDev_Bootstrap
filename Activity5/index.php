<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chibi Gallery Showcase</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <h1 class="text-center">✨ Chibi Gallery Showcase ✨</h1>
    <div class="text-center">
        <button class="btn btn-danger">
            <a href="/APPDEV/bootstrap/index.php" style="font-size: 18px; color:white; text-decoration:none;">Back</a>
        </button>
    </div>
    <hr>

    <div class="container"> 
        <!-- Popovers -->
        <ul class="list-inline text-center">
            <li><a href="#" data-toggle="popover" data-placement="top" title="Cute Alert!" data-content="Top view chibi energy 💖">Top</a></li>
            <li><a href="#" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="Adorable!" data-content="Bottom popover with kawaii vibes 🐾">Bottom</a></li>
            <li><a href="#" data-toggle="popover" data-placement="left" data-trigger="hover" title="Peek!" data-content="Left side cuteness overload ✨">Left</a></li>
            <li><a href="#" data-toggle="popover" data-placement="right" data-trigger="focus" title="Surprise!" data-content="Right side surprise chibi 💕">Right</a></li>
        </ul>

        <!-- Tooltips -->
        <ul class="list-inline text-center">
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Top Tooltip">Top</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Bottom Tooltip">Bottom</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="Left Tooltip">Left</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Right Tooltip">Right</a></li>
        </ul>
    </div>

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
        });
    </script>

    <hr/>

    <!-- Carousel -->
    <div class="container">
        <div id="mycarousel" class="carousel slide" data-ride="carousel" style="width:1000px; margin:auto;">
            <ol class="carousel-indicators">
                <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mycarousel" data-slide-to="1"></li>
                <li data-target="#mycarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="Orange.jpg" width="100%">
                    <div class="carousel-caption">
                        <h3>🍊 Orange Twin Chibi</h3>
                        <p>Playful and energetic twin-tailed cutie</p>
                    </div>
                </div>

                <div class="item">
                    <img src="Pink.jpg" width="100%">
                    <div class="carousel-caption">
                        <h3>🎀 Pink School Chibi</h3>
                        <p>Sweet and cheerful school girl vibes</p>
                    </div>
                </div>

                <div class="item">
                    <img src="Chibi.jpg" width="100%">
                    <div class="carousel-caption">
                        <h3>🐱 Cat Onesie Chibi</h3>
                        <p>Super cuddly and adorable kitty outfit</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#mycarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#mycarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>

    <hr/>

    <!-- Modal -->
    <div class="container text-center">
        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open Info</button>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4>About This Gallery</h4>
                    </div>
                    <div class="modal-body">
                        <p>This gallery showcases adorable chibi-style characters with different personalities and themes. Perfect for UI inspiration and design ideas!</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>