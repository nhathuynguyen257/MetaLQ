
// function to display the runes when clicking on the rune tab
function tab(e, t) {
    return "#" !== e[0] && (e = "#" + e),
    "#" !== t[0] && (t = "#" + t),
    $(e + " .tab-selected").removeClass("tab-selected"),
    $(e + " .content-selected").removeClass("content-selected").addClass("hidden"),
    $(e + " " + t + "-tab").addClass("tab-selected"),
    $(e + " " + t + "-content").removeClass("hidden").addClass("content-selected"),
    !1
}







