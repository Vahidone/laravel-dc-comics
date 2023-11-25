



<script>


    let deleteMessage;

    function deleteMessageTimeout() {
        setTimeout(() => {

            deleteMessage = document.getElementById('delete-message');

            if(deleteMessage) {

                setTimeout(() => {
                    deleteMessage.classList.add("hidden");
                }, 2000)
            }
        }, 1000);

    }


    deleteMessageTimeout();
</script>
