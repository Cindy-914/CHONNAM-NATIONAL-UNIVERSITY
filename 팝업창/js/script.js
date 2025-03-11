$(function () {
  var banner = $(".visual1>ul>li");
  var button1 = $(".arrow1_1_center>img.next");
  var button2 = $(".arrow1_1_center>img.prev");
  var current = 0;
  var setIntervalId;
  var p = $(".section_number>p"); /* 넘버 */

  timer();

  function timer() {
    setIntervalId = setInterval(function () {
      var prev = banner.eq(current);
      var pn = p.eq(current); /* 현재 순번을 pn에 담아 */

      move(prev, 0, "-100%");
      pn.removeClass("bl"); /* 넘버 */

      current++;

      if (current == banner.size()) {
        current = 0;
      }

      var next = banner.eq(current);
      var pnn = p.eq(current);

      move(next, "100%", 0);
      pnn.addClass("bl");
    }, 2000);
  }

  function move(tg, start, end) {
    tg.css("left", start)
      .stop()
      .animate({ left: end }, { duration: 500, ease: "easeOutCubic" });
  }

  $(".visual1").on({
    mouseover: function () {
      clearInterval(setIntervalId);
    },
    mouseout: function () {
      timer();
    },
  });

  button1.click(function () {
    var prev = banner.eq(current);
    var pn = p.eq(current);

    move(prev, 0, "-100%");
    pn.removeClass("bl");

    current++;

    if (current == banner.size()) {
      current = 0;
    }

    var next = banner.eq(current);
    var pnn = p.eq(current);

    move(next, "100%", 0);
    pnn.addClass("bl");

    return false;
  });

  button2.click(function () {
    var prev = banner.eq(current);
    var pn = p.eq(current);

    move(prev, 0, "100%");
    pn.removeClass("bl");

    current--;

    if (current == -banner.size()) {
      current = 0;
    }

    var next = banner.eq(current);
    var pnn = p.eq(current);

    move(next, "-100%", 0);
    pnn.addClass("bl");

    return false;
  });
});
