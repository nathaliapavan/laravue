<template>
    <DashboardComponent>
        <div slot="slot-pages" class="content-pages">
            <header class="title">
                <p>Home</p>
            </header>

            <div class="row">
                <div class="col-12 col-md-3">
                    <CardComponent :type="'Clientes'" :percent="'7%'" :icon="'fa-users'" :qty="'9570'"/>
                </div>

                <div class="col-12 col-md-3">
                    <CardComponent :type="'Produtos'" :percent="'12%'" :icon="'fa-box'" :qty="'350'"/>
                </div>

                <div class="col-12 col-md-3">
                    <CardComponent :type="'Serviços'" :percent="'3%'" :icon="'fa-store'" :qty="'270'"/>
                </div>

                <div class="col-12 col-md-3">
                    <CardComponent :type="'Relatórios'" :percent="'25%'" :icon="'fa-chart-bar'" :qty="'30'"/>
                </div>
            </div>

            <div class="mt-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ListComponent :users="users" />
                    </div>
                </div>
            </div>
            
            
        </div>
    </DashboardComponent>
</template>

<script>

import DashboardComponent from '../Dashboard/DashboardComponent';
import CardComponent from '../../components/CardComponent';
import ListComponent from '../../components/ListComponent';
const axios = require('axios');

export default {
    name: 'HomeComponent',
    data() {
        return {
            users: []
        }
    },
    mounted() {
        this.getUsers();
    },
    methods: {
        async getUsers() {
            const response = await axios.get('https://jsonplaceholder.typicode.com/users');
            if(response.status == 200) {
                this.users = response.data;
            }else {
                console.error("Erro ao carregar usuários");
            }
        }
    },
    components: {
        DashboardComponent,
        CardComponent,
        ListComponent
    }
}
</script>

<style scoped>

</style>