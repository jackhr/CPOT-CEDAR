$(document).ready(function () {

    $(".modal-close").on("click", function () {
        $(this).closest(".modal").removeClass('showing');
    });

    $("#hamburger-btn").on('click', function () {
        openHamburgerMenu();
    });

    $(".close-nav").on('click', function () {
        closeHamburgerMenu();
    });

    $('#hamburger-nav li a[href="/portfolios"]').on('click', function (e) {
        e.preventDefault();
        openPortfolioNav();
    });

    $("#back-nav").on('click', function () {
        closePortfolioNav();
    });

    $(document).off('click').on("click", function (event) {
        if (
            $("#hamburger-nav").hasClass("showing-nav") && // Check if the nav is open
            $("#hamburger-nav").is(event.target) // Check if event target is the nav itself
        ) {
            closeHamburgerMenu();
        }
    });
});

function openPortfolioNav() {
    $("#hamburger-nav").addClass('showing-portfolio-nav');
}

function closePortfolioNav() {
    $("#hamburger-nav").removeClass('showing-portfolio-nav');
}

function openHamburgerMenu() {
    $("#hamburger-nav").addClass('showing-fade');
    setTimeout(() => {
        $("#hamburger-nav").addClass('showing-nav');
    }, 300);
}

function closeHamburgerMenu() {
    $("#hamburger-nav").removeClass('showing-nav');
    setTimeout(() => {
        $("#hamburger-nav").removeClass('showing-fade');
    }, 300);
}

function getCart() {
    return JSON.parse(localStorage.getItem('cart')) ?? [];
};

function formatPrice(price) {
    // Convert to number and then to a string and use toLocaleString for formatting
    return Number(price).toLocaleString('en-US', {
        minimumFractionDigits: 2, // Ensures two decimal places
        maximumFractionDigits: 2 // Prevents more than two decimal places
    });
}

function formatResource(resource) {
    const res = structuredClone(resource);

    if (res.price) res.price = formatPrice(resource.price);
    if (res.base_price) res.base_price = formatPrice(resource.base_price);

    return res;
}

function arraysAreEqual(arr1, arr2) {
    if (arr1.length !== arr2.length) {
        return false; // Arrays have different lengths, so not equal
    }
    return arr1.every((value, index) => value === arr2[index]);
}