$(function () {
  anim.set(); // 1. 스크롤 시 지정한 영역(위/아래)으로 떠오르는 효과
  removeScrEffect(); // 2. 스크롤 시 지정한 영역(위/아래)으로 떠오르는 효과 - 모바일 사이즈에서 해제.
  menuActive(); // 3. 섹션에 맞는 메뉴 active 효과
  scrTop(); // 4. 스크롤 최상단으로 이동
  listTitle(); // 5. 포트폴리오 리스트 제목 반응형 처리
  clock.init(); // 6. 시/분/초
  introText(); // 7. 상단 소개인사
  tabMenu(); // 8. 포트폴리오 탭리스트
  colorTheme.initDarkMode(); // 9. 테마 (다크/화이트)
  listToggle(); // 10. History > career 리스트 show/hide
  popup();
});
//   let idx = 0;
//   let webSize = "W";

// 1. 스크롤 시 지정한 영역(위/아래)으로 떠오르는 효과
let anim = {
  set() {
    $(".item").each(function () {
      let obj = $(this);
      let top = obj.offset().top;
      obj.attr("data-top", top);
      let type = obj.data("type");
      let ease = obj.data("ease");
      let speed = obj.data("speed") / 1000;
      let delay = obj.data("delay") / 1000;
      if (type == undefined) {
        type = "up";
        obj.attr("data-type", "up");
      }
      if (!ease) ease = "ease";
      if (isNaN(speed)) speed = 1;
      if (isNaN(delay)) delay = 0;
      $(window).scroll(function () {
        obj.css("transition", "all " + speed + "s " + ease + " " + delay + "s");
      });
      obj.addClass("type_" + type);
    });
  },
  play() {
    $(".item").each(function () {
      let base = $(document).scrollTop() + $(window).height();
      let top = $(this).data("top");
      let type = $(this).data("type");
      if (top < base) {
        $(this).removeClass("type_" + type);
      } else {
        let type = $(this).data("type");
        $(this).addClass("type_" + type);
      }
    });
  },
};
$(window)
  .scroll(function () {
    if ($(window).width() < 576) {
      return false;
    }
    anim.play();
  })
  .scroll();

// 2. 스크롤 시 지정한 영역(위/아래)으로 떠오르는 효과 - 모바일 사이즈에서 해제.
let removeScrEffect = function () {
  $(window)
    .resize(function () {
      if (window.innerWidth < 576) {
        $(".type_up").removeClass("type_up");
        $(".type_left").removeClass("type_left");
        $(".type_left").removeClass("type_left");
      }

      if ($(window).width() < 1300) {
        $(".history .subTitle").addClass("toggle").toggleClass("off");
        $(this).on("click", function () {
          if ($(this).hasClass("off")) {
            $(this).siblings("ul").stop().slideUp();
          } else {
            $(this).siblings("ul").stop().slideDown();
          }
        });
      } else {
        $(".history .subTitle").removeClass("toggle").toggleClass("off");
      }
    })
    .resize();
};

// 3. 섹션에 맞는 메뉴 active 효과
let menuActive = function () {
  // 1) 클릭으로 이동
  $(".main_nav_btn a").on("click", function () {
    let nm = $(this).attr("href");
    let offset = $(nm).offset().top + 1;
    $("html, body").stop().animate({ scrollTop: offset }, 800);
    return false;
  });

  // 2) 스크롤로 해당 위치 인식
  $(window)
    .scroll(function () {
      let $menu = $(".menuBtn"),
        $contents = $(".moving"),
        $headerH = $("#header").outerHeight(),
        sclTop = $(window).scrollTop();

      $contents.each(function (idx) {
        let $target = $contents.eq(idx), // 각각의 섹션 영역
          targetTop = $target.offset().top; // document 로부터 해당 섹션까지의 상단거리

        if (targetTop <= sclTop) {
          $menu.removeClass("menuBg2");
          $menu.eq(idx).addClass("menuBg2");
        } else if ($headerH > sclTop) {
          $menu.removeClass("menuBg2");
        }
      });
    })
    .scroll();
};

// 4. 스크롤 최상단으로 이동
let scrTop = function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() < $(window).height() - 650) {
      $("#top span").removeClass("active");
    } else {
      $("#top span").addClass("active");
    }
  });

  $("#top span").click(function () {
    $("html, body").animate({ scrollTop: "0" }, 300);
  });
};

