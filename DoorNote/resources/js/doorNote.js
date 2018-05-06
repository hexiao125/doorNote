/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    var baseUrl = location.href.replace("index.php", "");
    var writeUrl = baseUrl + "addMsg.php";
    var readUrl = baseUrl + "getMsg.php";
    var removeUrl = baseUrl + "clearMsg.php";
   
    /**
     * Invoked when the Send button is clicked. Submits the current comment.
     */
    $("button#submitMsg").click(function () {
        $.post(writeUrl, $("#newMsg").serialize());    
        $("#newMsg").val("");
    });

    /**
     * Invoked when the Get Comments button is clicked. Reads all comments in the 
     * conversation from server.
     */
    $("button#loadMsg").click(reloadMsg);

    $("button#clearMsg").click(clearMsg);
    /**
     * Invoked when the Delete button is clicked. Submits the timestamp of the entry to be deleted.
     
    function deleteButtonHandler() {
        $.post(deleteUrl, $(this).siblings("input").serialize());
        reloadComment();
    }
*/
    function reloadMsg() {
        $("#displayMsg").html("");   
        $.getJSON(readUrl, function (message) {   
            //for (var i = 0; i < messages.length; i++) {
                addMsg(message);
            //}
        });
//        .done(function(){ alert('succeed'); })
//        .fail(function(d, textstatus, err){ alert('fail '+ textstatus+ ' ' + err); })
//        .always(function(){ alert('always'); });  
    }

    function addMsg(message) {
       // alert(message.message);
        var msg = (message.message == "null") ? " " : removeQuotes(message.message);

            $("<br>").appendTo($("#displayMsg"));
          //  $("<p class='username'>" + d.getDate() + ":</p>").appendTo($("#displayMsg"));
            $("<p class='message'>" + nl2br(msg) + "</p>").appendTo($("#displayMsg"));
            $("<input type='hidden' name='timestamp' value='" + message.timestamp + "'/>").appendTo($("#displayMsg"));
    }

    function clearMsg() {
        $("#displayMsg").html("");
        $.post(removeUrl);
    }
        
    /**
     * Removes double quotes from the specified string.
     * 
     * @param {String} str The string from which to remove quotes.
     * @returns {String} 'str', without double quotes.
     */
    function removeQuotes(str) {
        return str.replace(/\"/g, "");
    }

    /**
     * Finds the current user's nick name from the DOM tree.
     * 
     * @returns {String} The current user's nick name.
    
   function getUserName() {
        var userNameLabelTail = " is writing comments...";
        return removeTrailingString($("#userNameLabel").text(), userNameLabelTail);
    }
 */
    /**
     * If 'fullString' ends with 'tailToRemove', return 'fullString' without 'tailToRemove'.
     * If 'fullString' does not end with 'tailToRemove', return 'fullString' unchanged.
     * 
     * @param {String} fullString The string from which to remove the tail.
     * @param {String} tailToRemove The tail to remove.
     * @returns {String} The stripped fullString.
    
    function removeTrailingString(fullString, tailToRemove) {
        if (!endsWith(fullString, tailToRemove)) {
            return fullString;
        }
        return fullString.substring(0, fullString.lastIndexOf(tailToRemove));
    } */

    /**
     * Returns true is 'str' ends with 'tail', false if it does not.
     * 
     * @param {String} str   The string to whose tail is checked.
     * @param {Strting} tail The tail to look for. 
     * @returns {Boolean} True is 'str' ends with 'tail', false if it does not.
   
    function endsWith(str, tail) {
        return str.lastIndexOf(tail) === str.length - tail.length;
    }
  */
    /**
     * Replaces line breaks with '<br/>'.
     * @param {String} str The string in which to replace.
     * @returns {String} 'str', with line breaks replaced with '<br/>'.
     */
    function nl2br(str) {
        var breakTag = '<br/>';
        return str.replace(/\\r\\n|\\n\\r|\\r|\\n/g, breakTag);
    }  

});

