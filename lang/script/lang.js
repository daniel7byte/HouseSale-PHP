function switchLanguage(lang) {
    $.ajax({
        type: "POST",
        url: "lang/clientSwitch.php",
        data: "lang="+lang,
        success: function(html) {
            window.location.reload();
        }
    })
}