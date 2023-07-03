<template>
    <div>
        <h2>Queues</h2>
        <ul>
            <li v-for="queue in queues" :key="queue.id" @click="showQueue(queue.id)">
                {{ queue.job_name }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                queues: [],
            };
        },
        created() {
            this.fetchQueues();
        },
        methods: {
            fetchQueues() {
                axios.get('/queues')
                    .then(response => {
                        this.queues = response.data;
                    })
                    .catch(error => {
                        console.error(error);
                    });
            },
            showQueue(id) {
                window.location.href = `/queues/${id}`;
            }
        }
    }
</script>
