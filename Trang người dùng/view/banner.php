<!-- Slider -->
<div class="bannercontainer">
    <div class="banner">
        <ul>
            <li data-transition="fade" data-slotamount="7" class="slide" data-slide='Stop wishing. Start doing.'>
                <video class="media-element" autoplay="autoplay" preload="none" loop="loop" muted="" src="video/goku.mp4" width="100%" id="video1">
                </video>
                <div class="caption slide__name slide__name--smaller slide__name--specific customin customout"
                     data-x="left"
                     data-y="160"
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="700"
                     data-start="1400"
                     data-easing="easeOutBack"
                     data-endspeed="500"
                     data-end="8600"
                     data-endeasing="Back.easeIn">
                    Stop <span class="highlight">wishing.</span> Start <span class="highlight">doing.</span>
                </div>
                <div class="caption slide__descript customin customout"
                     data-x="left"
                     data-y="240"
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="700"
                     data-start="2000"
                     data-endspeed="500"
                     data-end="8400"
                     data-endeasing="Back.easeIn">
                    find your best match movie with A.MOVIE
                </div>
                <div class="caption lfb customout slider-wrap-btn"
                     data-x="left"
                     data-y="310"
                     data-speed="500"
                     data-start="2800"
                     data-easing="Power4.easeOut"
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-endspeed="400"
                     data-end="8000"
                     data-endeasing="Power4.easeOut">
                    <a href="#" class="btn btn-md btn--danger slider--btn">check out movies</a>
                </div>
            </li>
            <li data-transition="fade" data-slotamount="7" class="slide" data-slide='Next video'>
                <video class="media-element" autoplay="autoplay" preload="none" loop="loop" muted="" src="video/vn.mp4" width="100%" id="video2">
                </video>
                <!-- Thêm các phần tử caption và button cho video thứ hai nếu cần -->
            </li>
        </ul>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var video1 = document.getElementById("video1");
        var video2 = document.getElementById("video2");

        video1.addEventListener("ended", function() {
            // Khi video1 kết thúc, bắt đầu video2
            video2.play();
        });
    });
</script>
