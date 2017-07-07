$(document).ready(function () {

    //    $("#fixo").click(function () {
    //        var tel = $("#fixo p").text();
    //        //        console.log("Fixo: " + tel);
    //        //        console.log(textArea.value);
    //        copyTextToClipboard(tel);
    //    });
    document.getElementById("fixo").addEventListener("click", function () {
        var tel = $("#fixo p").text();
        copyTextToClipboard(tel);
        Materialize.toast("Telefone copiado!", 1000);
    });

    document.getElementById("whats").addEventListener("click", function () {
        var tel = $("#whats p").text();
        copyTextToClipboard(tel);
        Materialize.toast("Whatsapp copiado!", 1000);
    });

});

function copyTextToClipboard(text) {
    var textArea = document.createElement("textarea");
    textArea.value = '';

    textArea.style.display = 'hidden';
    textArea.value = text;

    document.body.appendChild(textArea);
    textArea.select();
    textArea.setSelectionRange(0, textArea.value.length);
    try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Copying text command was ' + msg);
    } catch (err) {
        console.log('Oops, unable to copy');
    }
    document.body.removeChild(textArea);
}
