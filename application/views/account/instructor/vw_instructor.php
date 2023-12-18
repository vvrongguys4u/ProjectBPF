<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Add your CSS stylesheets and other head elements here -->
</head>
<body>

<!-- Video Section -->
<div class="video">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="video_content">
                    <div class="video_container_outer">
                        <div class="video_overlay d-flex flex-column align-items-start justify-content-center">
                            <div>Be</div>
                            <div>The Best</div>
                            <div>Teacher</div>
                        </div>
                        <div class="video_container">
                            <video id="vid1" class="video-js vjs-default-skin" controls width="100%" height="100%"
                                data-setup='{ "poster": "images/video.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/IV3ueyrp5M4"}], "youtube": { "iv_load_policy": 1 } }'>
                            </video>
                        </div>
                    </div>
                    <div class="register_button"><a href="<?= base_url('register');?>">Register</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Instructors Section -->
<div class="instructors">
    <div class="instructors_background" style="background-image:url(assets/images/instructors_background.png)"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="section_title text-center">The Best Tutors in Town</h2>
            </div>
        </div>
        <div class="row instructors_row">
            <!-- Repeat the instructor HTML block for each instructor -->
            <div class="col-lg-4 instructor_col">
                <div class="instructor text-center">
                    <div class="instructor_image_container">
                        <div class="instructor_image"><img src="assets/images/instructor_1.jpg" alt="Instructor 1"></div>
                    </div>
                    <div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
                    <div class="instructor_title">Teacher</div>
                    <div class="instructor_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu
                            metus in, sagittis fringilla tortor.</p>
                    </div>
                    <div class="instructor_social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Repeat the above block for other instructors -->
        </div>
    </div>
</div>

<!-- Top Teachers Section -->
<div class="teachers">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="section_title text-center">Top Teachers in Every Field</h2>
            </div>
        </div>
        <div class="row teachers_row">
            <!-- Repeat the teacher HTML block for each teacher -->
            <div class="col-lg-4 col-md-6">
                <div class="teacher d-flex flex-row align-items-center justify-content-start">
                    <div class="teacher_image">
                        <div><img src="assets/images/instructor_4.jpg" alt="Teacher 1"></div>
                    </div>
                    <div class="teacher_content">
                        <div class="teacher_name"><a href="instructors.html">Sarah Parker</a></div>
                        <div class="teacher_title">Teacher</div>
                    </div>
                </div>
            </div>
            <!-- Repeat the above block for other teachers -->
        </div>
    </div>
</div>

<!-- Add your other sections here -->

</body>
</html>
