



<script>


    let deleteMessage;

    function deleteMessageTimeout() {
        setTimeout(() => {
            deleteMessage = document.getElementById('delete-message');

            if (deleteMessage) {
            deleteMessage.classList.add("hide");
            }
        }, 3000);
    }


    deleteMessageTimeout();
</script>
