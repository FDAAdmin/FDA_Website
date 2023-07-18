<><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script>
    $(document).ready(function() {$('#toggleLanguage').on('click', function (e) {
        e.preventDefault();

        // Determine the current language
        var currentLanguage = $('html').attr('lang');
        var newLanguage = '';

        // Toggle the language
        if (currentLanguage === 'en') {
            newLanguage = 'mr';
        } else {
            newLanguage = 'en';
        }

        // Make an Ajax request to set the language
        $.ajax({
            url: '/set-language/' + newLanguage,
            type: 'GET',
            success: function () {
                location.reload(); // Reload the page to apply the new language
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        });
    })};
    );
</script></>
