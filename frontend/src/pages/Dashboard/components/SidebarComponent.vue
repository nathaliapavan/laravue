<template>
    <div class="sidebar">

        <div class="top">

            <div class="avatar">
                <span><i class="fa fa-user"></i></span>
            </div>

            <div class="info">
                <p class="name">Nathalia Pavan</p>
                <p class="status">online</p>
            </div>

        </div>
        
        <div class="menu">
            <ul>
                <li><router-link :to="{name: 'home'}"><i class="fa fa-home icon"></i>Home</router-link></li>
                <li><router-link :to="{name: 'products'}"><i class="fa fa-box icon"></i>Produtos</router-link></li>
                <li><router-link :to="{name: 'products'}"><i class="fa fa-store icon"></i>Vendas</router-link></li>
                <li><router-link :to="{name: 'products'}"><i class="fa fa-chart-bar icon"></i>Relatórios</router-link></li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SidebarComponent'
}
</script>

<style lang="scss" scoped>
    .sidebar {

        .top {
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 25px 5px;
            align-items: center;
            margin-top: 20px;

            .avatar {
                margin-right: 10px;

                span {
                    display: block;
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    background-color: #CCC;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 25px;
                    color: #666666
                }
            }
            
            .info {

                p {
                    margin: 0;
                    color: #fff;
                }

                .name {
                    font-size: 14px;
                }

                .status {
                    font-size: 10px;
                }
            }
        }

        .menu {
            padding: 10px;

            ul li {
                margin: 15px 0;
                font-size: 16px;

                a{
                    color: #fff;
                    text-decoration: none;
                    font-weight: 200;
                }

                .icon {
                    margin-right: 10px;
                }
            }
        }
    }
</style>