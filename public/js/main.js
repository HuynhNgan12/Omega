(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($("#spinner").length > 0) {
                $("#spinner").removeClass("show");
            }
        }, 1);
    };
    spinner();

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 90) {
            $(".nav-bar").addClass("sticky-top shadow");
        } else {
            $(".nav-bar").removeClass("sticky-top shadow");
        }
    });

    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    $(window).on("load resize", function () {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
                function () {
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                },
                function () {
                    const $this = $(this);
                    $this.removeClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "false");
                    $this.find($dropdownMenu).removeClass(showClass);
                }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000,
    });

    // Date and time picker
    $(".date").datetimepicker({
        format: "L",
    });
    $(".time").datetimepicker({
        format: "LT",
    });

    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $(".btn-play").click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $("#videoModal").on("shown.bs.modal", function (e) {
            $("#video").attr(
                "src",
                $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
            );
        });

        $("#videoModal").on("hide.bs.modal", function (e) {
            $("#video").attr("src", $videoSrc);
        });
    });

    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>',
        ],
    });

    // Service carousel
    $(".service-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 25,
        dots: true,
        loop: true,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 3,
            },
        },
    });

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });
})(jQuery);

// Cuộn xuống dòng đã được ghim
function scrollToSection(event, sectionId) {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết

    const section = document.getElementById(sectionId);
    const offset = 140; // Độ dịch chuyển để tránh che phần tử bởi navbar hoặc tiêu đề
    const topPosition = section.offsetTop - offset;

    window.scrollTo({
        top: topPosition,
        behavior: "smooth", // Cuộn mượt
    });
}

document.addEventListener("DOMContentLoaded", function () {
    var productList = document.querySelector(".product-list");
    var numberLinks = productList.querySelectorAll("ul li a");

    numberLinks.forEach(function (link) {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            var productPage = this.getAttribute("href");
            // Chuyển hướng đến trang sản phẩm khác
            window.location.href = productPage;
        });
    });
});

// Đặt code cập nhật sự kiện click cho các liên kết trang
const pageLinks = document.querySelectorAll(".page-link");
pageLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
        event.preventDefault();
        const pageNumber = link.textContent;
        loadProductList(pageNumber);
    });
});

const increaseBtn = document.getElementById("increaseBtn");
const decreaseBtn = document.getElementById("decreaseBtn");
const quantityInput = document.getElementById("quantityInput");

increaseBtn.addEventListener("click", () => {
    quantityInput.value = parseInt(quantityInput.value) + 1;
});

decreaseBtn.addEventListener("click", () => {
    if (quantityInput.value > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }
});
//zoom
function imageZoom(imgID, resultID) {
    var img, lens, result, cx, cy;
    img = document.getElementById(imgID);
    result = document.getElementById(resultID);
    /*create lens:*/
    lens = document.createElement("DIV");
    lens.setAttribute("class", "img-zoom-lens");
    /*insert lens:*/
    img.parentElement.insertBefore(lens, img);
    /*calculate the ratio between result DIV and lens:*/
    cx = result.offsetWidth / lens.offsetWidth;
    cy = result.offsetHeight / lens.offsetHeight;
    /*set background properties for the result DIV:*/
    result.style.backgroundImage = "url('" + img.src + "')";
    result.style.backgroundSize =
        img.width * cx + "px " + img.height * cy + "px";
    /*execute a function when someone moves the cursor over the image, or the lens:*/
    lens.addEventListener("mousemove", moveLens);
    img.addEventListener("mousemove", moveLens);
    /*and also for touch screens:*/
    lens.addEventListener("touchmove", moveLens);
    img.addEventListener("touchmove", moveLens);
    function moveLens(e) {
        var pos, x, y;
        /*prevent any other actions that may occur when moving over the image:*/
        e.preventDefault();
        /*get the cursor's x and y positions:*/
        pos = getCursorPos(e);
        /*calculate the position of the lens:*/
        x = pos.x - lens.offsetWidth / 3;
        y = pos.y - lens.offsetHeight / 3;
        /*prevent the lens from being positioned outside the image:*/
        if (x > img.width - lens.offsetWidth) {
            x = img.width - lens.offsetWidth;
        }
        if (x < 0) {
            x = 0;
        }
        if (y > img.height - lens.offsetHeight) {
            y = img.height - lens.offsetHeight;
        }
        if (y < 0) {
            y = 0;
        }
        /*set the position of the lens:*/
        lens.style.left = x + "px";
        lens.style.top = y + "px";
        /*display what the lens "sees":*/
        result.style.backgroundPosition = "-" + x * cx + "px -" + y * cy + "px";
    }
    function getCursorPos(e) {
        var a,
            x = 0,
            y = 0;
        e = e || window.event;
        /*get the x and y positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x and y coordinates, relative to the image:*/
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return { x: x, y: y };
    }
}
// Initiate zoom effect:
imageZoom("myimage", "myresult");
const imageContainer = document.querySelector(".img-zoom-container");
const resultDiv = document.getElementById("myresult");

imageContainer.addEventListener("mouseenter", () => {
    resultDiv.style.display = "block";
});

imageContainer.addEventListener("mouseleave", () => {
    resultDiv.style.display = "none";
});
// Mô tả sp
// Lắng nghe sự kiện nhấp vào nút "Thông tin sản phẩm"
document.getElementById("info-btn").addEventListener("click", function () {
    // Hiển thị phần tử "Thông tin sản phẩm"
    document.querySelector(".p-2").style.display = "block";
    // Ẩn phần tử "Video hướng dẫn"
    document.getElementById("video-container").style.display = "none";
});

// Lắng nghe sự kiện nhấp vào nút "Video hướng dẫn"
document.getElementById("video-btn").addEventListener("click", function () {
    // Hiển thị phần tử "Video hướng dẫn"
    document.getElementById("video-container").style.display = "block";
    // Ẩn phần tử "Thông tin sản phẩm"
    document.querySelector(".p-2").style.display = "none";
});

const exampleModal = document.getElementById("exampleModal");
if (exampleModal) {
    exampleModal.addEventListener("show.bs.modal", (event) => {
        // Button that triggered the modal
        const button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        const recipient = button.getAttribute("data-bs-whatever");
        // If necessary, you could initiate an Ajax request here
        // and then do the updating in a callback.

        // Update the modal's content.
        const modalTitle = exampleModal.querySelector(".modal-title");
        const modalBodyInput = exampleModal.querySelector(".modal-body input");

        modalTitle.textContent = `New message to ${recipient}`;
        modalBodyInput.value = recipient;
    });
}

$(document).ready(function () {
    $('[data-bs-toggle="modal"]').on("click", function () {
        $(".navbar").addClass("modal-open");
    });

    $('[data-bs-dismiss="modal"]').on("click", function () {
        $(".navbar").removeClass("modal-open");
    });
});

