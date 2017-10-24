var interval = null;

window.onload = function() {
    interval = setInterval(callFunc, 5000);
};

function callFunc() {
       $("#ajax_refresh_and_loading").trigger("click");
}
