(function () {
    window.addEvent('domready', function () {
        var e = document.getElements(".active.parent");
        e && e.addClass("opened");

        document.getElements('li.parent > a').each(function (a) {
            a.addEvent("click", function () {
                if (this.getParent().hasClass('opened'))
                    return false;
                var e = document.getElements(".active.parent");
                e && e.removeClass('opened');
                this.getParent().addClass('opened');
                return false;
            });
        });
    });
})();
