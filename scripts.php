


<script>
    function like(postID) {
        axios
            .post('/posts/like.php?id=' + postID)
            .then(response => {
                // Switch entre like et dislike
            })

            .catch(error => console.log(error)
            .finally()) console.log('Action effectuée'));

    }
</script>