const listImage = document.querySelector('.list-img');
const image = document.querySelectorAll('#banner .slideshow img');
const btnLeft = document.querySelector('#banner .slideshow .fa-angle-left');
const btnRight = document.querySelector('#banner .slideshow .fa-angle-right');
const length = image.length;
let curent = 0;

const bar = document.querySelector('#header #header--logintrue .bar');
const xmark = document.querySelector('#sidebar .exit');
const modal = document.querySelector('.modal');
const sidebar = document.querySelector('#sidebar');

const iconuser = document.querySelector('#header #header--logintrue .avata');
const seluser = document.querySelector('.seluser');
const seluserChild = document.querySelector('.seluser .seluser--chirld');

const btnsignup = document.querySelector('.sign-up');
const signup = document.querySelector('#signup')
const signupChild = document.querySelector('#signup .sign')
const xmarkup = document.querySelector('#signup .sign i')


const btnsign = document.querySelector('.sign-in');
const signin = document.querySelector('#signin')
const signinChild = document.querySelector('#signin .sign')
const xmarkin = document.querySelector('#signin .sign i')

const messs = document.querySelectorAll('#signup span')

const signup_btn = document.querySelector('#signup button')

signup_btn.addEventListener('click', function (e) {
    var checksiggnup = 0;
    for (let i = 0; i < messs.length; i++) {
        if (messs[i].innerHTML) {
            checksignup;
        }
    }
    console.log(checksiggnup)
});

//kieemr tra ther span trong form đăng ký
for (let i = 0; i < messs.length; i++) {
    if (messs[i].innerHTML) {
        signup.classList.add('open');
    }
}

if (btnsignup) {
    // mở, tắt đăng ký.
    function hideSignedup() {
        signup.classList.remove('open');
    }

    btnsignup.addEventListener('click', function () {
        signup.classList.add('open');
    });

    xmarkup.addEventListener('click', hideSignedup)

    // mở, tắt đăng nhập.
    function hideSigned() {
        signin.classList.remove('open');
    }

    btnsign.addEventListener('click', function () {
        signin.classList.add('open');
    });

    xmarkin.addEventListener('click', hideSigned)
}

if (seluser && iconuser) {
    // mở, tắt menu người dùng
    function hideSelUser() {
        seluser.classList.remove('open');
    }

    iconuser.addEventListener('click', function () {
        seluser.classList.add('open');
    });

    seluser.addEventListener('click', hideSelUser)

    seluserChild.addEventListener('click', function (event) {
        event.stopPropagation();
    });

    // mở, tắt sidebar danh mục 
    bar.addEventListener('click', function () {
        modal.classList.add('open');
    });

    function hideSideBar() {
        modal.classList.remove('open');
    }

    xmark.addEventListener('click', hideSideBar)

    modal.addEventListener('click', hideSideBar)

    sidebar.addEventListener('click', function (event) {
        event.stopPropagation();
    });
}

// chuyển slide trên barner
const width = image[0].clientWidth;

let handleChangeSlide = setInterval(nextSlide, 4000)

function nextIndexSlide(index) {
    document.querySelector('#banner .slideshow .active').classList.remove('active');
    document.querySelector('#banner .slideshow .index-item-' + index).classList.add('active');
}

// hàm chuyển slide
function nextSlide() {
    if (curent >= length - 1) {
        curent = 0;
        listImage.style.transform = `translateX(0%)`;
        nextIndexSlide(curent);
    } else {
        curent++;
        listImage.style.transform = `translateX(-${width * curent}px)`;
        nextIndexSlide(curent);
    }
}

btnLeft.addEventListener('click', function () {
    clearInterval(handleChangeSlide);
    if (curent <= 0) {
        curent = length - 1;
        listImage.style.transform = `translateX(-${width * (length - 1)}px)`;
        nextIndexSlide(curent);
    } else {
        curent--;
        listImage.style.transform = `translateX(-${width * curent}px)`;
        nextIndexSlide(curent);
    }
    handleChangeSlide = setInterval(nextSlide, 4000);
});

btnRight.addEventListener('click', function () {
    clearInterval(handleChangeSlide);
    nextSlide();
    handleChangeSlide = setInterval(nextSlide, 4000);
});
