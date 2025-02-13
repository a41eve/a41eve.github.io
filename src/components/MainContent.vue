<template>
    <main class="main-content">
        <section>
            <h2>Work History</h2>
            <div v-for="(job, index) in workHistory" :key="index" class="job">
                <h3>{{ job.title }}</h3>
                <p>{{ job.company }} — {{ job.location }}</p>
                <p>{{ job.period }}</p>
                <p>{{ job.description }}</p>
            </div>
        </section>
    </main>
</template>

<script>
export default {
};
</script>

<style scoped>
.main-content {
    background-color: #ffffff;
    padding: 20px;
}

.job {
    margin-bottom: 20px;
}
</style>