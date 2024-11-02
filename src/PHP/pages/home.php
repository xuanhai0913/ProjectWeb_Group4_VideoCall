<html>

<head>
    <title>
        Video Conference
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link href="../../assets/css/base.css" rel="stylesheet" />
    <link href="../../assets/css/home.css" rel="stylesheet" />
</head>

<body>
    <?php include '../templates/header.php'; ?>
    <div class="container">
        <div class="home-container">
            <h1>
                V2meet – Kết nối trái tim, xóa tan khoảng cách
            </h1>
            <p>
                "Kết nối, cộng tác và ăn mừng mọi khoảnh khắc – chỉ với một cú chạm, khoảng cách sẽ không còn là rào cản!"
            </p>
            <div class="buttons">
                <button class="primary">
                    Cuộc họp mới
                </button>
                <div class="join__input">
                    <input class="join__input-text" type="text" id="roomCode" placeholder="Nhập mã phòng đã có">
                    <button class="join__input-paste" onclick="pasteText()">Dán</button>
                </div>
                <button>
                    Tham gia
                </button>
            </div>
            <div class="carousel">
                <i class="fas fa-chevron-left nav left" onclick="prevSlide()">
                </i>
                <img alt="Illustration of two people having a video conference" height="200" id="carousel-image" src="https://storage.googleapis.com/a1aa/image/tqmb77zF9J42Hl5eJQ3qEfZF6r3N5ZLxOKzmekVjE7k0ZbVnA.jpg" width="200" />
                <i class="fas fa-chevron-right nav right" onclick="nextSlide()">
                </i>
                <p id="carousel-text">
                    Nhận đường liên kết bạn có thể chia sẻ
                </p>
                <p>
                    Nhấp vào
                    <strong>
                        Cuộc họp mới
                    </strong>
                    để nhận đường liên kết mà bạn có thể gửi cho những người mình muốn họp cùng
                </p>
                <div class="dots">
                    <span class="active" onclick="currentSlide(0)">
                    </span>
                    <span onclick="currentSlide(1)">
                    </span>
                    <span onclick="currentSlide(2)">
                    </span>
                </div>
            </div>
            <a class="link" href="#">
                Tìm hiểu thêm về V2meet
            </a>
        </div>
    </div>
    <script>
        var slideIndex = 0;
        var slides = [{
                image: "https://storage.googleapis.com/a1aa/image/tqmb77zF9J42Hl5eJQ3qEfZF6r3N5ZLxOKzmekVjE7k0ZbVnA.jpg",
                text: "Nhận đường liên kết bạn có thể chia sẻ"
            },
            {
                image: "https://storage.googleapis.com/a1aa/image/2.jpg",
                text: "Tham gia cuộc họp với một cú nhấp chuột"
            },
            {
                image: "https://storage.googleapis.com/a1aa/image/3.jpg",
                text: "Bảo mật và an toàn cho mọi cuộc họp"
            }
        ];

        function showSlide(index) {
            var carouselImage = document.getElementById("carousel-image");
            var carouselText = document.getElementById("carousel-text");
            var dots = document.getElementsByClassName("dots")[0].getElementsByTagName("span");

            if (index >= slides.length) {
                slideIndex = 0;
            } else if (index < 0) {
                slideIndex = slides.length - 1;
            } else {
                slideIndex = index;
            }

            carouselImage.src = slides[slideIndex].image;
            carouselText.innerText = slides[slideIndex].text;

            for (var i = 0; i < dots.length; i++) {
                dots[i].classList.remove("active");
            }
            dots[slideIndex].classList.add("active");
        }

        function nextSlide() {
            showSlide(slideIndex + 1);
        }

        function prevSlide() {
            showSlide(slideIndex - 1);
        }

        function currentSlide(index) {
            showSlide(index);
        }

        showSlide(slideIndex);

        function pasteText() {
            navigator.clipboard.readText().then(text => {
                document.getElementById('roomCode').value = text;
            }).catch(err => {
                console.error('Không thể dán nội dung: ', err);
            });
        }
    </script>
</body>

</html>