// 5. 포트폴리오 리스트 제목 반응형 처리
let listTitle = function () {
  $(window)
    .scroll(function () {
      if (window.innerWidth < 800) {
        $("#Portfolio .list .infoM").removeClass("hide");
      } else {
        $("#Portfolio .list .infoM").addClass("hide");
        $("#Portfolio .list").hover(
          function () {
            $(this).find(".info").stop().slideDown();
          },
          function () {
            $(this).find(".info").stop().slideUp();
          }
        );
      }
    })
    .scroll();
};

// 6. 시/분/초
let clock = {
  play() {
    let date = new Date(),
      hours = date.getHours(),
      minutes = date.getMinutes(),
      seconds = date.getSeconds();

    if (window.innerWidth >= 500) {
      document.querySelector("#clock span").textContent = `현재 시간 ${hours < 10 ? `0${hours}` : hours} : ${minutes < 10 ? `0${minutes}` : minutes} : ${seconds < 10 ? `0${seconds}` : seconds}`;
      document.querySelector("#clock").style.cssFloat = "left";
    } else {
      document.querySelector("#clock span").textContent = `${hours < 10 ? `0${hours}` : hours} : ${minutes < 10 ? `0${minutes}` : minutes} : ${seconds < 10 ? `0${seconds}` : seconds}`;
      document.querySelector("#clock").style.cssFloat = "right";
    }
  },
  init() {
    clock.play();
    setInterval(clock.play, 1000);
  },
};

// 7. 상단 소개인사
let introText = function () {
  $("#typed").typed({
    stringsElement: $("#typed-strings"),
    typeSpeed: 200,
    backDelay: 1500,
    loop: false,
    contentType: "html",
    loopCount: false,
    // callback: function () {
    //   foo();
    // },
    // resetCallback: function () {
    //   newTyped();
    // },
  });
};

// function foo() {}
// function newTyped() {}

// 8. 포트폴리오 탭리스트
let tabMenu = function () {
  $(".tabWrap li").on("click", function () {
    $(this).siblings("li").removeClass("selected");
    $(this).addClass("selected");
    let tabTarget = $(this).data("target");
    $("." + tabTarget)
      .siblings("li")
      .addClass("hide");
    $("." + tabTarget).removeClass("hide");
  });
};

// 9. 테마 (다크/화이트)
const checkbox = document.querySelector('input[type="checkbox"]');
const root = document.querySelector("html");
let colorTheme = {
  checkSystem() {
    const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
    if (prefersDark) {
      root.classList.add("DarkMode");
    } else {
      root.classList.remove("DarkMode");
    }
  },
  initDarkMode() {
    colorTheme.checkSystem();

    if (root.classList.contains("DarkMode")) {
      checkbox.setAttribute("checked", true);
    }

    checkbox.addEventListener("change", () => {
      root.classList.toggle("DarkMode");
      const isDarkMode = root.classList.contains("DarkMode");
      checkbox.setAttribute("checked", isDarkMode);
    });
  },
};

// 10. History > career 리스트 show/hide
let listToggle = function () {
  $(".toggle").on("click", function () {
    $(this).next("ul").stop().slideToggle();
    if ($(this).find(".arrow").hasClass("active")) {
      $(this).find(".arrow").removeClass("active");
    } else {
      $(this).find(".arrow").addClass("active");
    }
  });
};
/*
   window.matchMedia('(prefers-color-scheme: dark)').addListener(e => {
   if (e.matches) {
      console.log('dark mode is enabled');
   else {
      console.log('dark mode is disabled');
   });
 */

let popup = function () {
  const totalPages = $(".page").length;
  let currentPage = 1;
  $(".total_pages").text(totalPages);
  $("#btn_openPop").on("click", function () {
    $(".popup").fadeIn();
	$("body").css({ "overflow": "hidden" });
    showPage(1);
  });
  $(".popup .pop_close").on("click", function () {
    $(".popup").fadeOut();
	$("body").css({ "overflow": "auto" });
  });
  $(".popup .prev").on("click", function () {
    if (currentPage > 1) {
      currentPage--;
      showPage(currentPage);
    }
  });
  $(".popup .next").on("click", function () {
    if (currentPage < totalPages) {
      currentPage++;
      showPage(currentPage);
    }
  });
  function showPage(page) {
    $(".page").removeClass("active");
    $('.page[data-page="' + page + '"]').addClass("active");
    $(".current_page").text(page);
  }
};
