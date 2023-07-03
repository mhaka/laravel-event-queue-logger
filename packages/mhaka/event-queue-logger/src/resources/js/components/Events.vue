<template>
    <div>
        <h2>Events</h2>
        <ul>
            <li v-for="event in events" :key="event.id" @click="showEvent(event.id)">
                {{ event.event_name }}
            </li>
        </ul>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                events: [],
            };
        },
        created() {
            this.fetchEvents();
        },
        methods: {
            fetchEvents() {
                axios.get('/events')
                    .then(response => {
                        this.events = response.data;
                    })
                    .catch(error => {
                        console.error(error);
                    });
            },
            showEvent(id) {
                window.location.href = `/events/${id}`;
            }
        }
    }
</script>
