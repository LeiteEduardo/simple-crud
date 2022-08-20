const closeMessage = document.querySelector('.close');

if  (closeMessage != null){
    closeMessage.onclick = function(e){
        $origin = e.target;
        $message = $origin.closest('.message');
        $message.remove();
    }
}