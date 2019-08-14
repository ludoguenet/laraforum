<template>
    <div>
        <button class="btn btn-success" @click="markedAsSolution">Marqué comme solution</button>
    </div>
</template>

<script>
    export default {
        props: ['topicId', 'commentId'],

        methods: {
            markedAsSolution() {
                axios.post('/markedAsSolution/' + this.topicId + '/' + this.commentId)
                    .then(response => {
                        if (response.status === 200) {
                            window.location = '/topics/' + this.topicId
                        }
                    })
                    .catch(errors => {
                        console.log(errors.status)
                    })
            }
        }
    }
</script>
