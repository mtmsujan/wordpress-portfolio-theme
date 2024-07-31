function handlePreloader() {
    if ($('.intro-layer').length) {
        $('.intro-layer .intro-layer-box').each(function() {
            $(this).addClass('active');
        });

        setTimeout(function() {
            $('.intro-layer .intro-layer-box').removeClass('active');
        }, 1500);

        setTimeout(function() {
            $('.intro-layer').css('transform', 'translateY(-100%)');
        }, 2000);
    }
}

function getTimeInGMT7() {
    const now = new Date();
    const gmtPlus7Time = new Date(now.getTime() + (7 * 60 * 60 * 1000));
    const year = gmtPlus7Time.getUTCFullYear();
    const month = String(gmtPlus7Time.getUTCMonth() + 1).padStart(2, '0');
    const day = String(gmtPlus7Time.getUTCDate()).padStart(2, '0');
    const hours = String(gmtPlus7Time.getUTCHours()).padStart(2, '0');
    const minutes = String(gmtPlus7Time.getUTCMinutes()).padStart(2, '0');
    const seconds = String(gmtPlus7Time.getUTCSeconds()).padStart(2, '0');

    return `${hours}:${minutes}`;
}

function updateTimeInGMT7() {
    $('.location-time__realtime').text(getTimeInGMT7());
}

function isScrollElement(element, offset) {
    $(window).scroll(function() {
        if ($(window).scrollTop() >= $(element).offset().top + $(element).outerHeight() - window.innerHeight - offset) {
            $(element).addClass('active');
        } else {
            $(element).removeClass('active');
        }
    });
}

function appendHtml(parent, child) {
    $(parent).append($(child));
    $(child).show();
}

function hideBrowserScrollbar() {
    let scrollHide = document.createElement("style");
    scrollHide.innerHTML = `body::-webkit-scrollbar {display: none;}`;
    document.head.appendChild(scrollHide);
}

function letterWrap(el, cls) {
    const words = el.textContent.split(' ');
    const letters = [];

    cls = cls || 'letter-wrap'

    words.forEach(word => {
        if (word != '' && word != '\n') {
            let html = '';
            for (var letter in word) {
                html += `
                <span class="${cls}__char">
                  <span class="${cls}__char-inner" data-letter="${word[letter]}">
                    ${word[letter]}
                  </span>
                </span>
                `;
            };

            let wrappedWords = `<span class="${cls}__word">${html}</span>`;
            letters.push(wrappedWords);
        }
    });

    return el.innerHTML = letters.join(' ');
}

function letterAnimation(el, cls) {
    const tl = new TimelineMax({
        paused: true
    });
    const characters = el.querySelectorAll(`.${cls}__char-inner`);
    const duration = el.hasAttribute('data-duration') ? el.dataset.duration : 0.35;
    const stagger = el.hasAttribute('data-stagger') ? el.dataset.stagger : 0.02;

    el.animation = tl.staggerTo(characters, duration, {
        y: '-100%',
        ease: Power4.easeOut
    }, stagger);

    el.addEventListener('mouseenter', (event) => event.currentTarget.animation.play());
    el.addEventListener('mouseout', (event) => el.animation.reverse());
}

function initMagneticButtons() {
    var magnets = document.querySelectorAll('.magnetic');
    var strength = 100;

    if (window.innerWidth > 540) {
        // Mouse Reset
        magnets.forEach((magnet) => {
            magnet.addEventListener('mousemove', moveMagnet);
            $(this.parentNode).removeClass('not-active');
            magnet.addEventListener('mouseleave', function(event) {
                gsap.to(event.currentTarget, 1.5, {
                    x: 0,
                    y: 0,
                    ease: Elastic.easeOut
                });
                gsap.to($(this).find(".btn-text"), 1.5, {
                    x: 0,
                    y: 0,
                    ease: Elastic.easeOut
                });
            });
        });

        // Mouse move
        function moveMagnet(event) {
            var magnetButton = event.currentTarget;
            var bounding = magnetButton.getBoundingClientRect();
            var magnetsStrength = magnetButton.getAttribute("data-strength");
            var magnetsStrengthText = magnetButton.getAttribute("data-strength-text");

            gsap.to(magnetButton, 1.5, {
                x: (((event.clientX - bounding.left) / magnetButton.offsetWidth) - 0.5) * magnetsStrength,
                y: (((event.clientY - bounding.top) / magnetButton.offsetHeight) - 0.5) * magnetsStrength,
                rotate: "0.001deg",
                ease: Power4.easeOut
            });
            gsap.to($(this).find(".btn-text"), 1.5, {
                x: (((event.clientX - bounding.left) / magnetButton.offsetWidth) - 0.5) * magnetsStrengthText,
                y: (((event.clientY - bounding.top) / magnetButton.offsetHeight) - 0.5) * magnetsStrengthText,
                rotate: "0.001deg",
                ease: Power4.easeOut
            });
        }

    };

    // Mouse Enter
    $('.dungbu-btn__icon.magnetic').on('mouseenter', function() {
        if ($(this).find(".btn-fill").length) {
            gsap.to($(this).find(".btn-fill"), .5, {
                startAt: {
                    y: "76%"
                },
                y: "0%",
                ease: Power2.easeInOut
            });
        }

        if ($(this).find(".btn-text-inner.change").length) {
            gsap.to($(this).find(".btn-text-inner svg path"), .4, {
                startAt: {
                    fill: "#1C1D20"
                },
                fill: "#FFFFFF",
                ease: Power3.easeIn,
            });
        }

        $(this).closest('.dungbu-btn__icon').addClass('active');
        $(this.parentNode).removeClass('not-active');
    });

    // Mouse Leave
    $('.dungbu-btn__icon.magnetic').on('mouseleave', function() {
        if ($(this).find(".btn-fill").length) {
            gsap.to($(this).find(".btn-fill"), .5, {
                y: "-76%",
                ease: Power2.easeInOut
            });
        }

        if ($(this).find(".btn-text-inner.change").length) {
            gsap.to($(this).find(".btn-text-inner svg path"), .4, {
                fill: "#1C1D20",
                ease: Power3.easeOut,
            });
        }

        $(this).closest('.dungbu-btn__icon').removeClass('active');
        $(this.parentNode).removeClass('not-active');
    });
}

