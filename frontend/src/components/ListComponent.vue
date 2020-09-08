<template>
    <div class="list">

        <div class="top">
            <p><strong>Clientes</strong></p>
        </div>

        <div class="content">
            <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
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
        users: Array,
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