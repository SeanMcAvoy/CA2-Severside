//cat validation
function category_validation()
{
    'use strict';
    var category_name = document.getElementById("category");
    var category_value = document.getElementById("category").value;
    if(category_value === "Default")
    {
    document.getElementById('category_err').innerHTML = 'You must select a category';
    category_name.focus();
    document.getElementById('category_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('category_err').innerHTML = 'Category selected.';
    document.getElementById('category_err').style.color = "#00AF33";
    }
}

//passwordValidation
function passwd_validation()
{
    'use strict';
    var passid_name = document.getElementById("passid");
    var passid_value = document.getElementById("passid").value;
    var passid_length = passid_value.length;
    if(passid_length<6)
    {
    document.getElementById('passwd_err').innerHTML = 'Password must be at least 6 chracters long';
    passid_name.focus();
    document.getElementById('passwd_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('passwd_err').innerHTML = 'Valid password Lenght';
    document.getElementById('passwd_err').style.color = "#00AF33";
    }
}
//passwordValidation
function confPasswd_validation()
{
    'use strict';
    var passid_name = document.getElementById("confPassid");
    var passid_value = document.getElementById("confPassid").value;
    var passid_length = passid_value.length;
    if(passid_length<6)
    {
    document.getElementById('confPasswd_err').innerHTML = 'Password must be at least 6 chracters long';
    passid_name.focus();
    document.getElementById('confPasswd_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('confPasswd_err').innerHTML = 'Valid password Lenght';
    document.getElementById('confPasswd_err').style.color = "#00AF33";
    }
}