/* This is a JavaScript code that implements a search functionality for a list of champions. The code
listens for keyup events on two input fields with IDs `filter-nav-name` and `filter-home-name`. When
a key is pressed, the `searchFilter` function is called with the value of the input field as an
argument. */
// Search for a champion by name
$(document).ready(function () {
    $("#nav-search-input").keyup(function (event) {
        var str = $(this).val();
        if (str == '') {
            showAll();
        } else {
            searchFilter(str);
        }
    });

    $("#filter-home-name").keyup(function (event) {
        var str = $(this).val();
        if (str == '') {
            showAll();
        } else {
            searchFilter(str);
        }
    });

    function searchFilter(str) {
        str = str.toLowerCase();
        var items = Array();
        var champions = Array();
        var type = $('input:radio[name=filter]:checked').val();

        champions = searchRadio(type);


        $('.serial').each(function () {
            var title = $(this).html();
            title = title.toLowerCase();

            var pos = title.search(str);
            if (pos >= 0) {
                var id = $(this).attr('tag');
                if (champions.length > 0 && champions.indexOf(id) >= 0) {
                    items[id] = id;
                }
                if (champions.length <= 0) {
                    items[id] = id;
                }

            }
        });
        if (str == '') {
            items = champions;
        }

        if (items.length > 0) {
            $('.list-champion').each(function () {
                $(this).css('display', 'none');
            });

            for (id in items) {
                $('#champion-' + id).css('display', '');
            }

        } else {
            $('.list-champion').each(function () {
                $(this).css('display', 'none');
            });
        }
    }
    function showAll() {
        $('.list-champion').each(function () {
            $(this).css('display', '');
        });
    }
    function searchRadio(type) {
        var champions = Array();
        $('.tags').each(function () {

            var id = $(this).attr('type');

            if (id == type) {
                champions[$(this).attr('tag')] = $(this).attr('tag');
            }
            if (id == 'all') {
                champions[$(this).attr('tag')] = $(this).attr('tag');
            }
        });
        return champions;
    }
});
