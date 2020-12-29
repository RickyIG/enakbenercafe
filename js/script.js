$(function () {
    //FEATURE CONTENT

    // Print features
    var hasil;
    var items = [
        [
            "001",
            "https://prog-8.com/images/html/advanced/html.png",
            "/images/secure.svg",
            "Secure",
            "Check your balance, bills, with your lovely device anywhere, anytime with full protection.",
        ],
        [
            "002",
            "https://prog-8.com/images/html/advanced/php.png",
            "/images/receipt.svg",
            "Simple",
            "Go paperless and organize your account in familiar environment like your checkbook.",
        ],
        [
            "003",
            "https://prog-8.com/images/html/advanced/jQuery.png",
            "/images/paypal.svg",
            "Connected",
            "Move your money comfortably with your familiar other services.",
        ],
        [
            "004",
            "https://prog-8.com/images/html/advanced/ruby.png",
            "/images/track.svg",
            "Easy",
            "Track all your money easily from your smartphone.",
        ],
    ];

    function showItems(items) {
        var i;
        var brg = "";
        for (i = 0; i < items.length; i++) {
            var item = items[i];
            brg += `<div class="feature feature-hover" >
          <div class="feature-icon" >
              <img src='${item[1]}'>
            
            <div class="icon">
              <img src='${item[2]}' alt = '${item[3]}'  class="logo">
              <p>${item[3]}</p>
            </div>
          </div>
          <p class="feature-contents">
              ${item[4]}
            </p>
          </div>`;
        }
        return brg;
    }
    hasil = showItems(items);
    var features = document.getElementById("features");
    features.innerHTML = hasil;

    // Ketika fitur dihover
    $(".feature-hover").hover(
        // hover
        function () {
            $(this).find(".feature-contents").addClass(" text-active");
        },

        // not hover
        function () {
            $(this).find(".feature-contents").removeClass("text-active");
        }
    );

    // ABOUT US CONTENT

    var hasil;
    var things = [
        [
            "001",
            "Who are we ? ",
            "We are BankQu, Your Trustworthy Online Banking Service.",
        ],
        [
            "002",
            "Why should I trust you ?",
            "We provide you with the most secure and convenient service.",
        ],
        [
            "003",
            "What security features that are used to protect my account information online ?",
            "We ensure your account's information is protected by several encryption methods. Your privacy is always our priority.",
        ],
        [
            "004",
            "How do I transfer my money online ? ",
            'Sign in to your BankQu account, and choose "Transfer Money" on the navigation menu. ',
        ],
    ];

    function seeItems(items) {
        var barang = "<ul id='faq-list'>";
        var i;

        for (i = 0; i < items.length; i++) {
            var thing = things[i];

            barang += `<li class="faq-list-item">
          <h3 class="question">${thing[1]}</h3>
          <span>+</span>
          <div class="answer">
            <p>${thing[2]}.</p>
          </div>
        </li>`;
        }
        barang += " </ul>";
        return barang;
    }

    hasil = seeItems(things);

    var faq = document.getElementById("faq");
    faq.innerHTML = hasil;

    $(".faq-list-item").click(function () {
        var $answer = $(this).find(".answer");

        // Kalau mau tutup pertanyaan
        if ($answer.hasClass("open")) {
            $answer.removeClass("open");

            $answer.slideUp();

            $(this).find("span").text("+");
        }

        //Kalau mau buka pertanyaan
        else {
            $answer.addClass("open");

            $answer.slideDown();

            $(this).find("span").text("-");
        }
    });
});