function getUrlParams() {
    var params = {};
    var queryString = window.location.search.substring(1);
    /*var regex = /([^&=]+)=([^&]*)/g;
    var m;

    while (m = regex.exec(queryString)) {
        params[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
    }*/

    return queryString;
}

window.addEventListener('DOMContentLoaded', (event) => {
    $(window).on('load', function() {
        handlePreloader();
        hideBrowserScrollbar();
        updateTimeInGMT7();
        setInterval(updateTimeInGMT7, 1);
        initMagneticButtons();

        gsap.registerPlugin(ScrollTrigger, SplitText);
        const split = new SplitText(".text-reveal", {
            type: "lines"
        });

        split.lines.forEach((target) => {
            gsap.to(target, {
                backgroundPositionX: 0,
                ease: "power4.inOut",
                scrollTrigger: {
                    trigger: target,
                    markers: false,
                    scrub: 3,
                    start: "top 85%",
                    end: "bottom center",
                }
            });
        });

        let windowWidth = window.outerWidth;
        $(".head-animation").each(function(index) {
            let myText = $(this);
            let mySplitText;

            function createSplits() {
                mySplitText = new SplitText(myText, {
                    type: "chars,words,lines",
                    charsClass: "split-chars",
                    wordsClass: "split-words",
                    linesClass: "split-lines"
                });
            }
            createSplits();
            $(window).resize(function() {
                if (window.outerWidth !== windowWidth) {
                    mySplitText.revert();
                    location.reload();
                }
                windowWidth = window.outerWidth;
            });
        });
        gsap.registerPlugin(ScrollTrigger);

        function createTextAnimations() {
            $(".heading-animation").each(function(index) {
                let triggerElement = $(this);
                let myText = $(this).find(".split-text");
                let targetElement = $(this).find(".split-lines");
                let tl = gsap.timeline({
                    lazy: false,
                    scrollTrigger: {
                        trigger: triggerElement,
                        start: "top 85%",
                        end: "bottom center",
                        markers: false,
                        /*toggleActions: "play none none reverse",*/
                    }
                });
                tl.from(targetElement, {
                    duration: 0.6,
                    rotationX: -80,
                    stagger: 0.1,
                    transformOrigin: "50% 0",
                    y: 50,
                    z: -42,
                    opacity: 0,
                });
            });
        }

        function createContentAnimations() {
            $(".content-animation").each(function(index) {
                let tg = gsap.timeline({
                    lazy: false,
                    scrollTrigger: {
                        trigger: $(this),
                        start: "top 80%",
                        end: "bottom center",
                        markers: false,
                        /*toggleActions: "play none none reverse",*/
                    }
                });
                tg.from($(this), {
                    duration: 1,
                    stagger: 0.1,
                    x: -30,
                    opacity: 0,
                });
            });
        }

        if ($(window).width() > 1200) {
            createTextAnimations();
            createContentAnimations();
        }
    });

    const letterWrapClass = 'hover-animation';
    const letterWrapElements = document.getElementsByClassName(letterWrapClass);

    [...letterWrapElements].forEach(el => {
        letterWrap(el, letterWrapClass);
        letterAnimation(el, letterWrapClass);
    });

    $('.marquee').marquee({
        duration: 20000,
        pauseOnHover: true,
        gap: 0,
        duplicated: true
    });

    $('.hamburger').click(function() {
        $('body').toggleClass('menu-mb-show');
        $(this).toggleClass('active');
        $('.menu-mb-wrap').toggleClass('active');
        setTimeout(function() {
            $('.menu-mb__main, .menu-mb__bottom').toggleClass('active');
        }, 500);
    });

    if ($('.hero-video').length > 0) {
        const cursor = document.querySelector('#cursor');
        const cursorCircle = cursor.querySelector('.cursor__circle');

        const mouse = {
            x: -100,
            y: -100
        }; // mouse pointer's coordinates
        const pos = {
            x: 0,
            y: 0
        }; // cursor's coordinates
        const speed = 0.1; // between 0 and 1

        const updateCoordinates = e => {
            mouse.x = e.clientX;
            mouse.y = e.clientY;
        }

        window.addEventListener('mousemove', updateCoordinates);

        const updateCursor = () => {
            const diffX = Math.round(mouse.x - pos.x);
            const diffY = Math.round(mouse.y - pos.y);

            pos.x += diffX * speed;
            pos.y += diffY * speed;

            const translate = 'translate3d(' + pos.x + 'px ,' + pos.y + 'px, 0)';

            cursor.style.transform = translate;
        };

        function loop() {
            updateCursor();
            requestAnimationFrame(loop);
        }

        requestAnimationFrame(loop);

        const cursorModifiers = document.querySelectorAll('[cursor-class]');

        cursorModifiers.forEach(curosrModifier => {
            curosrModifier.addEventListener('mouseenter', function() {
                const className = this.getAttribute('cursor-class');
                cursor.classList.add(className);
            });

            curosrModifier.addEventListener('mouseleave', function() {
                const className = this.getAttribute('cursor-class');
                cursor.classList.remove(className);
            });
        });
    }

    if ($('.swiper-brand').length > 0) {
        var swiper_brand = new Swiper(".swiper-brand", {
            spaceBetween: 20,
            navigation: {
                nextEl: ".brand-slide .swiper-button-next",
                prevEl: ".brand-slide .swiper-button-prev"
            },
            loop: true,
            breakpoints: {
                300: {
                    slidesPerView: 1.5,
                },
                500: {
                    slidesPerView: 1.5,
                },
                640: {
                    slidesPerView: 1.5,
                },
                768: {
                    slidesPerView: 2.5,
                },
                991: {
                    slidesPerView: 3.5,
                },
                1250: {
                    slidesPerView: 3.5,
                },
                1500: {
                    slidesPerView: 4.5,
                }
            }
        });
    }

    const scroller = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true,
        mobile: {
            breakpoint: 0,
            smooth: true,
            direction: "vertical",
        },
        tablet: {
            breakpoint: 0,
            smooth: true,
            direction: "vertical"
        },
        lerp: 0.1
    })

    gsap.registerPlugin(ScrollTrigger)


    scroller.on('scroll', ScrollTrigger.update)

    scroller.on('scroll', (instance) => {
        const sections = document.querySelectorAll('[data-scroll-section]');
        sections.forEach((section) => {
            const sectionTop = section.getBoundingClientRect().top;
            const sectionBottom = section.getBoundingClientRect().bottom;
            if (sectionTop <= window.innerHeight && sectionBottom >= 0) {
                section.classList.add('is-active');
            } else {
                section.classList.remove('is-active');
            }

            if ($('#touch').hasClass('is-active')) {
                $('.project-filter__mb').addClass('hide');
                $('.project-filter__second').removeClass('hide');
            } else {
                $('.project-filter__mb').removeClass('hide');
                $('.project-filter__second').addClass('hide');
            }
        });
    });

    ScrollTrigger.scrollerProxy(
        '[data-scroll-container]', {
            scrollTop(value) {
                return arguments.length ?
                    scroller.scrollTo(value, 0, 0) :
                    scroller.scroll.instance.scroll.y
            },
            getBoundingClientRect() {
                return {
                    left: 0,
                    top: 0,
                    width: window.innerWidth,
                    height: window.innerHeight
                }
            }
        }
    )

    ScrollTrigger.addEventListener('refresh', () => scroller.update())
    ScrollTrigger.refresh()

    $('.fancybox-button--close').on('click', function() {
        scroller.update();
    });

    /* project */
    $('#projects-list').mixItUp({
        selectors: {
            target: '.col-xl-4',
            filter: '.filter',
        },
        animation: {
            animateResizeContainer: true,
            effects: 'fade scale',
        },
        callbacks: {
            onMixLoad: function() {
                scroller.update();
            },
            onMixEnd: function() {
                scroller.update()
            }
        }
    });

    if ($('.project-filter').length > 0) {
        var filter_param = getUrlParams();
        $( ".project-filter ul li" ).each(function() {
            if ($(this).data('rel') == filter_param) {
                $(this).click();
            }
        });
    }
    /* end project */

    /* about */
    $('body[class^="information-information"] .topbar').removeAttr("data-scroll-section");
    $('body[class^="product-category"] .topbar').removeAttr("data-scroll-section");
    $('body[class^="product-product"] .topbar').removeAttr("data-scroll-section");
    /* end about */

    /* project detail */
    const windowWidth = $(window).width();
    if (windowWidth <= 1024) {
        $('.disable-mb').removeAttr("data-scroll");
    }

    if (1024 < windowWidth || windowWidth >= 768) {
        $('.disable-tablet').removeAttr("data-scroll");
    }

    if (windowWidth > 1024) {
        $('.disable-dt').removeAttr("data-scroll");
    }
    /* end project detail */

    $('.back-to-top').click(function() {
        scroller.scrollTo(0, {
            duration: 1500,
            easing: [0.25, 0.00, 0.35, 1.00],
        });
    });
});