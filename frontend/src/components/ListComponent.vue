<template>
    <div class="list">

        <div class="top">
            <p>
                <strong>{{ description }}</strong>
                <span class="badge badge-info">{{ data.length }}</span>
            </p>
        </div>

        <div class="content">
            <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ columns[0] }}</th>
                    <th scope="col">{{ columns[1] }}</th>
                    <th scope="col">Telefone</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in data" :key="user.id">
                    <th scope="row"><p class="user">{{ user.id }}</p></th>
                    <td><p class="user">{{ user.name }}</p></td>
                    <td><p class="user">{{ user.email }}</p></td>
                    <td><p class="user">{{ user.phone }}</p></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ListComponent',
    props: {
        data: Array,
        description: String,
        columns: []
    }
}
</script>

<style lang="scss" scoped>

.list {
    width: 100%;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 3px;
    background-color: #fff;

    .user {
        font-size: 14px;
    }
}

</style>