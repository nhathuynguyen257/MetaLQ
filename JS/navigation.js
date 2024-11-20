function navDropdown(e) {
    for (var a = $("#" + e + "-dropdown"), n = $("#" + e + "-content"), o = $("#" + e + "-arrow"), t = e < 0 ? -1 : 1, s = [], i = [], l = [], r = Math.abs(e); r > 0; r = Math.floor(r / 10)) {
        var c = t * r;
        s.push("#" + c + "-content"),
        i.push("#" + c + "-dropdown"),
        l.push("#" + c + "-arrow")
    }
    s = s.join(","),
    i = i.join(","),
    l = l.join(","),
    $(".dropdown-content").not(s).hide(),
    $(".dropdown-active").not(i).removeClass("dropdown-active"),
    $("#nav-menu .fa").not(l).each((function() {
        var e = $(this)
          , a = e.data("chevron-active")
          , n = e.data("chevron-idle");
        e.removeClass(a).addClass(n)
    }
    )),
    n.toggle(),
    a.toggleClass("dropdown-active");
    var d = o.data("chevron-active")
      , v = o.data("chevron-idle");
    o.toggleClass(v).toggleClass(d)
}

