// This is called with the results from from FB.getLoginStatus().
	function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      GetUserInfo();
    }
  }

  function GetUserInfo() {
    FB.api('/me', function(response) {
      $.ajax({ url : '../Services/UserService.php',
               data : {action:'userInfo', payload: response.id},
               type : 'post',
               success : function(postResponse) {
                  return jQuery.parseJSON(postResponse);
               }        
      });
    });
  }

  