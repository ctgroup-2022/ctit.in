<?php
$mediaContent = [
    ['type' => 'image', 'url' => 'img/ctmain.jpeg'],
    // ['type' => 'image', 'url' => 'img/banners/1.jpg'],
    // ['type' => 'image', 'url' => 'img/WEBSITE BANNER 2.jpg'],
    // ['type' => 'image', 'url' => 'img/banners/3.jpg'],
    // ['type' => 'image', 'url' => 'img/WEBSITE BANNER 4.jpg'],
    // ['type' => 'image', 'url' => 'img/WEBSITE BANNER 5.jpg'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Slider</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            /* overflow: hidden; */
        }
        .slider-container {
            position: relative;
            width: 100%;
            height: 90vh;
            /* overflow: hidden; */
        }
        .slide {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: opacity 1s ease-in-out;
            opacity: 0;
        }
        .slide.active {
            opacity: 1;
        }
        .overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        .overlay h1 {
            font-size: 4rem;
            margin: 0;
            color: white;
            animation: fadeIn 2s ease-in-out;
        }
        .overlay h2 {
            font-size: 2rem;
            margin: 0;
            color: white;
            animation: fadeIn 2s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="slider-container">
        <?php foreach ($mediaContent as $index => $media): ?>
            <?php if ($media['type'] === 'image'): ?>
                <div class="slide" style="background-image: url('<?php echo $media['url']; ?>');"></div>
            <?php endif; ?>
        <?php endforeach; ?>
        <div class="overlay">
            <h1>Welcome to CTIT</h1>
            <h2>CT Institute and Technology</h2>
        </div>
    </div>

    <script>
        const slides = document.querySelectorAll('.slide');
        let currentIndex = 0;

        function showNextSlide() {
            slides[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % slides.length;
            slides[currentIndex].classList.add('active');
        }

        // Initially display the first slide
        slides[currentIndex].classList.add('active');

        // Change slides every 6 seconds
        setInterval(showNextSlide, 6000);
    </script>
</body>

</html>