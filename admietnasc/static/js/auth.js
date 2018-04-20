$(function() {
    function submitForm(avatar) {
        var $form         = $('#submit-form')
          , $avatarInput  = $('#avatar-input')
        ;
        $avatarInput.val(avatar);
        $form.submit();
    }

    $('.vk-login').click(function(e) {
        e.preventDefault();
        VK.Auth.login(function(response) {
            if (response.session) {
                VK.Api.call('users.get', {user_ids: response.session.user.id, fields: 'photo_max_orig'}, function(r) {
                    if(r.response) {
                        // путь к картинке
                        // r.response[0].photo_max_orig
                        submitForm(r.response[0].photo_max_orig)
                    }
                });
            }
        });
    });
    $('.fb-login').click(function(e) {
        e.preventDefault();
        FB.login(function(response) {
            if (response.authResponse) {
                console.log(response.authResponse.userID);
                FB.api('/' + response.authResponse.userID + '/picture?type=square&height=400&width=400', function(r) {
                    // путь к картинке
                    // r.data.url
                    submitForm(r.data.url)
                });
            }
        });
    });
});
