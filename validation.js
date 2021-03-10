//cat validation
function category_validation(){
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